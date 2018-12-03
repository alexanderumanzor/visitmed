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
            Listado de Datos Familiares del Paciente
            <small></small>
          </h1>
    </section>

   <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja los datos en esta sección</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No Expediente</th>
                  <th>Nombre Paciente</th>
                  <th>Informante</th>
                  <th>Parentesco</th>
                  <th>No Documento Identidad</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                     try {
                        $sql = "SELECT numero_expediente, primer_apellido_paciente, segundo_apellido_paciente, nombre_paciente, nombre_informante, parentesco_informante, numero_documento_informante, id_informante_paciente  ";
                        $sql .= " FROM datos_informante ";
                        $sql .= " INNER JOIN datos_paciente ";
                        $sql .= " ON datos_informante.numero_paciente_informante=datos_paciente.id_paciente ";
                        $sql .= " ORDER BY numero_expediente";
                        $resultado = $conn->query($sql);
                     } catch (Exception $e) {
                        $error = $e->getMessage();
                        echo $error;
                     }      
                     while($ficha_familia = $resultado->fetch_assoc() ) { ?>
                          <tr>
                              <td><?php echo $ficha_familia['numero_expediente']; ?></td>
                              <td><?php echo $ficha_familia['nombre_paciente'] . " " . $ficha_familia['primer_apellido_paciente'] . " " . $ficha_familia['segundo_apellido_paciente']; ?></td>
                              <td><?php echo $ficha_familia['nombre_informante']; ?></td>
                              <td><?php echo $ficha_familia['parentesco_informante'];  ?></td>
                              <td><?php echo $ficha_familia['numero_documento_informante']; ?></td>
                              <td>
                                <a href="editar_ficha_informacion.php?id=<?php echo $ficha_familia['id_informante_paciente']; ?>" class="btn btn-info btn-flat margin ">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="#" data-id="<?php echo $ficha_familia['id_informante_paciente']; ?>" data-tipo="ficha_informacion" class="btn btn-danger btn-flat margin borrar_registro">
                                    <i class="fa fa-trash"></i>
                                </a>
                              </td>
                          </tr>
                     <?php } ?>                    
                </tbody>
                <tfoot>
                <tr>
                  <th>No Expediente</th>
                  <th>Nombre Paciente</th>
                  <th>Informante</th>
                  <th>Parentesco</th>
                  <th>No Documento Identidad</th>
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

