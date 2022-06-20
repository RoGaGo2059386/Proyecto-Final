<?php

require 'conexion.php';
$con = conectar();
if (isset($_POST['nombre'])) {
   
    $nombre = $_POST['nombre'];
    $objetivo = $_POST['objetivo'];
    $descripcion = $_POST['descripcion'];
    $poblacion_dirigida = $_POST['poblacion_dirigida'];


    if ($nombre == "" ) {
        echo '<script>alert("Debe haber un nombre") </script>';
    } else {
        $sql = "INSERT INTO seminario (nombre, objetivo, descripcion, poblacion_dirigida) VALUES('$nombre','$objetivo','$descripcion','$poblacion_dirigida')";
        $query = pg_query($con, $sql);
        if ($query) {
            Header("Location: tablaSeminario.php");
        } else {
        }
    }

    echo "</div>";
}

?>