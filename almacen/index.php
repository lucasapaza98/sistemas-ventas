<?php
require_once("../app/config.php");
require_once("../layout/sesion.php");

require_once("../layout/parte1.php");
require_once("../app/controllers/almacen/listado_de_productos.php");



?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de productos</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row" style="font-size: 15px;">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Productos registrados</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <?php
                        if ($rol_sesion == "ADMINISTRADOR") {


                        ?>
                            <div class="card-body" style="display: block;">
                                <div class="table table-responsive">
                                    <table id="example1" class="table table-bordered table-striped table-sm">
                                        <thead>
                                            <tr>

                                                <th>
                                                    <center>#</center>
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
                                                    <center>Fecha Compra</center>
                                                </th>

                                                <th>
                                                    <center>Usuario</center>
                                                </th>



                                                <th>
                                                    <center>Acciones</center>
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
                                                    <td><?php echo $productos_dato['codigo']; ?></td>
                                                    <td><?php echo $productos_dato['nombre_categoria']; ?></td>
                                                    <td><?php echo $productos_dato['nombre_producto']; ?></td>
                                                    <td>
                                                        <img src="<?php echo $URL . "/almacen/img_productos/" . $productos_dato['imagen']; ?>" width="60px" alt="">
                                                    </td>
                                                    <td><?php echo $productos_dato['descripcion_producto']; ?></td>

                                                    <?php
                                                    $stock_actual2 = $productos_dato['stock'];
                                                    $stock_max =  $productos_dato['stock_maximo'];
                                                    $stock_min = $productos_dato['stock_minimo'];

                                                    if ($stock_actual2 < $stock_min) {
                                                    ?>
                                                        <td style="background: #EE8080;">
                                                            <center><?php echo $productos_dato['stock']; ?></center>
                                                        </td>

                                                    <?php

                                                    } else if ($stock_actual2 > $stock_max) {
                                                    ?>

                                                        <td style="background: #7FEA81;">
                                                            <center><?php echo $productos_dato['stock']; ?></center>
                                                        </td>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <td>
                                                            <center><?php echo $productos_dato['stock']; ?></center>
                                                        </td>

                                                    <?php

                                                    }

                                                    ?>

                                                    <td>
                                                        <center>$.<?php echo $productos_dato['precio_compra']; ?></center>
                                                    </td>
                                                    <td>
                                                        <center>$.<?php echo $productos_dato['precio_venta']; ?></center>
                                                    </td>
                                                    <td><?php echo $productos_dato['fecha_ingreso']; ?></td>
                                                    <td><?php echo $productos_dato['nombre_usuario']; ?></td>

                                                    <td>
                                                        <center>
                                                            <div class="btn-group">
                                                                <a href="ver.php?id=<?php echo $id_producto; ?>" type="button" class="btn btn-info btn-sm"> <i class="fas fa-eye"> </i> Ver</a>
                                                                <a href="update.php?id=<?php echo $id_producto; ?>" type="button" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i>Editar</a>
                                                                <a href="delete.php?id=<?php echo $id_producto; ?>" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Borrar</a>
                                                            </div>

                                                        </center>
                                                    </td>
                                                </tr>


                                            <?php
                                            }
                                            ?>

                                        </tbody>


                                    </table>
                                </div>
                            </div>

                        <?php
                        }
                        if ($rol_sesion == "LECTOR") {


                        ?>
                            <div class="card-body" style="display: block;">
                                <div class="table table-responsive">
                                    <table id="example1" class="table table-bordered table-striped table-sm">
                                        <thead>
                                            <tr>

                                                <th>
                                                    <center>#</center>
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
                                                    <center>Fecha Compra</center>
                                                </th>

                                                <th>
                                                    <center>Usuario</center>
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
                                                    <td><?php echo $productos_dato['codigo']; ?></td>
                                                    <td><?php echo $productos_dato['nombre_categoria']; ?></td>
                                                    <td><?php echo $productos_dato['nombre_producto']; ?></td>
                                                    <td>
                                                        <img src="<?php echo $URL . "/almacen/img_productos/" . $productos_dato['imagen']; ?>" width="60px" alt="">
                                                    </td>
                                                    <td><?php echo $productos_dato['descripcion_producto']; ?></td>



                                                    <td>
                                                        <center><?php echo $productos_dato['stock']; ?></center>
                                                    </td>




                                                    <td>
                                                        <center>$.<?php echo $productos_dato['precio_compra']; ?></center>
                                                    </td>
                                                    <td>
                                                        <center>$.<?php echo $productos_dato['precio_venta']; ?></center>
                                                    </td>
                                                    <td><?php echo $productos_dato['fecha_ingreso']; ?></td>
                                                    <td><?php echo $productos_dato['nombre_usuario']; ?></td>


                                                </tr>


                                            <?php
                                            }
                                            ?>

                                        </tbody>


                                    </table>
                                </div>
                            </div>

                        <?php
                        }
                        if ($rol_sesion == "ALMACEN") {
                        ?>

                            <div class="card-body" style="display: block;">
                                <div class="table table-responsive">
                                    <table id="example1" class="table table-bordered table-striped table-sm">
                                        <thead>
                                            <tr>

                                                <th>
                                                    <center>#</center>
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
                                                    <center>Fecha Compra</center>
                                                </th>

                                                <th>
                                                    <center>Usuario</center>
                                                </th>



                                                <th>
                                                    <center>Acciones</center>
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
                                                    <td><?php echo $productos_dato['codigo']; ?></td>
                                                    <td><?php echo $productos_dato['nombre_categoria']; ?></td>
                                                    <td><?php echo $productos_dato['nombre_producto']; ?></td>
                                                    <td>
                                                        <img src="<?php echo $URL . "/almacen/img_productos/" . $productos_dato['imagen']; ?>" width="60px" alt="">
                                                    </td>
                                                    <td><?php echo $productos_dato['descripcion_producto']; ?></td>

                                                    <?php
                                                    $stock_actual2 = $productos_dato['stock'];
                                                    $stock_max =  $productos_dato['stock_maximo'];
                                                    $stock_min = $productos_dato['stock_minimo'];

                                                    if ($stock_actual2 < $stock_min) {
                                                    ?>
                                                        <td style="background: #EE8080;">
                                                            <center><?php echo $productos_dato['stock']; ?></center>
                                                        </td>

                                                    <?php

                                                    } else if ($stock_actual2 > $stock_max) {
                                                    ?>

                                                        <td style="background: #7FEA81;">
                                                            <center><?php echo $productos_dato['stock']; ?></center>
                                                        </td>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <td>
                                                            <center><?php echo $productos_dato['stock']; ?></center>
                                                        </td>

                                                    <?php

                                                    }

                                                    ?>

                                                    <td>
                                                        <center>$.<?php echo $productos_dato['precio_compra']; ?></center>
                                                    </td>
                                                    <td>
                                                        <center>$.<?php echo $productos_dato['precio_venta']; ?></center>
                                                    </td>
                                                    <td><?php echo $productos_dato['fecha_ingreso']; ?></td>
                                                    <td><?php echo $productos_dato['nombre_usuario']; ?></td>

                                                    <td>
                                                        <center>
                                                            <div class="btn-group">
                                                                <a href="ver.php?id=<?php echo $id_producto; ?>" type="button" class="btn btn-info btn-sm"> <i class="fas fa-eye"> </i> Ver</a>
                                                                <a href="update.php?id=<?php echo $id_producto; ?>" type="button" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i>Editar</a>
                                                                <a href="delete.php?id=<?php echo $id_producto; ?>" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Borrar</a>
                                                            </div>

                                                        </center>
                                                    </td>
                                                </tr>


                                            <?php
                                            }
                                            ?>

                                        </tbody>


                                    </table>
                                </div>
                            </div>

                        <?php
                        
                        }

                        ?>


                    </div><!-- /.container-fluid -->
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

</div>

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
            buttons: [{
                    extend: 'collection',
                    text: 'Reportes',
                    orientation: 'landscape',
                    buttons: [{
                        text: 'Copiar',
                        extend: 'copy'
                    }, {
                        extend: 'pdf',
                    }, {
                        extend: 'csv',
                    }, {
                        extend: 'excel',
                    }, {
                        text: 'Imprimir',
                        extend: 'print'
                    }]
                },
                {
                    extend: 'colvis',
                    text: 'Visor de columnas',
                    collectionLayout: 'fixed three-column'
                }
            ],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });
</script>