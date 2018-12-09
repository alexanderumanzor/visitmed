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

<div class="content-wrapper">
    <?php
            $sql = "SELECT `fecha_cita`, `hora_cita`, `especial_medico`, `nombre_medico`, `nombre_paciente`, `primer_apellido_paciente`, `segundo_apellido_paciente`, `numero_expediente`, `id_cita`  ";
            $sql .= " FROM `cita_medica` ";
            $sql .= " INNER JOIN `datos_paciente` ";
            $sql .= " ON `cita_medica`.`id_expediente`=`datos_paciente`.`id_paciente` ";
            $sql .= " ORDER BY `id_paciente` ";
            $resultado = $conn->query($sql);
            $cita_medico = $resultado->fetch_assoc();
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reporte #<?php echo $cita_medico['id_cita']; ?>
      </h1>
    </section>


    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> VisitMed
            <small class="pull-right">Fecha: <?php echo date('d/m/Y');?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info pull-center">
        <div class="col-xs-10 invoice-col">
        <?php
            $hora = $cita_medico['hora_cita'];
            $hora_cita = date('h:i a', strtotime($hora));
            $fecha = $cita_medico['fecha_cita'];
            $fecha_cita = date('d/m/Y', strtotime($fecha));
        ?>
            <div align="center">
            <address>
                <h1><strong>Cita Médica</strong></h1>
                <h2><strong>Fecha:</strong> <?php echo $fecha_cita; ?></h2>
                <h2><strong>Hora:</strong> <?php echo $hora_cita; ?></h2>
                <h2><strong>Especialidad:</strong><br><?php echo $cita_medico['especial_medico']; ?></h2>
                <h2><strong>Médico:</strong><br><?php echo $cita_medico['nombre_medico']; ?></h2>
                <h2><strong>Paciente: </strong></h2><h3><?php echo $cita_medico['nombre_paciente']; ?><br><?php echo $cita_medico['primer_apellido_paciente'] . " " . $cita_medico['segundo_apellido_paciente']; ?></h3>
                <h3><strong>No. Expediente: </strong><br><?php echo $cita_medico['numero_expediente']; ?></h3>                                                            
            </address>
            </div>
        </div>
        <!-- /.col -->
        
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12" align="right">
            <a href="imprimir_cita_medica.php?id=<?php echo $cita_medico['id_cita']; ?>" target="_blank" class="btn btn-success" ><i class="fa fa-print" ></i> Imprimir</a>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>

<?php
    include_once 'templates/footer.php';
    endif;
?>






