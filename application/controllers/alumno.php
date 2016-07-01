<?php
if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Alumno extends CI_Controller {

	function _construct(){
	parent::__construct();
	$this->load->model('DBMtsp');
	$this->load->database();
	
	}

	function index(){
		$data = array();
    	$data['nombre'] = $this->session->userdata('nombre');
    	$data['appaterno'] = $this->session->userdata('apellpaterno');
    	$data['apmaterno'] = $this->session->userdata('apellmaterno');
    	//$data['apaterno'] = $this->session->userdata('apaterno');
		//$this->load->helper('form');
		$this->load->view('Plantilla/header');
		$this->load->view('Alumno/menuNav');
		//$this->load->view('CalificarTareas',$data,array('error'=>' '));
		$this->load->view('Alumno/inicioAlumno',$data);
		$this->load->view('Plantilla/footer');
	}

	
}

?>	