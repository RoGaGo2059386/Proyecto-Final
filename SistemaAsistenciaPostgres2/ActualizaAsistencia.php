<?php

include("conexion.php");
$con = conectar();

$fecha = $_POST['fecha'];
$trabajador = $_POST['trabajador'];
$estado = $_POST['estado'];


$sql = "UPDATE asistencia SET  estado=$estado WHERE fecha_clase='$fecha' and cc_trabajador = '$trabajador'";
$query = pg_query($con, $sql);

if ($query) {
    Header("Location: tablaAsistencia.php");
}
