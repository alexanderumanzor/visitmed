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
                                <h3 class="box-title">C) DE LA INFORMACION</h3>
                        </div>
                    <div class="box-body">
                                <!-- Form start -->
                                <form  role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo_ficha_informacion.php">
                                <div class="box-body"> 
                                        <div class="form-group col-md-7">
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
                                        <div class="form-group col-md-5">
                                                
                                        </div>
                                        <div class="form-group col-md-8">
                                                <label for="nombre_informante">Proporcionó datos personales del paciente:</label>
                                                <input type="text" class="form-control" id="nombre_informante" name="nombre_informante" placeholder="Nombres y Apellidos Completos">
                                        </div>
                                        <div class="form-group col-md-4">
                                                <label for="parentesco_informante">Parentesco:</label>
                                                <input type="text" class="form-control" id="parentesco_informante" name="parentesco_informante" placeholder="Parentesco">
                                        </div>
                                        <div class="form-group col-md-3">
                                                <label for="documento_identidad_informante">Documento de identidad:</label>
                                                <input type="text" class="form-control" id="documento_identidad_informante" name="documento_identidad_informante" placeholder="Tipo de Documento">
                                        </div>
                                        <div class="form-group col-md-3">
                                                <label for="numero_documento_informante">No. Documento:</label>
                                                <input type="text" class="form-control" id="numero_documento_informante" name="numero_documento_informante" placeholder="Número Documento de Identidad">
                                        </div>
                                        <div class="form-group col-md-3">
                                                <label for="usuario_recepcion">Tomo información:</label>
                                                <input type="text" class="form-control" id="usuario_recepcion" name="usuario_recepcion" placeholder="Nombre de Recepcionista">
                                        </div>
                                        <div class="form-group col-md-3">
                                                <label for="fecha_inscripcion">Fecha de inscripción:</label>
                                                        <div class="input-group date">
                                                                <div class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                                </div>
                                                                <input type="text" class="form-control pull-right fecha" id="fecha_inscripcion" name="fecha_inscripcion">
                                                        </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                                <label for="observaciones_inscripcion">Observaciones:</label>
                                                <textarea class="form-control" id="observaciones_inscripciones" name="observaciones_inscripciones" rows="3"></textarea>
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





