<?php
require_once("../../config.php");

$rol = $_POST['rol'];


$sentencia = $pdo->prepare("INSERT INTO tb_roles(rol, fyh_creacion) 
VALUES (:rol,:fyh_creacion)");

$sentencia->bindParam(':rol', $rol);
$sentencia->bindParam(':fyh_creacion', $fechaHora);
if ($sentencia->execute()) {

    session_start();
    $_SESSION["mensaje"] = "El rol se registro correctamente";
    $_SESSION["icono"] = "success";
    header('Location:' . $URL . '/roles/');
} else {
    //echo "Las contraseñas no son iguales";
    session_start();
    $_SESSION["mensaje"] = "error no se pudo registrar.";
    $_SESSION["icono"] = "error";
    header('Location:' . $URL . '/roles/create.php');
}
