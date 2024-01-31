<?php
require_once("../../config.php");

$nombres = $_POST['nombre'];
$email = $_POST['email'];
$rol  = $_POST['rol'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];

if ($password_repeat == $password_user) {
    $password_user = password_hash($password_user, PASSWORD_DEFAULT);

    $sentencia = $pdo->prepare("INSERT INTO tb_usuarios( nombre, email, id_rol, password_user, fyh_creacion) 
VALUES (:nombre,:email,:id_rol,:password_user,:fyh_creacion)");

    $sentencia->bindParam(':nombre', $nombres);
    $sentencia->bindParam(':email', $email);
    $sentencia->bindParam(':id_rol', $rol);
    $sentencia->bindParam(':password_user', $password_user);
    $sentencia->bindParam(':fyh_creacion', $fechaHora);
    $sentencia->execute();

    session_start();
    $_SESSION["mensaje"] = "El usuario se registro correctamente";
    $_SESSION["icono"] = "success";
    header('Location:' . $URL . '/usuarios/');
} else {
    //echo "Las contraseñas no son iguales";
    session_start();
    $_SESSION["mensaje"] = "Las contraseñas no coinciden.";
    $_SESSION["icono"] = "error";
    header('Location:' . $URL . '/usuarios/create.php');
}
