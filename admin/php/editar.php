<?php

if ($_POST) {

    if (isset($_POST['btnEditar'])) {

        $btn = $_POST['btnEditar'];
        $ObjConexion = new Conexion();
    
        switch ($btn) {

            case 'btnEditarCategoria':

                $id = $_POST['id'];
                $nombreCategoria = $_POST['categoria'];

                $sql = "UPDATE `categoria` SET `categoria` = '$nombreCategoria' WHERE `categoria`.`id` = ".$id;
                $ObjConexion->ejecutar($sql);
                
                ?>
                    <script>
                        window.location.href = 'categoria-dashboard.php';
                    </script>
                <?php
                break;

            case 'btnEditarProducto':

                $id = $_POST['id'];
                $titulo = $_POST['titulo'];
                $categoria = $_POST['categoria'];
                $precio = $_POST['precio'];

                $imagen = $_FILES['imagen']['name'];

                $sql = "UPDATE `producto` SET `titulo` = '$titulo', `idCategoria` = '$categoria', `precio` = '$precio' WHERE `producto`.`id` = $id";
                
                $ObjConexion->ejecutar($sql);
                
                if ($imagen != "") {

                    $imagen_del = $ObjConexion->consultar("SELECT imagen FROM `producto` WHERE id=".$id);
                    unlink("../img/".$imagen_del[0]['imagen']);

                    $imagen_up = $_FILES['imagen']['tmp_name'];
                    move_uploaded_file($imagen_up, "../img/".$imagen);


                    $sql = "UPDATE `producto` SET `imagen` = '$imagen' WHERE `producto`.`id` = $id";
                    $ObjConexion->ejecutar($sql);

                }
                
                ?>
                    <script>
                        window.location.href = 'producto-dashboard.php';
                    </script>
                <?php
                break;
            
        }

    }

}

?>