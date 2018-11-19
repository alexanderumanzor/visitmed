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
        Editar Categoria del Personal Médico <br>
        <small>llena el formulario para editar una Categoria del Personal Médico</small>
      </h1>
    </section>

    <div class="row">
      <div class="col-md-8">
      
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Categoria Personal Médico</h3>
            </div>
            <div class="box-body">
                <?php
                    $sql = "SELECT * FROM categoria_personal_medico WHERE  id_categoria_personal_medico = $id";
                    $resultado = $conn->query($sql);
                    $categoria_medica = $resultado->fetch_assoc();
                ?>
                <!-- form start -->
                <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo_categoria_medica.php">
                      <div class="box-body">
                            <div class="form-group">
                                <label for="nombre_categoria_medica">Categoria Personal Médica:</label>
                                <input type="text" class="form-control" id="nombre_categoria_medica" name="nombre_categoria_medica" placeholder="Categoria Personal Médico" value="<?php echo $categoria_medica['cat_personal_medico']; ?>">
                            </div>
                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                          <input type="hidden" name="registro" value="actualizar">
                          <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                          <button type="submit" class="btn btn-primary" id="crear_registro_categoria_medica">Guardar</button>
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
