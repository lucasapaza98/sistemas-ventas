<?php
require_once("../../config.php");

$id_producto = $_GET['id_producto'];
$numero_compra = $_GET['numero_compra'];
$fecha_compra2 = $_GET['fecha_compra2'];
$id_proveedor = $_GET['id_proveedor'];
$comprobante_compra = $_GET['comprobante_compra'];
$id_usuario = $_GET['id_usuario'];
$precio_compra2 = $_GET['precio_compra2'];
$cantidad_compra = $_GET['cantidad_compra'];

$stock_total = $_GET['stock_total'];


$pdo->beginTransaction();

$sentencia = $pdo->prepare("INSERT INTO tb_compras(id_producto, nro_compra, fecha_compra, id_proveedor, comprobante, id_usuario ,precio_de_la_compra,cantidad, fyh_creacion) 
VALUES (:id_producto,:nro_compra,:fecha_compra,:id_proveedor,:comprobante,:id_usuario ,:precio_de_la_compra,:cantidad,:fyh_creacion)");

$sentencia->bindParam(':id_producto', $id_producto);
$sentencia->bindParam(':nro_compra', $numero_compra);
$sentencia->bindParam(':fecha_compra', $fecha_compra2);
$sentencia->bindParam(':id_proveedor', $id_proveedor);
$sentencia->bindParam(':comprobante', $comprobante_compra);
$sentencia->bindParam(':id_usuario', $id_usuario);
$sentencia->bindParam(':precio_de_la_compra', $precio_compra2);
$sentencia->bindParam(':cantidad', $cantidad_compra);
$sentencia->bindParam(':fyh_creacion', $fechaHora);

if ($sentencia->execute()) {

    //ACTUALIZANDO EL STOCK DESDE LA COMPRA 

$sentencia = $pdo->prepare("UPDATE tb_almacen SET stock=:stock WHERE id_producto = :id_producto");

$sentencia->bindParam(':stock',$stock_total);
$sentencia->bindParam(':id_producto',$id_producto);
$sentencia->execute();

$pdo->commit();


    session_start();
    //echo "se registro correctamente";
    $_SESSION["mensaje"] = "El registro la compra correctamente";
    $_SESSION["icono"] = "success";
    //header('Location:' . $URL . '/categorias/');
?>
    <script>
        location.href = "<?php echo $URL; ?>/compras";
    </script>


<?php
} else {

    $pdo->rollBack();
    //echo "Las contraseñas no son iguales";
    session_start();
    $_SESSION["mensaje"] = "error no se pudo registrar a la compra.";
    $_SESSION["icono"] = "error";
    //header('Location:' . $URL . '/categorias/');
?>
    <script>
        location.href = "<?php echo $URL; ?>/compras/create.php";
    </script>

<?php

}

