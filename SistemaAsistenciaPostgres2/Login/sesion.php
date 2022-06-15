<?php
require ('../conexion.php');



$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

echo $usuario;


$query = "SELECT * FROM administradores WHERE usuario='$usuario' and contraseña='$contraseña'";

$consulta = pg_query($con, $query);
$cantidad = pg_num_rows($consulta);

if ($cantidad > 0) {
    session_start();
    $_SESSION['id']=$id;
    $_SESSION['nombre_admin'] = $usuario;

    header('Location: ../principal.php');
} else {
    header('Location: ../Index.php');

    echo "datos incorrectos porfavor revise los datos";
}



?>