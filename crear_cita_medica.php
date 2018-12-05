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
        Crear Cita Médica 
        <small>llena los campos para crear cita</small>
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
                                <!-- Form start -->
                                <form  role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo_cita_medica.php">
                                <div class="box-body"> 
                                                                                     
                                                <div class="form-group col-md-4 col-md-offset-8">
                                                        <label for="numero_expediente">No. Expediente:</label>
                                                        <select class="form-control seleccionar" id="numero_expediente" name="numero_expediente">
                                                                <option>Digite Número de Expediente</option>
                                                                <?php 
                                                                        try{
                                                                                $sql = "SELECT * FROM datos_paciente ";
                                                                                $resultado = $conn->query($sql);
                                                                                while($numero_expediente = $resultado->fetch_assoc()) { ?>
                                                                                <option value="<?php echo $numero_expediente['id_paciente']; ?>">
                                                                                        <?php echo $numero_expediente['numero_expediente']; ?>
                                                                                </option>
                                                                                
                                                                                <?php }
                                                                        } catch (Exception $e) {
                                                                                echo "Error: " . $e->getMessage();
                                                                        }
                                                                ?>       
                                                        </select>
                                                </div>
                                        
                                                <div class="form-group col-md-8">
                                                        <label for="nombre_paciente">Nombre Paciente:</label>
                                                        <input type="text" class="form-control" id="nombre_paciente" name="nombre_paciente" placeholder="Nombre Paciente">
                                                </div>
                                                                                      
                                                <div class="form-group col-md-5">
                                                        <label for="area_medica">Área :</label>
                                                        <select class="form-control seleccionar" id="area_medica" name="area_medica">
                                                                <option>Seleccione Área Médica</option>
                                                                <?php 
                                                                        try{
                                                                                $sql = "SELECT * FROM categoria_personal_medico ";
                                                                                $resultado = $conn->query($sql);
                                                                                while($area_medica = $resultado->fetch_assoc()) { ?>
                                                                                <option value="<?php echo $area_medica['id_categoria_personal_medico']; ?>">
                                                                                        <?php echo $area_medica['cat_personal_medico']; ?>
                                                                                </option>
                                                                                
                                                                                <?php }
                                                                        } catch (Exception $e) {
                                                                                echo "Error: " . $e->getMessage();
                                                                        }
                                                                ?>       
                                                        </select>
                                                </div>
                                                <div class="form-group col-md-5 col-md-offset-1">
                                                        <label for="especialidad_medica">Especialidad:</label>
                                                        <input type="text" class="form-control" id="especialidad_medica" name="especialidad_medica" placeholder="Especialidad Médica">
                                                </div>
                                       
                                                <div class="form-group col-md-6">
                                                        <label for="nombre_medico">Médico:</label>
                                                        <input type="text" class="form-control" id="nombre_medico" name="nombre_medico" placeholder="Nombre Médico">
                                                </div>                                        
                                                <div class="form-group col-md-3">
                                                        <label for="fecha_cita">Fecha Cita:</label>
                                                                <div class="input-group date">
                                                                        <div class="input-group-addon">
                                                                        <i class="fa fa-calendar"></i>
                                                                        </div>
                                                                        <input type="text" class="form-control pull-right fecha" id="fecha_cita" name="fecha_cita">
                                                                </div>
                                                </div>
                                                <div class="bootstrap-timepicker col-md-3">
                                                    <div class="form-group">
                                                        <label>Hora Cita:</label>
                                                            <div class="input-group">
                                                                    <input type="text" class="form-control timepicker" name="hora_cita">
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
                                        <input type="hidden" name="registro" value="nuevo">
                                        <button type="submit" class="btn btn-primary" id="crear_registro">Agregar</button>
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
?>





