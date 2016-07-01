<?php 
if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Ueas_alumno extends CI_Controller{
	

	function _construct(){
		parent::__construct();
		
	}

	function index(){
		$this->load->helper('form');
		$this->load->view('Plantilla/header');
		$matricula = $this->session->userdata('matricula');
		$result = $this->getUeas($matricula);
		$this->load->view('Alumno/menuNav');
		$data = array();
		$data['nombreAlumno'] = $this->session->userdata('nombre');
		$data['apaternoAlumno'] = $this->session->userdata('apellpaterno');
		$data['amaternoAlumno'] = $this->session->userdata('apellmaterno');
		$data['trimestre'] = $result->trimestre;
		$data['nomuea'] = $result->nomUEA;
		$data['cveuea'] = $result->uea;
		$data['nombreProfesor'] = $result->nomProfesor;
		$data['apaternoProf'] = $result->apellido_paterno;
		$data['amaternoProf'] = $result->apellido_materno;
 		$this->load->view('Alumno/ueas', $data);
		$this->load->view('Plantilla/footer');
	}

	function getUeas($matricula){
		$this->load->model('ueas');
		$resultadoUeas = $this->ueas->getUea($matricula);
		return $resultadoUeas;
	
	}



}



?>