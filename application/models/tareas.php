<?php 
if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Tareas extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getTareas($matricula){
		$query = $this->db->query("SELECT l.matricula, c.idCurso, c.uea, c.cveProfesor, tc.idTareaCurso, tc.nomTareaCurso, tc.idTareaG FROM listaalumno as l INNER JOIN curso as c ON l.idCurso = c.idCurso INNER JOIN tareascurso as tc ON c.idCurso = tc.idCurso WHERE l.matricula = '".$matricula."'");
		$result =$query->result_array();
		return $result;

/*
		$this->db->select("listaalumno.matricula, curso.idCurso, curso.uea, curso.cveProfesor, tareascurso.idTareaCurso, tareascurso.nomTareaCurso, tareascurso.idTareaG");
		$this->db->from('listaalumno');
		$this->db->join('curso', 'listaalumno.idCurso = curso.idCurso');
		$this->db->join('tareascurso', 'curso.idCurso = tareascurso.idCurso');
		$this->db->where('listaalumno.matricula',$matricula);
		$query = $this->db->get();
		//$data=$query->result_array();

		return $query->result_array();
*/

	}

}
	

?>
