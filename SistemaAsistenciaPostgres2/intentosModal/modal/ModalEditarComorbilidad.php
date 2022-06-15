<div class="modal fade" id="ModalEditarComorbilidad<?php echo $row['comID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Comorbilidad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="ActualizarComorbilidad.php" method="POST">

                    <input type="hidden" name="comID" value="<?php echo $row['comID']  ?>">
                    <input type="hidden" name="cc" value="<?php echo $row['cc']  ?>">
                    <textarea name="descripcion" cols="60" rows="8" placeholder="descripcion"><?php echo $row['descripcion']  ?></textarea><br><br>
                    <div class="mt-4 mb-0">
                        <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" value="Actualizar Comorbilidad"></div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>