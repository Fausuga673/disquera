<?php include 'header-admin.php'; ?>
<?php include 'categoria-añadir.php'; ?>
<?php include 'php/seleccion.php'; ?>

<div class="container-fluid p-5" style="height:100vh">
    <div class="container p-5">
        
        <table class="table table-sm table-striped table-dark" id="table">
            <h2>Categoría</h2>
            <div class="pb-3">
                <button class="btn btn-success" data-toggle="modal" data-target="#modalAñadirCategoria">Agregar categoría <i class="fa-solid fa-plus"></i></button>
            </div>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col" class="w-25">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($categorias as $categoria) { ?>
                    <tr>
                        <td><?php echo $categoria['id']; ?></td>
                        <td><?php echo $categoria['categoria']; ?></td>
                        <td class="d-flex justify-content-around">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalEditarCategoria<?php echo $categoria['id']; ?>">Editar <i class="fa-regular fa-pen-to-square"></i></button>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarCategoria<?php echo $categoria['id']; ?>">Borrar <i class="fa-solid fa-trash-can"></i></button>
                        </td>
                        <?php include 'categoria-borrar.php'; ?>
                        <?php include 'categoria-editar.php'; ?>
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