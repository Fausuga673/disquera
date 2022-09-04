<?php include 'php/editar.php'; ?>
<?php include 'php/seleccion.php'; ?>
<!-- Modal editar Producto-->
<div class="modal fade" id="modalEditarProducto<?php echo $producto['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Editar producto</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="card">
                <div class="card-body">
                    <form action="producto-dashboard.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" class="form-control" id="titulo" placeholder="Editar titulo" name="titulo" value="<?php echo $producto['titulo']; ?>">
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
                            <label for="precio">Editar precio</label>
                            <input type="text" class="form-control" id="precio" placeholder="Editar precio" name="precio" value="<?php echo $producto['precio']; ?>">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlFile1">Imagen</label>
                          <input type="file" class="form-control-file border rounded" id="exampleFormControlFile1" name="imagen">
                        </div>
                </div>
            </div>  
      </div>
      <div class="modal-footer d-flex justify-content-around">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalEditarProducto<?php echo $producto['id']; ?>" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">Cancelar</button>
        <button type="submit" name="btnEditar" value="btnEditarProducto" class="btn btn-primary">Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>