<?php

require "conexion.php";
$con = conectar();

$cc = $_GET['id'];

$sql = "DELETE FROM historia_clinica  WHERE cc='$cc'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: tablaHistoriasClinicas.php");
}