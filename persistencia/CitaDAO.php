<?php
class CitaDAO {
    private $idCita;
    private $fecha;
    private $hora;
    private $Paciente;
    private $Medico;
    private $Consultorio;

    public function __construct($idCita = "", $fecha = "", $hora = "", $Paciente = "", $Medico = "", $Consultorio = "") {
        $this->idCita = $idCita;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->Paciente = $Paciente;
        $this->Medico = $Medico;
        $this->Consultorio = $Consultorio;
    }

    public function consultar() {
        return "SELECT 
                    c.idCita, 
                    c.fecha, 
                    c.hora, 
                    p.nombre AS nombre_paciente, 
                    p.apellido AS apellido_paciente, 
                    m.nombre AS nombre_medico, 
                    m.apellido AS apellido_medico, 
                    cons.nombre AS nombre_consultorio
                FROM 
                    Cita c
                JOIN 
                    Paciente p ON c.Paciente_idPaciente = p.idPaciente
                JOIN 
                    Medico m ON c.Medico_idMedico = m.idMedico
                JOIN 
                    Consultorio cons ON c.Consultorio_idConsultorio = cons.idConsultorio
                ORDER BY 
                    c.fecha, c.hora";
    }
}
?>
