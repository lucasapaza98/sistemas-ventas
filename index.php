<?php
require_once("app/config.php");
require_once("layout/sesion.php");

require_once("layout/parte1.php");
require_once("app/controllers/usuarios/listado_de_usuarios.php");
require_once("app/controllers/roles/listado_de_roles.php");



?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Bienvenidos al SISTEMAS DE VENTAS - <?php echo $rol_sesion;?></h1>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->


  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      <div class="row">

        <div class="col-lg-3 col-6">

          <div class="small-box bg-warning">
            <div class="inner">
              <?php
              $contador_del_usuarios = 0;
              foreach ($usuarios_datos as $usuarios_dato) {

                $contador_del_usuarios++;
              }
              ?>
              <h3><?php echo $contador_del_usuarios; ?></h3>
              <p>Usuarios Registrados</p>
            </div>
            <a href="<?php echo $URL; ?>/usuarios/create.php">
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
            </a>
            <a href="<?php echo $URL; ?>/usuarios" class="small-box-footer">
              Más información <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>


        <div class="col-lg-3 col-6">

          <div class="small-box bg-info">
            <div class="inner">
              <?php
              $contador_del_roles = 0;
              foreach ($roles_datos as $roles_dato) {

                $contador_del_roles++;
              }
              ?>
              <h3><?php echo $contador_del_roles; ?></h3>
              <p>Roles Registrados</p>
            </div>
            <a href="<?php echo $URL; ?>/roles/create.php">
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
            </a>
            <a href="<?php echo $URL; ?>/roles" class="small-box-footer">
              Más información <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>


      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once("layout/parte2.php");
?>