<?php
require_once("../app/config.php");
require_once("../layout/sesion.php");

require_once("../layout/parte1.php");
require_once("../app/controllers/usuarios/update_usuarios.php");
require_once("../app/controllers/roles/listado_de_roles.php");



?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Actualizar usuario</h1>
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
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Llene los datos al actualizar con cuidado</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controllers/usuarios/update.php" method="POST">
                                        <input type="text" name="id_usuarios"value="<?php echo $id_usuario_get;?>" hidden>
                                        <div class="form-group">
                                            <label for="">Nombres</label>
                                            <input type="text" class="form-control" name="nombre"  value="<?php echo $nombres;?>"id="" placeholder="Escriba un nombre" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" name="email"  value="<?php echo $email;?>"id="" placeholder="Escriba un correo electronico" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Rol del usuario</label>
                                            <select name="rol" id=""class="form-control">
                                                <?php 
                                                foreach($roles_datos as $roles_dato){ 
                                                    $rol_tabla = $roles_dato['rol'];
                                                    $id_rol  = $roles_dato['id_rol'];
                                                    
                                                    ?>

                                                  <option value="<?php echo $id_rol;?>" 
                                                  <?php
                                                  if($rol_tabla == $rol){ ?>

                                                  selected = "selected"

                                                  <?php
                                                  
                                                }
                                                  ?>><?php echo $rol_tabla;?></option>
                                                <?php

                                                }
                                                ?>
                                              
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Contraseña</label>
                                            <input type="text" class="form-control" name="password_user"  id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Confirmar Contraseña</label>
                                            <input type="text" class="form-control" name="password_repeat" id="">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                            <button type="submit" class="btn btn-success">Actualizar</button>
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