
<?php
require_once("../../config.php");

$id_producto = $_POST['id_producto'];




$sentencia = $pdo->prepare("DELETE FROM tb_almacen WHERE id_producto=:id_producto");

$sentencia->bindParam(':id_producto', $id_producto);

if($sentencia->execute()){

    session_start();
    $_SESSION["mensaje"] = "El producto se eliminó correctamente";
    $_SESSION["icono"] = "success";
    header('Location:' . $URL . '/almacen/');
}
else{
    session_start();
    $_SESSION["mensaje"] = "Error no se pudo eliminar el registro en la base de datos.";
    $_SESSION["icono"] = "error";
    header('Location: ' . $URL . '/almacen/delete.php?id=' . $id_producto);
}

