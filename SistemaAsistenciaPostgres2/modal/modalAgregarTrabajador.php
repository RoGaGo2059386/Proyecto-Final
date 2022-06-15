<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Trabajador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <form action="InsertarTrabajador.php" method="POST">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" name="nombre" type="text" placeholder="Ingrese el nombre completo" />
                                <label for="inputFirstName">Nombre Completo *</label>
                            </div>
                            <br>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="cc" type="number" placeholder="Ingrese la cedula" />
                                <label for="inputFirstName">Cedula *</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="telefono" type="number" placeholder="Ingrese el telefono" />
                                <label for="inputFirstName">telefono *</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" type="text" placeholder="Ingrese el email" />
                                <label for="inputFirstName">email *</label>
                            </div>
                        </div>

                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" name="cargo" type="text" placeholder="Ingrese el cargo" />
                                <label for="inputFirstName">Cargo *</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" value="Agregar Trabajador"></div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>