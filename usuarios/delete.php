<?php
require_once("../app/config.php");
require_once("../layout/sesion.php");
require_once("../layout/parte1.php");
require_once("../app/controllers/usuarios/ver_usuarios.php");



?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Eliminar usuario</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">¿Esta seguro que quiere eliminar el usuario?</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">

                                    <form action="../app/controllers/usuarios/delete_usuario.php" method="post">
                                    <input type="text" name="id_usuarios"value="<?php echo $id_usuario_get;?>" hidden>
                                        <div class="form-group">
                                            <label for="">Nombres</label>
                                            <input type="text" class="form-control" name="nombre" value="<?php echo $nombres; ?>" id="" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" id="" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Rol del usuario</label>
                                            <input type="text" class="form-control" name="email" value="<?php echo $rol; ?>" id="" disabled>
                                        </div>

                                        <hr>
                                        <div class="form-group">
                                            <a href="index.php" class="btn btn-secondary">Volver</a>
                                            <button  class="btn btn-danger">Eliminar</button>

                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>

                    </div><!-- /.container-fluid -->
                </div>
            </div>
        </div>

    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<!-- /.content-wrapper -->

<?php
require_once("../layout/parte2.php");
require_once("../layout/mensajes.php");

?>