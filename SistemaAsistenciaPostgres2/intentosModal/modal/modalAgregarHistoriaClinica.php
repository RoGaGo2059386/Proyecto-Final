<?php
require("conexion2.php");
$con = conectar2();
$personal = "SELECT cc from trabajadores EXCEPT Select cc from historia_clinica";
$resultado = mysqli_query($con, $personal);
$sql = "SELECT *  FROM historia_clinica INNER JOIN trabajadores ON historia_clinica.cc=trabajadores.cc";
$query = mysqli_query($con, $sql);
?>


<div class="modal fade" id="ModalHistoriaClinica" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar HistoriaClinica</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="InsertarHistoriaClinica.php" method="POST">

                    <label>Seleccione porfavor la Cedula de la persona:</label><br><br>
                    
                    <select name="cc" >
                        <option> &nbsp;&nbsp; Cedula Ciudadania &nbsp;&nbsp;</option>
                        <?php while ($row1 = mysqli_fetch_array($resultado)) :; ?>
                            <option><?php echo $row1[0]; ?></option>
                        <?php endwhile; ?>
                    </select><br><br>
                    <label>Ingrese porfavor la descripcion de la historia:</label><br><br>
                    <textarea name="descripcion" cols="60" rows="8" placeholder="descripcion"></textarea><br><br>
                
                    <select name="grupo_sanguineo">
                        <option>&nbsp;&nbsp;&nbsp;Grupo Sanguineo&nbsp;&nbsp;&nbsp;</option>
                        <option>A</option>
                        <option>B</option>
                        <option>AB</option>
                        <option>O</option>
                    </select>
                    <select name="RH">
                        <option>&nbsp;&nbsp;&nbsp;Factor RH&nbsp;&nbsp;&nbsp;</option>
                        <option>+</option>
                        <option>-</option>
                    </select>

                    <div class="mt-4 mb-0">
                        <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" value="Agregar Historia Clinica"></div>
                    </div>
                    

                </form>

            </div>

        </div>
    </div>
</div>