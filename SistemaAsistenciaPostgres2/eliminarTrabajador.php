<?php

require 'conexion.php';

$con = conectar();

$cc = $_GET['id'];

$sql = "DELETE FROM trabajadores  WHERE cc='$cc'";
$query = pg_query($con, $sql);

if ($query) {
    Header("Location: tablaTrabajadores.php");
}

?>