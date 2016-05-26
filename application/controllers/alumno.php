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
		$this->load->helper('form');
		$this->load->view('Plantilla/header');
		$this->load->view('CalificarTareas',$data,array('error'=>' '));
		$this->load->view('Plantilla/footer');
	}

	function calificar(){
		$config['upload_path'] = "./assets/Junit/";
		$config['allowed_types'] = "java";
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		$Junit_jar="C:/xampp/htdocs/Proyecto/assets/Junit/junit-4.10.jar";
		$error=' ';
		
		if(!$this->upload->do_upload('Junit')){
			$error=array('error'=> $this->upload->display_errors());
			$this->load->view('CalificarTareas',$error);
		}
		$file_data = $this->upload->data();
		$Junit= $file_data['full_path'];
		$Junit_folder=$file_data['file_path'];
		$Junit_name=$file_data['raw_name'];
		
		if($error==' '){
		if(!$this->upload->do_upload('tarea')){
			$error=array('error'=> $this->upload->display_errors());
			$this->load->view('CalificarTareas',$error);
		}
		$file_data = $this->upload->data();
		$tarea =$file_data['full_path'];
		$tarea_folder=$file_data['file_path'];
		}	

		if($error==' '){
		//compilando tarea
		 system("javac ".$tarea);
		 
		 //compilando Junit
		 system("javac -cp ".$Junit_jar.";".$tarea_folder." ".$Junit." 2>&1");
		
		//revision
		 system("java -cp ".$Junit_jar.";".$tarea_folder.";".$Junit_folder."; org.junit.runner.JUnitCore ".$Junit_name." 2>&1",$revision);
		}

		
	}

	


}

?>	