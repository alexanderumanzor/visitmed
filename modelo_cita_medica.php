<?php

include_once 'funciones/funciones.php';

$numero_expediente = $_POST['numero_expediente'];
$paciente = $_POST['nombre_paciente'];
$area_medica = $_POST['area_medica'];
$especialidad = $_POST['especialidad_medica'];
$medico = $_POST['nombre_medico'];
$fecha = $_POST['fecha_cita'];
$fecha_cita = date('Y-m-d', strtotime($fecha));
$hora = $_POST['hora_cita'];
$hora_cita = date('H:i', strtotime($hora));

$id_registro = $_POST['id_registro'];

if($_POST['registro'] == 'nuevo') {
  
        try{    
                $stmt = $conn->prepare("INSERT INTO `datos_familia_paciente` (`numero_paciente_fam`, `nombre_padre`, `nombre_madre`, `nombre_conyugue`, `responsable_paciente`, `direccion_responsable`, `telefono_responsable`) VALUES (?,?,?,?,?,?,?) ");
                $stmt->bind_param("isssssi", $numero_expediente, $padre, $madre, $conyugue, $responsable, $direccion_responsable, $telefono_responsable);
                $stmt->execute();
                $id_registro = $stmt->insert_id;
                        if($stmt->affected_rows) {
                                $respuesta = array(
                                    'respuesta' => 'exito',
                                    'id_ficha_familia' => $id_registro
                                );
                        } else {
                                $respuesta = array(
                                    'respuesta' => 'error'
                                );
                        }
                $stmt->close();
                $conn->close();
        } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
        }
        die(json_encode($respuesta));
}  

if($_POST['registro'] == 'actualizar') {
        try {       
                $stmt = $conn->prepare('UPDATE datos_familia_paciente SET numero_paciente_fam = ?, nombre_padre = ?, nombre_madre = ?, nombre_conyugue = ?, responsable_paciente = ?, direccion_responsable = ?, telefono_responsable = ?, editado = NOW()  WHERE id_familia_paciente = ?');
                $stmt->bind_param("isssssii", $numero_expediente, $padre, $madre, $conyugue, $responsable, $direccion_responsable, $telefono_responsable, $id_registro);     
                $stmt->execute();
                        if($stmt->affected_rows) {
                            $respuesta = array(
                                'respuesta' => 'exito',
                                'id_actualizado' => $stmt->insert_id
                            );
                        } else {
                            $respuesta = array(
                                'respuesta' => 'error'
                            );
                        }
                $stmt->close();
                $conn->close();
        } catch (Exception $e) {
                $respuesta = array(
                    'respuesta' => $e->getMessage()
                );
        }
        die(json_encode($respuesta));
}

if($_POST['registro'] == 'eliminar') {
    $id_borrar = $_POST['id'];
        try {
                $stmt = $conn->prepare('DELETE FROM datos_familia_paciente WHERE id_familia_paciente = ? ');
                $stmt->bind_param('i', $id_borrar);
                $stmt->execute();
                        if($stmt->affected_rows) {
                            $respuesta = array(
                                'respuesta' => 'exito',
                                'id_eliminado' => $id_borrar
                            );
                        } else {
                            $respuesta = array(
                                'respuesta' => 'error'
                            );
                        }
        } catch (Exception $e) {
                $respuesta = array(
                    'respuesta' => $e->getMessage()
                );
        }
        die(json_encode($respuesta));
}
