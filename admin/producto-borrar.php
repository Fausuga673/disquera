<?php include 'php/borrar.php'; ?>
<!-- Modal borrar producto-->
<div class="modal fade" id="modalBorrarProducto<?php echo $producto['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
            <h3>¿Estás seguro de borrar este producto?</h3>
      </div>
      <div class="modal-footer d-flex justify-content-around">
        <form action="producto-dashboard.php" method="post">
          <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarProducto<?php echo $producto['id']; ?>" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">Cancelar</button>
          <button type="submit" name="btnBorrar" value="btnBorrarProducto" class="btn btn-primary">Aceptar</button>
        </form>
      </div>
    </div>
  </div>
</div>