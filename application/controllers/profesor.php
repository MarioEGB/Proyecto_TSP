<?php if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Profesor extends CI_Controller{

function _construct(){
		parent::__construct();
	}

function index(){
	$data = array();
    $data['nombre'] = $this->session->userdata('nombre');

	$this->load->view('Plantilla/header');
	$this->load->view('Profesor/loginProfesor',$data);
	$this->load->view('Plantilla/footer');
}

function cerrarCesion(){

}

function muestraUeas(){

}

function administracionCuenta(){

}

}


?>