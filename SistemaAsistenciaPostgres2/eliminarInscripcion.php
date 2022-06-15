<?php

require 'conexion.php';

$con = conectar();

$cc = $_GET['id1'];
$sem = $_GET['id2'];

$sql = "DELETE FROM trabajador_seminario  WHERE trabajador_id='$cc' and seminario_id = $sem";
$query = pg_query($con, $sql);

if ($query) {
    Header("Location: tablaTrabajador_seminario.php");
}

?>