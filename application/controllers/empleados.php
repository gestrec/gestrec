<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Empleados extends CI_Controller {
	
	private $id_modulo = NULL;
	
	function __construct() {
		parent::__construct();
		$this->load->library('gc_dependent_select');
		$this->load->library('security');
		$this->load->library('grocery_CRUD');
		$this->load->library('tank_auth_groups','','tank_auth');
		$this->load->library('table');
		$this->lang->load('tank_auth','spanish');
		//$this->load->model('empleado/empleado_model');
		$this->load->model('catalogos/modulos_model');
		$this->id_modulo = $this->modulos_model->get_id_modulo_por_nombre(get_class($this));
	}
	
	function index() {
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        } else {
        	if(!is_null($this->id_modulo)){
                redirect('/empleados/listar/');
            } else {
            	redirect('/inicio/');
            }
        }
    }
	
	function listar() {
        if (!$this->tank_auth->is_logged_in()) {redirect('/auth/login/');}
        else {
        if(!is_null($this->id_modulo)){
			$table_name='empleados';
			$crud = new grocery_CRUD();
    	    $crud->set_subject('Empleado');
    	    $crud->set_table($table_name);
    	    if(!$this->tank_auth->is_admin()){
    	    	$crud->where('EMP_NOMBRE_COMPLETO',$this->tank_auth->get_username());
    	    }
        	$crud->columns(
                'EMP_NOMBRE_COMPLETO','EMP_NUMERO_CEDULA','EMP_FECHA_NACIMIENTO',
    	    	'PROVINCIA_NACIMIENTO','CANTON_NACIMIENTO','PARROQUIA_NACIMIENTO',
    	    	'PROVINCIA_RESIDENCIA','EMP_DIRECCION_DOMICILIO',
                'EMP_TELEFONO_FIJO','EMP_TELEFONO_MOVIL',
    	    	'EMP_ESTADO','EMP_ESTADO_CIVIL','EMP_TIPO_SANGRE',
    	    	'EMP_NOMBRE_COMPLETO_CONYUGE','EMP_NUMERO_HIJOS',
    	    	'EMP_EMERG_NOMBRE_COMPLETO','EMP_EMERG_PARENTESCO','EMP_EMERG_TELEFONO',
    	    	'EMP_FECHA_INGRESO','EMP_FECHA_SALIDA',
    	    	'ORGANIZACION_ID','CUADRILLA_ID','CARGO_ID')
    	    ->add_fields(
                'EMP_NOMBRES','EMP_APELLIDOS','EMP_NOMBRE_COMPLETO',
                'EMP_NUMERO_CEDULA','EMP_FECHA_NACIMIENTO',
    	    	'PROVINCIA_NACIMIENTO','CANTON_NACIMIENTO','PARROQUIA_NACIMIENTO',
    	    	'PROVINCIA_RESIDENCIA','EMP_SECTOR_DOMICILIO','EMP_CALLE_P_DOMICILIO','EMP_CALLE_S_DOMICILIO','EMP_NUMERO_CASA_DOMICILIO',
                'EMP_DIRECCION_DOMICILIO',
                'EMP_TELEFONO_FIJO','EMP_TELEFONO_MOVIL',
    	    	'EMP_ESTADO','EMP_ESTADO_CIVIL','EMP_TIPO_SANGRE',
                'EMP_NOMBRE_COMPLETO_CONYUGE',
                'EMP_NOMBRES_CONYUGE','EMP_APELLIDOS_CONYUGE','EMP_NUMERO_HIJOS',
                'EMP_EMERG_NOMBRE_COMPLETO',
    	    	'EMP_EMERG_NOMBRES','EMP_EMERG_APELLIDOS','EMP_EMERG_PARENTESCO','EMP_EMERG_TELEFONO',
    	    	'EMP_FECHA_INGRESO','EMP_FECHA_SALIDA',
                'ORGANIZACION_ID','CUADRILLA_ID','CARGO_ID',
    	    	'USUARIO_ID','email','clave')
    	    ->edit_fields(
                // 'EMP_NOMBRES','EMP_APELLIDOS','EMP_NOMBRE_COMPLETO',
                // 'EMP_NUMERO_CEDULA',
                'EMP_FECHA_NACIMIENTO',
    	    	'PROVINCIA_NACIMIENTO','CANTON_NACIMIENTO','PARROQUIA_NACIMIENTO',
    	    	'PROVINCIA_RESIDENCIA','EMP_SECTOR_DOMICILIO','EMP_CALLE_P_DOMICILIO','EMP_CALLE_S_DOMICILIO','EMP_NUMERO_CASA_DOMICILIO',
                'EMP_DIRECCION_DOMICILIO',
                'EMP_TELEFONO_FIJO','EMP_TELEFONO_MOVIL',
    	    	'EMP_ESTADO','EMP_ESTADO_CIVIL','EMP_TIPO_SANGRE',
                'EMP_NOMBRE_COMPLETO_CONYUGE',
    	    	'EMP_NOMBRES_CONYUGE','EMP_APELLIDOS_CONYUGE','EMP_NUMERO_HIJOS',
                'EMP_EMERG_NOMBRE_COMPLETO',
    	    	'EMP_EMERG_NOMBRES','EMP_EMERG_APELLIDOS','EMP_EMERG_PARENTESCO','EMP_EMERG_TELEFONO',
    	    	'EMP_FECHA_INGRESO','EMP_FECHA_SALIDA',
                'ORGANIZACION_ID','CUADRILLA_ID','CARGO_ID'
                // 'USUARIO_ID','email','clave'
                )

       		->display_as('EMP_NOMBRE_COMPLETO','Nombre completo')
            ->display_as('EMP_NOMBRES','Nombres del empleado')
            ->display_as('EMP_APELLIDOS','Apellidos del empleado')
	    	->display_as('EMP_NUMERO_CEDULA','Número de cédula o RUC')
	        ->display_as('EMP_FECHA_NACIMIENTO','Fecha de nacimiento')
	        ->display_as('PROVINCIA_NACIMIENTO','Provincia de nacimiento')
	        ->display_as('CANTON_NACIMIENTO','Cantón de nacimiento')
	        ->display_as('PARROQUIA_NACIMIENTO','Parroquia de nacimiento')
	        ->display_as('PROVINCIA_RESIDENCIA','Provincia de residencia')
            ->display_as('EMP_SECTOR_DOMICILIO','Sector de domicilio')
            ->display_as('EMP_CALLE_P_DOMICILIO','Calle principal domicilio')
            ->display_as('EMP_CALLE_S_DOMICILIO','Calle secundaria domicilio')
            ->display_as('EMP_NUMERO_CASA_DOMICILIO','Número de casa domicilio')
	        ->display_as('EMP_DIRECCION_DOMICILIO','Dirección de domicilio')
            ->display_as('EMP_TELEFONO_FIJO','Teléfono fijo')
            ->display_as('EMP_TELEFONO_MOVIL','Teléfono móvil')
	        ->display_as('EMP_ESTADO','Estado laboral')
	        ->display_as('EMP_ESTADO_CIVIL','Estado civil')
	        ->display_as('EMP_TIPO_SANGRE','Tipo de sangre')
            ->display_as('EMP_NOMBRES_CONYUGE','Nombres del cónyuge')
            ->display_as('EMP_APELLIDOS_CONYUGE','Apellidos del cónyuge')
	        ->display_as('EMP_NOMBRE_COMPLETO_CONYUGE','Nombre completo del cónyuge')
	        ->display_as('EMP_NUMERO_HIJOS','Número de hijos')
            ->display_as('EMP_EMERG_NOMBRES','Nombres contacto de emergencia')
            ->display_as('EMP_EMERG_APELLIDOS','Apellidos contacto de emergencia')
	        ->display_as('EMP_EMERG_NOMBRE_COMPLETO','Nombre completo contacto de emergencia')
	        ->display_as('EMP_EMERG_PARENTESCO','Parentezco contacto de emergencia')
	        ->display_as('EMP_EMERG_TELEFONO','Teléfono contacto de emergencia')
	        ->display_as('EMP_FECHA_INGRESO','Fecha de ingreso')
	        ->display_as('EMP_FECHA_SALIDA','Fecha de salida')
            ->display_as('EMP_MENS','Salario Mensualizado')
            ->display_as('EMP_ACTIVADO','Activado')
            ->display_as('CREADO','Creado')
            ->display_as('EMP_MODIFICADO','Modificado')
            ->display_as('ORGANIZACION_ID','Organización')
            ->display_as('CUADRILLA_ID','Cuadrilla')
            ->display_as('CARGO_ID','Cargo')
            ->display_as('USUARIO_ID','Usuario')
            ->display_as('email','Correo electónico')
            ->display_as('clave','Clave')

           	->field_type('USUARIO_ID','invisible')
            ->field_type('EMP_NOMBRE_COMPLETO','invisible')
            ->field_type('EMP_NOMBRE_COMPLETO_CONYUGE','invisible')
            ->field_type('EMP_EMERG_NOMBRE_COMPLETO','invisible')
            ->field_type('EMP_DIRECCION_DOMICILIO','invisible')

           	->field_type('EMP_NUMERO_CEDULA','integer')
           	->field_type('EMP_TELEFONO_FIJO','integer')
           	->field_type('EMP_TELEFONO_MOVIL','integer')
           	->field_type('EMP_EMERG_TELEFONO','integer')
           	->field_type('EMP_ESTADO','dropdown', array('TRABAJO','DESCANSO','LIQUIDADO'))
           	->field_type('EMP_ESTADO_CIVIL','enum',array('Soltero(a)','Casado(a)','Viudo(a)',
           		'Divorciado(a)','Unión de hecho'))
           	->field_type('EMP_TIPO_SANGRE','enum',array(
           		'Tipo O Rh +','Tipo O Rh -',
           		'Tipo A Rh +','Tipo A Rh -',
           		'Tipo B Rh +','Tipo B Rh -',
           		'Tipo AB Rh +','Tipo AB Rh -'))

            ->required_fields('EMP_NOMBRES','EMP_APELLIDOS','EMP_NUMERO_CEDULA','EMP_FECHA_NACIMIENTO','EMP_TIPO_SANGRE','EMP_FECHA_INGRESO','EMP_FECHA_SALIDA','CUADRILLA_ID','CARGO_ID','ORGANIZACION_ID','email','clave')

            ->set_rules('EMP_NOMBRES','Nombres del empleado','required|trim|xss_clean|callback__alpha_dash_space|min_length['.$this->config->item('username_min_length', 'tank_auth').']|max_length['.$this->config->item('username_max_length', 'tank_auth').']')
            ->set_rules('EMP_APELLIDOS','Apellidos del empleado','required|trim||xss_clean|callback__alpha_dash_space|min_length['.$this->config->item('username_min_length', 'tank_auth').']|max_length['.$this->config->item('username_max_length', 'tank_auth').']')
            ->set_rules('EMP_NUMERO_CEDULA','Número de cédula o RUC','required|is_unique[empleados.EMP_NUMERO_CEDULA]|callback__cedula_ruc_check')
            ->set_rules('EMP_FECHA_NACIMIENTO','Fecha de nacimiento','required')
            ->set_rules('EMP_TIPO_SANGRE','Tipo de sangre','required')
            ->set_rules('EMP_FECHA_INGRESO','Fecha de ingreso','required')
            ->set_rules('EMP_FECHA_SALIDA','Fecha de salida','required|callback__verificar_fecha[EMP_FECHA_INGRESO]')
            ->set_rules('CUADRILLA_ID','Cuadrilla','required')
            ->set_rules('CARGO_ID','Cargo','required')
            ->set_rules('email','Correo electrónico','required|valid_email|is_unique[users.email]')
            ->set_rules('clave','Clave','required|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']')

            ->set_rules('EMP_SECTOR_DOMICILIO','Sector de domicilio','trim|max_length[20]|alpha_numeric_spaces')
            ->set_rules('EMP_CALLE_P_DOMICILIO','Calle principal domicilio','trim|max_length[20]|alpha_numeric_spaces')
            ->set_rules('EMP_CALLE_S_DOMICILIO','Calle secundaria domicilio','trim|max_length[20]|alpha_numeric_spaces')
            ->set_rules('EMP_NUMERO_CASA_DOMICILIO','Número de casa domicilio','trim|max_length[10]|alpha_dash')
            ->set_rules('EMP_TELEFONO_FIJO','Teléfono fijo','trim|max_length[9]|numeric|integer|is_natural_no_zero')
            ->set_rules('EMP_TELEFONO_MOVIL','Teléfono móvil','trim|max_length[10]|numeric|integer|is_natural_no_zero')
            ->set_rules('EMP_NOMBRES_CONYUGE','Nombres del cónyugue','trim|max_length[30]|callback__alpha_dash_space')
            ->set_rules('EMP_APELLIDOS_CONYUGE','Apellidos del cónyugue','trim|max_length[30]|callback__alpha_dash_space')
            ->set_rules('EMP_NUMERO_HIJOS','Número de hijos','max_length[1]|less_than[9]')
            ->set_rules('EMP_EMERG_NOMBRES','Nombres contacto emergencia','trim|max_length[30]|callback__alpha_dash_space')
            ->set_rules('EMP_EMERG_APELLIDOS','Apellidos contacto emergencia','trim|max_length[30]|callback__alpha_dash_space')
            ->set_rules('EMP_EMERG_PARENTESCO','Parentezco contacto emergencia','trim|max_length[20]|callback__alpha_dash_space')
            ->set_rules('EMP_EMERG_TELEFONO','Teléfono de emergencia','trim|max_length[10]|numeric|integer|is_natural_no_zero')

            ->set_relation('PROVINCIA_NACIMIENTO','provincias','PRV_NOMBRE')
            ->set_relation('CANTON_NACIMIENTO','cantones','CNT_NOMBRE')
            ->set_relation('PARROQUIA_NACIMIENTO','parroquias','PRR_NOMBRE')
            ->set_relation('PROVINCIA_RESIDENCIA','provincias','PRV_NOMBRE')
            ->set_relation('ORGANIZACION_ID','organizaciones','ORG_NOMBRE')
            ->set_relation('CUADRILLA_ID','cuadrillas','CDR_NOMBRE')
            ->set_relation('CARGO_ID','cargos','CRG_NOMBRE')
	        
	        ->callback_add_field('email',array($this,'_add_field_email'))
	        ->callback_add_field('clave',array($this,'_add_field_clave'))

            // ->callback_add_field('EMP_NUMERO_CEDULA',array($this,'_add_field_cedula'))
            // ->callback_add_field('EMP_TELEFONO_FIJO',array($this,'_add_field_telefono_fijo'))
            // ->callback_add_field('EMP_TELEFONO_MOVIL',array($this,'_add_field_telefono_movil'))
            // ->callback_add_field('EMP_EMERG_TELEFONO',array($this,'_add_field_telefono_parentezco_movil'))
            // ->callback_add_field('EMP_NUMERO_HIJOS',array($this,'_add_field_numero_hijos'))
            // ->callback_add_field('EMP_NUMERO_CASA_DOMICILIO',array($this,'_add_field_numero_casa_domicilio'))

            ->callback_add_field('EMP_FECHA_NACIMIENTO',array($this,'_add_field_fecha_nacimiento'))
            ->callback_add_field('EMP_FECHA_INGRESO',array($this,'_add_field_fecha_ingreso'))
            ->callback_add_field('EMP_FECHA_SALIDA',array($this,'_add_field_fecha_salida'))

            ->callback_edit_field('EMP_FECHA_NACIMIENTO',array($this,'_edit_field_fecha_nacimiento'))
            ->callback_edit_field('EMP_FECHA_INGRESO',array($this,'_edit_field_fecha_ingreso'))
            ->callback_edit_field('EMP_FECHA_SALIDA',array($this,'_edit_field_fecha_salida'))
			
	        ->callback_before_insert(array($this, '_before_insert_registrar_usuario'))
            ->callback_before_update(array($this, '_before_update_registrar_usuario'));
            ;


    	    //leer permisos desde la bd
            $arr_acciones = $this->modulos_model->get_acciones_por_rol_modulo($this->tank_auth->is_admin(), $this->id_modulo[0]);
            // $crud->unset_read();
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
	        $this->_empleado_output($output);
        } else {
        	redirect('/inicio/');
        }}
    }
    
    function _alpha_dash_space($str) {
    	if( ! preg_match("/^([-a-zñ_ ])+$/i", $str) and strlen($str)>0) {
    		$this->form_validation->set_message('_alpha_dash_space', "El campo %s sólo puede contener carácteres alfabéticos y espacios.");
    		return FALSE;
    	} else {
    		return TRUE;
    	}
    }

    function _cedula_ruc_check($value) {
    	$arr = str_split($value);
    	$sumaPares = 0;
    	$sumaImpares = 0;

    	if(sizeof($arr) == 10 || sizeof($arr) == 13) { //13 o 10 caracteres
    		for ($i=0; $i < 9; $i++) {
    			if($i % 2){ //mod no es 0, i es impar, posición de cédula es par
    				$sumaPares += intval($arr[$i]);
    			}	
    			else{ //mod es 0, i es par, posición de cédula es impar
					if( (intval($arr[$i]) * 2) > 9 ){
    					$sumaImpares += intval($arr[$i]) * 2 - 9;
    				}else{
    					$sumaImpares += intval($arr[$i]) * 2;
    				}
    			}    
    		}
			if( (10-(($sumaPares+$sumaImpares)%10) ) == intval($arr[9])){ //se comprueba el 10 caracter
				if(sizeof($arr)==13){
					//se verifican los últimos 3 con 001
					if (intval($arr[10])==0 && intval($arr[11])==0 && intval($arr[12])==1){
						//echo "ruc correcto";
						return TRUE;
					}
					else{
						//echo 'ruc incorrecto';
						$this->form_validation->set_message('_cedula_ruc_check', "El campo %s es incorrecto.");
        				return FALSE;
					}
				}
				else{ //10 caracteres corectos
					//echo "cedula correcta";
					return TRUE;	
				}
			}
			else{ //10mo incorrecto
				//echo '10mo incorecto';
				$this->form_validation->set_message('_cedula_ruc_check', "El campo %s es incorrecto.");
        		return FALSE;
			}
    	}
    	else{ // no hay 10
    		$this->form_validation->set_message('_cedula_ruc_check', "El campo %s es incorrecto.");
    		return FALSE;
    	}
    }

    function _empleado_output($output = null) {
        $resultado = $this->organizacion_model->get_por_id(1);
        $data['organizacion_nombre'] = $resultado['ORG_NOMBRE'];
        
    	$data['user_id']    = $this->tank_auth->get_user_id();
        $data['username']   = $this->tank_auth->get_username();
        $data['is_admin']   = $this->tank_auth->is_admin();
        $output = array_merge((array)$output,$data);
        //recuperar modulos de la bd
        $arr_menu = $this->modulos_model->get_modulos_por_rol($this->session->userdata('group_id'));
        //if(!is_null($arr_menu)) {
        $menu['menu'] = $arr_menu;
        //}else{$menu['menu'] = '';}
        $output = array_merge($output,$menu);
        $this->load->view('template/header',$output);
        $this->load->view('template/menu',$output);
        $this->load->view('template/template',$output);
        $this->load->view('template/footer',$output);
    }

    function _before_update_registrar_usuario($post_array, $primary_key){
        $post_array['EMP_NOMBRE_COMPLETO'] = $post_array['EMP_NOMBRES'].' '.$post_array['EMP_APELLIDOS'];
        $post_array['EMP_NOMBRE_COMPLETO_CONYUGE'] = $post_array['EMP_NOMBRES_CONYUGE'].' '.$post_array['EMP_APELLIDOS_CONYUGE'];
        $post_array['EMP_EMERG_NOMBRE_COMPLETO'] = $post_array['EMP_EMERG_NOMBRES'].' '.$post_array['EMP_EMERG_APELLIDOS'];
        $post_array['EMP_DIRECCION_DOMICILIO'] = 'Sector: '.$post_array['EMP_SECTOR_DOMICILIO'].' '.$post_array['EMP_CALLE_P_DOMICILIO'].' '.$post_array['EMP_NUMERO_CASA_DOMICILIO'].' y '.$post_array['EMP_CALLE_S_DOMICILIO'];

        return $post_array;
    }
    function _before_insert_registrar_usuario($post_array) {
    	$email_activation = $this->config->item('email_activation', 'tank_auth');
        $post_array['EMP_NOMBRE_COMPLETO'] = $post_array['EMP_NOMBRES'].' '.$post_array['EMP_APELLIDOS'];
        $post_array['EMP_NOMBRE_COMPLETO_CONYUGE'] = $post_array['EMP_NOMBRES_CONYUGE'].' '.$post_array['EMP_APELLIDOS_CONYUGE'];
        $post_array['EMP_EMERG_NOMBRE_COMPLETO'] = $post_array['EMP_EMERG_NOMBRES'].' '.$post_array['EMP_EMERG_APELLIDOS'];
        $post_array['EMP_DIRECCION_DOMICILIO'] = 'Sector: '.$post_array['EMP_SECTOR_DOMICILIO'].' '.$post_array['EMP_CALLE_P_DOMICILIO'].' '.$post_array['EMP_NUMERO_CASA_DOMICILIO'].' y '.$post_array['EMP_CALLE_S_DOMICILIO'];

	    $username = $post_array['EMP_NOMBRE_COMPLETO'];
		if (!is_null($data = $this->tank_auth->create_user(
			$username,
			$post_array['email'],
			$post_array['clave'],
			$email_activation))){									// success
			
			$data['site_name'] = $this->config->item('website_name', 'tank_auth');

			if ($email_activation) {									// send "activate" email
				$data['activation_period'] = 
				$this->config->item('email_activation_expire', 'tank_auth') / 3600;

				$this->_send_email('activate', $data['email'], $data);

				unset($data['password']); // Clear password (just for any case)

				//$this->_show_message($this->lang->line('auth_message_registration_completed_1'));
			
			} else {
				if ($this->config->item('email_account_details', 'tank_auth')) {	// send "welcome" email
					$this->_send_email('welcome', $data['email'], $data);
				}
				unset($data['password']); // Clear password (just for any case)
				//$this->_show_message($this->lang->line('auth_message_registration_completed_2').' '.anchor('/auth/login/', 'Login'));
			}
            $message = "wrong answer";
            echo "<script type='text/javascript'>alert('$message');</script>";
			$post_array['USUARIO_ID']=$data['user_id'];
		} else {
			$errors = $this->tank_auth->get_error_message();
			foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
		}
	    //redirect('inicio');
	    /*$user_logs_insert = array(
    	    "user_id" => $primary_key,
        	"created" => date('Y-m-d H:i:s'),
	        "last_update" => date('Y-m-d H:i:s')
    	);
    	$this->db->insert('user_logs',$user_logs_insert);
    	return true;*/
    	unset($post_array['email']);
    	unset($post_array['clave']);
    	return $post_array;
    	//var_dump($post_array);
    }

    function _add_field_email() {
        $data['type']="text";
        $data['id']="field-email";
        $data['name']="email";
        $data['maxlength']=50;
        $data['value']="";
        $data['class']="form-control";
        $data['style']='width:130px';
        return $this->load->view('components/input', $data, true);
    }
    
    function _add_field_clave() {
        $data['type']="password";
        $data['id']="field-email";
        $data['name']="clave";
        $data['maxlength']=10;
        $data['value']="";
        $data['class']="form-control";
        $data['style']='width:130px';
        return $this->load->view('components/input', $data, true);
    }

    // function _add_field_cedula(){
    //     $data['type']="text";
    //     $data['id']="field-EMP_NUMERO_CEDULA";
    //     $data['name']="EMP_NUMERO_CEDULA";
    //     $data['maxlength']=13;
    //     $data['value']="";
    //     $data['class']="numeric form-control";
    //     $data['style']='width:160px';
    //     return $this->load->view('components/input',$data,true);
    // }

    // function _add_field_telefono_fijo(){
    //     $data['type']="number";
    //     $data['id']="field-EMP_TELEFONO_FIJO";
    //     $data['name']="EMP_TELEFONO_FIJO";
    //     $data['maxlength']=9;
    //     $data['value']="";
    //     $data['class']="numeric form-control";
    //     $data['style']='width:130px';
    //     return $this->load->view('components/input',$data,true);
    // }

    // function _add_field_telefono_movil(){
    //     $data['type']="number";
    //     $data['id']="field-EMP_TELEFONO_MOVIL";
    //     $data['name']="EMP_TELEFONO_MOVIL";
    //     $data['maxlength']=10;
    //     $data['value']="";
    //     $data['class']="numeric form-control";
    //     $data['style']='width:130px';
    //     return $this->load->view('components/input',$data,true);
    // }

    // function _add_field_telefono_parentezco_movil(){
    //     $data['type']="number";
    //     $data['id']="field-EMP_EMERG_TELEFONO";
    //     $data['name']="EMP_EMERG_TELEFONO";
    //     $data['maxlength']=10;
    //     $data['value']="";
    //     $data['class']="numeric form-control";
    //     $data['style']='width:130px';
    //     return $this->load->view('components/input',$data,true);
    // }

    // function _add_field_numero_hijos(){
    //     $data['type']="number";
    //     $data['id']="field-EMP_NUMERO_HIJOS";
    //     $data['name']="EMP_NUMERO_HIJOS";
    //     $data['maxlength']=2;
    //     $data['value']="";
    //     $data['class']="numeric form-control";
    //     $data['style']='width:100px';
    //     return $this->load->view('components/input',$data,true);
    // }

    // function _add_field_numero_casa_domicilio(){
    //     $data['type']="text";
    //     $data['id']="field-EMP_NUMERO_CASA_DOMICILIO";
    //     $data['name']="EMP_NUMERO_CASA_DOMICILIO";
    //     $data['maxlength']=10;
    //     $data['value']="";
    //     $data['class']="form-control";
    //     $data['style']='width:130px';
    //     return $this->load->view('components/input',$data,true);
    // }
    
    function _add_field_fecha_nacimiento(){
        $data['id']='1';
        $data['placeholder']='Seleccione una fecha';
        $data['name']='EMP_FECHA_NACIMIENTO';
        $data['value']='';
        return $this->load->view('components/datepicker', $data, true);
    }

    function _add_field_fecha_ingreso() {
        $data['id']='2';
        $data['placeholder']='Seleccione una fecha';
        $data['name']='EMP_FECHA_INGRESO';
        $data['value']='';
        return $this->load->view('components/datepicker', $data, true);
    }

    function _add_field_fecha_salida() {
        $data['id']='3';
        $data['placeholder']='Seleccione una fecha';
        $data['name']='EMP_FECHA_SALIDA';
        $data['value']='';
        return $this->load->view('components/datepicker', $data, true);
    }

    function _edit_field_fecha_nacimiento($value, $primary_key) {
        $data['id']='1';
        $data['placeholder']='Seleccione una fecha';
        $data['name']='EMP_FECHA_NACIMIENTO';
        $data['value']=$value;
        return $this->load->view('components/datepicker', $data, true);
    }

    function _edit_field_fecha_ingreso($value, $primary_key) {
        $data['id']='2';
        $data['placeholder']='Seleccione una fecha';
        $data['name']='EMP_FECHA_INGRESO';
        $data['value']=$value;
        return $this->load->view('components/datepicker', $data, true);
    }

    function _edit_field_fecha_salida($value, $primary_key) {
        $data['id']='3';
        $data['placeholder']='Seleccione una fecha';
        $data['name']='EMP_FECHA_SALIDA';
        $data['value']=$value;
        return $this->load->view('components/datepicker', $data, true);
    }

    

    function _verificar_fecha($fecha_fin,$fecha_inicio_name) {
        $fecha_inicio = $_POST[$fecha_inicio_name];
        $fecha_i_f=date_format(date_create($fecha_inicio),"Y-m-d");
        $fecha_f_f=date_format(date_create($fecha_fin),"Y-m-d");
        if ($fecha_f_f < $fecha_i_f) {
            $this->form_validation->set_message('_verificar_fecha', 'La %s debe ser mayor que %s.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

	/**
	 * Enviar un mensaje email del tipo dado (activado, recuperar_clave, etc.)
	 *
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	void
	 */
	function _send_email($type, $email, &$data) {
		$this->load->library('email');
		$this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$this->email->reply_to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$this->email->to($email);
		$this->email->subject(sprintf($this->lang->line('auth_subject_'.$type), $this->config->item('website_name', 'tank_auth')));
		$this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));
		$this->email->set_alt_message($this->load->view('email/'.$type.'-txt', $data, TRUE));
		$this->email->send();
	}

	/**
	 * Mostrar un mensaje de informacion
	 *
	 * @param	string
	 * @return	void
	 */
	function _show_message($message) {
		$this->session->set_flashdata('mensaje', $message);
		redirect('/empleados/');
	}
}

/* End of file empleados.php */
/* Location: ./application/controllers/empleados.php */