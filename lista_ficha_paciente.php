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
            Listado de Usuarios
            <small></small>
          </h1>
    </section>

   <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja los usuarios en esta sección</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No Expediente</th>
                  <th>Nombre</th>
                  <th>Sexo</th>
                  <th>Edad</th>
                  <th>Ocupación</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                     try {
                        $sql = "SELECT numero_expediente, primer_apellido_paciente, segundo_apellido_paciente, nombre_paciente, sexo_paciente, edad_paciente, descripcion_tiempo, ocupacion_paciente, id_paciente  ";
                        $sql .= " FROM datos_paciente ";
                        $sql .= " INNER JOIN unidad_tiempo ";
                        $sql .= " ON datos_paciente.unidad_tiempo=unidad_tiempo.id_unidad_tiempo ";
                        $sql .= " ORDER BY numero_expediente";
                        $resultado = $conn->query($sql);
                     } catch (Exception $e) {
                        $error = $e->getMessage();
                        echo $error;
                     }      
                     while($ficha_paciente = $resultado->fetch_assoc() ) { ?>
                          <tr>
                              <td><?php echo $ficha_paciente['numero_expediente']; ?></td>
                              <td><?php echo $ficha_paciente['nombre_paciente'] . " " . $ficha_paciente['primer_apellido_paciente'] . " " . $ficha_paciente['segundo_apellido_paciente']; ?></td>
                              <td><?php echo $ficha_paciente['sexo_paciente']; ?></td>
                              <td><?php echo $ficha_paciente['edad_paciente'] . " " . $ficha_paciente['descripcion_tiempo'];  ?></td>
                              <td><?php echo $ficha_paciente['ocupacion_paciente']; ?></td>
                              <td>
                                <a href="editar_ficha_paciente.php?id=<?php echo $ficha_paciente['id_paciente']; ?>" class="btn btn-info btn-flat margin ">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="#" data-id="<?php echo $ficha_paciente['id_paciente']; ?>" data-tipo="ficha_paciente" class="btn btn-danger btn-flat margin borrar_registro">
                                    <i class="fa fa-trash"></i>
                                </a>
                              </td>
                          </tr>
                     <?php } ?>                    
                </tbody>
                <tfoot>
                <tr>
                  <th>No Expediente</th>
                  <th>Nombre</th>
                  <th>Sexo</th>
                  <th>Edad</th>
                  <th>Ocupación</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
        include_once 'templates/footer.php';
  ?>

