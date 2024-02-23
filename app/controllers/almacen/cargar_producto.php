<?php

$id_producto_get = $_GET['id'];

 $sql_productos = "SELECT *, cat.nombre_categoria as categoria, us.nombre as nombre_usuario ,us.id_usuarios as id_usuario FROM tb_almacen as a INNER JOIN
                          tb_categorias as cat on a.id_categoria = cat.id_categoria INNER JOIN tb_usuarios as us on us.id_usuarios = a.id_usuario WHERE id_producto = '$id_producto_get'" ;
 $query_productos = $pdo->prepare($sql_productos);
 $query_productos->execute();
 $productos_datos = $query_productos->fetchAll(PDO::FETCH_ASSOC);

 foreach ($productos_datos as $productos_dato) {

    $codigo = $productos_dato['codigo'];
    $nombre_categoria = $productos_dato['nombre_categoria'];
    $nombre_producto = $productos_dato['nombre_producto'];
    $nombre_usuario = $productos_dato['nombre_usuario'];
    $id_usuario = $productos_dato['id_usuario'];
    $descripcion_producto = $productos_dato['descripcion_producto'];
    $stock = $productos_dato['stock'];
    $stock_minimo = $productos_dato['stock_minimo'];
    $stock_maximo = $productos_dato['stock_maximo'];
    $precio_compra = $productos_dato['precio_compra'];
    $precio_venta = $productos_dato['precio_venta'];
    $fecha_ingreso = $productos_dato['fecha_ingreso'];
    $imagen = $productos_dato['imagen'];

}