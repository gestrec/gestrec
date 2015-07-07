<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Organizacion_model extends CI_Model
{
	private $table_name			= 'organizaciones'; // modulos

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function get_por_id($id){
		$this->db->select('ORG_NOMBRE');
		$this->db->where('ORG_ID',$id);
		$result = $this->db->get('organizaciones')->result();
		return get_object_vars($result['0']);
	}

}

/* End of file organizacion_model.php */
/* Location: ./application/models/auth/organizacion_model.php */