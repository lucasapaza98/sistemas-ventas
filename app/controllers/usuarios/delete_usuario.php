
<?php
require_once("../../config.php");

$id_usuarios = $_POST['id_usuarios'];




$sentencia = $pdo->prepare("DELETE FROM tb_usuarios WHERE id_usuarios = :id_usuarios");

$sentencia->bindParam(':id_usuarios', $id_usuarios);
$sentencia->execute();

session_start();
$_SESSION["mensaje"] = "El usuario se eliminó correctamente";
$_SESSION["icono"] = "success";
header('Location:' . $URL . '/usuarios/');
