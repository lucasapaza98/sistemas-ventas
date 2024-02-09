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

$id_producto = $_POST['id_producto'];
$image_text = $_POST['image_text'];

if ($_FILES['image']['name'] != null) {

    //echo "hay imagen";
    $nombreDelArchivo = date("Y-m-d-H-i-s");
    $image_text = $nombreDelArchivo . "__" . $_FILES['image']['name'];
    $location = "../../../almacen/img_productos/".$image_text;  //Ubicacion temporal del archivo

    move_uploaded_file($_FILES["image"]["tmp_name"], $location);
} else {
  //   echo "NO hay imagen";
}



$sentencia = $pdo->prepare("UPDATE tb_almacen SET nombre_producto=:nombre_producto,
                                                  descripcion_producto=:descripcion_producto,
                                                  stock=:stock,
                                                  stock_minimo=:stock_minimo,
                                                  stock_maximo=:stock_maximo,
                                                  precio_compra=:precio_compra,
                                                  precio_venta=:precio_venta,
                                                  fecha_ingreso=:fecha_ingreso,
                                                  imagen=:imagen,
                                                  id_usuario=:id_usuario,
                                                  id_categoria=:id_categoria,
                                                  fyh_actualizacion=:fyh_actualizacion WHERE id_producto = :id_producto");

$sentencia->bindParam(':nombre_producto',$nombre_producto);
$sentencia->bindParam(':descripcion_producto',$descripcion_producto);
$sentencia->bindParam(':stock',$stock);
$sentencia->bindParam(':stock_minimo',$stock_minimo);
$sentencia->bindParam(':stock_maximo',$stock_maximo);
$sentencia->bindParam(':precio_compra',$precio_compra);
$sentencia->bindParam(':precio_venta',$precio_venta);
$sentencia->bindParam(':imagen',$image_text);
$sentencia->bindParam(':id_usuario',$id_usuario);
$sentencia->bindParam(':id_categoria',$id_categoria);
$sentencia->bindParam(':fyh_actualizacion',$fechaHora);
$sentencia->bindParam(':id_producto',$id_producto);




    if($sentencia->execute()) {

    session_start();
    $_SESSION["mensaje"] = "El producto se actualizo correctamente";
    $_SESSION["icono"] = "success";
    header('Location:' . $URL . '/almacen/');
} else {
    session_start();
    $_SESSION["mensaje"] = "Error al actualizar en la base de datos.";
    $_SESSION["icono"] = "error";
    header('Location: ' . $URL . '/almacen/update.php?id=' . $id_producto);
}

?>