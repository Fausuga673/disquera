<?php include 'header-admin.php'; ?>
<?php include 'ciudad-añadir.php'; ?>
<?php include 'ciudad-editar.php'; ?>
<?php include 'ciudad-borrar.php'; ?>

<div class="container-fluid p-5" style="height:100vh">
    <div class="container p-5">

        <table class="table table-sm table-striped table-dark" id="table">
            <h2>Ciudad</h2>
            <div class="pb-3">
                <button class="btn btn-success" data-toggle="modal" data-target="#modalAñadirCiudad">Agregar ciudad <i class="fa-solid fa-plus"></i></button>
            </div>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col" class="w-25">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td></td>
                    <td class="d-flex justify-content-around">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalEditarCiudad">Editar <i class="fa-regular fa-pen-to-square"></i></button>
                        <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarCiudad">Borrar <i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
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