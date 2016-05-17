<?php

class LoggedUsers{
private $ci;


public function __construct(){
	$this->ci =& get_instance();
	!$this->ci->load->library('session') ? $this->ci->load->library('session') : false;
	!$this->ci->load->helper('url') ? $this->ci->load->helper('url') : false;
	
}


public function validarAcceso(){
	/*
	$this->ci->load->model('DBMtsp');
	
	$class = $this->ci->router->class;
	$method = $this->ci->router->method;
	

	if(!($this->ci->DBMtsp->datos($class,$method))){
		redirect(base_url());
	}*/
}
	
}

?>