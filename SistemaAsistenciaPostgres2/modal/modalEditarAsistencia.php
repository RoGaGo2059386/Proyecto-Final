
<div class="modal fade" id="ModalEditarAsistencia<?php echo $row['fecha_clase'] ?><?php echo $row['cc_trabajador']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Asistencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="ActualizaAsistencia.php" method="POST">
                    <strong>¿Estuvo presente?</strong><br />
                    <br>
                    <input type="radio" name="estado" value="1" <?php echo ($row['estado'] == '1') ? 'checked' : '' ?>>Si<br /><br>
                    <input type="radio" name="estado" value="0" <?php echo ($row['estado'] == '0') ? 'checked' : '' ?>>No<br />
                    <input type="hidden" class="form-control mb-3" name="fecha" value="<?php echo $row['fecha_clase']  ?>">
                    <input type="hidden" class="form-control mb-3" name="trabajador" value="<?php echo $row['cc_trabajador']  ?>">
                    <div class="mt-4 mb-0">
                        <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" value="Actualizar"></div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>