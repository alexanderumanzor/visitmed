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
                <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo_vacunas.php">
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
                                                 <div class="form-group col-md-2 tipo_vacunas col-md-offset-1 " name="id_vacuna" id="BCG" value="1">BCG</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="1a_dosis">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="1a_dosis" name="1a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="2a_dosis">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2a_dosis" name="2a_dosis" disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="3a_dosis">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="3a_dosis" name="3a_dosis" disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="4a_dosis">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="4a_dosis" name="4a_dosis" disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="5a_dosis">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="5a_dosis" name="5a_dosis"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="1er_ref">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="1er_ref" name="1er_ref"  disabled>
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="2do_ref">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2do_ref" name="2do_ref"  disabled>
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " name="id_vacuna" id="Rotavirus" value="2">Rotavirus</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="1a_dosis">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="1a_dosis" name="1a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="2a_dosis">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2a_dosis" name="2a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="3a_dosis">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="3a_dosis" name="3a_dosis"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="4a_dosis">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="4a_dosis" name="4a_dosis"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="5a_dosis">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="5a_dosis" name="5a_dosis"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="1er_ref">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="1er_ref" name="1er_ref"  disabled>
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="2do_ref">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2do_ref" name="2do_ref"  disabled>
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " name="id_vacuna" id="Pentavalente" value="3">Pentavalente</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="1a_dosis">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="1a_dosis" name="1a_dosis"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="2a_dosis">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2a_dosis" name="2a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="3a_dosis">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="3a_dosis" name="3a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="4a_dosis">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="4a_dosis" name="4a_dosis"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="5a_dosis">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="5a_dosis" name="5a_dosis"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="1er_ref">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="1er_ref" name="1er_ref"  disabled>
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="2do_ref">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2do_ref" name="2do_ref"  disabled>
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " name="id_vacuna" id="Antipolio" value="4">Antipolio</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="1a_dosis">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="1a_dosis" name="1a_dosis"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="2a_dosis">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2a_dosis" name="2a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="3a_dosis">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="3a_dosis" name="3a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="4a_dosis">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="4a_dosis" name="4a_dosis"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="5a_dosis">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="5a_dosis" name="5a_dosis"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="1er_ref">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="1er_ref" name="1er_ref">
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="2do_ref">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2do_ref" name="2do_ref">
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " name="id_vacuna" id="Neumococo" value="5">Neumococo</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="1a_dosis">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="1a_dosis" name="1a_dosis"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="2a_dosis">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2a_dosis" name="2a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="3a_dosis">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="3a_dosis" name="3a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="4a_dosis">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="4a_dosis" name="4a_dosis"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="5a_dosis">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="5a_dosis" name="5a_dosis"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="1er_ref">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="1er_ref" name="1er_ref">
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="2do_ref">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2do_ref" name="2do_ref"  disabled>
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1  " name="id_vacuna" id="DPT" value="6">DPT</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="1a_dosis">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="1a_dosis" name="1a_dosis"  disabled  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="2a_dosis">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2a_dosis" name="2a_dosis"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="3a_dosis">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="3a_dosis" name="3a_dosis"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="4a_dosis">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="4a_dosis" name="4a_dosis"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="5a_dosis">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="5a_dosis" name="5a_dosis"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="1er_dosis">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="1er_dosis" name="1er_dosis">
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="2do_ref">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2do_ref" name="2do_ref">
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " name="id_vacuna" id="SPR" value="7">SPR</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="1a_dosis">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="1a_dosis" name="1a_dosis"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="2a_dosis">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2a_dosis" name="2a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="3a_dosis">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="3a_dosis" name="3a_dosis"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="4a_dosis">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="4a_dosis" name="4a_dosis"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="5a_dosis">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="5a_dosis" name="5a_dosis"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="1er_ref">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="1er_ref" name="1er_ref"  disabled>
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="2do_ref">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2do_ref" name="2do_ref"  disabled>
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " name="id_vacuna"  id="dt_pediatrica" value="8">DT (Pediatrica)</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="1a_dosis">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="1a_dosis" name="1a_dosis"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="2a_dosis">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2a_dosis" name="2a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="3a_dosis">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="3a_dosis" name="3a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="4a_dosis">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="4a_dosis" name="4a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="5a_dosis">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="5a_dosis" name="5a_dosis">
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="1er_ref">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="1er_ref" name="1er_ref">
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="2do_ref">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2do_ref" name="2do_ref">
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 "  name="id_vacuna" id="Td" value="9">Td</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="1a_dosis">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="1a_dosis" name="1a_dosis"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="2a_dosis">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2a_dosis" name="2a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="3a_dosis">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="3a_dosis" name="3a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="4a_dosis">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="4a_dosis" name="4a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="5a_dosis">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="5a_dosis" name="5a_dosis">
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="1er_ref">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="1er_ref" name="1er_ref">
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="2do_ref">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2do_ref" name="2do_ref">
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " name="id_vacuna" id="Tdpa" name="10">Tdpa</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="1a_dosis">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="1a_dosis" name="1a_dosis"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="2a_dosis">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2a_dosis" name="2a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="3a_dosis">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="3a_dosis" name="3a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="4a_dosis">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="4a_dosis" name="4a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="5a_dosis">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="5a_dosis" name="5a_dosis">
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="1er_ref">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="1er_ref" name="1er_ref">
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="2do_ref">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2do_ref" name="2do_ref">
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " name="id_vacuna" id="IPV" value="11">IPV</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="1a_dosis">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="1a_dosis" name="1a_dosis"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="2a_dosis">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2a_dosis" name="2a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="3a_dosis">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="3a_dosis" name="3a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="4a_dosis">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="4a_dosis" name="4a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="5a_dosis">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="5a_dosis" name="5a_dosis">
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="1er_ref">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="1er_ref" name="1er_ref">
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="2do_ref">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2do_ref" name="2do_ref">
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas col-md-offset-1 " name="id_vacuna" id="hepatitis_b" value="12">Hepatitis B</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="1a_dosis">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="1a_dosis" name="1a_dosis"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="2a_dosis">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2a_dosis" name="2a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="3a_dosis">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="3a_dosis" name="3a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="4a_dosis">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="4a_dosis" name="4a_dosis"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="5a_dosis">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="5a_dosis" name="5a_dosis"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="1er_ref">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="1er_ref" name="1er_ref"  disabled>
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="2do_ref">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2do_ref" name="2do_ref"  disabled>
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas2 col-md-offset-1 " name="id_vacuna" id="influenza_estacionaria" value="13">Influenza Estacionaria</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="1a_dosis">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="1a_dosis" name="1a_dosis"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="2a_dosis">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2a_dosis" name="2a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="3a_dosis">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="3a_dosis" name="3a_dosis" value="0" disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="4a_dosis">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="4a_dosis" name="4a_dosis" value="0" disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="5a_dosis">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="5a_dosis" name="5a_dosis"  value="0" disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="1er_ref">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="1er_ref" name="1er_ref">
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="2do_ref">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2do_ref" name="2do_ref"  value ="0" disabled>
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas2 col-md-offset-1 " name="id_vacuna" id="influenza_pandemica" value="14">Influenza Pandemica</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="1a_dosis">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="1a_dosis" name="1a_dosis"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="2a_dosis">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2a_dosis" name="2a_dosis">
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="3a_dosis">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="3a_dosis" name="3a_dosis"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="4a_dosis">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="4a_dosis" name="4a_dosis"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="5a_dosis">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="5a_dosis" name="5a_dosis"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="1er_ref">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="1er_ref" name="1er_ref">
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="2do_ref">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2do_ref" name="2do_ref"  disabled>
                                                                </div>
                                                </div>                            
                                    </div>
                                    <div class="row dosis">
                                                 <div class="col-md-2 tipo_vacunas2 col-md-offset-1 " name="id_vacuna" id="anti_fiebre_amarilla" value="15">Anti fiebre Amarilla</div>                
                                                 <div class="form-group col-md-1">
                                                        <label for="1a_dosis">1a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="1a_dosis" name="1a_dosis"  >
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="2a_dosis">2a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2a_dosis" name="2a_dosis"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="3a_dosis">3a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="3a_dosis" name="3a_dosis"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="4a_dosis">4a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="4a_dosis" name="4a_dosis"  disabled>
                                                                </div>
                                                </div>
                                                <div class="form-group col-md-1">
                                                        <label for="5a_dosis">5a dosis</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate fecha" id="5a_dosis" name="5a_dosis"  disabled>
                                                                </div>
                                                </div> 
                                                <div class="form-group col-md-1">
                                                        <label for="1er_ref">1er Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right resetdate  fecha" id="1er_ref" name="1er_ref"  disabled>
                                                                </div>
                                                </div>   
                                                <div class="form-group col-md-1">
                                                        <label for="2do_ref">2do Ref.</label>
                                                                <div class="input-group date">                                                                       
                                                                        <input type="text" class="form-control pull-right  resetdate fecha" id="2do_ref" name="2do_ref"  disabled>
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

