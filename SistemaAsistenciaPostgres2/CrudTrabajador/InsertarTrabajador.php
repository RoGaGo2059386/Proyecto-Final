<?php

require 'conexion.php';
$con = conectar();
if (isset($_POST['cc'])) {
    $documento = $_POST['cc'];
    $nombre = $_POST['nombre'];
    $cargo = $_POST['cargo'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];


    if ($documento == "" || $nombre == "" || $cargo == ""|| $telefono == ""|| $email == "") {
        echo '<script>alert("Se deben diligenciar todos los campos") </script>';
    } else {
        $sql = "INSERT INTO trabajadores VALUES('$documento','$nombre','$telefono','$email','$cargo')";
        $query = pg_query($con, $sql);
        if ($query) {
            Header("Location: tablaTrabajadores.php");
        } else {
        }
    }

    echo "</div>";
}

?>