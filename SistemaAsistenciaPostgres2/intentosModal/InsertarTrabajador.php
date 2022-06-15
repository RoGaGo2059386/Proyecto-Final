<?php

require 'conexion.php';
$con = conectar();
if (isset($_POST['cc'])) {
    $documento = $_POST['cc'];
    $nombre = $_POST['nombre'];
    $cargo = $_POST['cargo'];


    if ($documento == "" || $nombre == "" || $cargo == "") {
        echo '<script>alert("Se deben diligenciar todos los campos") </script>';
    } else {
        $sql = "INSERT INTO trabajadores VALUES('$documento','$nombre','$cargo')";
        $query = mysqli_query($con, $sql);
        if ($query) {
            Header("Location: tablaTrabajadores.php");
        } else {
        }
    }

    echo "</div>";
}

?>