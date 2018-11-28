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
        Crear Ficha de Identificación del Expediente Clínico <br>
        <small>llena los campos para crear ficha</small>
      </h1>
    </section>

    <div class="row">
      <div class="col-md-9">
            <!-- Main content -->
            <section class="content">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                                <h3 class="box-title">A) DEL PACIENTE</h3>
                        </div>
                    <div class="box-body">
                                <!-- Form start -->
                                <form  role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo_ficha_paciente.php">
                                <div class="box-body"> 
                                        <div class="form_group col-md-7"></div>                                  
                                        <div class="form-group col-md-5">
                                                <label for="numero_expediente">No. de Expediente Clínico</label>
                                                <input type="text" class="form-control" id="numero_expediente" name="numero_expediente" placeholder="No. Expediente Clínico">
                                        </div>
                        
                                        <div class="form-group col-md-3">
                                                <label for="primer_apellido_paciente">Primer Apellido:</label>
                                                <input type="text" class="form-control" id="primer_apellido_paciente" name="primer_apellido_paciente" placeholder="Primer Apellido">
                                        </div>
                                        <div class="form-group col-md-3">
                                                <label for="segundo_apellido_paciente">Segundo Apellido:</label>
                                                <input type="text" class="form-control" id="segundo_apellido_paciente" name="segundo_apellido_paciente" placeholder="Segundo Apellido">
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="nombres_paciente">Nombres:</label>
                                                <input type="text" class="form-control" id="nombres_paciente" name="nombres_paciente" placeholder="Nombres">
                                        </div>
                                        <div class="form-group col-md-5">
                                                <label for="sexo_paciente">Sexo: </label>
                                                <div class="row">                                                                    
                                                        <div class="col-md-10">
                                                                <div class="form-check form-check-inline col-md-6">
                                                                        <input class="form-check-input" type="radio" name="sexo_paciente" id="sexo_paciente_masculino" value="Masculino">
                                                                        <label class="form-check-label" for="sexo_paciente_masculino">Masculino</label>
                                                                        </div>
                                                                <div class="form-check form-check-inline col-md-6">
                                                                        <input class="form-check-input" type="radio" name="sexo_paciente" id="sexo_paciente_femenino" value="Femenino">
                                                                        <label class="form-check-label" for="sexo_paciente_femenino">Femenino</label>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                                        <div class="input-group date">
                                                                <div class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                                </div>
                                                                <input type="text" class="form-control pull-right fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                        </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                                <label for="edad_paciente">   Edad del Paciente:</label>
                                                        <div class="input-group">
                                                                <div class="form-group col-md-5" >
                                                                        <input type="text" class="form-control" id="edad_paciente" name="edad_paciente">
                                                                </div>
                                                                <div class="form-group col-md-7" >
                                                                        <select class="form-control seleccionar" id="unidad_tiempo" name="unidad_tiempo">
                                                                                <?php 
                                                                                        try{
                                                                                                $sql = "SELECT * FROM unidad_tiempo ";
                                                                                                $resultado = $conn->query($sql);
                                                                                                while($tiempo = $resultado->fetch_assoc()) { ?>
                                                                                                <option value="<?php echo $tiempo['id_unidad_tiempo']; ?>">
                                                                                                        <?php echo $tiempo['descripcion_tiempo']; ?>
                                                                                                </option>
                                                                                                
                                                                                                <?php }
                                                                                        } catch (Exception $e) {
                                                                                                echo "Error: " . $e->getMessage();
                                                                                        }
                                                                                ?>       
                                                                        </select>
                                                                </div>
                                                        </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                                <label for="estado_civil">Estado Civil: </label>
                                                <div class="row">                                                                    
                                                                <select class="form-control seleccionar" id="estado_civil" name="estado_civil">
                                                                        <?php 
                                                                                try{
                                                                                        $sql = "SELECT * FROM estado_civil_paciente ";
                                                                                        $resultado = $conn->query($sql);
                                                                                        while($tiempo = $resultado->fetch_assoc()) { ?>
                                                                                        <option value="<?php echo $tiempo['id_estado_civil']; ?>">
                                                                                                <?php echo $tiempo['descripcion_estado']; ?>
                                                                                        </option>
                                                                                        
                                                                                        <?php }
                                                                                } catch (Exception $e) {
                                                                                        echo "Error: " . $e->getMessage();
                                                                                }
                                                                        ?>       
                                                                </select>
                                                </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                                        <label for="documento_identidad">Documento Legal de Identidad:</label>
                                                        <input type="text" class="form-control" id="documento_identidad" name="documento_identidad" placeholder="Tipo Documento de Identidad">
                                        </div>
                                        <div class="form-group col-md-3">
                                                        <label for="numero_documento">No. Documento:</label>
                                                        <input type="text" class="form-control" id="numero_documento" name="numero_documento" placeholder="No. Documento">
                                        </div>
                                        <div class="form-group col-md-3">
                                                        <label for="ocupacion_paciente">Ocupación:</label>
                                                        <input type="text" class="form-control" id="ocupacion_paciente" name="ocupacion_paciente" placeholder="Ocupación">
                                        </div>
                                        <div class="form-group col-md-7">
                                                <label for="direccion_paciente">Dirección habitual:</label>
                                                <input type="text" class="form-control" id="direccion_paciente" name="direccion_paciente" placeholder="Dirección habitual del paciente">
                                        </div>
                                        <div class="form-group col-md-5">
                                                <label for="telefono_paciente">Teléfono:</label>
                                                <input type="text" class="form-control" id="telefono_paciente" name="telefono_paciente" placeholder="Número Telefónico">
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





