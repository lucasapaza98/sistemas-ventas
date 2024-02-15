<?php

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
                 INNER JOIN tb_proveedores AS prov ON co.id_proveedor = prov.id_proveedor";
 $query_compras = $pdo->prepare($sql_compras);
 $query_compras->execute();
 $compras_datos = $query_compras->fetchAll(PDO::FETCH_ASSOC);