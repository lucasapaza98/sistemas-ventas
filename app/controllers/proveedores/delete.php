<?php
require_once("../../config.php");

$id_proveedor =$_GET['id_proveedor'];




$sentencia = $pdo->prepare("DELETE FROM tb_proveedores WHERE id_proveedor=:id_proveedor");

$sentencia->bindParam(':id_proveedor', $id_proveedor);

if ($sentencia->execute()) {

    session_start();
    //echo "se registro correctamente";
    $_SESSION["mensaje"] = "El elimino al proveedor correctamente";
    $_SESSION["icono"] = "success";
    //header('Location:' . $URL . '/categorias/');
?>
    <script>
        location.href = "<?php echo $URL; ?>/proveedores";
    </script>


<?php
} else {
    //echo "Las contraseñas no son iguales";
    session_start();
    $_SESSION["mensaje"] = "error no se pudo eliminar al proveedor.";
    $_SESSION["icono"] = "error";
    //header('Location:' . $URL . '/categorias/');
?>
    <script>
        location.href = "<?php echo $URL; ?>/proveedores";
    </script>

<?php

}
