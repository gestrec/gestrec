<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagos_model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function get_sueldo_por_id($id_pago){
		$query = $this->db->select('EMPLEADO_SUELDO');
		$query = $this->db->where('PGS_ID',$id_pago);
		$query = $this->db->get('pagos');
		return $query->result_array()['0'];
	}

	function get_total_mensual($anio,$mes){
		$query = $this->db->select_sum('PGS_SUELDO_GANADO');
		$query = $this->db->select_sum('PGS_VALOR_HORAS_EXTRAS');
		$query = $this->db->select_sum('PGS_COMISIONES');
		$query = $this->db->select_sum('PGS_INGRESOS');

		$query = $this->db->select_sum('PGS_IESS');
		$query = $this->db->select_sum('PGS_QUIROGRAFARIO');
		$query = $this->db->select_sum('PGS_ANTICIPOS');
		$query = $this->db->select_sum('PGS_DESCUENTOS');


		$query = $this->db->where('PGS_ANIO',$anio);
		$query = $this->db->where('PGS_MES',$mes);
		$query = $this->db->get('pagos');
		return $query->result_array();
	}
}