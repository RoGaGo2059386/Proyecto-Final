<?php

$con = pg_connect("host=localhost dbname=SistemaAsistencia user=postgres password=123");


function conectar (){
    $host = "localhost";
    $user = "postgres";
    $pass = "123";

    $bd = "SistemaAsistencia";

    $con = pg_connect("host=$host dbname=$bd user=$user password=$pass");

    return $con;
}
