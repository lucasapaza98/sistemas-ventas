<?php

//require_once('../layout/sesion.php');

?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistemas de ventas </title>
  <link rel="icon" href="<?php echo $URL; ?>/public/img/logo.ico">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/template/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/template/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <!-- sweetalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/template/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/template/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/template/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- jQuery -->
  <script src="<?php echo $URL; ?>/public/template/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>

</head>

<body class="hold-transition sidebar-mini">

  <script>
    /*Swal.fire({
      position: "center",
      icon: "success",
      title: "Bienvenido al sistema <?php //echo $email_sesion 
                                    ?>",
      showConfirmButton: false,
      timer: 1500
    });*/
  </script>

  <div class="wrapper">

    <?php
    if ($rol_sesion == "ADMINISTRADOR") { ?>

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-dark">
        <div class="container">


          <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>



          <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL; ?>/" class="nav-link">SISTEMAS DE VENTAS</a>
              </li>

            </ul>


          </div>



        </div>



        <!-- Right navbar links -->
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link">
                <b style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><?php echo $rol_sesion ?></b></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
              </a>
            </li>

          </ul>

        </div>

      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">


        <!-- Brand Logo -->
        <a href="<?php echo $URL; ?>" class="brand-link">
          <img src="<?php echo $URL; ?>/public/img/logo_main3.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">SISTEMAS VENTAS</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?php echo $URL; ?>/public/img/perfil.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block"><?php echo $nombres_sesion; ?></a>
            </div>
          </div>


          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Usuarios
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/usuarios" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado del usuarios</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/usuarios/create.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Creación del usuario</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>
                    Roles
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/roles" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado del roles</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/roles/create.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Creación de roles</p>
                    </a>
                  </li>
                </ul>
              </li>


              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-tag"></i>
                  <p>
                    Categorías
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/categorias" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado de categorías</p>
                    </a>
                  </li>
                </ul>
              </li>





              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-list"></i>
                  <p>
                    Almacen
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/almacen" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado de productos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/almacen/create.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Creación de productos</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-cart-plus"></i>
                  <p>
                    Compras
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/compras" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado de compras</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/compras/create.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Creación de compras</p>
                    </a>
                  </li>
                </ul>
              </li>




              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-car"></i>
                  <p>
                    Proveedores
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/proveedores" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado de proveedores</p>
                    </a>
                  </li>

                </ul>
              </li>

              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-shopping-basket"></i>
                  <p>
                    Ventas
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/ventas" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado de ventas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/ventas/create.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Realizar una venta</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-user-friends"></i>
                  <p>
                    Clientes
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/clientes" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado de clientes</p>
                    </a>
                  </li>

                </ul>
              </li>






              <li class="nav-item">
                <a href="<?php echo $URL; ?>/app/controllers/login/cerrar_sesion.php" class="nav-link" style="background-color: #C20606;">
                  <i class="nav-icon fas fa-door-closed"></i>
                  <p>

                    Cerrar Sesion
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>


    <?php
    }



    if ($rol_sesion == "VENDEDOR") { ?>
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-dark">
        <div class="container">


          <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>



          <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL; ?>/" class="nav-link">SISTEMAS DE VENTAS</a>
              </li>


            </ul>


          </div>

          <!-- Right navbar links -->
          <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link">
                  <b style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><?php echo $rol_sesion ?></b></i>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
                </a>
              </li>

            </ul>

          </div>



        </div>

      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">


        <!-- Brand Logo -->
        <a href="<?php echo $URL; ?>" class="brand-link">
          <img src="<?php echo $URL; ?>/public/img/logo_main3.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">SISTEMAS VENTAS</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?php echo $URL; ?>/public/img/perfil.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block"><?php echo $nombres_sesion; ?></a>
            </div>
          </div>


          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->



              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-cart-plus"></i>
                  <p>
                    Compras
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/compras" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado de compras</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/compras/create.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Creación de compras</p>
                    </a>
                  </li>
                </ul>
              </li>



              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-shopping-basket"></i>
                  <p>
                    Ventas
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/ventas" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado de ventas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/ventas/create.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Realizar una venta</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-user-friends"></i>
                  <p>
                    Clientes
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/clientes" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado de clientes</p>
                    </a>
                  </li>

                </ul>
              </li>






              <li class="nav-item">
                <a href="<?php echo $URL; ?>/app/controllers/login/cerrar_sesion.php" class="nav-link" style="background-color: #C20606;">
                  <i class="nav-icon fas fa-door-closed"></i>
                  <p>

                    Cerrar Sesion
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>


    <?php
    }

    if ($rol_sesion == "ALMACEN") {
    ?>
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-dark">
        <div class="container">


          <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>



          <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL; ?>/" class="nav-link">SISTEMAS DE VENTAS</a>
              </li>

            </ul>


          </div>





        </div>






        <!-- Right navbar links -->
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link">
                <b style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><?php echo $rol_sesion ?></b></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
              </a>
            </li>

          </ul>

        </div>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">


        <!-- Brand Logo -->
        <a href="<?php echo $URL; ?>" class="brand-link">
          <img src="<?php echo $URL; ?>/public/img/logo_main3.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">SISTEMAS VENTAS</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?php echo $URL; ?>/public/img/perfil.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block"><?php echo $nombres_sesion; ?></a>
            </div>
          </div>


          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->





              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-tag"></i>
                  <p>
                    Categorías
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/categorias" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado de categorías</p>
                    </a>
                  </li>
                </ul>
              </li>





              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-list"></i>
                  <p>
                    Almacen
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/almacen" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado de productos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/almacen/create.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Creación de productos</p>
                    </a>
                  </li>
                </ul>
              </li>



              <li class="nav-item">
                <a href="<?php echo $URL; ?>/app/controllers/login/cerrar_sesion.php" class="nav-link" style="background-color: #C20606;">
                  <i class="nav-icon fas fa-door-closed"></i>
                  <p>

                    Cerrar Sesion
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>




    <?php

    }

    if ($rol_sesion == "LECTOR") {
    ?>

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-dark">
        <div class="container">


          <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>



          <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL; ?>/" class="nav-link">SISTEMAS DE VENTAS</a>
              </li>

            </ul>


          </div>

        </div>



        <!-- Right navbar links -->
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link">
                <b style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><?php echo $rol_sesion ?></b></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
              </a>
            </li>

          </ul>

        </div>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">


        <!-- Brand Logo -->
        <a href="<?php echo $URL; ?>" class="brand-link">
          <img src="<?php echo $URL; ?>/public/img/logo_main3.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">SISTEMAS VENTAS</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?php echo $URL; ?>/public/img/perfil.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block"><?php echo $nombres_sesion; ?></a>
            </div>
          </div>


          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->

              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Usuarios
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/usuarios" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado del usuarios</p>
                    </a>
                  </li>

                </ul>
              </li>

              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>
                    Roles
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/roles" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado del roles</p>
                    </a>
                  </li>

                </ul>
              </li>


              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-tag"></i>
                  <p>
                    Categorías
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/categorias" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado de categorías</p>
                    </a>
                  </li>
                </ul>
              </li>





              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-list"></i>
                  <p>
                    Almacen
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/almacen" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado de productos</p>
                    </a>
                  </li>

                </ul>
              </li>

              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-cart-plus"></i>
                  <p>
                    Compras
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/compras" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado de compras</p>
                    </a>
                  </li>

                </ul>
              </li>




              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-car"></i>
                  <p>
                    Proveedores
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/proveedores" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado de proveedores</p>
                    </a>
                  </li>

                </ul>
              </li>

              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-shopping-basket"></i>
                  <p>
                    Ventas
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/ventas" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado de ventas</p>
                    </a>
                  </li>

                </ul>
              </li>

              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-user-friends"></i>
                  <p>
                    Clientes
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/clientes" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado de clientes</p>
                    </a>
                  </li>

                </ul>
              </li>






              <li class="nav-item">
                <a href="<?php echo $URL; ?>/app/controllers/login/cerrar_sesion.php" class="nav-link" style="background-color: #C20606;">
                  <i class="nav-icon fas fa-door-closed"></i>
                  <p>

                    Cerrar Sesion
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

    <?php
    }

    if ($rol_sesion == "PROVEEDOR") {
    ?>
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-dark">
        <div class="container">


          <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>



          <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL; ?>/" class="nav-link">SISTEMAS DE VENTAS</a>
              </li>

            </ul>


          </div>



        </div>



        <!-- Right navbar links -->
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link">
                <b style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><?php echo $rol_sesion ?></b></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
              </a>
            </li>

          </ul>

        </div>

      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">


        <!-- Brand Logo -->
        <a href="<?php echo $URL; ?>" class="brand-link">
          <img src="<?php echo $URL; ?>/public/img/logo_main3.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">SISTEMAS VENTAS</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?php echo $URL; ?>/public/img/perfil.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block"><?php echo $nombres_sesion; ?></a>
            </div>
          </div>


          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->



              <li class="nav-item ">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-car"></i>
                  <p>
                    Proveedores
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL; ?>/proveedores" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Listado de proveedores</p>
                    </a>
                  </li>

                </ul>
              </li>









              <li class="nav-item">
                <a href="<?php echo $URL; ?>/app/controllers/login/cerrar_sesion.php" class="nav-link" style="background-color: #C20606;">
                  <i class="nav-icon fas fa-door-closed"></i>
                  <p>

                    Cerrar Sesion
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>


    <?php
    }
    ?>