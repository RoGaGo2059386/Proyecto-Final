<?php

require "conexion.php";
$con = conectar();

$documento = $_POST["cc"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$cargo = $_POST["cargo"];

$sql1 = "UPDATE trabajadores set (nombre=$nombre telefono= $telefono email= $email  cargo=$cargo) where cc='$documento'";
//$sql = "UPDATE trabajadores SET nombre =".$nombre."  ,cargo=".$cargo." WHERE cc=".$documento." ;";
$query = pg_query($con ,$sql1) or die (pg_last_error());

if ($query) {
    Header("Location: tablaTrabajadores.php");
}
else{
    pg_last_error();
}
