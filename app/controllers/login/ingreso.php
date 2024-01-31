<?php

require_once ("../../config.php");

$email = $_POST['email'];
$password_user = $_POST['password_user'];

/*echo $email
. "<br>"
. $password_user;*/
$contador = 0;   
$sql = "SELECT * FROM tb_usuarios WHERE email = '$email'";

$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($usuarios as $usuario){

    $contador++;
    $email_tabla = $usuario['email'];
    $nombre_tabla = $usuario['nombre'];
    $password_user_tabla = $usuario['password_user'];

}


if(($contador > 0 )&& (password_verify($password_user,$password_user_tabla))){
    
    echo "Datos correctos";
    session_start();
    $_SESSION['sesion_email'] = $email;
    header('Location:'.$URL.'/index.php');
}
else{
    echo "No se encontraron coincidencias con los datos ingresados.<br>";

    session_start();
    $_SESSION['mensaje'] = "Error datos incorrectos, vuelve a intentarlo";
    header('Location:'.$URL.'/login');

}