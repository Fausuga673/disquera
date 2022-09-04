<?php

if ($_POST) {

    if (isset($_POST['btnAñadir'])) {

        $btn=$_POST['btnAñadir'];
        $ObjConexion = new Conexion();

        switch ($btn) {

            case 'btnAñadirCategoria':

                $nombreCategoria = $_POST['nombreCategoria'];

                $sql = "INSERT INTO `categoria` (`id`,`categoria`) VALUES (NULL, '$nombreCategoria')";
                $ObjConexion->ejecutar($sql);
                
                ?>
                    <script>
                    window.location.href = 'categoria-dashboard.php';
                    </script>
                <?php
                break;

            case 'btnAñadirProducto':

                $codigo = rand();
                $titulo = $_POST['titulo'];
                $nombreCategoria = $_POST['categoria'];
                $precio = $_POST['precio'];

                $imagen = $_FILES['imagen']['name'];
                $imagen_up = $_FILES['imagen']['tmp_name'];
                move_uploaded_file($imagen_up, "../img/".$imagen);

                date_default_timezone_set('America/Bogota');
                $fecha = date('Y/m/d');

                $cantidad = $_POST['cantidad'];

                $sql = "INSERT INTO `producto` (`id`, `codigo`, `titulo`, `idCategoria`, `precio`, `imagen`, `fecha`, `cantidad`) VALUES (NULL, '$codigo', '$titulo', '$nombreCategoria', '$precio', '$imagen', '$fecha', '$cantidad')";
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