<?php
$mysqli = new mysqli("localhost", "root", "", "SistemaAsistencia");


function conectar2()
{
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "SistemaAsistencia";

    $con = mysqli_connect($host, $user, $pass) or die("problemas en el servidor :(");

    mysqli_select_db($con, $bd) or die("problemas con la base de datos:(");

    return $con;
}

function modalComorbilidad($id)
{
    $con = conectar();
    $sql = "SELECT descripcion FROM comorbilidad WHERE cc='$id'";
    return $sql;
}
