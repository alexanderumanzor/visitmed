<?php

include_once 'funciones/funciones.php';

$numero_expediente = $_POST['numero_expediente'];
$padre = $_POST['nombre_padre'];
$madre = $_POST['nombre_madre'];
$conyugue = $_POST['nombre_conyugue'];
$responsable = $_POST['responsable_paciente'];
$direccion_responsable = $_POST['direccion_responsable'];
$telefono_responsable = $_POST['telefono_responsable'];

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
