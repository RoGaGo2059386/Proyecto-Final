<?php

require 'conexion.php';

$con = conectar();

$id = $_GET['id'];

$sql = "DELETE FROM seminario  WHERE id='$id'";
$query = pg_query($con, $sql);

if ($query) {
    Header("Location: tablaSeminario.php");
}

?>