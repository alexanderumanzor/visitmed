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
              <h3 class="box-title">Maneja el listado del personal médico en esta sección</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>N° Empleado</th>
                  <th>Cargo</th>
                  <th>Nombre</th>
                  <th>Área</th>
                  <th>Especialidad</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                     try {
                        $sql = "SELECT id_personal_medico, numero_empleado, cargo_medico, nombre_personal_medico, apellido_personal_medico, cat_personal_medico, especialidad_medica  ";
                        $sql .= " FROM personal_medico ";
                        $sql .= " INNER JOIN categoria_personal_medico ";
                        $sql .= " ON personal_medico.id_cat_per_medico=categoria_personal_medico.id_categoria_personal_medico ";
                        $sql .= " ORDER BY id_categoria_personal_medico";
                        $resultado = $conn->query($sql);
                     } catch (Exception $e) {
                        $error = $e->getMessage();
                        echo $error;
                     }      
                     while($personal_medico = $resultado->fetch_assoc() ) { ?>
                          <tr>
                              <td><?php echo $personal_medico['numero_empleado']; ?></td>
                              <td><?php echo $personal_medico['cargo_medico']; ?></td>
                              <td><?php echo $personal_medico['nombre_personal_medico'] . " " . $personal_medico['apellido_personal_medico']; ?></td>
                              <td><?php echo $personal_medico['cat_personal_medico']; ?></td>
                              <td><?php echo $personal_medico['especialidad_medica']; ?></td>
                              <td>
                                <a href="editar_personal_medico.php?id=<?php echo $personal_medico['id_personal_medico']; ?>" class="btn btn-info btn-flat margin ">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="#" data-id="<?php echo $personal_medico['id_personal_medico']; ?>" data-tipo="personal_medico" class="btn btn-danger btn-flat margin borrar_registro">
                                    <i class="fa fa-trash"></i>
                                </a>
                              </td>
                          </tr>
                     <?php } ?>                    
                </tbody>
                <tfoot>
                <tr>
                  <th>N° Empleado</th>
                  <th>Cargo</th>
                  <th>Nombre</th>
                  <th>Área</th>
                  <th>Especialidad</th>
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

