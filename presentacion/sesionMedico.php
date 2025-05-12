<?php
$id = $_SESSION["id"];
$rol = $_SESSION["rol"];

if (!isset($id) || $rol !== "medico") {
    echo '
    <div class="container mt-4">
        <div class="alert alert-danger text-center" role="alert">
            <strong>Usted no tiene acceso a este apartado.</strong>
        </div>
    </div>';
    exit();
}

$medico = new Medico($id);
$medico -> consultar();
echo "Hola " . $medico -> getNombre() . " " . $medico -> getApellido();
echo "Usted tiene la especialidad: " . $medico -> getEspecialidad() -> getNombre();

?>

AQUI VA EL MENU