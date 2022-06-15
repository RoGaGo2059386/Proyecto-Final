<?php
$mysqli = new mysqli("localhost", "root", "", "SistemaAsistencia");


function conectar()
{
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "SistemaAsistencia";

    $con = mysqli_connect($host, $user, $pass) or die("problemas en el servidor :(");

    mysqli_select_db($con, $bd) or die("problemas con la base de datos:(");

    return $con;
}
