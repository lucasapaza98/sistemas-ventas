<?php
require_once("../app/config.php");
require_once("../layout/sesion.php");

require_once("../layout/parte1.php");
require_once("../app/controllers/usuarios/listado_de_usuarios.php");



?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de usuarios</h1>
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
                            <h3 class="card-title">Usuarios registrados</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>

                                        <th>
                                            <center>#</center>
                                        </th>


                                        <th>
                                            <center>Nombres</center>
                                        </th>


                                        <th>
                                            <center>Email</center>
                                        </th>

                                        <th><center>Rol del usuario</center></th>

                                        <th>
                                            <center>Acciones</center>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $contador = 1;
                                    foreach ($usuarios_datos as $usuarios_dato) {

                                        $id_usuario = $usuarios_dato['id_usuario']; ?>
                                        <tr>

                                            <td>
                                                <center><?php echo $contador++; ?></center>
                                            </td>


                                            <td><?php echo $usuarios_dato['nombre']; ?></td>
                                            <td><?php echo $usuarios_dato['email']; ?></td>
                                            <td><center><?php echo $usuarios_dato['rol']; ?></center></td>


                                            <td>
                                                <center>
                                                    <div class="btn-group">
                                                        <a href="ver.php?id=<?php echo $id_usuario; ?>" type="button" class="btn btn-info"> <i class="fas fa-eye"> </i> Ver</a>
                                                        <a href="update.php?id=<?php echo $id_usuario; ?>" type="button" class="btn btn-success"><i class="fas fa-pencil-alt"></i>Editar</a>
                                                        <a href="delete.php?id=<?php echo $id_usuario; ?>" type="button" class="btn btn-danger"><i class="fas fa-trash"></i>Borrar</a>
                                                    </div>

                                                </center>
                                            </td>

                                        </tr>

                                    <?php
                                    }
                                    ?>

                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>
                                            <center>#</center>
                                        </th>


                                        <th>
                                            <center>Nombres</center>
                                        </th>


                                        <th>
                                            <center>Email</center>
                                        </th>

                                        <th><center>Rol del usuario</center></th>


                                        <th>
                                            <center>Acciones</center>
                                        </th>

                                    </tr>
                                </tfoot>
                            </table>
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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
                "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                "infoFiltered": "(Filtrado de MAX total Usuarios)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Usuarios",
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