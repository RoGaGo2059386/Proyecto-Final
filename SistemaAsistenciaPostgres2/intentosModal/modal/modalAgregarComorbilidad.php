


<div class="modal fade" id="ModalAgregarComorbilidad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Comorbilidad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="insertarComorbilidad.php" method="POST">

                    <select name="cc">
                        <option>&nbsp;&nbsp;Cedulas Historias&nbsp;&nbsp;</option>
                        <?php while ($row1 = mysqli_fetch_array($resultado)) :; ?>
                            <option><?php echo $row1[0]; ?></option>
                        <?php endwhile; ?>
                    </select><br><br>
                    <textarea type="text" class="form-control mb-3" name="descripcion" cols="60" rows="8" placeholder="descripcion"></textarea>
                    
                    <div class="mt-4 mb-0">
                        <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" value="Agregar Comorbilidad"></div>
                    </div>
                    

                </form>
            </div>

        </div>
    </div>
</div>