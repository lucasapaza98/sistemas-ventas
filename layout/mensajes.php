<?php

if ((isset($_SESSION['mensaje'])) && (isset($_SESSION['icono']))) {
    $respuestas = $_SESSION['mensaje']; 
    $icono = $_SESSION['icono']; ?>

    <script>
        Swal.fire({
          position: 'center',
          icon:'<?php echo $icono ;?>',
          title:'<?php echo $respuestas ;?>',
          showConfirmButton: false,
          timer: 2500
        });
    </script>

<?php
unset($_SESSION['mensaje']);
unset($_SESSION['icono']);

}

?>