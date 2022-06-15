<?php
include("conexion.php");
$con = conectar();
if (isset($_POST['fecha'])) {
    $fecha = $_POST['fecha'];
    $nombre = $_POST['nombre'];
    $seminario = $_POST['seminario'];

    if ($fecha == "" || $seminario == "---seminario---" || $seminario =="") {
        Header("Location: tablaClases.php");
        echo'<script>alert("debe de haber al menos una fecha y un seminario asociado"); </script>';
    } else {
        $sql = "INSERT INTO clase (fecha,c_nombre, seminario) VALUES('$fecha','$nombre',$seminario)";
        $query = pg_query($con, $sql);
        if ($query) {
            Header("Location: tablaClases.php");
        }
    }

    echo "</div>";
}
