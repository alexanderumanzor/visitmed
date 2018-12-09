<?php
    $id = $_GET['id'];

    if(!filter_var($id, FILTER_VALIDATE_INT)):
    die("Error");
    else:
    include_once 'funciones/sesiones.php';
    include_once 'funciones/funciones.php';
    include_once 'templates/header.php';

?>
<body onload="window.print();">
    <?php
            $sql = "SELECT `fecha_cita`, `hora_cita`, `especial_medico`, `nombre_medico`, `nombre_paciente`, `primer_apellido_paciente`, `segundo_apellido_paciente`, `numero_expediente`, `id_cita`  ";
            $sql .= " FROM `cita_medica` ";
            $sql .= " INNER JOIN `datos_paciente` ";
            $sql .= " ON `cita_medica`.`id_expediente`=`datos_paciente`.`id_paciente` ";
            $sql .= " ORDER BY `id_paciente` ";
            $resultado = $conn->query($sql);
            $cita_medico = $resultado->fetch_assoc();
    ?>
    <!-- Main content -->
    <section class="invoice">
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
    </section>
</body>

<?php
    endif;
?>






