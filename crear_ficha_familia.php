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
                                <h3 class="box-title">B) DE LA FAMILIA</h3>
                        </div>
                    <div class="box-body">
                                <!-- Form start -->
                                <form  role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo_ficha_familia.php">
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
                                        <div class="form-group col-md-6">
                                                <label for="nombre_padre">Nombre del Padre:</label>
                                                <input type="text" class="form-control" id="nombre_padre" name="nombre_padre" placeholder="Nombre Completo del Padre">
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="nombre_madre">Nombre de la Madre:</label>
                                                <input type="text" class="form-control" id="nombre_madre" name="nombre_madre" placeholder="Nombre Completo de la Madre">
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="nombre_conyugue">Nombre del Conyugue:</label>
                                                <input type="text" class="form-control" id="nombre_conyugue" name="nombre_conyugue" placeholder="Nombre Completo del Conyugue">
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="responsable_paciente">Responsable del paciente:</label>
                                                <input type="text" class="form-control" id="responsable_paciente" name="responsable_paciente" placeholder="Datos del responsable del paciente">
                                        </div>
                                        <div class="form-group col-md-8">
                                                <label for="direccion_responsable">Dirección del responsable:</label>
                                                <input type="text" class="form-control" id="direccion_responsable" name="direccion_responsable" placeholder="Dirección responsable del paciente">
                                        </div>
                                        <div class="form-group col-md-4">
                                                <label for="telefono_responsable">Teléfono:</label>
                                                <input type="text" class="form-control" id="telefono_responsable" name="telefono_responsable" placeholder="Número Telefónico">
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





