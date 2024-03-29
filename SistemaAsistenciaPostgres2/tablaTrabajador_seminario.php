<?php
require 'conexion.php';
session_start();

$nombre = $_SESSION['nombre_admin'];

if ($nombre == null || $nombre == ' ') {
    header("Location: index.php");
}
//Conexion 

$con = conectar();

$personal = "SELECT cc, nombre  from trabajadores ";
$resultado = pg_query($con, $personal);
$seminario = "SELECT id, nombre from seminario ";
$resultado2 = pg_query($con, $seminario);
$sql = "SELECT trabajador_seminario.trabajador_id,
trabajador_seminario.seminario_id,
seminario.nombre,
trabajadores.nombre as t_nombre
FROM trabajador_seminario 
JOIN trabajadores 
ON trabajador_seminario.trabajador_id=trabajadores.cc 
JOIN seminario 
ON trabajador_seminario.seminario_id=seminario.id";
$query = pg_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Inscripciones - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="principal.php">Sistema Asistencia</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <div class="input-group"></div>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $nombre ?><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="Login/cerrarSesion.php">Cerrar sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="principal.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Home
                        </a>
                        <div class="sb-sidenav-menu-heading">Contenido</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Tablas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <ol class="breadcrumb mb-4">
                                    <a class="nav-link" href="tablaTrabajadores.php">Tabla Trabajadores</a>
                                    <a class="nav-link" href="tablaSeminario.php">Tabla Seminarios</a>
                                    <a class="nav-link" href="tablaTrabajador_seminario.php">Tabla Inscripciones</a>
                                    <a class="nav-link" href="tablaClases.php">Tabla Clases</a>
                                    <a class="nav-link" href="tablaAsistencia.php">Tabla Asistencia</a>                                    
                                </ol>
                            </nav>
                        </div>


                        

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Conectado como:</div>
                    <?php echo $nombre ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Tabla Inscripciones</h1>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Datos de las inscripciones
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Documento</th>
                                        <th>Nombre trabajador</th>
                                        <th>Id seminario</th>
                                        <th>Nombre seminario</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Documento</th>
                                        <th>Nombre trabajador</th>
                                        <th>Id seminario</th>
                                        <th>Nombre seminario</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    while ($row = pg_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <th><?php echo $row['trabajador_id'] ?></th>
                                            <th><?php echo $row['t_nombre'] ?></th>
                                            <th><?php echo $row['seminario_id'] ?></th>
                                            <th><?php echo $row['nombre'] ?></th>



                                            <th><a href='#' onclick="preguntar(<?php echo $row['trabajador_id'] ?>,<?php echo $row['seminario_id'] ?>)" class="btn btn-danger">Eliminar</a></th>
                                        </tr>



                                    <?php

                                    }
                                    ?>

                                </tbody>

                            </table>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <div class="form-check mb-3"></div>
                                <a type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Agregar</a>
                                <?php
                                include('modal/modalAgregarInscripcion.php');

                                ?>
                            </div>


                            <script type="text/javascript">
                                function preguntar(id1, id2) {
                                    if (confirm('¿esta seguro que desea borrar este registro? se borraran todos los registros asociados')) {
                                        window.location.href = "EliminarInscripcion.php?id1=" + id1 + "&id2=" + id2;
                                    }
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Tec Sistemas Univalle 2022</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>