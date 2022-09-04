<?php include 'header-admin.php'; ?>
<?php include 'producto-añadir.php'; ?>

<div class="container-fluid p-5" style="height:100vh">
    <div class="container p-5">

        <table class="table table-striped table-dark" id="table">
            <h2>Productos</h2>
            <div class="pb-3">
                <button class="btn btn-success" data-toggle="modal" data-target="#modalAñadirProducto">Agregar producto <i class="fa-solid fa-plus"></i></button>
            </div>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Código</th>
                    <th scope="col">Título</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($productos as $producto) { ?>
                <tr>
                    <th scope="row"><?php echo $producto['id']; ?></th>
                    <td><?php echo $producto['codigo']; ?></td>
                    <td><?php echo $producto['titulo']; ?></td>
                    <td><?php echo $producto['categoria']; ?></td>
                    <td><?php echo $producto['precio']; ?></td>
                    <td><img class="img-fluid rounded" src="../img/<?php echo $producto['imagen']; ?>"    ></td>
                    <td><?php echo $producto['fecha']; ?></td>
                    <td><?php echo $producto['cantidad']; ?></td>
                    <td class="d-flex justify-content-between flex-direction-column">
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEditarProducto<?php echo $producto['id']; ?>">Editar <i class="fa-regular fa-pen-to-square"></i></button>
                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalBorrarProducto<?php echo $producto['id']; ?>">Borrar <i class="fa-solid fa-trash-can"></i></button>
                        <button class="btn btn-warning btn-sm">Oferta <i class="fa-solid fa-dollar-sign"></i></button>
                    </td>
                    <?php include 'producto-editar.php'; ?>
                    <?php include 'producto-borrar.php'; ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>

<script>
    $(document).ready( function () {
        $('#table').DataTable();
    } );
</script>

<?php include 'footer-admin.php'; ?>