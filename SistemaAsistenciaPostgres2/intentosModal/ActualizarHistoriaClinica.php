<?php

include("conexion.php");
$con = conectar();

$documento = $_POST['cc'];
$descripcion = $_POST['descripcion'];
$grupo_sanguineo = $_POST['grupo_sanguineo'];
$RH = $_POST['rh'];

$sql = "UPDATE historia_clinica SET descripcion='$descripcion', grupo_sanguineo='$grupo_sanguineo', rh='$RH' WHERE cc='$documento'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: tablaHistoriasClinicas.php");
}