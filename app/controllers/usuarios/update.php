<?php
require_once("../../config.php");

$nombres = $_POST['nombre'];
$email = $_POST['email'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];
$id_usuarios = $_POST['id_usuarios'];
$rol = $_POST['rol'];

if($password_user == ""){
    if ($password_repeat == $password_user) {
        $password_user = password_hash($password_user, PASSWORD_DEFAULT);
    
        $sentencia = $pdo->prepare("UPDATE tb_usuarios SET nombre=:nombre,
                                                            email=:email,
                                                            id_rol=:id_rol,
                                                            fyh_actualizacion=:fyh_actualizacion
                                                             WHERE id_usuarios = :id_usuarios");
    
        $sentencia->bindParam(':nombre', $nombres);
        $sentencia->bindParam(':email', $email);
        $sentencia->bindParam(':id_rol', $rol);
        $sentencia->bindParam(':fyh_actualizacion', $fechaHora);
        $sentencia->bindParam(':id_usuarios', $id_usuarios);
        $sentencia->execute();
    
        session_start();
        $_SESSION["mensaje"] = "El usuario se actualizo correctamente";
        $_SESSION["icono"] = "success";
        header('Location:' . $URL . '/usuarios/');
    } else {
        //echo "Las contraseñas no son iguales";
        session_start();
        $_SESSION["mensaje"] = "Las contraseñas no coinciden.";
        $_SESSION["icono"] = "error";
        header('Location:' . $URL . '/usuarios/update.php?id='.$id_usuarios);
    }
    

}else{
    if ($password_repeat == $password_user) {
        $password_user = password_hash($password_user, PASSWORD_DEFAULT);
    
        $sentencia = $pdo->prepare("UPDATE tb_usuarios SET nombre=:nombre,
                                                            email=:email,
                                                            id_rol=:id_rol,
                                                            password_user=:password_user,
                                                            fyh_actualizacion=:fyh_actualizacion
                                                             WHERE id_usuarios = :id_usuarios");
    
        $sentencia->bindParam(':nombre', $nombres);
        $sentencia->bindParam(':email', $email);
        $sentencia->bindParam(':id_rol', $rol);
        $sentencia->bindParam(':password_user', $password_user);
        $sentencia->bindParam(':fyh_actualizacion', $fechaHora);
        $sentencia->bindParam(':id_usuarios', $id_usuarios);
        $sentencia->execute();
    
        session_start();
        $_SESSION["mensaje"] = "El usuario se actualizo correctamente";
        $_SESSION["icono"] = "success";
        header('Location:' . $URL . '/usuarios/');
    } else {
        //echo "Las contraseñas no son iguales";
        session_start();
        $_SESSION["mensaje"] = "Las contraseñas no coinciden.";
        $_SESSION["icono"] = "error";
        header('Location:' . $URL . '/usuarios/update.php?id='.$id_usuarios);
    }
    

}


