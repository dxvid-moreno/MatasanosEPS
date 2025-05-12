<?php
$id = $_SESSION["id"];
$rol = $_SESSION["rol"];

if (!isset($id) || $rol !== "admin") {
    echo '
    <div class="container mt-4">
        <div class="alert alert-danger text-center" role="alert">
            <strong>Usted no tiene acceso a este apartado.</strong>
        </div>
    </div>';
    exit();
}

$admin = new Admin($id);
$admin -> consultar();
echo "Hola " . $admin -> getNombre() . " " . $admin -> getApellido();


?>
