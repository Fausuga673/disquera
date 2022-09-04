<?php include '../data/conexion.php'; ?>
<?php include 'php/añadir.php'; ?>
<?php include 'php/seleccion.php'; ?>
<!-- Modal añadir producto-->
<div class="modal fade" id="modalAñadirProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Añadir Producto</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <form class="w-100" method="post" action="producto-dashboard.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" class="form-control" id="titulo" placeholder="Titulo" name="titulo">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Categoría</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="categoria">
                              <?php foreach ($categorias as $categoria) { ?>
                                <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['categoria']; ?></option>
                              <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="text" class="form-control" id="precio" placeholder="Precio" name="precio">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Imagen</label>
                            <input type="file" class="form-control-file border rounded" id="exampleFormControlFile1" name="imagen">
                        </div>
                        <div class="form-group">
                            <label for="cantidad">Cantidad</label>
                            <input type="text" class="form-control" id="cantidad" placeholder="Cantidad" name="cantidad">
                        </div>
                </div>
            </div>  
      </div>
      <div class="modal-footer d-flex justify-content-around">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalAñadirProducto" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">Cancelar</button>
        <button type="submit" name="btnAñadir" value="btnAñadirProducto" class="btn btn-primary">Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>