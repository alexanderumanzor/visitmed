<?php
      $id = $_GET['id'];

      if(!filter_var($id, FILTER_VALIDATE_INT)):
        die("Error");
      else:
      include_once 'funciones/sesiones.php';
      include_once 'funciones/funciones.php';
      include_once 'templates/header.php';
      include_once 'templates/barra.php';
      include_once 'templates/navegacion.php';
      
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar Categoria Usuario
        <small>llena el formulario para Editar la Categoria  Usuario</small>
      </h1>
    </section>

    <div class="row">
      <div class="col-md-8">
      
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Categoria Usuario</h3>
            </div>
            <div class="box-body">
                <?php
                    $sql = "SELECT * FROM categoria_usuario WHERE  id_categoria_usuario = $id";
                    $resultado = $conn->query($sql);
                    $categoria_usuario = $resultado->fetch_assoc();
                ?>
                <!-- form start -->
                <form role="form" name="guardar-registro" id="guardar-registro" method="POST" action="modelo_categoria_usuario.php">
                      <div class="box-body">
                            <div class="form-group">
                                <label for="categoria_usuario">Categoria Usuario:</label>
                                <input type="text" class="form-control" id="nombre_categoria_usuario" name="nombre_categoria_usuario"  placeholder="Categoria Usuario" value="<?php echo $categoria_usuario['cat_usuario']; ?>">
                            </div>
                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                          <input type="hidden" name="registro" value="actualizar">
                          <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                          <button type="submit" class="btn btn-primary" id="crear_registro_categoria">Guardar</button>
                      </div>
                </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </section>
        <!-- /.content -->
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

  <?php
        include_once 'templates/footer.php';
        endif;
  ?>

