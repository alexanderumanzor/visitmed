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
                            <div class="box-body">
                                <!-- Form start -->
                                    <form  role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo_expediente_medico.php">
                                                <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                                <label for="numero_expediente">No. de Expediente Clínico</label>
                                                                <input type="text" class="form-control" id="numero_expediente" name="numero_expediente" placeholder="No. Expediente Clínico">
                                                        </div>
                                                </div>                                          
                                    </form><!-- / .Form end -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box">
                        <div class="box-header with-border">
                        <h3 class="box-title">A) DEL PACIENTE</h3>
                        </div>
                            <div class="box-body">
                                <!-- Form start -->
                                    <form  role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo_expediente_medico.php">
                                                <div class="form-row">
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
                                                        <div class="form-group col-md-6">
                                                                <label for="">Sexo: </label>
                                                                <div class="row">                                                                    
                                                                        <div class="col-md-8">
                                                                                <div class="form-check form-check-inline col-md-6">
                                                                                        <input class="form-check-input" type="radio" name="sexo_paciente" id="sexo_paciente_masculino" value="Masculino" checked>
                                                                                        <label class="form-check-label" for="sexo_paciente_masculino">Masculino</label>
                                                                                        </div>
                                                                                <div class="form-check form-check-inline col-md-6">
                                                                                        <input class="form-check-input" type="radio" name="sexo_paciente" id="sexo_paciente_femenino" value="Femenino">
                                                                                        <label class="form-check-label" for="sexo_paciente_femenino">Femenino</label>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                                    <!-- Date -->
                                                                    <label>Fecha de Nacimiento:</label>
                                                                        <div class="input-group date">
                                                                                <div class="input-group-addon">
                                                                                    <i class="fa fa-calendar"></i>
                                                                                </div>
                                                                                <input type="text" class="form-control pull-right" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                        </div>
                                                                <!-- /.input group -->
                                                            
                                                        </div>
                                                </div>

                                    </form><!-- / .Form end -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box">
                        <div class="box-header with-border">
                        <h3 class="box-title">B) DE LA FAMILIA</h3>
                        </div>
                            <div class="box-body">
                                <!-- Form start -->
                                    <form  role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo_expediente_medico.php">
                                                <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                                <label for="nombre_padre">Nombre del Padre:</label>
                                                                <input type="text" class="form-control" id="nombre_padre" name="nombre_padre" placeholder="Nombre Completo del Padre">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                                <label for="nombre_madre">Nombre de la Madre:</label>
                                                                <input type="text" class="form-control" id="nombre_madre" name="nombre_madre" placeholder="Nombre Completo de la Madre">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                                <label for="nombre_conyugue">Nombre del Conyugue:</label>
                                                                <input type="text" class="form-control" id="nombre_conyugue" name="nombre_conyugue" placeholder="Nombre Completo del Conyugue">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                                <label for="responsable_paciente">Responsable del paciente:</label>
                                                                <input type="text" class="form-control" id="responsable_paciente" name="responsable_paciente" placeholder="Datos del responsable del paciente">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                                <label for="direccion_responsable">Dirección del responsable:</label>
                                                                <input type="text" class="form-control" id="direccion_responsable" name="direccion_responsable" placeholder="Dirección responsable del paciente">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                                <label for="telefono_responsable">Teléfono:</label>
                                                                <input type="text" class="form-control" id="telefono_responsable" name="telefono_responsable" placeholder="Número Telefónico">
                                                        </div>
                                                </div>
                                    </form><!-- / .Form end -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box">
                        <div class="box-header with-border">
                        <h3 class="box-title">C) DE LA INFORMACION</h3>
                        </div>
                            <div class="box-body">
                                <!-- Form start -->
                                    <form  role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo_expediente_medico.php">
                                                <div class="form-row">
                                                        <div class="form-group col-md-8">
                                                                <label for="primer_apellido_paciente">Proporcionó datos personales del paciente:</label>
                                                                <input type="text" class="form-control" id="primer_apellido_paciente" name="primer_apellido_paciente" placeholder="Primer Apellido">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                                <label for="segundo_apellido_paciente">Parentesco:</label>
                                                                <input type="text" class="form-control" id="segundo_apellido_paciente" name="segundo_apellido_paciente" placeholder="Segundo Apellido">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                                <label for="nombres_paciente">Documento legal de identificacion:</label>
                                                                <input type="text" class="form-control" id="nombres_paciente" name="nombres_paciente" placeholder="Nombres">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                                <label for="nombres_paciente">No. :</label>
                                                                <input type="text" class="form-control" id="nombres_paciente" name="nombres_paciente" placeholder="Nombres">
                                                        </div>
                                                </div>
                                    </form><!-- / .Form end -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                            
                            </div>
                            <!-- /.box-footer-->
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


