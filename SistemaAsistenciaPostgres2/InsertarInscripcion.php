<?php

require 'conexion.php';
$con = conectar();
if (isset($_POST['trabajador_id'])) {
    $trabajador_id = $_POST['trabajador_id'];
    $seminario_id = $_POST['seminario_id'];
    
    $busqueda = "SELECT count(*)  from trabajador_seminario where trabajador_id=$trabajador_id and seminario_id=$seminario_id";

    $repetidos = pg_query($con, $busqueda);

    if ($trabajador_id == "---cedula asociada---" || $seminario_id == "---seminario---" ) {

        echo '<script>alert("debe seleccionar un trabajador y un seminario"); </script>';
    }
    if($repetidos > 0){
        echo '<script>alert("ya existe este registro"); </script>';
    } else {
        $sql = "INSERT INTO trabajador_seminario VALUES($trabajador_id,$seminario_id)";
        $query = pg_query($con, $sql);
        if ($query) {
            Header("Location: tablaTrabajador_seminario.php");
        }
    }


    echo "</div>";
}

?>