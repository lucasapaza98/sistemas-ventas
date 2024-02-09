<?php

require_once("../../config.php");

$nombre_categoria = $_GET['nombre_categoria'];

$sentencia = $pdo->prepare("INSERT INTO tb_categorias(nombre_categoria, fyh_creacion) 
VALUES (:nombre_categoria,:fyh_creacion)");

$sentencia->bindParam(':nombre_categoria', $nombre_categoria);
$sentencia->bindParam(':fyh_creacion', $fechaHora);
if ($sentencia->execute()) {

    session_start();
    //echo "se registro correctamente";
    $_SESSION["mensaje"] = "El registro la categoría correctamente";
    $_SESSION["icono"] = "success";
    //header('Location:' . $URL . '/categorias/');
?>
<script>
    location.href = "<?php echo $URL;?>/categorias";
</script>


<?php
} else {
    //echo "Las contraseñas no son iguales";
    session_start();
    $_SESSION["mensaje"] = "error no se pudo registrar.";
    $_SESSION["icono"] = "error";
    //header('Location:' . $URL . '/categorias/');
    ?>
    <script>
    location.href = "<?php echo $URL;?>/categorias";
    </script>

    <?php
    
}
