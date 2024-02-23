<?php
require_once("../app/config.php");
require_once("../layout/sesion.php");

require_once("../layout/parte1.php");

require_once("../app/controllers/almacen/listado_de_productos.php");
require_once("../app/controllers/proveedores/listado_de_proveedores.php");
require_once("../app/controllers/compras/cargar_compras.php");



?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Compra Nro <?php echo $nro_compra;?></h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Detalle de la compra</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                </div>

                                <div class="card-body" style="display: block;">
                                    
                                    <div class="row" style="font-size: 15px;">
                                        <div class="col-md-9">


                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" id="id_producto" hidden>

                                                        <label for="">Código:</label>
                                                        <input type="text" class="form-control" id="codigo" value="<?php echo $codigo;?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Categoria:</label>
                                                        <div style="display: flex;">
                                                            <input type="text" class="form-control" id="categoria" value="<?= $nombre_categoria;?>" disabled>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Nombre del producto:</label>
                                                        <input type="text" name="nombre_producto" class="form-control" id="nombre_producto" value="<?php echo $nombre_producto2;?>" disabled>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Usuario:</label>
                                                        <input type="text" class="form-control" id="usuario_producto" value="<?= $nombre_usuario2;?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="">Descripción del producto:</label>
                                                        <textarea name="descripcion_producto" id="descripcion_producto" cols="30" rows="2" class="form-control" disabled><?= $descripcion_producto2;?></textarea>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">Stock:</label>
                                                        <input type="number" name="stock" class="form-control" id="stock" style="background-color: #fff819; text-align:center;" value="<?= $stock2;?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">Stock mínimo</label>
                                                        <input type="number" name="stock_minimo" class="form-control" id="stock_minimo" style="text-align: center;" value="<?= $stock_minimo2;?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">Stock máximo:</label>
                                                        <input type="number" name="stock_maximo" class="form-control" id="stock_maximo" style="text-align: center;" value="<?= $stock_maximo2;?>" disabled>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">Precio compra: </label>
                                                        <input type="number" name="precio_compra" class="form-control" id="precio_compra" style="text-align: center;" value="<?= $precio_compra_producto;?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">Precio venta: </label>
                                                        <input type="number" name="precio_venta" class="form-control" id="precio_venta" style="text-align: center;" value="<?= $precio_venta_producto;?>" disabled>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">Fecha de ingreso: </label>
                                                        <input type="date" name="fecha_ingreso" class="form-control" id="fecha_ingreso" value="<?= $fecha_ingreso2;?>" disabled>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Imagen del producto:</label>
                                                <center>
                                                    <img src="<?php echo $URL . "/almacen/img_productos/" . $imagen; ?>" alt="" id="img_producto" width="70%">
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div style="display:flex;">
                                        <h5>Datos del proveedor</h5>
                                       



                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" id="id_proveedor" hidden>
                                                <label for="">Nombre del proveedor </label>
                                                <input type="text" name="" id="nombre_proveedor" class="form-control" value="<?= $nombre_proveedor_update;?>"  disabled>

                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <label for="">Celular </label>
                                                <input type="number" name="" id="celular" class="form-control" value="<?= $celular_proveedor;?>"  disabled>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Telefono </label>
                                                <input type="number" name="" id="telefono" class="form-control" value="<?= $telefono_proveedor;?>" disabled>

                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <label for="">Empresa </label>
                                                <input type="text" name="" id="empresa" class="form-control" value="<?= $empresa_proveedor;?>"   disabled>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <label for="">Email </label>
                                                <input type="email" name="" id="email" class="form-control" value="<?= $email_proveedor;?>"  disabled>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <label for="">Direccion </label>
                                                <textarea name="" id="direccion" cols="30" rows="3" class="form-control" disabled><?= $direccion_proveedor;?></textarea>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div><!-- /.container-fluid -->
                        </div>
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Detalle de la compra</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">

                                               


                                                <label for="">Numero de la compra</label>
                                                <input type="text" class="form-control" value="<?php echo $id_compra_get; ?>" disabled>
                                                <input type="text" value="<?php echo $id_compra_get; ?>" id="numero_compra" hidden>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Fecha de la compra</label>
                                                <input type="date" class="form-control" id="fecha_compra2" value="<?=$fecha_compra;?>" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Comprobante de la compra</label>
                                                <input type="text" class="form-control" id="comprobante_compra" value="<?= $comprobante_compra;?>" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Precio de la compra</label>
                                                <input type="number" class="form-control" id="precio_compra2" value="<?= $precio_compra22;?>" disabled>
                                            </div>
                                        </div>

                                       

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Cantidad</label>
                                                <input type="number" id="cantidad_compra" class="form-control" style="text-align: center;" value="<?= $cantidad_compra_producto;?>" disabled>
                                            </div>
                                            
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Usuario</label>
                                                <input type="text" class="form-control" value="<?= $nombre_usuario2;?>" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                               <a href="index.php" class="btn btn-secondary btn-block"> Volver</a>
                                            </div>
                                        </div>

                                    </div>
                                    

                                    
                                    

                                </div>
                            </div>
                        </div>


                    </div>

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
