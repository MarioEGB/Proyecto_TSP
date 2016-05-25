<?php
if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Login extends CI_Controller {

	function _construct(){
		parent::__construct();
		//$this->load->model('DBMtsp');
		//$this->load->helper('form');
		$this->load->database();
	}


function index(){
	//$this->load->model('DBMtsp');
	$this->load->helper('form');
	$dato['titulo']= 'Principal';
	$this->load->view('principal');
}


function comprobarDatos(){
		$this->load->model('DBMtsp');
		$data = array('nombre' => $this->input->post('nombre'),'password' => $this->input->post('password'));
		$resultado = $this->DBMtsp->validarDatos($data);
		//crear sesion
		/*$usuario_data = array(
               'id' => $resultado->identificador,
               'nombre' => $resultado->nombre,
               'roll' => $resultado->roll,
               'logueado' => TRUE
         		);*/
		$this->session->set_userdata($resultado);
		if($resultado['roll']==0)
        	redirect(base_url()."/profesor");
		
	}

}
?>