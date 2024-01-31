<?php
require_once("../app/config.php");
require_once("../layout/sesion.php");

require_once("../layout/parte1.php");

require_once("../app/controllers/usuarios/listado_de_usuarios.php");

require_once("../app/controllers/roles/listado_de_roles.php");



?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Registro de un nuevo usuario</h1>
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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Agregar un usuario</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controllers/usuarios/create.php" method="POST">
                                        <div class="form-group">
                                            <label for="">Nombres</label>
                                            <input type="text" class="form-control" name="nombre" id="" placeholder="Escriba un nombre" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" name="email" id="" placeholder="Escriba un correo electronico" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Rol del usuario</label>
                                            <select name="rol" id="" class="form-control">
                                                <?php
                                                foreach ($roles_datos as $roles_dato) { ?>
                                                    <option value="<?php echo $roles_dato['id_rol']; ?>"><?php echo $roles_dato['rol']; ?></option>
                                                <?php
                                                }
                                                ?>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Contraseña</label>
                                            <input type="text" class="form-control" name="password_user" id="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Confirmar Contraseña</label>
                                            <input type="text" class="form-control" name="password_repeat" id="" required>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
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