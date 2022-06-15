<div class="modal fade" id="exampleModal<?php echo $row['cc'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Trabajador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="ActualizarTrabajador.php" method="POST">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" name="nombre" type="text" placeholder="Ingrese el nombre completo" value="<?php echo $row['nombre'] ?>">
                                <label for="inputFirstName">Nombre Completo</label>
                            </div>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" name="telefono" type="number" placeholder="Ingrese el cargo" value="<?php echo $row['telefono']  ?>">
                                <label for="inputFirstName">telefono</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" name="email" type="text" placeholder="Ingrese el cargo" value="<?php echo $row['email']  ?>">
                                <label for="inputFirstName">email</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" name="cargo" type="text" placeholder="Ingrese el cargo" value="<?php echo $row['cargo']  ?>">
                                <label for="inputFirstName">Cargo</label>
                            </div>
                        </div>
                    </div>
                    

                    <div class="mt-4 mb-0">
                        <input type="hidden" class="form-control mb-3" name="cc" value="<?php echo $row['cc']  ?>">
                        <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" value="Actualizar"></div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>