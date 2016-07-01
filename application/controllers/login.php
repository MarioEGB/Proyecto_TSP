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
		$data = array('mat' => $this->input->post('mat'),'password' => $this->input->post('password'));
		$resultado = $this->DBMtsp->validarDatos($data);
		//crear sesion
		$this->session->set_userdata($resultado);
		if($resultado['roll']==0)
        	redirect(base_url()."profesor");
		elseif($resultado['roll']==1){
			redirect(base_url()."alumno");
		}
	}

	function salir(){
		$this.session_destroy();
		redirect(redirect(base_url()."login"));
	}
}
?>