<?php include 'php/borrar.php'; ?>
<!-- Modal borrar categoría-->
<div class="modal fade" id="modalBorrarCategoria<?php echo $categoria['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
        <div class="modal-body text-center">
                <h3>¿Estás seguro de borrar esta categoría?</h3>
        </div>
        <div class="modal-footer d-flex justify-content-around">
            <form action="categoria-dashboard.php" method="post">
                <input type="text" name="id" value="<?php echo $categoria['id']; ?>">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarCategoria" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">Cancelar</button>
                <button type="submit" name="btnBorrar" value="btnBorrarCategoria" class="btn btn-primary">Aceptar</button>
            </form>
        </div>
        </div>
    </div>
</div>