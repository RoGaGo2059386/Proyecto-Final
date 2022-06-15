<?php
    require "conexion.php";

    session_start();

    if($_POST){
        $usuario=$_POST['usuario'];
        $contraseña=$_POST['contraseña'];


        $sql= "SELECT id,contraseña,nombre FROM administradores WHERE usuario='$usuario'"; 

        $resultado=$mysqli->query($sql);
        $num=$resultado->num_rows;

        if($num>0){
            $row= $resultado->fetch_assoc();

            $password_bd=$row['contraseña'];

            $pass_c= sha1($contraseña);

            if($password_bd == $pass_c){

                $_SESSION['id']=$row['id'];
                $_SESSION['nombre']=$row['nombre'];

                header("Location: principal.php");

            }else{
                echo "la consetraseña no coincide";
            }

        } else{
            echo "NO existe el usuario";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="usuario" type="text" placeholder="name@example.com" />
                                                <label for="inputEmail">Usuario</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="contraseña" type="password" placeholder="Password" />
                                                <label for="inputPassword">Contraseña</label>
                                            </div>
                                           
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <button type="submit" class="btn btn-primary" >Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Tec Sistemas Univalle 2022</div>
                            <div>
                                
                              
                                
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
