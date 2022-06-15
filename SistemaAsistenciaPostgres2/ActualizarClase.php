<?php

include("conexion.php");

$id = $_POST['id_clase'];
$nombre = $_POST['nombre'];
$seminario = $_POST['seminario'];


if ($seminario == "---seminario---" || $seminario == 0) {
    echo '<script>alert("Porfavor seleccione un seminario"); </script>';
} else {
    $sql = "UPDATE clase SET  c_nombre='$nombre', seminario=$seminario WHERE id_clase=$id";
    $query = pg_query($con, $sql);
    if ($query) {
        Header("Location: tablaClases.php");
    }
}

