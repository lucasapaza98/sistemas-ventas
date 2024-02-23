<?php

 $sql_productos = "SELECT *, cat.nombre_categoria as categoria,us.nombre as nombre_usuario FROM tb_almacen as a INNER JOIN
                          tb_categorias as cat on a.id_categoria = cat.id_categoria INNER JOIN tb_usuarios as us on us.id_usuarios = a.id_usuario";
 $query_productos = $pdo->prepare($sql_productos);
 $query_productos->execute();
 $productos_datos = $query_productos->fetchAll(PDO::FETCH_ASSOC);