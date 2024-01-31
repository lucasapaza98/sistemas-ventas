<?php

 $sql_usuarios = "SELECT us.id_usuarios as id_usuario, 
                         us.nombre as nombre,
                         us.email as email, 
                         rol.rol as rol 
                         FROM tb_usuarios as us INNER JOIN
                              tb_roles as rol on us.id_rol = rol.id_rol";
 $query_usuarios = $pdo->prepare($sql_usuarios);
 $query_usuarios->execute();
 $usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);