<div class="modal fade" id="exampleModal<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Seminario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="ActualizarSeminario.php" method="POST">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" name="nombre" type="text" placeholder="Ingrese el nombre del seminario" value="<?php echo $row['s_nombre'] ?>">
                                <label for="inputFirstName">Nombre del seminario</label>
                            </div>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <strong>Objetivo</strong><br />
                                <textarea name="objetivo" cols="60" rows="4" placeholder="objetivo"><?php echo $row['objetivo']  ?></textarea><br>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                            <strong>Descripcion</strong><br />
                                <textarea name="descripcion" cols="60" rows="4" placeholder="descripcion"><?php echo $row['descripcion']  ?></textarea><br>

                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                            <strong>Poblacion Dirigida</strong><br />
                                <textarea name="poblacion_dirigida" cols="60" rows="4" placeholder="poblacion_dirigida"><?php echo $row['poblacion_dirigida']  ?></textarea><br>

                            </div>
                        </div>
                    </div>


                    <div class="mt-4 mb-0">
                        <input type="hidden" class="form-control mb-3" name="id" value="<?php echo $row['id']  ?>">
                        <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" value="Actualizar"></div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>