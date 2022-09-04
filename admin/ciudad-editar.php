<!-- Modal editar Producto-->
<div class="modal fade" id="modalEditarCiudad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Editar ciudad</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <form class="w-100">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Editar nombre" name="nombre">
                        </div>
                    </form>
                </div>
            </div>  
      </div>
      <div class="modal-footer d-flex justify-content-around">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalEditarCiudad" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">Cancelar</button>
        <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>