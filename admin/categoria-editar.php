<?php include 'php/editar.php'; ?>
<!-- Modal editar Producto-->
<div class="modal fade" id="modalEditarCategoria<?php echo $categoria['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Editar categoría</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="categoria-dashboard.php" method="post">
        <div class="modal-body">
          <div class="card">
              <div class="card-body d-flex justify-content-between">
                <input type="hidden" name="id" value="<?php echo $categoria['id']; ?>">
                <div class="form-group w-100">
                  <label for="categoria">Editar categoria</label>
                  <input type="text" class="form-control" id="categoria" placeholder="Editar categoria" name="categoria" value="<?php echo $categoria['categoria']; ?>">
                </div>
              </div>
          </div>  
        </div>
        <div class="modal-footer d-flex justify-content-around">
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalEditarCategoria" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">Cancelar</button>
          <button type="submit" name="btnEditar" value="btnEditarCategoria" class="btn btn-primary">Aceptar</button>
        </div>
      </form>
    </div>
  </div>
</div>