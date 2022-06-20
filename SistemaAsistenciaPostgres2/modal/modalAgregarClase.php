<?php
$seminario = "SELECT id, nombre from seminario ";
$resultado = pg_query($con, $seminario);
?>

<div class="modal fade" id="ModalAgregarClase" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Clase</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="InsertarClase.php" method="POST">
                    <strong>*</strong>
                    <input type="date" class="form-control mb-3" name="fecha" placeholder="fecha " value="<?php echo (new DateTime())->format('Y-m-d'); ?>">
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                    <strong>*</strong>
                    <select name="seminario">
                        <option>---seminario ---</option>
                        <?php while ($row1 = pg_fetch_array($resultado)) :; ?>
                            <option value="<?php echo $row1[0] ?>"><?php echo $row1[0] ?>---<?php echo $row1[1] ?></option>
                        <?php endwhile; ?>
                    </select>
                    <div class="mt-4 mb-0">
                        <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" value="Agregar Clase"></div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>