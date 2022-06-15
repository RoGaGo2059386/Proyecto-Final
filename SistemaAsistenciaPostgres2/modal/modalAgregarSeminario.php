<div class="modal fade" id="modalSeminario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Seminarior</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="InsertarSeminario.php" method="POST">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre del seminario">
                                <label for="inputFirstName">Nombre del seminario *</label>
                                <textarea name="objetivo" cols="50" rows="4" placeholder="Objetivo "></textarea>
                                <textarea name="descripcion" cols="50" rows="4" placeholder="Descripcion "></textarea>
                                <textarea name="poblacion_dirigida" cols="50" rows="4" placeholder="Poblacion Dirigida"></textarea>
                            </div>     
                        </div>

                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" value="Agregar Seminario"></div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>