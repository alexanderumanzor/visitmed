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
            Listado del Personal Médico
            <small></small>
          </h1>
    </section>

   <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja el listado de Citas Médicas por Médicos en esta sección</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Fecha y Hora</th>
                  <th>Especialidad</th>
                  <th>Médico</th>
                  <th>Paciente</th>
                  <th>No Expediente</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                     try {
                        $sql = "SELECT fecha_cita, hora_cita, especial_medico, nombre_medico, nombre_paciente, primer_apellido_paciente, segundo_apellido_paciente, numero_expediente, id_cita  ";
                        $sql .= " FROM cita_medica ";
                        $sql .= " INNER JOIN datos_paciente ";
                        $sql .= " ON cita_medica.id_expediente=datos_paciente.id_paciente ";
                        $sql .= " ORDER BY id_paciente";
                        $resultado = $conn->query($sql);
                     } catch (Exception $e) {
                        $error = $e->getMessage();
                        echo $error;
                     }      
                     while($cita_medico = $resultado->fetch_assoc() ) { ?>
                          <tr>
                              <td><?php echo $cita_medico['fecha_cita'] . " " . $cita_medico['hora_cita']; ?></td>
                              <td><?php echo $cita_medico['cat_personal_medico']; ?></td>
                              <td><?php echo $cita_medico['especial_medico']; ?></td>
                              <td><?php echo $cita_medico['nombre_medico']; ?></td>
                              <td><?php echo $cita_medico['nombre_paciente'] . " " . $cita_medico['primer_apellido_paciente'] . " " . $cita_medico['segundo_apellido_paciente']; ?></td>
                              <td><?php echo $cita_medico['numero_expediente']; ?></td>
                              <td>
                                <a href="editar_personal_medico.php?id=<?php echo $cita_medico['id_cita']; ?>" class="btn btn-info btn-flat margin ">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="#" data-id="<?php echo $cita_medico['id_cita']; ?>" data-tipo="personal_medico" class="btn btn-danger btn-flat margin borrar_registro">
                                    <i class="fa fa-trash"></i>
                                </a>
                              </td>
                          </tr>
                     <?php } ?>                    
                </tbody>
                <tfoot>
                <tr>
                  <th>Fecha y Hora</th>
                  <th>Especialidad</th>
                  <th>Médico</th>
                  <th>Paciente</th>
                  <th>No Expediente</th>
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

