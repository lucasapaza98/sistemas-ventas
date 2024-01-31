<?php

$id_usuario_get = $_GET['id'];

$sql_usuarios = "SELECT us.id_usuarios as id_usuarios, us.nombre as nombre,us.email as email, rol.rol as rol FROM tb_usuarios as us INNER JOIN tb_roles as rol on us.id_rol = rol.id_rol WHERE id_usuarios = '$id_usuario_get';";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios_datos as $usuarios_dato) {
    $nombres = $usuarios_dato['nombre'];
    $email = $usuarios_dato['email'];
    $rol = $usuarios_dato['rol'];
}
