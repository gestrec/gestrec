<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Empleados
 *
 * This model represents user authentication data. It operates the following tables:
 * - user account data,
 * - user profiles
 *
 * @package	Tank_auth
 * @author	Ilya Konyukhov (http://konyukhov.com/soft/)
 */
class Empleados_model extends CI_Model
{
	private $table_name			= 'empleados'; // modulos
	private $cargos_table_name	= 'cargos'; // cargos
	private $salarios_table_name= 'salarios'; //salarios
	private $users_table_name= 'users'; //users

	function __construct()
	{
		parent::__construct();

		$ci =& get_instance();
		$this->table_name			= $ci->config->item('db_table_prefix', 'tank_auth').$this->table_name;
		$this->cargos_table_name	= $ci->config->item('db_table_prefix', 'tank_auth').$this->cargos_table_name;
		$this->salarios_table_name	= $ci->config->item('db_table_prefix', 'tank_auth').$this->salarios_table_name;
		$this->users_table_name	= $ci->config->item('db_table_prefix', 'tank_auth').$this->users_table_name;
	}

	function get_usuario_id($id_empleado){

		$this->db->select('USUARIO_ID');
		$this->db->from('empleados');
		$this->db->where_in('EMP_ID',$id_empleado);
		$query = $this->db->get();
		return $query->result_array();
		//var_dump($empleados[0]['EMP_ID']);
		//var_dump($query->result_array());
	}

	function get_empleados(){
		$this->db->select('EMP_ID, CARGO_ID');
		$this->db->from('empleados');
		$query = $this->db->get();
		return $query->result_array();
	}

	function get_sueldo($id_cargo){
		$this->db->select('CRG_SUELDO');
		$this->db->from('cargos');
		$this->db->where('CRG_ID',$id_cargo);

		$query = $this->db->get();
		$res= $query->result_array()['0']['CRG_SUELDO'];
		return $res; 
	}

	function get_cargo($id_cargo){
		$this->db->select('CRG_NOMBRE');
		$this->db->from('cargos');
		$this->db->where('CRG_ID',$id_cargo);

		$query = $this->db->get();
		$res = $query->result_array()['0']['CRG_NOMBRE'];
		return $res;
	}

	function create_pago_individual($data){
		$this->db->insert('pagos',$data);
	}

	function existe_pago($id_empleado,$mes,$anio){
		$this->db->select('EMPLEADO_ID, PGS_MES, PGS_ANIO');
		$this->db->from('pagos');
		$this->db->where('EMPLEADO_ID',$id_empleado);
		$this->db->where('PGS_MES',$mes);
		$this->db->where('PGS_ANIO',$anio);

		$query = $this->db->get();

		if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
	}

	/**
	 * Obtener el valor del salario de un empleado
	 *
	 * @param	int		ID de empleado
	 * @return	object
	 */
	function get_salario($empleado_id=NULL) {
		$this->db->select('SLR_VALOR');
		$this->db->from($this->table_name);
		$this->db->join($this->cargos_table_name, 'CARGO_ID = CRG_ID');
		$this->db->join($this->salarios_table_name, 'SALARIO_ID = SLR_ID');
		$this->db->where('EMP_ID', $empleado_id);
		$query = $this->db->get();
		return $query->result_array();
	}

	/**
	 * Verificar si los décimos de un empleado están mensualizados
	 *
	 * @param	int		ID de empleado
	 * @return	object
	 */
	function estan_decimos_mensualizados($empleado_id=NULL) {
		$this->db->select('EMP_MENS');
		$this->db->from($this->table_name);
		$this->db->where('EMP_ID', $empleado_id);
		$query = $this->db->get();
		return $query->result_array();
	}

	/**
	 * Obtener el correo electrónico de un empleado
	 *
	 * @param	int		ID de empleado
	 * @return	object
	 */
	function get_email($empleado_id=NULL) {
		$this->db->select('email');
		$this->db->from($this->table_name);
		$this->db->join($this->users_table_name, 'USUARIO_ID = id');
		$this->db->where('EMP_ID', $empleado_id);
		$query = $this->db->get();
		return $query->result_array();
	}

	/**
	 * Activate user if activation key is valid.
	 * Can be called for not activated users only.
	 *
	 * @param	int
	 * @param	string
	 * @param	bool
	 * @return	bool
	 */
	function activar_empleado($user_id) {
		$this->db->select('1', FALSE);
		$this->db->where('USUARIO_ID', $user_id);
		$this->db->where('EMP_ACTIVADO', 0);
		$query = $this->db->get($this->table_name);

		if ($query->num_rows() == 1) {

			$this->db->set('EMP_ACTIVADO', 1);
			$this->db->where('USUARIO_ID', $user_id);
			$this->db->update($this->table_name);

			return TRUE;
		}
		return FALSE;
	}
}

/* End of file empleados_model.php */
/* Location: ./application/models/auth/empleados_model.php */