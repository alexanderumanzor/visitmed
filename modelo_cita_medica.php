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
                $stmt = $conn->prepare("INSERT INTO `cita_medica` (`id_expediente`, `nombres_paciente`, `area_medica`, `especial_medico`, `nombre_medico`, `fecha_cita`, `hora_cita`) VALUES (?,?,?,?,?,?,?) ");
                $stmt->bind_param("isissss", $numero_expediente, $paciente, $area_medica, $especialidad, $medico, $fecha_cita, $hora_cita);
                $stmt->execute();
                $id_registro = $stmt->insert_id;
                        if($stmt->affected_rows) {
                                $respuesta = array(
                                    'respuesta' => 'exito',
                                    'id_cita_medica' => $id_registro
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
                $stmt = $conn->prepare('UPDATE cita_medica SET id_expediente = ?, nombres_paciente = ?,  area_medica = ?, especial_medico = ?, nombre_medico = ?, fecha_cita = ?, hora_cita = ?, editado = NOW()  WHERE id_cita = ?');
                $stmt->bind_param("isissssi", $numero_expediente, $paciente, $area_medica, $especialidad, $medico, $fecha_cita, $hora_cita, $id_registro);     
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
                $stmt = $conn->prepare('DELETE FROM cita_medica WHERE id_cita = ? ');
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
