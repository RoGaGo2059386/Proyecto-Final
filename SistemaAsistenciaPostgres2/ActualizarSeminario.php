<?php

require "conexion.php";
$con = conectar();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$objetivo = $_POST['objetivo'];
$descripcion = $_POST['descripcion'];
$poblacion_dirigida = $_POST['poblacion_dirigida'];

$sql = "UPDATE seminario SET  s_nombre='$nombre',objetivo='$objetivo',descripcion='$descripcion', poblacion_dirigida='$poblacion_dirigida' WHERE id='$id'";
$query = pg_query($con, $sql);

if ($query) {
    Header("Location: tablaSeminario.php");
}
