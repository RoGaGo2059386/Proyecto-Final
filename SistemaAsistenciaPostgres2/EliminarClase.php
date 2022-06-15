<?php

include("conexion.php");
$con = conectar();

$idclase = $_GET['id'];


$sql = "DELETE FROM clase WHERE id_clase = $idclase";
$query = pg_query($con, $sql);

if ($query) {
    Header("Location: tablaClases.php");
}