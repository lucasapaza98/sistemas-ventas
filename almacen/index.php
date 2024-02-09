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

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Productos registrados</h3>
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
                                                <center>Fecha compra</center>
                                            </th>

                                            <th>
                                                <center>Fecha venta</center>
                                            </th>

                                            <th>
                                                <center>Fecha Ingreso</center>
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
                                                    <img src="<?php echo $URL . "/almacen/img_productos/" . $productos_dato['imagen']; ?>" width="100px" alt="">
                                                </td>
                                                <td><?php echo $productos_dato['descripcion_producto']; ?></td>
                                                <td><?php echo $productos_dato['stock']; ?></td>

                                                <td>$.<?php echo $productos_dato['precio_compra']; ?></td>
                                                <td>$.<?php echo $productos_dato['precio_venta']; ?></td>
                                                <td><?php echo $productos_dato['fecha_ingreso']; ?></td>

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