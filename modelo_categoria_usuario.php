<?php

include_once 'funciones/funciones.php';


$categorias_usuario = $_POST['nombre_categoria_usuario'];
$id_registro = $_POST['id_registro'];

if($_POST['registro'] == 'nuevo') {
    
        $stmt = $conn->prepare("INSERT INTO categoria_usuario (cat_usuario) VALUES (?) ");
        $stmt->bind_param("s", $categorias_usuario);
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
        if(empty($_POST['password']) ) {
            $stmt = $conn->prepare('UPDATE usuarios SET usuario = ?, nombre_usuario = ?, apellido_usuario = ?, id_cat_usuario = ?, editado = NOW()  WHERE id_usuario = ?');
            $stmt->bind_param("sssii", $usuario, $nombre_usuario, $apellido_usuario, $categoria_usuario, $id_registro);
        } else {
            $opciones = array(
                'cost' => 12 
            );
            
            $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);
            $stmt = $conn->prepare('UPDATE usuarios SET usuario = ?, nombre_usuario = ?, apellido_usuario = ?, id_cat_usuario = ?, password = ?, editado = NOW()  WHERE id_usuario = ?');
            $stmt->bind_param("sssisi", $usuario, $nombre_usuario, $apellido_usuario, $categoria_usuario, $hash_password, $id_registro);
        }
       
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
        $stmt = $conn->prepare('DELETE FROM usuarios WHERE id_usuario = ? ');
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
