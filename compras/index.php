<?php
require_once("../app/config.php");
require_once("../layout/sesion.php");

require_once("../layout/parte1.php");
require_once("../app/controllers/compras/listado_de_compras.php");



?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de compras</h1>
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
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Compras registradas</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="table table-responsive">
                                <table id="example1" class="table table-bordered table-striped table-sm">
                                    <thead>
                                        <tr>

                                            <th>
                                                <center>#</center>
                                            </th>


                                            <th>
                                                <center>Nro Compra </center>
                                            </th>
                                            <th>
                                                <center>Producto</center>
                                            </th>
                                            <th>
                                                <center>Fecha de la compra</center>
                                            </th>
                                            <th>
                                                <center>Proveedor</center>
                                            </th>
                                            <th>
                                                <center>Comprobante</center>
                                            </th>
                                            <th>
                                                <center>Usuario</center>
                                            </th>

                                            <th>
                                                <center>Precio compra</center>
                                            </th>

                                            <th>
                                                <center>Cantidad</center>
                                            </th>

                                            <th>
                                                <center>Acciones</center>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $contador = 1;
                                        foreach ($compras_datos as $compras_dato) {

                                            $id_compra = $compras_dato['id_compra'];

                                        ?>
                                            <tr>
                                                <td><?php echo $contador++; ?></td>
                                                <td><?php echo $compras_dato['nro_compra']; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-producto<?php echo $id_compra; ?>">
                                                        <?php echo $compras_dato['nombre_producto']; ?> </button>

                                                    <!-- MODAL PARA VISUALIZAR DATOS DEL PRODUCTO -->
                                                    <div class="modal fade" id="modal-producto<?php echo $id_compra; ?>">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="background-color: #0A1A81; color:white;">
                                                                    <h4 class="modal-title">Datos del producto</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-9">
                                                                            <div class="row">
                                                                                <div class="col-md-2">
                                                                                    <div class="form-group">
                                                                                        <label for="">Codigo:</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['codigo']; ?>" class="form-control" readonly>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="">Nombre del producto:</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['nombre_producto']; ?>" class="form-control" readonly>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="">Descripcion:</label>
                                                                                        <textarea name="" id="" cols="30" rows="3" class="form-control" readonly><?php echo $compras_dato['descripcion_producto']; ?></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">

                                                                                        <label for="">Stock</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['stock']; ?>" class="form-control" readonly>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">

                                                                                        <label for="">Stock mínimo</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['stock_minimo']; ?>" class="form-control" readonly>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">

                                                                                        <label for="">Stock máximo</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['stock_maximo']; ?>" class="form-control" readonly>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">

                                                                                        <label for="">Fecha ingreso</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['fecha_ingreso']; ?>" class="form-control" readonly>
                                                                                    </div>

                                                                                </div>

                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">

                                                                                        <label for="">Precio compra</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['precio_compra_producto']; ?>" class="form-control" readonly>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">

                                                                                        <label for="">Precio venta</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['precio_venta_producto']; ?>" class="form-control" readonly>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">

                                                                                        <label for="">Categorias</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['nombre_categoria']; ?>" class="form-control" readonly>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">

                                                                                        <label for="">Usuario</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['nombre']; ?>" class="form-control" readonly>
                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="">Imagen del producto</label>
                                                                                <img src="<?php echo $URL . "/almacen/img_productos/" . $compras_dato['imagen']; ?>" width="100%" alt="">

                                                                            </div>
                                                                        </div>
                                                                    </div>





                                                                </div>



                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->

                                                </td>
                                                <td><?php echo $compras_dato['fecha_compra']; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-proveedor<?php echo $id_compra; ?>">
                                                        <?php echo $compras_dato['nombre_proveedor']; ?> </button>
                                                    <!-- MODAL PARA VISUALIZAR DATOS DEL PROVEEDOR -->
                                                    <div class="modal fade" id="modal-proveedor<?php echo $id_compra; ?>">
                                                        <div class="modal-dialog ">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="background-color: #0A1A81; color:white;">
                                                                    <h4 class="modal-title">Datos del proveedor</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Nombre del proveedor</label>
                                                                                <input type="text" value="<?php echo $compras_dato['nombre_proveedor']; ?>" class="form-control" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Celular del proveedor</label>
                                                                                <a href="https://wa.me/549<?php echo $compras_dato['celular_proveedor']; ?>" type="button" target="_blank" class="btn btn-success">
                                                                                    <i class="fa fa-phone"></i>
                                                                                    <?php echo $compras_dato['celular_proveedor']; ?>
                                                                                </a>

                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Telefono del proveedor</label>
                                                                                <input type="text" value="<?php echo $compras_dato['telefono_proveedor']; ?>" class="form-control" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Empresa</label>
                                                                                <input type="text" value="<?php echo $compras_dato['empresa_proveedor']; ?>" class="form-control" readonly>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Email del proveedor</label>
                                                                                <input type="text" value="<?php echo $compras_dato['email_proveedor']; ?>" class="form-control" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Direccion</label>
                                                                                <input type="text" value="<?php echo $compras_dato['direccion_proveedor']; ?>" class="form-control" readonly>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>



                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->

                                                </td>
                                                <td><?php echo $compras_dato['comprobante']; ?></td>
                                                <td><?php echo $compras_dato['nombre_usuario']; ?></td>
                                                <td>$.<?php echo $compras_dato['precio_de_la_compra']; ?></td>
                                                <td><?php echo $compras_dato['cantidad']; ?></td>


                                                <td>
                                                    <center>
                                                        <div class="btn-group">
                                                            <a href="ver.php?id=<?php echo $id_compra; ?>" type="button" class="btn btn-info btn-sm"> <i class="fas fa-eye"> </i> Ver</a>
                                                            <a href="update.php?id=<?php echo $id_compra; ?>" type="button" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i>Editar</a>
                                                            <a href="delete.php?id=<?php echo $id_compra; ?>" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Borrar</a>
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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Compras",
                "infoEmpty": "Mostrando 0 a 0 de 0 Compras",
                "infoFiltered": "(Filtrado de MAX total Compras)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Compras",
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