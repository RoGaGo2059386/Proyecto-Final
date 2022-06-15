<div class="modal fade" id="ModalEditarHistoria<?php echo $row['cc'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Historia Clinica</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="actualizarHistoriaClinica.php" method="POST">
                    <label>Ingrese porfavor la descripcion:</label><br><br>
                    <textarea name="descripcion" cols="60" rows="10" placeholder="descripcion" width:600px><?php echo $row['descripcion']; ?></textarea><br><br>
                    <label>Ingrese porfavor el grupo sanguineo y el factor RH:</label><br><br>
                    <input type="hidden" class="form-control mb-3" name="cc" value="<?php echo $row['cc']  ?>">
                    <select name="grupo_sanguineo">
                        <option>---grupo sanguineo---</option>
                        <option <?php if ($row['grupo_sanguineo'] == "A") echo 'selected'; ?>>A</option>
                        <option <?php if ($row['grupo_sanguineo'] == "B") echo 'selected'; ?>>B</option>
                        <option <?php if ($row['grupo_sanguineo'] == "AB") echo 'selected'; ?>>AB</option>
                        <option <?php if ($row['grupo_sanguineo'] == "O") echo 'selected'; ?>>O</option>
                    </select>
                    <select name="rh">
                        <option>---factor RH---</option>
                        <option <?php if ($row['rh'] == "+") echo 'selected'; ?>>+</option>
                        <option <?php if ($row['rh'] == "-") echo 'selected'; ?>>-</option>
                    </select>
                    <div class="mt-4 mb-0">
                        <input type="hidden" class="form-control mb-3" name="cc" value="<?php echo $row['cc']  ?>">
                        <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" value="Actualizar Historia"></div>
                    </div>
                    
                </form>

            </div>

        </div>
    </div>
</div>