<div class="modal fade" id="ModalDescripcionMedHistoria<?php echo $row['cc'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Descripcion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <form>
                    <div class="mb-3">
                        <input type="hidden" name="id" id="idmodal" value="">
                        <!--<textarea readonly name="descripcion" cols="50" rows="10" placeholder="descripcion" width:1000px><?php echo $row['descripcion'] ?></textarea>-->
                    </div>
                </form>
            </div>

        </div>
    </div>