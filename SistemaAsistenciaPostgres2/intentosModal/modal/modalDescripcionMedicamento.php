<?php
$id = $row['medID'];
$sql = "SELECT descripcion FROM comorbilidad WHERE cc='$id'";
$result = mysqli_query($con, $sql);
?>


<div class="modal fade" id="ModalDescripcionMedicamento<?php echo $row['medID']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Descripcion Medicamento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<br> DESCRIPCION: " . $row["descripcion"] . "<br>";
                    }
                } else {
                    echo "no hay resultados";
                }
                ?>
                <form>

                    <div class="mb-3">
                        <input type="hidden" name="id" id="idmodal" value="">
                        <textarea readonly name="descripcion" cols="50" rows="10" placeholder="descripcion" width:1000px><?php echo $row['descripcion'] ?></textarea>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>