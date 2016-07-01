<?php 
if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Tarea_alumno extends CI_Controller{
	

	function _construct(){
		parent::__construct();
		
	}

	function index(){
		$this->load->helper('form');
		$datosForm = array('mat' => $this->input->post('mat'));
		
	}

	function verTareas(){
		
	}


}

?>