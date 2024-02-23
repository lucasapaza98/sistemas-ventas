<?php
require_once("../app/config.php");
require_once("../layout/sesion.php");

require_once("../layout/parte1.php");

require_once("../app/controllers/categoria/listado_de_categorias.php");
require_once("../app/controllers/almacen/cargar_producto.php");





?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Actualizar de un nuevo producto</h1>
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
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Actualizar los datos con cuidado</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controllers/almacen/update.php" method="POST" enctype="multipart/form-data">

                                    <input type="text" value="<?php echo $id_producto_get;?>" name="id_producto" hidden>


                                        <div class="row">
                                            <div class="col-md-9">

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Código:</label>

                                                            <input type="text" class="form-control" value="<?php echo $codigo; ?>" disabled>
                                                            <input type="text" name="codigo" value="<?php echo $codigo; ?>" hidden>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Categoria:</label>
                                                            <div style="display: flex;">
                                                                <select name="categoria" id="" class="form-control" required>
                                                                    <?php
                                                                    foreach ($categoria_datos as $categoria_dato) {
                                                                        $nombre_categoria_tabla = $categoria_dato['nombre_categoria'];
                                                                        $id_categoria = $categoria_dato['id_categoria'];
                                                                    ?>
                                                                        <option value="<?php echo $id_categoria; ?>" <?php if ($nombre_categoria_tabla == $nombre_categoria) { ?> selected="selected" <?php }?>>   
                                                                          <?php echo $nombre_categoria_tabla; ?>
                                                                        </option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Nombre del producto:</label>
                                                            <input type="text" name="nombre_producto" class="form-control" value="<?php echo $nombre_producto;?>" required>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Usuario:</label>
                                                            <input type="text" class="form-control" value="<?php echo $nombre_usuario; ?>" disabled>
                                                            <input type="text" name="id_usuario" value="<?php echo $id_usuario; ?>" hidden>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="">Descripción del producto:</label>
                                                            <textarea name="descripcion_producto" id="" cols="30" rows="2" class="form-control" ><?=$descripcion_producto;?></textarea>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Stock:</label>
                                                            <input type="number" name="stock" class="form-control"  value="<?= $stock;?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Stock mínimo</label>
                                                            <input type="number" name="stock_minimo" class="form-control" value="<?= $stock_minimo ;?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Stock máximo:</label>
                                                            <input type="number" name="stock_maximo" class="form-control" value="<?= $stock_maximo ;?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Precio compra: </label>
                                                            <input type="number" name="precio_compra" class="form-control" value="<?= $precio_compra ;?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Precio venta: </label>
                                                            <input type="number" name="precio_venta" class="form-control" value="<?= $precio_venta;?>" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Fecha de ingreso: </label>
                                                            <input type="date" name="fecha_ingreso" class="form-control"  value="<?= $fecha_ingreso ;?>"required>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Imagen del producto:</label>
                                                    <input type="file" name="image" id="file" class="form-control">
                                                    <input type="text" name="image_text" value="<?php echo $imagen;?>" hidden>
                                                    <br>
                                                    <output id="list">
                                                            <img src="<?php echo $URL."/almacen/img_productos/".$imagen;?>" alt="" width="100%">
                                                    </output>
                                                    <br>
                                                    <script>
                                                        function archivo(evt) {
                                                            var files = evt.target.files; // FileList object
                                                            // Obtenemos la imagen del campo "file".
                                                            for (var i = 0, f; f = files[i]; i++) {
                                                                //Solo admitimos imágenes.
                                                                if (!f.type.match('image.*')) {
                                                                    continue;
                                                                }
                                                                var reader = new FileReader();
                                                                reader.onload = (function(theFile) {
                                                                    return function(e) {
                                                                        // Insertamos la imagen
                                                                        document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="', e.target.result, '" width="100%" title="', escape(theFile.name), '"/>'].join('');
                                                                    };
                                                                })(f);
                                                                reader.readAsDataURL(f);
                                                            }
                                                        }
                                                        document.getElementById('file').addEventListener('change', archivo, false);
                                                    </script>
                                                </div>
                                            </div>
                                        </div>




                                        <hr>
                                        <div class="form-group">
                                            <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                            <button type="submit" class="btn btn-success">Actualizar producto</button>
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