<?php

include_once 'funciones/funciones.php';

$numero_expediente = $_POST['id_paciente'];
$id_vacuna = $_POST['id_vacuna'];
$primera_dosis = $_POST['1a_dosis'];
$dosis1a = date('Y-m-d', strtotime($primera_dosis));
$segunda_dosis = $_POST['2a_dosis'];
$dosis2a = date('Y-m-d', strtotime($segunda_dosis));
$tercera_dosis = $_POST['3a_dosis'];
$dosis3a = date('Y-m-d', strtotime($tercera_dosis));
$cuarta_dosis = $_POST['4a_dosis'];
$dosis4a = date('Y-m-d', strtotime($cuarta_dosis));
$quinta_dosis = $_POST['5a_dosis'];
$dosis5a = date('Y-m-d', strtotime($quinta_dosis));
$primer_refuerzo = $_POST['1er_ref'];
$refuerzo1 = date('Y-m-d', strtotime($primer_refuerzo));
$segundo_refuerzo = $_POST['2do_ref'];
$refuerzo2 = date('Y-m-d', strtotime($segundo_refuerzo));

$id_registro = $_POST['id_registro'];

if($_POST['registro'] == 'nuevo') {
  
        try{    
                $stmt = $conn->prepare("INSERT INTO `fecha_vacuna` (`tipo_vacuna`, `1a_dosis`, `2a_dosis`, `3a_dosis`, `4a_dosis`, `5a_dosis`, `1er_ref`, `2do_ref`) VALUES (?,?,?,?,?,?,?,?) ");
                $stmt->bind_param("isssssss", $id_vacuna, $dosis1a, $dosis2a, $dosis3a, $dosis4a, $dosis5a, $refuerzo1, $refuerzo2);
                $stmt->execute();
                $id_registro = $stmt->insert_id;
                        if($stmt->affected_rows) {
                                $respuesta = array(
                                    'respuesta' => 'exito',
                                    'id_vacunas' => $id_registro
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
