<?php
if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class DBMtsp extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

function validarDatos($data){
		$queryAlumno = $this->db->get('listaalumno');
		$queryProfesor = $this->db->get('profesor');
		if($queryAlumno->num_rows()>0){
		 foreach ($queryAlumno->result() as $row){
		 	if(($row->matricula == $data['nombre']) && ($row->password == $data['password'])){
		 		/*$this->db->insert('accesos',array('Rol'=> 'Estudiante','Nombre'=> $row->nomAlumno,'Clave/Mat'=>$row->Matricula, 'fecha_acceso'=> date("Y-m_d") ));*/
		 		$data['nombre'] = $row->nomAlumno;
		 		$data['roll'] = $row->roll;
		 		$data['matricula'] = $row->matricula;
		 		return $data;
		 	}
		 }



		}  if($queryProfesor->num_rows()>0){
			 foreach ($queryProfesor->result() as $row){
			 	if(($row->cveEmp == $data['nombre']) && ($row->password == $data['password'])){
			 		$data['nombre'] = $row->nomProfesor;
			 		$data['roll'] = $row->roll;
			 		$data['identificador'] = $row->cveEmp;
			 		return $data;

			 		
			 	}
	  		
			//redirect(base_url());
			}

}

redirect(base_url());

}


function datos($class,$method){
	
	$query = $this->db->get('accesos');
	foreach ($query->result() as $row){
		 	$rol =$row->Rol;
		 	}
	if($rol=='Profesor'){
	$query = $this->db->get('accesoprof');
	foreach ($query->result() as $row){
		 	if($row->controlador==$class){
		 		foreach ($query->result() as $row) {
		 			if($row->metodos==$method){
		 				return true;
		 			}
		 		}
		 	}
		 }
	return false;
	
	}else{
		$query = $this->db->get('accesoalum');
	foreach ($query->result() as $row){
		 	if($row->controlador==$class){
		 		foreach ($query->result() as $row) {
		 			if($row->metodos==$method){
		 				return true;
		 			}
		 		}
		 	}
		 }
		return false;
	}	 	

}




}

?>	