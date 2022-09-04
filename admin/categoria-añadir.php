<?php include '../data/conexion.php'; ?>
<?php include 'php/añadir.php'; ?>
<?php include 'php/seleccion.php'; ?>
<!-- Modal añadir categoria-->
<div class="modal fade" id="modalAñadirCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form method="post" action="categoria-dashboard.php">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Añadir categoria</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card w-100">
              <div class="card-body d-flex justify-content-between">
                  <div class="form-group w-100">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombreCategoria">
                  </div>
              </div>
          </div>  
        </div>
        <div class="modal-footer d-flex justify-content-around">
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalAñadirCategoria" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">Cancelar</button>
          <button type="submit" name="btnAñadir" value="btnAñadirCategoria" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </form>
</div>