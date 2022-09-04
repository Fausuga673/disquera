<?php include 'header-admin.php'; ?>
<?php include 'usuario-editar.php'; ?>
<?php include 'usuario-borrar.php'; ?>
<div class="container-fluid p-5" style="height:100vh">
    <div class="container p-5">

        <table class="table table-striped table-dark" id="table">
            <h2>Usuarios</h2>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Tipo de usuario</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="d-flex justify-content-between flex-direction-culumn">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalEditarUsuario">Editar <i class="fa-regular fa-pen-to-square"></i></button>
                        <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrarUsuario">Borrar <i class="fa-solid fa-trash-can"></i></button>
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