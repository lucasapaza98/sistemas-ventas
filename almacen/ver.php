<?php
require_once("../app/config.php");
require_once("../layout/sesion.php");

require_once("../layout/parte1.php");
require_once("../app/controllers/almacen/cargar_producto.php");



?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Datos del producto: <?php echo $nombre_producto;?></h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">VISTA DE DATOS DEL PRODUCTO</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">


                                        <div class="row">
                                            <div class="col-md-9">

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Código:</label>
                                                            
                                                            <input type="text" class="form-control" value="<?php echo $codigo; ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Categoria:</label>
                                                            <div style="display: flex;">
                                                            <input type="text" class="form-control" value="<?php echo $nombre_categoria;?>" disabled>
                                                            
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Nombre del producto:</label>
                                                            <input type="text" name="nombre_producto" class="form-control" value="<?php echo $nombre_producto;?>" disabled>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Usuario:</label>
                                                            <input type="text" class="form-control" value="<?php echo $email; ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="">Descripción del producto:</label>
                                                            <textarea name="descripcion_producto" id="" cols="30" rows="2" class="form-control" disabled ><?php echo $descripcion_producto;?></textarea>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Stock:</label>
                                                            <input type="number" name="stock" class="form-control" disabled value="<?php echo $stock;?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Stock mínimo</label>
                                                            <input type="number" name="stock_minimo" class="form-control"disabled value="<?php echo $stock_minimo;?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Stock máximo:</label>
                                                            <input type="number" name="stock_maximo" class="form-control"disabled value="<?php echo $stock_maximo;?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Precio compra: </label>
                                                            <input type="number" name="precio_compra" class="form-control" disabled value="<?php echo $precio_compra ;?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Precio venta: </label>
                                                            <input type="number" name="precio_venta" class="form-control" disabled value="<?php echo $precio_venta;?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Fecha de ingreso: </label>
                                                            <input type="date" name="fecha_ingreso" class="form-control" value="<?php echo $fecha_ingreso ;?>" disabled>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Imagen del producto:</label>
                                                    <center>
                                                        <img src="<?php echo $URL."/almacen/img_productos/".$imagen;?>" alt="" width="100%">
                                                    </center>
                                                </div>
                                            </div>
                                        </div>




                                        <hr>
                                        <div class="form-group">
                                            <a href="index.php" class="btn btn-secondary">Volver</a>
                                        </div>
                                    
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