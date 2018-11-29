<?php

include_once 'funciones/funciones.php';

$numero_expediente = $_POST['numero_expediente'];
$informante = $_POST['nombre_informante'];
$parentesco = $_POST['parentesco_informante'];
$documento_identidad_informante = $_POST['documento_identidad_informante'];
$numero_documento_informante = $_POST['numero_documento_informante'];
$usuario = $_POST['usuario_recepcion'];
$fecha = $_POST['fecha_inscripcion'];
$fecha_inscripcion = date('Y-m-d', strtotime($fecha));
$observaciones = $_POST['observaciones_inscripciones'];

$id_registro = $_POST['id_registro'];

if($_POST['registro'] == 'nuevo') {
  
        try{    
                $stmt = $conn->prepare("INSERT INTO `datos_informante` (`numero_paciente_informante`, `nombre_informante`, `parentesco_informante`, `documento_identidad_informante`, `numero_documento_informante`, `usuario_recepcion`, `fecha_inscripcion`, `observaciones_inscripcion`) VALUES (?,?,?,?,?,?,?,?) ");
                $stmt->bind_param("isssssss", $numero_expediente, $informante, $parentesco, $documento_identidad_informante, $numero_documento_informante, $usuario, $fecha_inscripcion, $observaciones);
                $stmt->execute();
                $id_registro = $stmt->insert_id;
                        if($stmt->affected_rows) {
                                $respuesta = array(
                                    'respuesta' => 'exito',
                                    'id_categoria_usuario' => $id_registro
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
                $stmt = $conn->prepare('UPDATE datos_informante SET numero_paciente_informante = ?, nombre_informante = ?, parentesco_informante = ?, documento_identidad_informante = ?, numero_documento_informante = ?, usuario_recepcion = ?, fecha_inscripcion = ?, observaciones_inscripcion = ?, editado = NOW()  WHERE id_informante_paciente = ?');
                $stmt->bind_param("isssssssi", $numero_expediente, $informante, $parentesco, $documento_identidad_informante, $numero_documento_informante, $usuario, $fecha_inscripcion, $observaciones, $id_registro);     
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
                $stmt = $conn->prepare('DELETE FROM datos_paciente WHERE id_paciente = ? ');
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
