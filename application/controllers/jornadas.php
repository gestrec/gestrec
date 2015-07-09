<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Jornadas extends CI_Controller {
	
	private $id_modulo = NULL;
	
	function __construct() {
		parent::__construct();
		//$this->load->library('security');
        $this->load->library('form_validation');
		$this->load->library('grocery_CRUD');
		$this->load->library('tank_auth_groups','','tank_auth');
		$this->load->model('catalogos/modulos_model');

        $this->id_modulo = $this->modulos_model->get_id_modulo_por_nombre(get_class($this));
        //$this->load->library('table');
		//$this->lang->load('form_validation','spanish');
		//$this->lang->load('tank_auth','spanish');
		//$this->load->model('empleado/empleado_model');		
	}
	
	function index() {
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        } else {
        	if(!is_null($this->id_modulo)){
                redirect('/jornadas/listar/');
            } else {
            	redirect('/inicio/');
            }
        }
    }
	
	function listar() {
        if(!is_null($this->id_modulo)){
			$table_name='jornadas';
			$crud = new grocery_CRUD();
    	    $crud->set_subject('Jornada')
    	    ->set_table($table_name)
    	    ->columns('JRN_DIAS_TRABAJO','JRN_DIAS_DESCANSO')

    	    ->fields('JRN_DIAS_TRABAJO','JRN_DIAS_DESCANSO')
    	    ->display_as('JRN_DIAS_TRABAJO','Días de trabajo')
    	    ->display_as('JRN_DIAS_DESCANSO','Días de descanso')
            ->display_as('CREADO','Creado')
            ->required_fields('JRN_DIAS_TRABAJO','JRN_DIAS_DESCANSO')
            ->order_by('JRN_DIAS_TRABAJO','asc')


            ->set_rules('JRN_DIAS_TRABAJO','días de trabajo','numeric|max_length[2]|is_natural_no_zero')
            ->set_rules('JRN_DIAS_DESCANSO','días de descanso','numeric|max_length[2]|is_natural_no_zero')
            
            ->callback_add_field('JRN_DIAS_TRABAJO',array($this,'_add_field_dias_trabajo'))
            ->callback_edit_field('JRN_DIAS_TRABAJO',array($this,'_edit_field_dias_trabajo'))
            
            ->callback_add_field('JRN_DIAS_DESCANSO',array($this,'_add_field_dias_descanso'))
            ->callback_edit_field('JRN_DIAS_DESCANSO',array($this,'_edit_field_dias_descanso'))
            
            ->callback_column('JRN_DIAS_TRABAJO',array($this,'_column_dias'))
            ->callback_column('JRN_DIAS_DESCANSO',array($this,'_column_dias'))

            ;
            
            //leer permisos desde la bd
            $arr_acciones = $this->modulos_model->get_acciones_por_rol_modulo($this->tank_auth->is_admin(), $this->id_modulo[0]);
            $crud->unset_export();
            $crud->unset_print();
    	    if (is_null($arr_acciones)) {
                redirect('/inicio/');
            } else {
                //si no tiene permiso para add entonces
                if(!in_array('Crear', $arr_acciones)) {
                    $crud->unset_add();
                }
                //si no tiene permiso para editar entonces
                if(!in_array('Editar', $arr_acciones)) {
                    $crud->unset_edit();
                }
                //si no tiene permiso para leer entonces
                if(!in_array('Ver', $arr_acciones)) {
                    $crud->unset_list();
                }
                //si no tiene permiso para borrar entonces
                if(!in_array('Eliminar', $arr_acciones)) {
                    $crud->unset_delete();
                }
            }
            try {
                $output = $crud->render();
            } catch(Exception $e) {
                if($e->getCode() == 14) {
                    show_error('No tiene permisos para esta operación');
                } else {
                    show_error($e->getMessage());
                }
            }
            $this->_jornada_output($output);
        } else {
            redirect('/inicio/');
        }

    }
    function _column_dias($value,$row){
        return $value.' días';
    }

    function _add_field_dias_trabajo(){
        $data['id']='addTrabajo';
        $data['min']=2;
        $data['max']=30;
        $data['value']='21';
        $data['oninput']='outputUpdateTrabajoJornada(value)';
        $data['name']='JRN_DIAS_TRABAJO';
        $data['addon']='días';
        return $this->load->view('components/spinner_days',$data,true);        
    }

    function _edit_field_dias_trabajo($value, $primary_key){
        $data['id']='editTrabajo';
        $data['min']=2;
        $data['max']=30;
        $data['value']=$value;
        $data['oninput']='outputUpdateTrabajoJornada(value)';
        $data['name']='JRN_DIAS_TRABAJO';
        $data['addon']='días';
        return $this->load->view('components/spinner_days',$data,true);       
    }
    
    function _add_field_dias_descanso(){
        $data['id']='addDescanso';
        $data['min']=2;
        $data['max']=30;
        $data['value']=7;
        $data['oninput']='outputUpdateDescansoJornada(value)';
        $data['name']='JRN_DIAS_DESCANSO';
        $data['addon']='días';
        return $this->load->view('components/spinner_days',$data,true);       
    }
    function _edit_field_dias_descanso($value, $primary_key){
        $data['id']='editDescanso';
        $data['min']=2;
        $data['max']=30;
        $data['value']=$value;
        $data['oninput']='outputUpdateDescansoJornada(value)';
        $data['name']='JRN_DIAS_DESCANSO';
        $data['addon']='días';
        return $this->load->view('components/spinner_days',$data,true);      
    }

    function _jornada_output($output = null) {
    	$resultado = $this->organizacion_model->get_por_id(1);
        $data['organizacion_nombre'] = $resultado['ORG_NOMBRE'];

        $data['user_id']    = $this->tank_auth->get_user_id();
        $data['username']   = $this->tank_auth->get_username();
        $data['is_admin']   = $this->tank_auth->is_admin();
        $output = array_merge((array)$output,$data);
        //recuperar modulos de la bd
        $arr_menu = $this->modulos_model->get_modulos_por_rol($this->session->userdata('group_id'));
        $menu['menu'] = $arr_menu;

        $output = array_merge($output,$menu);
        $this->load->view('template/header',$output);
        $this->load->view('template/menu',$output);
        $this->load->view('template/template',$output);
        $this->load->view('template/footer',$output);  
    }
}

/* End of file jornadas.php */
/* Location: ./application/controllers/jornadas.php */