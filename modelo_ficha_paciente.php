<?php

include_once 'funciones/funciones.php';

$numero_expediente = $_POST['numero_expediente'];
$primer_apellido = $_POST['primer_apellido_paciente'];
$segundo_apellido = $_POST['segundo_apellido_paciente'];
$nombre = $_POST['nombres_paciente'];
$sexo = $_POST['sexo_paciente'];

$nacimiento = $_POST['fecha_nacimiento'];
$fecha_nacimiento = date('Y-m-d', strtotime($nacimiento));

$edad = $_POST['edad_paciente'];
$unidad_tiempo = $_POST['unidad_tiempo'];
$estado = $_POST['estado_civil'];
$documento_identidad = $_POST['documento_identidad'];
$numero_documento = $_POST['numero_documento'];
$ocupacion = $_POST['ocupacion_paciente'];
$direccion = $_POST['direccion_paciente'];
$telefono = $_POST['telefono_paciente'];

$id_registro = $_POST['id_registro'];

if($_POST['registro'] == 'nuevo') {
  
        try{    
                $stmt = $conn->prepare("INSERT INTO `datos_paciente` (`numero_expediente`, `primer_apellido_paciente`, `segundo_apellido_paciente`, `nombre_paciente`, `sexo_paciente`, `fecha_nacimiento_paciente`, `edad_paciente`, `unidad_tiempo`, `estado_civil`, `documento_legal_identidad`, `numero_documento`, `ocupacion_paciente`, `direccion_paciente`, `telefono_paciente`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
                $stmt->bind_param("ssssssiiissssi", $numero_expediente, $primer_apellido, $segundo_apellido, $nombre, $sexo, $fecha_nacimiento, $edad, $unidad_tiempo, $estado , $documento_identidad, $numero_documento, $ocupacion, $direccion, $telefono);
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
                $stmt = $conn->prepare('UPDATE categoria_personal_medico SET cat_personal_medico = ?, editado = NOW()  WHERE id_categoria_personal_medico = ?');
                $stmt->bind_param("si", $categoria_medica, $id_registro);     
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
                $stmt = $conn->prepare('DELETE FROM categoria_personal_medico WHERE id_categoria_personal_medico = ? ');
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
