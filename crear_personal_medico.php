<?php
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
        Crear Usuario para Personal Médico <br>
        <small>llena el formulario para crear un Usuario para Personal Médico</small>
      </h1>
    </section>

    <div class="row">
      <div class="col-md-8">
      
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Usuario para Personal Médico</h3>
            </div>
            <div class="box-body">
                <!-- form start -->
                <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo_personal_medico.php">
                      <div class="box-body">
                            <div class="form-group">
                                <label for="numero_empleado">N° Empleado:</label>
                                <input type="text" class="form-control" id="numero_empleado" name="numero_empleado" placeholder="Número Empleado">
                            </div>
                            <div class="form-group">
                                <label for="categoria_personal_medico">Área:</label>
                                <select name="categoria_personal_medico" class="form-control seleccionar">
                                  <option value="0">- Seleccione -</option>
                                    <?php 
                                      try{
                                          $sql = "SELECT * FROM categoria_personal_medico ";
                                          $resultado = $conn->query($sql);
                                          while($cat_personal_medico = $resultado->fetch_assoc()) { ?>
                                            <option value="<?php echo $cat_personal_medico['id_categoria_personal_medico']; ?>">
                                                <?php echo $cat_personal_medico['cat_personal_medico']; ?>
                                            </option>
                                        
                                        <?php }
                                      } catch (Exception $e) {
                                          echo "Error: " . $e->getMessage();
                                      }
                                    ?>                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cargo_medico">Cargo:</label>
                                <input type="text" class="form-control" id="cargo_medico" name="cargo_medico" placeholder="Cargo Médico">
                            </div> 
                            <div class="form-group">
                                <label for="nombre_personal_medico">Nombre:</label>
                                <input type="text" class="form-control" id="nombre_personal_medico" name="nombre_personal_medico" placeholder="Nombre Completo">
                            </div>
                            <div class="form-group">
                                <label for="apellido_personal_medico">Apellido:</label>
                                <input type="text" class="form-control" id="apellido_personal_medico" name="apellido_personal_medico" placeholder="Apellido Completo">
                            </div>
                            <div class="form-group">
                                <label for="especialidad_medica">Especialidad:</label>
                                <input type="text" class="form-control" id="especialidad_medica" name="especialidad_medica" placeholder="Especialidad Médica">
                            </div>                            
                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                          <input type="hidden" name="registro" value="nuevo">
                          <button type="submit" class="btn btn-primary" id="crear_registro_personal_medico">Agregar</button>
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
  ?>

