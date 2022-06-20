<?php

require "conexion.php";
$con = conectar();

$documento = $_POST['cc'];
$nombre = $_POST['nombre'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];




if ($nombre == "" || $cargo == "" || $telefono == "" || $email == "") {
    echo '<script>alert("ningun campo puede quedar vacio") </script>';
} else {
    $sql = "UPDATE trabajadores SET  nombre='$nombre',cargo='$cargo',telefono=$telefono, email='$email' WHERE cc='$documento'";
    $query = pg_query($con, $sql);

    if ($query) {
        Header("Location: tablaTrabajadores.php");
    } else {
    }
}
