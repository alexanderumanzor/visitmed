<?php

include_once 'funciones/funciones.php';

$categoria_medica = $_POST['nombre_categoria_medica'];
$id_registro = $_POST['id_registro'];

if($_POST['registro'] == 'nuevo') {
        try{    
                $stmt = $conn->prepare("INSERT INTO categoria_personal_medico (cat_personal_medico) VALUES (?) ");
                $stmt->bind_param("s", $categoria_medica);
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
