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
        Editar Cita Médica 
        <small>llena los campos para editar cita</small>
      </h1>
    </section>

    <div class="row">
      <div class="col-md-9">
            <!-- Main content -->
            <section class="content">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                                <h3 class="box-title"></h3>
                        </div>
                    <div class="box-body">
                            <?php
                                $sql = "SELECT * FROM cita_medica WHERE  id_cita = $id";
                                $resultado = $conn->query($sql);
                                $cita_medica = $resultado->fetch_assoc();
                            ?>
                                <!-- Form start -->
                                <form  role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo_cita_medica.php">
                                <div class="box-body"> 
                                                                                     
                                                <div class="form-group col-md-4 col-md-offset-8">
                                                        <label for="numero_expediente">No. Expediente:</label>
                                                        <select class="form-control seleccionar" id="numero_expediente" name="numero_expediente">
                                                                <option>Digite Número de Expediente</option>
                                                                <?php 
                                                                try{
                                                                        $categoria_actual = $cita_medica['id_expediente'];    
                                                                        $sql = "SELECT * FROM datos_paciente ";
                                                                        $resultado = $conn->query($sql);
                                                                        while($numero_expediente = $resultado->fetch_assoc()) { 
                                                                            if($numero_expediente['id_paciente'] == $categoria_actual) { ?>
                                                                        <option value="<?php echo $numero_expediente['id_paciente']; ?>" selected>
                                                                                <?php echo $numero_expediente['numero_expediente']; ?>
                                                                        </option>
                                                                        <?php } else { ?>
                                                                            <option value="<?php echo $numero_expediente['id_paciente']; ?>">
                                                                                <?php echo $numero_expediente['numero_expediente']; ?>
                                                                        </option>
                                                                        <?php }
                                                                        }
                                                                } catch (Exception $e) {
                                                                        echo "Error: " . $e->getMessage();
                                                                }
                                                        ?>        
                                                        </select>
                                                </div>
                                        
                                                <div class="form-group col-md-8">
                                                        <label for="nombre_paciente">Nombre Paciente:</label>
                                                        <input type="text" class="form-control" id="nombre_paciente" name="nombre_paciente" placeholder="Nombre Paciente" value="<?php echo $cita_medica['nombres_paciente']; ?>">
                                                </div>
                                                                                      
                                                <div class="form-group col-md-5">
                                                        <label for="area_medica">Área :</label>
                                                        <select class="form-control seleccionar" id="area_medica" name="area_medica">
                                                                <option>Seleccione Área Médica</option>
                                                                <?php 
                                                                        try{
                                                                                $categoria_actual = $cita_medica['area_medica'];    
                                                                                $sql = "SELECT * FROM categoria_personal_medico ";
                                                                                $resultado = $conn->query($sql);
                                                                                while($area_medica = $resultado->fetch_assoc()) { 
                                                                                    if($area_medica['id_categoria_personal_medico'] == $categoria_actual) { ?>
                                                                                <option value="<?php echo $area_medica['id_categoria_personal_medico']; ?>" selected>
                                                                                        <?php echo $area_medica['cat_personal_medico']; ?>
                                                                                </option>                                                                                
                                                                                <?php } else { ?>
                                                                                    <option value="<?php echo $area_medica['id_categoria_personal_medico']; ?>">
                                                                                        <?php echo $area_medica['cat_personal_medico']; ?>
                                                                                    </option>
                                                                                <?php }
                                                                                }    
                                                                        } catch (Exception $e) {
                                                                                echo "Error: " . $e->getMessage();
                                                                        }
                                                                ?>       
                                                        </select>
                                                </div>
                                                <div class="form-group col-md-5 col-md-offset-1">
                                                        <label for="especialidad_medica">Especialidad:</label>
                                                        <input type="text" class="form-control" id="especialidad_medica" name="especialidad_medica" placeholder="Especialidad Médica" value="<?php echo $cita_medica['especial_medico']; ?>">
                                                </div>
                                       
                                                <div class="form-group col-md-6">
                                                        <label for="nombre_medico">Médico:</label>
                                                        <input type="text" class="form-control" id="nombre_medico" name="nombre_medico" placeholder="Nombre Médico" value="<?php echo $cita_medica['nombre_medico']; ?>">
                                                </div>                                        
                                                <div class="form-group col-md-3">
                                                        <label for="fecha_cita">Fecha Cita:</label>
                                                        <?php
                                                                $fecha = $cita_medica['fecha_cita'];
                                                                $fecha_cita = date('m/d/Y', strtotime($fecha));
                                                        ?>
                                                                <div class="input-group date">
                                                                        <div class="input-group-addon">
                                                                        <i class="fa fa-calendar"></i>
                                                                        </div>
                                                                        <input type="text" class="form-control pull-right fecha" id="fecha_cita" name="fecha_cita" value="<?php echo $fecha_cita; ?>">
                                                                </div>
                                                </div>
                                                <div class="bootstrap-timepicker col-md-3">
                                                    <div class="form-group">
                                                        <label>Hora Cita:</label>
                                                        <?php
                                                            $hora = $cita_medica['hora_cita'];
                                                            $hora_cita = date('h:i a', strtotime($hora));
                                                        ?>
                                                            <div class="input-group">
                                                                    <input type="text" class="form-control timepicker" name="hora_cita" value="<?php echo $hora_cita; ?>">
                                                                    <div class="input-group-addon">
                                                                        <i class="fa fa-clock-o"></i>
                                                                    </div>
                                                            </div>
                                                            <!-- /.input group -->
                                                    </div>
                                                    <!-- /.form group -->
                                                </div>
                                        
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                        <input type="hidden" name="registro" value="actualizar">
                                        <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                                        <button type="submit" class="btn btn-primary" id="crear_registro_cita_medica">Guardar</button>
                            </div>
                            <!-- /.box-footer-->   
                            </form><!-- / .Form end -->  
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






