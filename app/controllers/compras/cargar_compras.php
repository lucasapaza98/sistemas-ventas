<?php

$id_compra_get = $_GET['id'];

 $sql_compras = "SELECT *,
                 pro.codigo AS codigo, pro.nombre_producto AS nombre_producto , pro.descripcion_producto AS descripcion_producto,
                 pro.stock AS stock, pro.stock_minimo AS stock_minimo, pro.stock_maximo as stock_maximo, pro.precio_compra AS precio_compra_producto, 
                 pro.precio_venta AS precio_venta_producto, pro.fecha_ingreso AS fecha_ingreso, pro.imagen AS imagen,
                 cat.nombre_categoria  AS nombre_categoria,
                 us.nombre AS nombre,
                 prov.nombre_proveedor AS nombre_proveedor, prov.celular AS celular_proveedor, prov.telefono AS telefono_proveedor,
                 prov.empresa AS empresa_proveedor, prov.email AS email_proveedor, prov.direccion AS direccion_proveedor,
                 us.nombre AS nombre_usuario 
                 FROM tb_compras AS co 
                 INNER JOIN tb_almacen AS pro ON co.id_producto = pro.id_producto 
                 INNER JOIN tb_categorias AS cat ON cat.id_categoria = pro.id_categoria
                 INNER JOIN tb_usuarios AS us ON co.id_usuario = us.id_usuarios
                 INNER JOIN tb_proveedores AS prov ON co.id_proveedor = prov.id_proveedor WHERE co.id_compra = $id_compra_get";
 $query_compras = $pdo->prepare($sql_compras);
 $query_compras->execute();
 $compras_datos = $query_compras->fetchAll(PDO::FETCH_ASSOC);
 
 foreach ($compras_datos as $compras_dato) {
    $id_compra = $compras_dato['id_compra'];
    $id_producto_update = $compras_dato['id_producto'];
    $id_proveedor_update = $compras_dato['id_proveedor'];
    
    $nro_compra = $compras_dato['nro_compra'];
    $codigo = $compras_dato['codigo'];
    $nombre_categoria = $compras_dato['nombre_categoria'];
    $nombre_producto2 = $compras_dato['nombre_producto'];
    $nombre_usuario2  = $compras_dato['nombre_usuario'];
    $descripcion_producto2  = $compras_dato['descripcion_producto'];
    $stock2  = $compras_dato['stock'];
    $stock_minimo2  = $compras_dato['stock_minimo'];
    $stock_maximo2  = $compras_dato['stock_maximo'];
    $precio_compra_producto  = $compras_dato['precio_compra_producto'];
    $precio_venta_producto  = $compras_dato['precio_venta_producto'];
    $fecha_ingreso2  = $compras_dato['fecha_ingreso'];
    $imagen  = $compras_dato['imagen'];


    $nombre_proveedor_update  = $compras_dato['nombre_proveedor'];
    $celular_proveedor  = $compras_dato['celular_proveedor'];
    $telefono_proveedor  = $compras_dato['telefono_proveedor'];
    $empresa_proveedor  = $compras_dato['empresa_proveedor'];
    $email_proveedor  = $compras_dato['email_proveedor'];
    $direccion_proveedor  = $compras_dato['direccion_proveedor'];


    $fecha_compra  = $compras_dato['fecha_compra'];
    $comprobante_compra  = $compras_dato['comprobante'];
    $precio_compra22  = $compras_dato['precio_de_la_compra'];
    $cantidad_compra_producto  = $compras_dato['cantidad'];
    
 }