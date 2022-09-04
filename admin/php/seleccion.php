<?php

$ObjConexion = new Conexion();
$categorias = $ObjConexion->consultar("SELECT * FROM `categoria`");
$productos = $ObjConexion->consultar("SELECT * FROM categoria INNER JOIN producto ON categoria.id = producto.idCategoria;");

?>