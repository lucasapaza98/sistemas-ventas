<?php

require_once("../../config.php");

$nombre_proveedor = $_GET['nombre_proveedor'];
$celular = $_GET['celular'];
$telefono = $_GET['telefono'];
$empresa = $_GET['empresa'];
$email = $_GET['email'];
$direccion = $_GET['direccion'];

$sentencia = $pdo->prepare("INSERT INTO tb_proveedores
                        (nombre_proveedor,celular,telefono,empresa,email,direccion,fyh_creacion) 
                 VALUES (:nombre_proveedor,:celular,:telefono,:empresa,:email,:direccion,:fyh_creacion)");

$sentencia->bindParam(':nombre_proveedor', $nombre_proveedor);
$sentencia->bindParam(':celular', $celular);
$sentencia->bindParam(':telefono', $telefono);
$sentencia->bindParam(':empresa', $empresa);
$sentencia->bindParam(':email', $email);
$sentencia->bindParam(':direccion', $direccion);
$sentencia->bindParam(':fyh_creacion', $fechaHora);
if ($sentencia->execute()) {

    session_start();
    //echo "se registro correctamente";
    $_SESSION["mensaje"] = "El registro al proveedor correctamente";
    $_SESSION["icono"] = "success";
    //header('Location:' . $URL . '/categorias/');
?>
<script>
    location.href = "<?php echo $URL;?>/proveedores";
</script>


<?php
} else {
    //echo "Las contraseñas no son iguales";
    session_start();
    $_SESSION["mensaje"] = "error no se pudo registrar al proveedor.";
    $_SESSION["icono"] = "error";
    //header('Location:' . $URL . '/categorias/');
    ?>
    <script>
    location.href = "<?php echo $URL;?>/proveedores";
    </script>

    <?php
    
}
