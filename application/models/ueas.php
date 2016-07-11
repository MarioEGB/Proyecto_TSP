<?php 
if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Ueas extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getUea($matricula){
		$query = $this->db->query("SELECT trimestre, uea, nomUEA, nomProfesor, p.apellido_paterno, p.apellido_materno FROM listaalumno as l INNER JOIN curso as c ON l.idCurso = c.idCurso INNER JOIN uea as u ON c.uea = u.cveUEA INNER JOIN profesor as p ON c.cveProfesor = p.cveEmp WHERE l.matricula = '".$matricula."'");
		return $query->row();
	}

}
	

?>
