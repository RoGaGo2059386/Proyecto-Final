<?php

session_start();

require 'conexion.php';

$nombre = $_SESSION['nombre'];
if (!isset($_SESSION['id'])) {
    header("Location: index.php");
}
//Conexion 

$con = conectar();

$sql = "SELECT *  FROM trabajadores";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Trabajadores - SB Admin</title>
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
                    <li><a class="dropdown-item" href="logout.php">Cerrar Seccion</a></li>
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
                                <a class="nav-link" href="tablaTrabajadores.php">Tabla Trabajadores</a>
                                <a class="nav-link" href="#">Tabla Seminarios</a>
                                <a class="nav-link" href="#">Tabla Clases</a>
                                <a class="nav-link" href="tablaHistoriasClinicas.php">Tabla HistoriasClinicas</a>
                                <a class="nav-link" href="#">Tabla PruebasCovid</a>
                            </nav>
                        </div>


                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>

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
                    <h1 class="mt-4">Tabla Trabajadores</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="principal.php">Home</a></li>
                        <li class="breadcrumb-item active">Tabla-Trabajadores</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Datos de los Trabajadores
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Documento</th>
                                        <th>Nombre</th>
                                        <th>Cargo</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Documento</th>
                                        <th>Nombre</th>
                                        <th>Cargo</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    if (isset($_GET['enviar'])) {
                                        $busqueda = $_GET['busqueda'];

                                        $consulta = $con->query("select * from trabajadores where cc like '%$busqueda%' or nombre like '%$busqueda%' or cargo like '%$busqueda%'");
                                    } else {
                                        $consulta = $query;
                                    }
                                    while ($row = mysqli_fetch_array($consulta)) {
                                    ?>
                                        <tr>
                                            <th><?php echo $row['cc'] ?></th>
                                            <th><?php echo $row['nombre'] ?></th>
                                            <th><?php echo $row['cargo'] ?></th>

                                            <th><a  type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['cc'] ?>" data-bs-whatever="@mdo">Editar</a></th>
                                            
                                            <th><a href='#' onclick="preguntar(<?php echo $row['cc'] ?>)" class="btn btn-danger">Eliminar</a></th>
                                        </tr>

                                        <?php include('modal/modalEditarTrabajador.php');?>

                                    <?php

                                    }
                                    ?>

                                </tbody>

                            </table>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <div class="form-check mb-3"></div>
                                <a  type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Agregar</a>
                                <?php
                                 include ('modal/modalAgregarTrabajador.php');
                                 
                                ?>
                            </div>


                            <script type="text/javascript">
                                function preguntar(id) {
                                    if (confirm('¿esta seguro que desea borrar este registro? se borraran todos los registros asociados')) {
                                        window.location.href = "EliminarTrabajador.php?id=" + id;
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