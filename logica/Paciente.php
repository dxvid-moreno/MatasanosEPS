<?php
class Persona {
    private $fechaDeNacimiento;

	public function __construct($id = "", $nombre = "", $apellido = "", $correo = "", $clave = "", $fechaDeNacimiento=""){
	        parent::__construct($id, $nombre, $apellido, $correo, $clave);
			$this->fechaDeNacimiento;
	    }
		
	public function fechaDeNacimiento(){
	        return $this -> fechaDeNacimiento;
	    }

    
}
