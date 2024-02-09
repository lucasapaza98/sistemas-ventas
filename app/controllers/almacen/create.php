<?php
require_once("../../config.php");

$codigo = $_POST['codigo'];
$id_categoria = $_POST['categoria'];
$nombre_producto = $_POST['nombre_producto'];
$id_usuario = $_POST['id_usuario'];
$descripcion_producto = $_POST['descripcion_producto'];
$stock = $_POST['stock'];
$stock_minimo = $_POST['stock_minimo'];
$stock_maximo = $_POST['stock_maximo'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$fecha_ingreso = $_POST['fecha_ingreso'];

$image = $_POST['image'];

$nombreDelArchivo = date("Y-m-d-H-i-s");
$filename = $nombreDelArchivo."__".$_FILES['image']['name'];
$location = "../../../almacen/img_productos/".$filename;  //Ubicacion temporal del archivo

move_uploaded_file($_FILES["image"]["tmp_name"],$location);




$sentencia = $pdo->prepare("INSERT INTO tb_almacen(codigo, nombre_producto, descripcion_producto, stock, stock_minimo, stock_maximo,precio_compra,precio_venta,fecha_ingreso, imagen,id_usuario,id_categoria, fyh_creacion) 
VALUES (:codigo,:nombre_producto,:descripcion_producto,:stock,:stock_minimo,:stock_maximo,:precio_compra,:precio_venta,:fecha_ingreso,:imagen,:id_usuario,:id_categoria,:fyh_creacion)");

$sentencia->bindParam(':codigo', $codigo); 
$sentencia->bindParam(':nombre_producto', $nombre_producto);    
$sentencia->bindParam(':descripcion_producto', $descripcion_producto);    
$sentencia->bindParam(':stock', $stock);    
$sentencia->bindParam(':stock_minimo', $stock_minimo);    
$sentencia->bindParam(':stock_maximo', $stock_maximo);    
$sentencia->bindParam(':precio_compra', $precio_compra);    
$sentencia->bindParam(':precio_venta', $precio_venta);    
$sentencia->bindParam(':fecha_ingreso', $fecha_ingreso);    
$sentencia->bindParam(':imagen', $filename);    
$sentencia->bindParam(':id_usuario', $id_usuario);    
$sentencia->bindParam(':id_categoria', $id_categoria);    
$sentencia->bindParam(':fyh_creacion', $fechaHora);

if ($sentencia->execute()) {

    session_start();
    $_SESSION["mensaje"] = "Se registro el producto correctamente";
    $_SESSION["icono"] = "success";
    header('Location:' . $URL . '/almacen/');
} else {
    //echo "Las contraseñas no son iguales";
    session_start();
    $_SESSION["mensaje"] = "error no se pudo registrar.";
    $_SESSION["icono"] = "error";
    header('Location:' . $URL . '/almacen/create.php');
}


?>