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
                                                        <div class="form-group col-md-7">
                                                        </div>
                                                        <div class="form-group col-md-5">
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
                                                        <div class="form-group col-md-5">
                                                                <label for="sexo_paciente">Sexo: </label>
                                                                <div class="row">                                                                    
                                                                        <div class="col-md-10">
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
                                                                                        <select class="form-control" id="unidad_tiempo" name="unidad_tiempo">
                                                                                                <option selected value="años">Años</option>
                                                                                                <option value="meses">Meses</option>
                                                                                                <option value="dias">Días</option>
                                                                                                <option value="horas">Horas</option>
                                                                                        </select>
                                                                                </div>
                                                                        </div>
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                                <label for="estado_civil">Estado Civil: </label>
                                                                <div class="row">                                                                    
                                                                                <select class="form-control" id="estado_civil" name="estado_civil">
                                                                                        <option selected value="soltero(a)">Soltero(a)</option>
                                                                                        <option value="casado(a)">Casado(a)</option>
                                                                                        <option value="divorciado(a)">Divorciado(a)</option>
                                                                                        <option value="viudo(a)">Viudo(a)</option>
                                                                                        <option value="acompañado(a)">Acompañado(a)</option>
                                                                                </select>
                                                                </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                                        <label for="documento_identidad">Documento Legal de Identidad:</label>
                                                                        <input type="text" class="form-control" id="documento_identidad" name="documento_identidad" placeholder="Tipo de Documento de Identidad">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                                        <label for="numero_documento">No. Documento Identidad:</label>
                                                                        <input type="text" class="form-control" id="numero_documento" name="numero_documento" placeholder="Número de Documento de Identidad">
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
                                    </form><!-- / .Form end -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                        <input type="hidden" name="registro" value="nuevo">
                                        <button type="submit" class="btn btn-primary" id="crear_registro_expediente_medico">Agregar</button>
                            </div>
                            <!-- /.box-footer-->

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
                            <div class="box-footer">
                                        <input type="hidden" name="registro" value="nuevo">
                                        <button type="submit" class="btn btn-primary" id="crear_registro_expediente_medico">Agregar</button>
                            </div>
                            <!-- /.box-footer-->

                        <div class="box">
                        <div class="box-header with-border">
                        <h3 class="box-title">C) DE LA INFORMACION</h3>
                        </div>
                            <div class="box-body">
                                <!-- Form start -->
                                    <form  role="form" name="guardar-registro" id="guardar-registro" method="get" action="modelo_expediente_medico.php">
                                                <div class="form-row">
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
                                                                <label for="numero_documento_informante">No. Documento Identidad:</label>
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
                                                        <div class="form-group">
                                                                <label for="observaciones_inscripcion">Observaciones:</label>
                                                                <textarea class="form-control" id="observaciones_inscripciones" name="observaciones_inscripciones" rows="3"></textarea>
                                                        </div>
                                                </div>
                                    </form><!-- / .Form end -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                        <input type="hidden" name="registro" value="nuevo">
                                        <button type="submit" class="btn btn-primary" id="crear_registro_expediente_medico">Agregar</button>
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


