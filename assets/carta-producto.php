<div class="card shadow mb-2" id="productCard<?php echo $producto['id'] ?>">
    <div class="card-body d-flex justify-content-between info-mis-compras">
        <div class="d-flex img-titulo-precio">
            <img class="rounded shadow" src="img/<?php echo $producto['imagen'] ?>" style="min-width: 60px; max-width: 5vw; min-height: 60px; max-height: 5vw;">
            <div class="ml-2">
                <h5><?php echo $producto['titulo'] ?></h5>
                <h6><span id="precio<?php echo $producto['id'] ?>"><?php echo $producto['precio'] ?></span>$</h6>
            </div>
        </div>
        <div class="btn-quitar d-flex align-items-center">
            <button type="button" onclick="quitarProducto(<?php echo $producto['id'] ?>)" class="btn btn-danger btn-sm font-weight-bold">Quitar <i class="fa-solid fa-trash"></i></button>
        </div>
    </div>
    <div class="card-footer d-flex justify-content-between botones-unidades">
        <div>
            <button value="<?php echo $producto['precio'] ?>" class="btn btn-sm btn-dark" id="restar<?php echo $producto['id'] ?>" onclick="restar(<?php echo $producto['id'] ?>)">-</button>
            <div class="btn btn-primary" id="cantidad<?php echo $producto['id'] ?>">1</div>
            <button value="<?php echo $producto['precio'] ?>" class="btn btn-sm btn-dark" id="sumar<?php echo $producto['id'] ?>"  onclick="sumar(<?php echo $producto['id'] ?>)">+</button>
        </div>
        <div class="d-flex align-items-center">
            <p class="mb-0"><?php echo $producto['cantidad'] ?> unidades disponibles</p>
        </div>
    </div>
</div>  