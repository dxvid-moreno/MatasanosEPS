<?php
require ("persistencia/Conexion.php");
require ("persistencia/ConsultorioDAO.php");


class Consultorio{
    private idConsultorio;
	private nombre;
	private Especialidad;
	
	public function getIdConsultorio() {
	    return $this->idConsultorio;
	}

	public function getNombre() {
	    return $this->nombre;
	}

	public function getEspecialidad() {
	    return $this->Especialidad;
	}
	
	
	
}
?>