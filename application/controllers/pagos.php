<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Pagos extends CI_Controller {
    
    private $id_modulo = NULL;
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('grocery_CRUD');
        $this->load->library('tank_auth_groups','','tank_auth');
        $this->lang->load('tank_auth','spanish');
        $this->load->model('catalogos/modulos_model');
        $this->id_modulo = $this->modulos_model->get_id_modulo_por_nombre(get_class($this));
    }
    
    function index() {
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        } else {
            if(!is_null($this->id_modulo)){
                redirect('/pagos/listar/');
            } else {
                redirect('/inicio/');
            }
        }
    }
    
    function listar() {
        if (!$this->tank_auth->is_logged_in()) {redirect('/auth/login/');}
        else{
        if(!is_null($this->id_modulo)){
            $table_name='pagos';
            $crud = new grocery_CRUD();
            $crud->set_subject('Pago')
            ->set_table($table_name)

            ->columns(
                'PGS_ANIO','PGS_MES',
                'EMPLEADO_ID','EMPLEADO_CARGO','EMPLEADO_SUELDO',
                'PGS_DIAS_TRABAJADOS','PGS_SUELDO_GANADO',
                'PGS_HORAS_EXTRAS_50','PGS_HORAS_EXTRAS_100','PGS_VALOR_HORAS_EXTRAS',
                'PGS_COMISIONES','PGS_INGRESOS',
                'PGS_IESS','PGS_QUIROGRAFARIO','PGS_ANTICIPOS','PGS_DESCUENTOS','PGS_TOTAL')
            ->edit_fields(
                // 'PGS_ANIO','PGS_MES',
                'EMPLEADO_ID','EMPLEADO_CARGO','EMPLEADO_SUELDO',
                'PGS_DIAS_TRABAJADOS','PGS_SUELDO_GANADO',
                'PGS_HORAS_EXTRAS_50','PGS_HORAS_EXTRAS_100','PGS_VALOR_HORAS_EXTRAS',
                'PGS_COMISIONES','PGS_INGRESOS',
                'PGS_IESS','PGS_QUIROGRAFARIO','PGS_ANTICIPOS','PGS_DESCUENTOS','PGS_TOTAL')
            
            ->required_fields('EMPLEADO_ID','PGS_DIAS_TRABAJADOS','PGS_HORAS_EXTRAS_50','PGS_HORAS_EXTRAS_100','PGS_COMISIONES',
                 'PGS_QUIROGRAFARIO','PGS_ANTICIPOS')
            ->order_by('EMPLEADO_ID','asc')

            ->change_field_type('EMPLEADO_CARGO','invisible')
            ->change_field_type('EMPLEADO_SUELDO','invisible')
            ->change_field_type('PGS_SUELDO_GANADO','invisible')
            ->change_field_type('PGS_VALOR_HORAS_EXTRAS','invisible')
            ->change_field_type('PGS_INGRESOS','invisible')

            ->change_field_type('PGS_IESS','invisible')
            ->change_field_type('PGS_DESCUENTOS','invisible')
            ->change_field_type('PGS_TOTAL','invisible')

            ->display_as('PGS_ANIO','Año')
            ->display_as('PGS_MES','Mes')
            ->display_as('EMPLEADO_ID','Nombre')
            ->display_as('EMPLEADO_CARGO','Cargo')
            ->display_as('EMPLEADO_SUELDO','Sueldo')
            ->display_as('PGS_DIAS_TRABAJADOS','Días trabajados')
            ->display_as('PGS_SUELDO_GANADO','Sueldo ganado')
            ->display_as('PGS_HORAS_EXTRAS_50','Horas extras 50 %')
            ->display_as('PGS_HORAS_EXTRAS_100','Horas extras 100 %')
            ->display_as('PGS_VALOR_HORAS_EXTRAS','Valor horas extras')
            ->display_as('PGS_COMISIONES','Comisiones')
            ->display_as('PGS_INGRESOS','INGRESOS')
            ->display_as('PGS_IESS','Aporte IESS')
            ->display_as('PGS_QUIROGRAFARIO','Préstamos quirografarios')
            ->display_as('PGS_ANTICIPOS','Anticipos y préstamos')
            ->display_as('PGS_DESCUENTOS','DESCUENTOS')
            ->display_as('PGS_TOTAL','TOTAL')
            ->display_as('CREADO','Creado')

            // ->set_relation('EMPLEADO_ID','empleados','EMP_NOMBRE_COMPLETO',array('EMP_ACTIVADO' => 1))
            ->set_relation('EMPLEADO_ID','empleados','EMP_NOMBRE_COMPLETO')

            ->callback_column('EMPLEADO_SUELDO',array($this,'_valueToDollar'))
            ->callback_column('PGS_SUELDO_GANADO',array($this,'_valueToDollar'))
            ->callback_column('PGS_HORAS_EXTRAS_50',array($this,'_column_horas'))
            ->callback_column('PGS_HORAS_EXTRAS_100',array($this,'_column_horas'))
            ->callback_column('PGS_DIAS_TRABAJADOS',array($this,'_column_dias'))
            ->callback_column('PGS_COMISIONES',array($this,'_valueToDollar'))
            ->callback_column('PGS_VALOR_HORAS_EXTRAS',array($this,'_valueToDollar'))
            ->callback_column('PGS_INGRESOS',array($this,'_valueToDollar'))
            ->callback_column('PGS_IESS',array($this,'_valueToDollar'))
            ->callback_column('PGS_QUIROGRAFARIO',array($this,'_valueToDollar'))
            ->callback_column('PGS_ANTICIPOS',array($this,'_valueToDollar'))
            ->callback_column('PGS_DESCUENTOS',array($this,'_valueToDollar'))
            ->callback_column('PGS_TOTAL',array($this,'_valueToDollar'))

            ->callback_add_field('PGS_DIAS_TRABAJADOS',array($this,'_add_field_dias_trabajados'))
            ->callback_add_field('PGS_HORAS_EXTRAS_50',array($this,'_add_field_horas_extras_50'))
            ->callback_add_field('PGS_HORAS_EXTRAS_100',array($this,'add_field_horas_extras_100'))
            ->callback_add_field('PGS_COMISIONES',array($this,'_add_field_comisiones'))
            ->callback_add_field('PGS_QUIROGRAFARIO',array($this,'_add_field_quirografario'))
            ->callback_add_field('PGS_ANTICIPOS',array($this,'_add_field_anticipos'))

            ->callback_edit_field('PGS_DIAS_TRABAJADOS',array($this,'_edit_field_dias_trabajados'))
            ->callback_edit_field('PGS_HORAS_EXTRAS_50',array($this,'_edit_field_horas_extras_50'))
            ->callback_edit_field('PGS_HORAS_EXTRAS_100',array($this,'_edit_field_horas_extras_100'))
            ->callback_edit_field('PGS_COMISIONES',array($this,'_edit_field_comisiones'))
            ->callback_edit_field('PGS_QUIROGRAFARIO',array($this,'_edit_field_quirografario'))
            ->callback_edit_field('PGS_ANTICIPOS',array($this,'_edit_field_anticipos'))

            ->callback_before_insert(array($this,'_before_insert_calcular_valores'))
            ->callback_before_update(array($this,'_before_update_calcular_valores'))


            // ->set_rules('PGS_DIAS_TRABAJADOS','días trabajados','numeric')
            ;
            //leer permisos desde la bd
            
            $arr_acciones = $this->modulos_model->get_acciones_por_rol_modulo($this->tank_auth->is_admin(), $this->id_modulo[0]);
            
            if (is_null($arr_acciones)) {
                redirect('/inicio/');
            } else {
                // if(!in_array('Crear', $arr_acciones)) {
                    $crud->unset_add();
                // }
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
            $this->_pago_output($output);
        } else {
            redirect('/inicio/');
        }}
    }

    function mensual_individual(){ //insert de todos los empleados
        if (!$this->tank_auth->is_logged_in()) {redirect('/auth/login/');}
        else{
        setlocale(LC_TIME,"es_ES");
        $this->load->model('empleados/empleados_model');
        //Módelo de empleados
        $this->load->model('tank_auth/users');
        $empleados = $this->empleados_model->get_empleados();
        //Array para ID de empleados
        $empleado_id = array();

        foreach ($empleados as $key => $value) {    
            if (!$this->empleados_model->existe_pago($empleados[$key]['EMP_ID'],ucwords(strftime('%B')),strftime('%Y'))) {
                $pago_individual = array(
                    'PGS_ANIO' => strftime('%Y'),
                    'PGS_MES' => ucwords(strftime('%B')),
                    'EMPLEADO_ID' => $empleados[$key]['EMP_ID'],
                    'EMPLEADO_CARGO' => $this->empleados_model->get_cargo($empleados[$key]['CARGO_ID']),
                    'EMPLEADO_SUELDO' => $this->empleados_model->get_sueldo($empleados[$key]['CARGO_ID']),
                    'PGS_DIAS_TRABAJADOS' => 30,
                    'PGS_HORAS_EXTRAS_50' => 0,
                    'PGS_HORAS_EXTRAS_100' => 0,
                    'PGS_COMISIONES' => 0,
                    'PGS_QUIROGRAFARIO' => 0,
                    'PGS_ANTICIPOS' => 0,
                    'CREADO' => date('Y-m-d H:i:s')
                    );

                // $pago_individual = $this->_before_insert_calcular_valores($pago_individual);
                //Obtener solo empleados que se van a pagar 
                array_push($empleado_id, $pago_individual['EMPLEADO_ID']);

                $pago_individual = $this->_before_insert_calcular_valores($pago_individual);
                

                $this->empleados_model->create_pago_individual($pago_individual);
            }
        }

        //Obtener ID de usuario con ID de empleado
        $usuarios_id = $this->empleados_model->get_usuario_id($empleado_id);

        //Obtener email con ID de usuario
        $emails = $this->users->get_email($usuarios_id);
        //Enviar correo electrónico a quienes fueron cancelados
        foreach ($emails as $key => $value) {
            $this->_enviar_notificacion($emails[$key]);
        }
        
        redirect('pagos/listar');
        }
    }

    /**
     * Envia la notificación de la generación de la orden de pago,
     * vía correo electrónico.
     *
     * @param   array
     * @return  void
     */
    function _enviar_notificacion($data) {
        $data['site_name'] = $this->config->item('website_name', 'tank_auth');
        try {
            $this->_send_email('orden_pago_salario', $data['email'], $data);
        } catch(Exception $e) {
            show_error($e->getMessage());
        }
    }

    /**
     * Send email message of given type (activate, forgot_password, etc.)
     *
     * @param   string
     * @param   string
     * @param   array
     * @return  void
     */
    function _send_email($type, $email, &$data)
    {
        $this->load->library('email');
        $this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
        $this->email->reply_to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
        $this->email->to($email);
        $this->email->subject(sprintf($this->lang->line('auth_subject_'.$type), $this->config->item('website_name', 'tank_auth')));
        $this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));
        $this->email->set_alt_message($this->load->view('email/'.$type.'-txt', $data, TRUE));
        try{
            $this->email->send();
        } catch(Exception $e) {
            show_error($e->getMessage());
        }
    }

    function mensual_general(){
        if (!$this->tank_auth->is_logged_in()) {redirect('/auth/login/');}
        else{
        setlocale(LC_TIME,"es_ES");
        $data['anio']=strftime('%Y');
        $data['mes']=ucwords(strftime('%B'));

        $this->load->model('pagos/pagos_model');
        $resultado_pagos = $this->pagos_model->get_total_mensual($data['anio'],$data['mes']);
        $data['pagos_mensual'] = $resultado_pagos['0'];

        // print_r($data['pagos_mensual']);
        
        $resultado = $this->organizacion_model->get_por_id(1);
        $data['organizacion_nombre'] = $resultado['ORG_NOMBRE'];
        
        $data['user_id']    = $this->tank_auth->get_user_id();
        $data['username']   = $this->tank_auth->get_username();
        $data['is_admin']   = $this->tank_auth->is_admin();

        $arr_menu = $this->modulos_model->get_modulos_por_rol($this->session->userdata('group_id'));
        $menu['menu'] = $arr_menu;
        $data = array_merge($data,$menu);

        $this->load->view('template/header',$data);
        $this->load->view('template/menu',$data);
        $this->load->view('pagos/opciones_pagos');
        $this->load->view('pagos/mensual_general');

        $data['jQ']=true;
        $this->load->view('template/footer',$data);
        }
    }

    function anual_individual(){
        if (!$this->tank_auth->is_logged_in()) {redirect('/auth/login/');}
        else{
            echo 'anual_individual';
        }
    }

    function anual_general(){
        if (!$this->tank_auth->is_logged_in()) {redirect('/auth/login/');}
        else{
        setlocale(LC_TIME,"es_ES");
        $data['anio']=strftime('%Y');

        $this->load->model('pagos/pagos_model');
        
        $resultado_enero = $this->pagos_model->get_total_mensual($data['anio'],'Enero');
        $data['enero'] = $resultado_enero['0'];
        // echo '<br>enero';
        // print_r($data['enero']);

        $resultado_febrero = $this->pagos_model->get_total_mensual($data['anio'],'Febrero');
        $data['febrero'] = $resultado_febrero['0'];
        // echo '<br>febrero';
        // print_r($data['febrero']);

        $resultado_marzo = $this->pagos_model->get_total_mensual($data['anio'],'Marzo');
        $data['marzo'] = $resultado_marzo['0'];
        // echo '<br>marzo';
        // print_r($data['marzo']);

        $resultado_abril = $this->pagos_model->get_total_mensual($data['anio'],'Abril');
        $data['abril'] = $resultado_abril['0'];
        // echo '<br>abril';
        // print_r($data['abril']);

        $resultado_mayo = $this->pagos_model->get_total_mensual($data['anio'],'Mayo');
        $data['mayo'] = $resultado_mayo['0'];
        // echo '<br>mayo';
        // print_r($data['mayo']);

        $resultado_junio = $this->pagos_model->get_total_mensual($data['anio'],'Junio');
        $data['junio'] = $resultado_junio['0'];
        // echo '<br>junio';
        // print_r($data['junio']);

        $resultado_julio = $this->pagos_model->get_total_mensual($data['anio'],'julio');
        $data['julio'] = $resultado_julio['0'];
        // echo '<br>julio';
        // print_r($data['julio']);

        $resultado_agosto = $this->pagos_model->get_total_mensual($data['anio'],'agosto');
        $data['agosto'] = $resultado_agosto['0'];
        // echo '<br>agosto';
        // print_r($data['agosto']);

        $resultado_septiembre = $this->pagos_model->get_total_mensual($data['anio'],'septiembre');
        $data['septiembre'] = $resultado_septiembre['0'];
        // echo '<br>septiembre';
        // print_r($data['septiembre']);

        $resultado_octubre = $this->pagos_model->get_total_mensual($data['anio'],'octubre');
        $data['octubre'] = $resultado_octubre['0'];
        // echo '<br>octubre';
        // print_r($data['octubre']);

        $resultado_noviembre = $this->pagos_model->get_total_mensual($data['anio'],'noviembre');
        $data['noviembre'] = $resultado_noviembre['0'];
        // echo '<br>noviembre';
        // print_r($data['noviembre']);

        $resultado_diciembre = $this->pagos_model->get_total_mensual($data['anio'],'diciembre');
        $data['diciembre'] = $resultado_diciembre['0'];
        // echo '<br>diciembre';
        // print_r($data['diciembre']);

        $enero_t['PGS_TOTAL'] = $data['enero']['PGS_INGRESOS'] - $data['enero']['PGS_DESCUENTOS'];
        $data['enero']=array_merge($enero_t,$data['enero']);
        $febrero_t['PGS_TOTAL'] = $data['febrero']['PGS_INGRESOS'] - $data['febrero']['PGS_DESCUENTOS'];
        $data['febrero']=array_merge($febrero_t,$data['febrero']);
        $marzo_t['PGS_TOTAL'] = $data['marzo']['PGS_INGRESOS'] - $data['marzo']['PGS_DESCUENTOS'];
        $data['marzo']=array_merge($marzo_t,$data['marzo']);
        $abril_t['PGS_TOTAL'] = $data['abril']['PGS_INGRESOS'] - $data['abril']['PGS_DESCUENTOS'];
        $data['abril']=array_merge($abril_t,$data['abril']);
        $mayo_t['PGS_TOTAL'] = $data['mayo']['PGS_INGRESOS'] - $data['mayo']['PGS_DESCUENTOS'];
        $data['mayo']=array_merge($mayo_t,$data['mayo']);
        $junio_t['PGS_TOTAL'] = $data['junio']['PGS_INGRESOS'] - $data['junio']['PGS_DESCUENTOS'];
        $data['junio']=array_merge($junio_t,$data['junio']);
        $julio_t['PGS_TOTAL'] = $data['julio']['PGS_INGRESOS'] - $data['julio']['PGS_DESCUENTOS'];
        $data['julio']=array_merge($julio_t,$data['julio']);
        $agosto_t['PGS_TOTAL'] = $data['agosto']['PGS_INGRESOS'] - $data['agosto']['PGS_DESCUENTOS'];
        $data['agosto']=array_merge($agosto_t,$data['agosto']);
        $septiembre_t['PGS_TOTAL'] = $data['septiembre']['PGS_INGRESOS'] - $data['septiembre']['PGS_DESCUENTOS'];
        $data['septiembre']=array_merge($septiembre_t,$data['septiembre']);
        $octubre_t['PGS_TOTAL'] = $data['octubre']['PGS_INGRESOS'] - $data['octubre']['PGS_DESCUENTOS'];
        $data['octubre']=array_merge($octubre_t,$data['octubre']);
        $noviembre_t['PGS_TOTAL'] = $data['noviembre']['PGS_INGRESOS'] - $data['noviembre']['PGS_DESCUENTOS'];
        $data['noviembre']=array_merge($noviembre_t,$data['noviembre']);
        $diciembre_t['PGS_TOTAL'] = $data['diciembre']['PGS_INGRESOS'] - $data['diciembre']['PGS_DESCUENTOS'];
        $data['diciembre']=array_merge($diciembre_t,$data['diciembre']);
        // total = descuentos(retenciones)-ingresos(egresos)

        
        $resultado = $this->organizacion_model->get_por_id(1);
        $data['organizacion_nombre'] = $resultado['ORG_NOMBRE'];
        
        $data['user_id']    = $this->tank_auth->get_user_id();
        $data['username']   = $this->tank_auth->get_username();
        $data['is_admin']   = $this->tank_auth->is_admin();

        $arr_menu = $this->modulos_model->get_modulos_por_rol($this->session->userdata('group_id'));
        $menu['menu'] = $arr_menu;
        $data = array_merge($data,$menu);

        $this->load->view('template/header',$data);
        $this->load->view('template/menu',$data);
        $this->load->view('pagos/opciones_pagos');
        $this->load->view('pagos/anual_general');

        $data['jQ']=true;
        $this->load->view('template/footer',$data);
        }
    }

    function _valueToDollar($value, $row){
        return '$ '.$value;
    }
    function _column_dias($value,$row){
        return $value.' días';
    }
    function _column_horas($value,$row){
        return $value.' horas';
    }

    function _add_field_dias_trabajados(){
        $data['id']='addTrabajados';
        $data['min']=0;
        $data['max']=30;
        $data['value']=30;
        $data['oninput']='outputUpdateTrabajo(value)';
        $data['name']='PGS_DIAS_TRABAJADOS';
        $data['addon']='días';
        return $this->load->view('components/spinner_days',$data,true);
    }
    function _edit_field_dias_trabajados($value, $primary_key){
        $data['id']='editTrabajados';
        $data['min']=0;
        $data['max']=30;
        $data['value']=$value;
        $data['oninput']='outputUpdateTrabajo(value)';
        $data['name']='PGS_DIAS_TRABAJADOS';
        $data['addon']='días';
        return $this->load->view('components/spinner_days',$data,true);      
    }

    function _add_field_horas_extras_50(){
        $data['id']='addExtras50';
        $data['min']=0;
        $data['max']=400;
        $data['value']=0;
        $data['oninput']='outputUpdateExtrasCincuenta(value)';
        $data['name']='PGS_HORAS_EXTRAS_50';
        $data['addon']='horas';
        return $this->load->view('components/spinner_days',$data,true);        
    }
    function _edit_field_horas_extras_50($value,$primary_key){
        $data['id']='editExtras50';
        $data['min']=0;
        $data['max']=400;
        $data['value']=$value;
        $data['oninput']='outputUpdateExtrasCincuenta(value)';
        $data['name']='PGS_HORAS_EXTRAS_50';
        $data['addon']='horas';
        return $this->load->view('components/spinner_days',$data,true);       
    }

    function add_field_horas_extras_100(){
        $data['id']='addExtras100';
        $data['min']=0;
        $data['max']=400;
        $data['value']=0;
        $data['oninput']='outputUpdateExtrasCien(value)';
        $data['name']='PGS_HORAS_EXTRAS_100';
        $data['addon']='horas';
        return $this->load->view('components/spinner_days',$data,true);
    }
    function _edit_field_horas_extras_100($value,$primary_key){
        $data['id']='editExtras100';
        $data['min']=0;
        $data['max']=400;
        $data['value']=$value;
        $data['oninput']='outputUpdateExtrasCien(value)';
        $data['name']='PGS_HORAS_EXTRAS_100';
        $data['addon']='horas';
        return $this->load->view('components/spinner_days',$data,true);       
    }

    function _add_field_comisiones(){
        $data['id']='addComision';
        $data['min']=0;
        $data['max']=10000;
        $data['value']=0;
        $data['oninput']='outputUpdateComision(value)';
        $data['name']='PGS_COMISIONES';
        $data['step']=0.01;
        return $this->load->view('components/spinner',$data,true);
    }
    function _edit_field_comisiones($value,$primary_key){
        $data['id']='editComision';
        $data['min']=0;
        $data['max']=10000;
        $data['value']=$value;
        $data['oninput']='outputUpdateComision(value)';
        $data['name']='PGS_COMISIONES';
        $data['step']=0.01;
        return $this->load->view('components/spinner',$data,true);
    }

    function _add_field_quirografario(){
        $data['id']='addQuirografario';
        $data['min']=0;
        $data['max']=10000;
        $data['value']=0;
        $data['oninput']='outputUpdateQuirografario(value)';
        $data['name']='PGS_QUIROGRAFARIO';
        $data['step']=0.01;
        return $this->load->view('components/spinner',$data,true);
    }
    function _edit_field_quirografario($value,$primary_key){
        $data['id']='editQuirografario';
        $data['min']=0;
        $data['max']=10000;
        $data['value']=$value;
        $data['oninput']='outputUpdateQuirografario(value)';
        $data['name']='PGS_QUIROGRAFARIO';
        $data['step']=0.01;
        return $this->load->view('components/spinner',$data,true);
    }

    function _add_field_anticipos(){
        $data['id']='addAnticipo';
        $data['min']=0;
        $data['max']=10000;
        $data['value']=0;
        $data['oninput']='outputUpdateAnticipo(value)';
        $data['name']='PGS_ANTICIPOS';
        $data['step']=0.01;
        return $this->load->view('components/spinner',$data,true); 
    }
    function _edit_field_anticipos($value,$primary_key){
        $data['id']='editAnticipo';
        $data['min']=0;
        $data['max']=10000;
        $data['value']=0;
        $data['oninput']='outputUpdateAnticipo(value)';
        $data['name']='PGS_ANTICIPOS';
        $data['step']=0.01;
        return $this->load->view('components/spinner',$data,true);
    }

    function _before_insert_calcular_valores($post_array){
        $post_array['PGS_SUELDO_GANADO'] = round($post_array['EMPLEADO_SUELDO']/30*$post_array['PGS_DIAS_TRABAJADOS'],2);
        
        $totalHorasExtras=$post_array['PGS_HORAS_EXTRAS_50']*1.5 + $post_array['PGS_HORAS_EXTRAS_100']*2;
        $post_array['PGS_VALOR_HORAS_EXTRAS'] = round(($post_array['EMPLEADO_SUELDO']/30)/8 * $totalHorasExtras,2);
        $post_array['PGS_INGRESOS'] = $post_array['PGS_SUELDO_GANADO'] + $post_array['PGS_VALOR_HORAS_EXTRAS'] + $post_array['PGS_COMISIONES'];

        $post_array['PGS_IESS'] = round($post_array['PGS_INGRESOS'] * 0.0935,2);
        $post_array['PGS_DESCUENTOS'] = $post_array['PGS_IESS'] + $post_array['PGS_QUIROGRAFARIO'] + $post_array['PGS_ANTICIPOS'];

        $post_array['PGS_TOTAL'] = $post_array['PGS_INGRESOS'] - $post_array['PGS_DESCUENTOS'];
        return $post_array;
    }

    function _before_update_calcular_valores($post_array, $primary_key){
        $this->load->model('pagos/pagos_model');
        
        $resultado = $this->pagos_model->get_sueldo_por_id($primary_key);
        $post_array['EMPLEADO_SUELDO'] = $resultado['EMPLEADO_SUELDO'];

        $post_array['PGS_SUELDO_GANADO'] = round($post_array['EMPLEADO_SUELDO']/30*$post_array['PGS_DIAS_TRABAJADOS'],2);
        $totalHorasExtras=$post_array['PGS_HORAS_EXTRAS_50']*1.5 + $post_array['PGS_HORAS_EXTRAS_100']*2;
        $post_array['PGS_VALOR_HORAS_EXTRAS'] = round(($post_array['EMPLEADO_SUELDO']/30)/8 * $totalHorasExtras,2);
        $post_array['PGS_INGRESOS'] = $post_array['PGS_SUELDO_GANADO'] + $post_array['PGS_VALOR_HORAS_EXTRAS'] + $post_array['PGS_COMISIONES'];
        $post_array['PGS_IESS'] = round($post_array['PGS_INGRESOS'] * 0.0935,2);
        $post_array['PGS_DESCUENTOS'] = $post_array['PGS_IESS'] + $post_array['PGS_QUIROGRAFARIO'] + $post_array['PGS_ANTICIPOS'];

        $post_array['PGS_TOTAL'] = $post_array['PGS_INGRESOS'] - $post_array['PGS_DESCUENTOS'];
        return $post_array;
    }
    

    function _pago_output($output = null) {
        $resultado = $this->organizacion_model->get_por_id(1);
        $data['organizacion_nombre'] = $resultado['ORG_NOMBRE'];
        
        $data['user_id']    = $this->tank_auth->get_user_id();
        $data['username']   = $this->tank_auth->get_username();
        $data['is_admin']   = $this->tank_auth->is_admin();
        $output = array_merge((array)$output,$data);

        $arr_menu = $this->modulos_model->get_modulos_por_rol($this->session->userdata('group_id'));
        $menu['menu'] = $arr_menu;
        $output = array_merge($output,$menu);
        $this->load->view('template/header',$output);
        $this->load->view('template/menu',$output);
        $this->load->view('pagos/opciones_pagos');
        $this->load->view('template/template',$output);
        $this->load->view('template/footer',$output);
    }
}

/* End of file pagos.php */
/* Location: ./application/controllers/pagos.php */