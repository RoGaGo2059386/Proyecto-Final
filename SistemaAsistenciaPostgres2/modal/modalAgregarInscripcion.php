<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Trabajador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="InsertarInscripcion.php" method="POST">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <select name="trabajador_id">
                                    <option>---cedula asociada---</option>
                                    <?php while ($row1 = pg_fetch_array($resultado)) :; ?>

                                        <option value =  "<?php echo $row1[0]; ?>" ><?php echo $row1[0]; ?>-<?php echo $row1[1]; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <br>
                            <div class="form-floating mb-3">
                                <select name="seminario_id">
                                    <option>---seminario---</option>
                                    <?php while ($row1 = pg_fetch_array($resultado2)) :; ?>
                                        <option value="<?php echo $row1[0]; ?>" ><?php echo $row1[0]; ?>-<?php echo $row1[1]; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            
                        </div>

                    </div>                   
                    <div class="mt-4 mb-0">
                        <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" value="Agregar Inscripcion"></div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>