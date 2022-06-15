<?php

include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "DELETE FROM medicamentos  WHERE medID='$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: tablaMedicamentos.php");
}
