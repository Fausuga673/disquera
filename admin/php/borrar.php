<?php

if ($_POST) {

    if (isset($_POST['btnBorrar'])) {

        $btn = $_POST['btnBorrar'];
        $ObjConexion = new Conexion();
    
        switch ($btn) {

            case 'btnBorrarCategoria':

                $id = $_POST['id'];
    
                $sql = "DELETE FROM categoria WHERE `categoria`.`id` = ".$id;
                $ObjConexion->ejecutar($sql);
                ?>
                    <script>
                        window.location.href = 'categoria-dashboard.php';
                    </script>
                <?php
                break;

            case 'btnBorrarProducto':

                $id = $_POST['id'];

                $imagen = $ObjConexion->consultar("SELECT imagen FROM `producto` WHERE id=".$id);
                unlink("../img/".$imagen[0]['imagen']);

                $sql = "DELETE FROM producto WHERE `producto`.`id` = ".$id;
                $ObjConexion->ejecutar($sql);
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