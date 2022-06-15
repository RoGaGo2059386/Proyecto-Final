<?php
$seminario = "SELECT id, nombre from seminario ";
$resultado = pg_query($con, $seminario);
?>

<div class="modal fade" id="ModalEditarClase<?php echo $row['id_clase'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Clase</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                ?>
                <form action="ActualizarClase.php" method="POST">
                    


                    <input type="hidden" class="form-control mb-3" name="id_clase" value="<?php echo $row['id_clase']  ?>">

                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['c_nombre']  ?>">
                    <select name="seminario">
                        <option>---seminario---</option>
                        <?php while ($row1 = pg_fetch_array($resultado)) :; ?>
                            <option <?php if ($row['seminario'] == $row1[0]) echo 'selected'; ?> value="<?php echo $row1[0]; ?>"> <?php echo $row1[0]; ?>---<?php echo $row1[1]; ?></option>
                        <?php endwhile; ?>
                    </select>

                    <div class="mt-4 mb-0">
                        <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" value="Actualizar Clase"></div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>