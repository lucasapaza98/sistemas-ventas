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
                    <h1 class="m-0">Acualización de la compra </h1>
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
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Actualizar los datos de la compra con cuidado</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                </div>

                                <div class="card-body" style="display: block;">
                                    <div style="display:flex;">
                                        <h5>Datos del producto</h5>
                                        <div style="width: 20px;"></div>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-buscar-producto">
                                            <i class="fas fa-search"></i>
                                            Buscar producto </button>

                                        <!-- MODAL PARA VISUALIZAR DATOS DEL PRODUCTO -->
                                        <div class="modal fade" id="modal-buscar-producto">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color: #0A1A81; color:white;">
                                                        <h4 class="modal-title">Busqueda del producto</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="table table-responsive">
                                                            <table id="example1" class="table table-bordered table-striped table-sm">
                                                                <thead>
                                                                    <tr>

                                                                        <th>
                                                                            <center>#</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Seleccionar</center>
                                                                        </th>


                                                                        <th>
                                                                            <center>Código</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Categoría</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Nombre</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>imagen</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Descripción</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Stock</center>
                                                                        </th>

                                                                        <th>
                                                                            <center>Precio compra</center>
                                                                        </th>

                                                                        <th>
                                                                            <center>Precio venta</center>
                                                                        </th>

                                                                        <th>
                                                                            <center>Fecha compra</center>
                                                                        </th>

                                                                        <th>
                                                                            <center>Email</center>
                                                                        </th>





                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $contador = 1;
                                                                    foreach ($productos_datos as $productos_dato) {

                                                                        $id_producto = $productos_dato['id_producto'];

                                                                    ?>

                                                                        <tr>
                                                                            <td> <?php echo $contador++; ?></td>
                                                                            <td>
                                                                                <button class="btn btn-info" id="btn_seleccionar<?php echo $id_producto; ?>">
                                                                                    Seleccionar
                                                                                </button>

                                                                                <script>
                                                                                    $('#btn_seleccionar<?php echo $id_producto; ?>').click(function() {

                                                                                        var id_producto = "<?php echo $productos_dato['id_producto']; ?>";
                                                                                        $('#id_producto').val(id_producto);

                                                                                        var codigo = "<?php echo $productos_dato['codigo']; ?>";
                                                                                        $('#codigo').val(codigo);

                                                                                        var nombre_categoria = "<?php echo $productos_dato['nombre_categoria']; ?>";
                                                                                        $('#categoria').val(nombre_categoria);

                                                                                        var nombre_producto = "<?php echo $productos_dato['nombre_producto']; ?>";
                                                                                        $('#nombre_producto').val(nombre_producto);

                                                                                        var email = "<?php echo $productos_dato['email']; ?>";
                                                                                        $('#usuario_producto').val(email);

                                                                                        var descripcion_producto = "<?php echo $productos_dato['descripcion_producto']; ?>";
                                                                                        $('#descripcion_producto').val(descripcion_producto);

                                                                                        var stock = "<?php echo $productos_dato['stock']; ?>";
                                                                                        $('#stock').val(stock);
                                                                                        $('#stock_actual').val(stock);


                                                                                        var stock_minimo = "<?php echo $productos_dato['stock_minimo']; ?>";
                                                                                        $('#stock_minimo').val(stock_minimo);

                                                                                        var stock_maximo = "<?php echo $productos_dato['stock_maximo']; ?>";
                                                                                        $('#stock_maximo').val(stock_maximo);

                                                                                        var precio_compra = "<?php echo $productos_dato['precio_compra']; ?>";
                                                                                        $('#precio_compra').val(precio_compra);

                                                                                        var precio_venta = "<?php echo $productos_dato['precio_venta']; ?>";
                                                                                        $('#precio_venta').val(precio_venta);

                                                                                        var fecha_ingreso = "<?php echo $productos_dato['fecha_ingreso']; ?>";
                                                                                        $('#fecha_ingreso').val(fecha_ingreso);

                                                                                        var ruta_imagen = "<?php echo $URL . '/almacen/img_productos/' . $productos_dato['imagen']; ?>";
                                                                                        $('#img_producto').attr({
                                                                                            src: ruta_imagen
                                                                                        });

                                                                                        $('#modal-buscar-producto').modal('toggle');




                                                                                    });
                                                                                </script>
                                                                            </td>
                                                                            <td><?php echo $productos_dato['codigo']; ?></td>
                                                                            <td><?php echo $productos_dato['nombre_categoria']; ?></td>
                                                                            <td><?php echo $productos_dato['nombre_producto']; ?></td>
                                                                            <td>
                                                                                <img src="<?php echo $URL . "/almacen/img_productos/" . $productos_dato['imagen']; ?>" width="100px" alt="">
                                                                            </td>
                                                                            <td><?php echo $productos_dato['descripcion_producto']; ?></td>
                                                                            <td><?php echo $productos_dato['stock']; ?></td>

                                                                            <td>$.<?php echo $productos_dato['precio_compra']; ?></td>
                                                                            <td>$.<?php echo $productos_dato['precio_venta']; ?></td>
                                                                            <td><?php echo $productos_dato['fecha_ingreso']; ?></td>
                                                                            <td><?php echo $productos_dato['email']; ?></td>


                                                                        </tr>


                                                                    <?php
                                                                    }
                                                                    ?>

                                                                </tbody>


                                                            </table>
                                                        </div>

                                                    </div>



                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->

                                    </div>

                                    <hr>
                                    <div class="row" style="font-size: 15px;">
                                        <div class="col-md-9">


                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" value="<?= $id_producto_update;?>" id="id_producto" hidden>

                                                        <label for="">Código:</label>
                                                        <input type="text" value="<?= $codigo;?>" class="form-control" id="codigo" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Categoria:</label>
                                                        <div style="display: flex;">
                                                            <input type="text" value="<?= $nombre_categoria;?>"  class="form-control" id="categoria" disabled>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Nombre del producto:</label>
                                                        <input type="text" value="<?= $nombre_producto2;?>" name="nombre_producto" class="form-control" id="nombre_producto" disabled>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Usuario:</label>
                                                        <input type="text" value="<?= $nombre_usuario2;?>" class="form-control" id="usuario_producto" disabled>
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
                                                        <input type="number" value="<?= $stock2;?>" name="stock" class="form-control" id="stock" style="background-color: #fff819; text-align:center;" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">Stock mínimo</label>
                                                        <input type="number" value="<?= $stock_minimo2;?>" name="stock_minimo" class="form-control" id="stock_minimo" style="text-align: center;" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">Stock máximo:</label>
                                                        <input type="number" value="<?= $stock_maximo2;?>" name="stock_maximo" class="form-control" id="stock_maximo" style="text-align: center;" disabled>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">Precio compra: </label>
                                                        <input type="number" value="<?= $precio_compra_producto;?>" name="precio_compra" class="form-control" id="precio_compra" style="text-align: center;" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">Precio venta: </label>
                                                        <input type="number" value="<?= $precio_venta_producto;?>" name="precio_venta" class="form-control" id="precio_venta" style="text-align: center;" disabled>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">Fecha de ingreso: </label>
                                                        <input type="date" value="<?= $fecha_ingreso2;?>" name="fecha_ingreso" class="form-control" id="fecha_ingreso" disabled>
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
                                        <div style="width: 20px;"></div>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-buscar-proveedor">
                                            <i class="fas fa-search"></i>
                                            Buscar proveedor </button>

                                        <!-- MODAL PARA VISUALIZAR DATOS DEL PROVEEDOR -->
                                        <div class="modal fade" id="modal-buscar-proveedor">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color: #0A1A81; color:white;">
                                                        <h4 class="modal-title">Busqueda del proveedor</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" style="font-size: 15px;">
                                                        <div class="table table-responsive" >
                                                            <table id="example2" class="table table-bordered table-striped table-sm" >
                                                                <thead>
                                                                    <tr>

                                                                        <th>
                                                                            <center>#</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Seleccionar</center>
                                                                        </th>


                                                                        <th>
                                                                            <center>Nombre del proveedor</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Celular</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Telefono</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Empresa</center>
                                                                        </th>

                                                                        <th>
                                                                            <center>Email</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Direccion</center>
                                                                        </th>




                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $contador = 1;
                                                                    foreach ($proveedores_datos as $proveedores_dato) {

                                                                        $id_proveedor = $proveedores_dato['id_proveedor'];
                                                                        $nombre_proveedor = $proveedores_dato['nombre_proveedor'];
                                                                    ?>
                                                                        <tr>

                                                                            <td>
                                                                                <center><?php echo $contador++; ?></center>
                                                                            </td>
                                                                            <td>
                                                                                <button class="btn btn-info" id="btn_seleccionar_proveedor<?php echo $id_proveedor; ?>">
                                                                                    Seleccionar
                                                                                </button>
                                                                                <script>
                                                                                    $('#btn_seleccionar_proveedor<?php echo $id_proveedor; ?>').click(function() {

                                                                                        var id_proveedor = '<?php echo $id_proveedor; ?>';
                                                                                        $('#id_proveedor').val(id_proveedor);

                                                                                        var nombre_proveedor = '<?php echo $nombre_proveedor; ?>';
                                                                                        $('#nombre_proveedor').val(nombre_proveedor);

                                                                                        var celular_proveedor = '<?php echo $proveedores_dato['celular']; ?>';
                                                                                        $('#celular').val(celular_proveedor);

                                                                                        var telefono_proveedor = '<?php echo $proveedores_dato['telefono']; ?>';
                                                                                        $('#telefono').val(telefono_proveedor);

                                                                                        var empresa = '<?php echo $proveedores_dato['empresa']; ?>';
                                                                                        $('#empresa').val(empresa);

                                                                                        var email_proveedor = '<?php echo $proveedores_dato['email']; ?>';
                                                                                        $('#email').val(email_proveedor);

                                                                                        var direccion = '<?php echo $proveedores_dato['direccion']; ?>';
                                                                                        $('#direccion').val(direccion);

                                                                                        $('#modal-buscar-proveedor').modal('toggle');

                                                                                    });
                                                                                </script>
                                                                            </td>


                                                                            <td>
                                                                                <?php echo $nombre_proveedor; ?>
                                                                            </td>

                                                                            <td>
                                                                                <a href="https://wa.me/549<?php echo $proveedores_dato['celular']; ?>" target="_blank" class="btn btn-success">
                                                                                    <i class="fa fa-phone"></i>
                                                                                    <?php echo $proveedores_dato['celular']; ?>
                                                                                </a>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $proveedores_dato['telefono']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $proveedores_dato['empresa']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $proveedores_dato['email']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $proveedores_dato['direccion']; ?>
                                                                            </td>




                                                                        </tr>

                                                                    <?php
                                                                    }
                                                                    ?>

                                                                </tbody>


                                                            </table>
                                                        </div>

                                                    </div>



                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->



                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" id="id_proveedor" value="<?php echo $id_proveedor_update;?>" hidden>
                                                <label for="">Nombre del proveedor </label>
                                                <input type="text"value="<?= $nombre_proveedor_update;?>"  name="" id="nombre_proveedor" class="form-control" disabled>

                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <label for="">Celular </label>
                                                <input type="number"value="<?= $celular_proveedor;?>"  name="" id="celular" class="form-control" disabled>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Telefono </label>
                                                <input type="number"value="<?= $telefono_proveedor;?>"  name="" id="telefono" class="form-control" disabled>

                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <label for="">Empresa </label>
                                                <input type="text"value="<?= $empresa_proveedor;?>"  name="" id="empresa" class="form-control" disabled>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <label for="">Email </label>
                                                <input type="email"value="<?= $email_proveedor;?>"  name="" id="email" class="form-control" disabled>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <label for="">Direccion </label>
                                                <textarea name="" id="direccion" cols="30" rows="3" class="form-control" disabled><?= $direccion_proveedor;?> </textarea>
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
                            <div class="card card-outline card-success">
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
                                                <input type="text" class="form-control" style="text-align: center;" value="<?php echo $nro_compra; ?>" disabled>
                                                <input type="text" value="<?php echo $nro_compra; ?>" id="numero_compra" hidden>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Fecha de la compra</label>
                                                <input type="date"value="<?php echo $fecha_compra; ?>" class="form-control" id="fecha_compra2">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Comprobante de la compra</label>
                                                <input type="text"value="<?php echo $comprobante_compra; ?>" class="form-control" id="comprobante_compra">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Precio de la compra</label>
                                                <input type="number"value="<?php echo $precio_compra22; ?>" class="form-control" id="precio_compra2">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Stock actual</label>
                                                <input type="text"value="<?php echo $stock2 = $stock2 - $cantidad_compra_producto; ?>" id="stock_actual" class="form-control" style="background-color: #fff819; text-align:center;" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Stock total</label>
                                                <input type="text" id="stock_total" class="form-control" style="text-align: center;" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Cantidad</label>
                                                <input type="number"value="<?php echo $cantidad_compra_producto; ?>" id="cantidad_compra" class="form-control" style="text-align: center;">
                                            </div>
                                            <script>
                                                $('#cantidad_compra').keyup(function() {
                                                    sumacantidades();
                                                   
                                                });
                                                sumacantidades();

                                                function sumacantidades(){
                                                    var stock_actual = $('#stock_actual').val();
                                                    var stock_compra = $('#cantidad_compra').val();

                                                    var total = parseInt(stock_actual) + parseInt(stock_compra);

                                                    $('#stock_total').val(total);

                                                }
                                            </script>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Usuario</label>
                                                <input type="text" class="form-control" value="<?php echo $nombre_usuario2; ?>" disabled>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-success btn-block" id="btn_actualizar_compra">Actualizar compra</button>
                                        </div>
                                        <div id="respuesta_compras_update"></div>
                                    </div>
                                    <div class="col-md-12">
                                            <div class="form-group">
                                               <a href="index.php" class="btn btn-secondary btn-block"> Volver</a>
                                            </div>
                                        </div>
                                    <script>
                                        $('#btn_actualizar_compra').click(function() {

                                            var id_compra = '<?php echo $id_compra;?>';
                                            var id_producto = $('#id_producto').val();
                                            var numero_compra = $('#numero_compra').val();
                                            var fecha_compra2 = $('#fecha_compra2').val();
                                            var id_proveedor = $('#id_proveedor').val();
                                            var comprobante_compra = $('#comprobante_compra').val();
                                            var id_usuario = '<?php echo $id_usuario_sesion; ?>';
                                            var precio_compra2 = $('#precio_compra2').val();
                                            var cantidad_compra = $('#cantidad_compra').val();
                                            var stock_total = $('#stock_total').val();

                                            if (id_producto == "") {
                                                $('#id_producto').focus();
                                                alert("llenar todos los campos de productos");

                                            } else if (fecha_compra2 == "") {
                                                $('#id_producto').focus();
                                                alert("llenar todos los campos de fecha");

                                            } else if (comprobante_compra == "") {
                                                $('#comprobante_compra').focus();
                                                alert("llenar todos los campos de comprobante");

                                            } else if (precio_compra2 == "") {
                                                $('#precio_compra2').focus();
                                                alert("llenar todos los campos de precio compra");

                                            } else if (cantidad_compra == "") {
                                                $('#cantidad_compra').focus();
                                                alert("llenar todos los campos de cantidad compra");

                                            } else {
                                                var url3 = "../app/controllers/compras/update.php";
                                                $.get(url3, {
                                                    id_compra:id_compra,
                                                    id_producto:id_producto,
                                                    numero_compra:numero_compra,
                                                    fecha_compra2:fecha_compra2,
                                                    id_proveedor:id_proveedor,
                                                    comprobante_compra:comprobante_compra,
                                                    id_usuario:id_usuario,
                                                    precio_compra2:precio_compra2,
                                                    cantidad_compra:cantidad_compra,
                                                    stock_total:stock_total
                                                    
                                                }, function(datos) {
                                                    $('#respuesta_compras_update').html(datos);
                                                });

                                            }




                                        });
                                    </script>

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

<script>
    $(function() {
        $("#example1").DataTable({
            "pageLength": 5,
            language: {
                "emptyTable": "No hay información",
                "decimal": "",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Productos",
                "infoEmpty": "Mostrando 0 a 0 de 0 Productos",
                "infoFiltered": "(Filtrado de MAX total Productos)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Productos",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,


        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });

    $(function() {
        $("#example2").DataTable({
            "pageLength": 5,
            language: {
                "emptyTable": "No hay información",
                "decimal": "",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Proveedores",
                "infoEmpty": "Mostrando 0 a 0 de 0 Proveedores",
                "infoFiltered": "(Filtrado de MAX total Proveedores)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Proveedores",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,


        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });
</script>