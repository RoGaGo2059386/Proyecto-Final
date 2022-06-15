<?php
require("conexion2.php");
$con = conectar2();
$personal = "SELECT cc from trabajadores EXCEPT Select cc from historia_clinica";
$resultado = mysqli_query($con, $personal);
$sql = "SELECT *  FROM historia_clinica INNER JOIN trabajadores ON historia_clinica.cc=trabajadores.cc";
$query = mysqli_query($con, $sql);
?>


<div class="modal fade" id="ModalEditarMedicamento<?php echo $row['medID']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Medicamento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="ActualizarMedicamento.php" method="POST">

                    <input type="hidden" name="medID" value="<?php echo $row['medID']  ?>">
                    <input type="hidden" name="cc" value="<?php echo $row['cc']  ?>">
                    <textarea name="descripcion" cols="60" rows="5" placeholder="descripcion" width:600px><?php echo $row['descripcion']; ?></textarea>

                    <div class="mt-4 mb-0">
                        <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" value="Actualizar Medicamento"></div>

                    </div>
                    
                </form>

            </div>

        </div>
    </div>
</div>