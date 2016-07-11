<?php 
if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Tareas_alumno extends CI_Controller{
	

	function _construct(){
		parent::__construct();
		
	}

	function index(){
		$this->load->helper('form');
		$datosFormMatricula = array('mat' => $this->input->post('mat'));
		$result ['registros']= $this->verTareas($datosFormMatricula);
		$this->load->view('Plantilla/header');
		$this->load->view('Alumno/menuNav');
		$this->load->view('Alumno/tareas', $result);
		$this->load->view('Plantilla/footer');
		
	}

	function verTareas($matriculaAlumno){
		$this->load->model("tareas");
		$resultTareas = $this->tareas->getTareas($matriculaAlumno);
		return $resultTareas;
	}


}

?>