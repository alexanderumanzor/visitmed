<?php

include_once 'funciones/funciones.php';

$numero_empleado = $_POST['numero_empleado'];
$categoria_medica = $_POST['categoria_personal_medico'];
$cargo = $_POST['cargo_medico'];
$nombre = $_POST['nombre_personal_medico'];
$apellido = $_POST['apellido_personal_medico'];
$especialidad = $_POST['especialidad_medica'];
$id_registro = $_POST['id_registro'];

if($_POST['registro'] == 'nuevo') {
        try{    
                $stmt = $conn->prepare("INSERT INTO categoria_personal_medico (numero_empleado, id_cat_per_medico, cargo_medico, nombre_personal_medico, apellido_personal_medico, especialidad_medica) VALUES (?,?,?,?,?,?) ");
                $stmt->bind_param("sisssss", $numero_empleado, $categoria_medica, $cargo, $nombre, $apellido, $especialidad);
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
                $stmt = $conn->prepare('UPDATE categoria_usuario SET cat_usuario = ?, editado = NOW()  WHERE id_categoria_usuario = ?');
                $stmt->bind_param("si", $categorias_usuario, $id_registro);     
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
                $stmt = $conn->prepare('DELETE FROM categoria_usuario WHERE id_categoria_usuario = ? ');
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
