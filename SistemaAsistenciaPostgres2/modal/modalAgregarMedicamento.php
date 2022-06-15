<?php
$busqueda = $sql = "SELECT cc  FROM historia_clinica";
$resultado = $query = mysqli_query($con, $busqueda);
$sql = "SELECT *  FROM medicamentos ";
$query = mysqli_query($con, $sql);

?>


<div class="modal fade" id="ModalAgregarMedicamento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Medicamento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="InsertarMedicamento.php" method="POST">

                    <select name="cc">
                        <option>
                            <p> Cedula Asociada </p>
                        </option>
                        <?php while ($row1 = mysqli_fetch_array($resultado)) :; ?>
                            <option><?php echo $row1[0]; ?></option>
                        <?php endwhile; ?>
                    </select><br><br>
                    <textarea name="descripcion" cols="60" rows="5" placeholder="descripcion"></textarea>

                    <div class="mt-4 mb-0">
                        <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" value="Agregar Medicamento"></div>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>