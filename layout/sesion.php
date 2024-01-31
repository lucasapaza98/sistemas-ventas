<?php
session_start();

if (isset($_SESSION['sesion_email'])) {
  //echo "si existe la sesion: ".$_SESSION['sesion_email'];
  $email_sesion = $_SESSION['sesion_email'];
  $sql = "SELECT us.id_usuarios as id_usuario, 
  us.nombre as nombre,
  us.email as email, 
  rol.rol as rol 
  FROM tb_usuarios as us INNER JOIN
       tb_roles as rol on us.id_rol = rol.id_rol WHERE email = '$email_sesion'";
  $query = $pdo->prepare($sql);
  $query->execute();

  $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

  foreach ($usuarios as $usuario) {
    $nombres_sesion = $usuario['nombre'];
    $rol_sesion = $usuario['rol'];
    
  }
} else {
  echo "No existe la sesion";
  header('Location:' . $URL . '/login');
}