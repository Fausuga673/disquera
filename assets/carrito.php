<?php include 'factura.php'; ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Carrito de compras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="carrito-body">
          
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <div class="card w-75 p-2"><h5 class="mb-0"><strong>Total: </strong>$<span id="total"></span></h5></div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFactura" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">Comprar</button>
      </div>
    </div>
  </div>
</div>
