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
        Control Vacunas Paciente <br>
        <small></small>
      </h1>
    </section>

    <div class="row">
      <div class="col-md-12">
      
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <div class="box-body">
                <!-- form start -->
                <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo_categoria_medica.php">
                      <div class="box-body">
                                <div class="form-group col-md-7 col-md-offset-5">
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
                                    <div class="row">
                                                <div class="form-group col-md-2 col-md-offset-1 " id="vacunas">Vacunas</div>
                                                <div class="form-group col-md-7" id="fecha_vacuna">Fecha de Vacunación</div>
                                    </div>
                                    <div class="row dosis">
                                                 <div class="form-group col-md-2 tipo_vacunas col-md-offset-1 " id="">BCG</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento" disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento" disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento" disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " id="">Rotavirus</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " id="">Pentavalente</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " id="">Antipolio</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " id="">Neumococo</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " id="">DPT</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " id="">SPR</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " id="">DT (Pediatrica)</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " id="">Td</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " id="">Tdpa</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " id="">IPV</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " id="">Hepatitis B</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas2 col-md-offset-1 " id="">Influenza Estacionaria</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas2 col-md-offset-1 " id="">Influenza Pandemica</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento">
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas2 col-md-offset-1 " id="">Anti fiebre Amarilla</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="fecha_nacimiento">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="fecha_nacimiento" name="fecha_nacimiento"  disabled>
                                                                </div>
                                                </div>                            
                                    </div>
                                   
                                    








                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer col-md-offset-1">
                          <input type="hidden" name="registro" value="nuevo">
                          <button type="submit" class="btn btn-primary" id="crear_registro">Agregar</button>
                      </div>
                </form>
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

