<?php
require ("persistencia/Conexion.php");
require ("persistencia/CitaDAO.php");



class Cita{
	private idCita;
	private fecha;
	private hora;
	private Paciente;
	private Medico;
	private Consultorio;
    
	
	public function __construct($idCita = "", $fecha = "", $hora = "", $Paciente = "", $Medico = "", $Consultorio = "", $EstadoCita = "") {
	    $this->idCita = $idCita;
	    $this->fecha = $fecha;
	    $this->hora = $hora;
	    $this->Paciente = $Paciente;
	    $this->Medico = $Medico;
	    $this->Consultorio = $Consultorio;
	    $this->EstadoCita = $EstadoCita;
	}
	
	public function getIdCita() {
	    return $this->idCita;
	}

	public function getFecha() {
	    return $this->fecha;
	}

	public function getHora() {
	    return $this->hora;
	}

	public function getPaciente() {
	    return $this->Paciente;
	}

	public function getMedico() {
	    return $this->Medico;
	}

	public function getConsultorio() {
	    return $this->Consultorio;
	}

    
    public function consultarCitas(){
        $conexion = new Conexion();
        $especialidadDAO = new CitaDAO();
        $conexion -> abrir();
        $conexion -> ejecutar($CitaDAO -> consultar());
		
		$citas = array();
		    while (($datos = $conexion->registro()) != null) {
		        $cita = new Cita(
		            $datos[0],            
		            $datos[1],            
		            $datos[2],            
					$datos[3] . " " . $datos[4],  // nombre paciente
				    $datos[5] . " " . $datos[6],  // nombre  médico
					$datos[7]             // consultorio           
		        );
		        array_push($citas, $cita);
		    }
        $conexion -> cerrar();
        return $citas;
    }
    
    
}



?>