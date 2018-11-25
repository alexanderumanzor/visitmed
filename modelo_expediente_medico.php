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

$padre = $_POST['nombre_padre'];
$madre = $_POST['nombre_madre'];
$conyugue = $_POST['nombre_conyugue'];
$responsable = $_POST['responsable_paciente'];
$direccion_responsable = $_POST['direccion_responsable'];
$telefono_responsable = $_POST['telefono_responsable'];

$informante = $_POST['nombre_informante'];
$parentesco = $_POST['parentesco_informante'];
$documento_identidad_informante = $_POST['documento_identidad_informante'];
$numero_documento_informante = $_POST['numero_documento_informante'];
$usuario = $_POST['usuario_recepcion'];
$inscripcion = $_POST['fecha_inscripcion'];
$fecha_inscripcion = date('Y-m-d', strtotime($inscripcion));
$observaciones = $_POST['observaciones_inscripciones'];

$id_registro = $_POST['id_registro'];


if($_POST['registro'] == 'nuevo') {
        try{    
                $stmt = $conn->prepare("INSERT INTO datos_generales_paciente (numero_expediente, primer_apellido_paciente, segundo_apellido_paciente, nombres_paciente, sexo_paciente, fecha_nacimiento_paciente, edad_paciente, unidad_tiempo ) VALUES (?,?,?,?,?,?,?,?) ");
                $stmt->bind_param("ssssssii", $numero_expediente, $primer_apellido, $segundo_apellido, $nombre, $sexo, $fecha_nacimiento, $edad, $unidad_tiempo);
                $stmt->execute();
                $id_registro = $stmt->insert_id;
                $stmt = $conn->prepare("INSERT INTO identificacion_paciente (numero_paciente_ident, estado_civil, documento_identidad, numero_documento, ocupacion_paciente, direccion_paciente, telefono_paciente) VALUES (?,?,?,?,?,?,?) ");
                $stmt->bind_param("iissssi", $id_registro, $estado , $documento_identidad, $numero_documento, $ocupacion, $direccion, $telefono);
                $stmt->execute();
                $stmt = $conn->prepare("INSERT INTO datos_familia_paciente (numero_paciente_fam, id_registro, nombre_padre, nombre_madre, nombre_conyugue, responsable_paciente, direccion_responsable, telefono_responsable) VALUES (?,?,?,?,?,?,?,?,?) ");
                $stmt->bind_param("isssssi", $id_registro, $padre, $madre, $conyugue, $responsable, $direccion_responsable, $telefono_responsable);
                $stmt->execute();
                $stmt = $conn->prepare("INSERT INTO datos_informante (numero_paciente_informante, nombre_informante, parentesco_informante, documento_identidad_informante, numero_documento_informante, usuario_recepcion, fecha_inscripcion, observaciones_inscripcion) VALUES (?,?,?,?,?,?,?,?) ");
                $stmt->bind_param("isssssss", $id_registro, $informante, $parentesco, $documento_identidad_informante, $numero_documento_informante, $usuario, $fecha_inscripcion, $observaciones);
                $stmt->execute();
                        if($stmt->affected_rows) {
                                $respuesta = array(
                                    'respuesta' => 'exito',
                                    'id_registro' => $id_registro
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
                $stmt = $conn->prepare('UPDATE personal_medico SET numero_empleado = ?, id_cat_per_medico = ?, cargo_medico = ?, nombre_personal_medico = ?, apellido_personal_medico = ?, especialidad_medica = ?, editado = NOW()  WHERE id_personal_medico = ?');
                $stmt->bind_param("sissssi", $numero_empleado, $categoria_medica, $cargo, $nombre, $apellido, $especialidad, $id_registro);     
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
                $stmt = $conn->prepare('DELETE FROM personal_medico WHERE id_personal_medico = ? ');
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
