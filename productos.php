<?php include 'header.php'; ?>
<?php include 'assets/carrito.php'; ?>
<?php include 'data/conexion.php'; ?>
<?php include 'admin/php/seleccion.php'; ?>

    <div class="container-fluid d-flex align-items-center p-5">
        <div class="container p-5">
            <div class="row row-cols-1 row-cols-md-4 g-4">

            <?php foreach ($productos as $producto) { ?>

                <div class="col mb-5">
                    <div class="card h-100 shadow-sm">
                        <div class="img-contenedor">
                        <img src="img/<?php echo $producto['imagen'] ?>" class="card-img-top">
                        </div>
                        <div class="card-body d-flex justify-content-center">
                            <button type="button" onclick="añadirProducto(<?php echo $producto['id'] ?>)" href="productos.php" class="btn btn-outline-danger font-weight-bold">Añadir al carrito<i class="fa-solid fa-cart-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="d-none" id="carta<?php echo $producto['id'] ?>"><?php include 'assets/carta-producto.php'; ?></div>
            <?php } ?>

            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>
<script src="js/carrito.js"></script>