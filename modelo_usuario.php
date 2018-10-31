<?php

include_once 'funciones/funciones.php';

$usuario = $_POST['usuario'];
$nombre_usuario = $_POST['nombre_usuario'];
$apellido_usuario = $_POST['apellido_usuario'];
$categoria_usuario = $_POST['categoria_usuario'];
$password = $_POST['password'];

if($_POST['registro'] == 'nuevo') {
    $opciones = array(
        'cost' => 12
    );
    $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);

    try {
        $stmt = $conn->prepare("INSERT INTO usuarios (usuario, nombre_usuario, apellido_usuario, password, id_cat_usuario) VALUES (?,?,?,?,?) ");
        $stmt->bind_param("ssssi", $usuario, $nombre_usuario, $apellido_usuario, $password_hashed, $categoria_usuario);
        $stmt->execute();
        $id_registro = $stmt->insert_id;
        if($id_registro > 0) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_usuario' => $id_registro
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

if(isset($_POST['login_usuario'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    try {
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ? ");
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $stmt->bind_result($id_usuario, $usuario, $nombre_usuario, $apellido_usuario, $password_usuario, $categoria_usuario);
        if($stmt->affected_rows) {
            $existe = $stmt->fetch();
            if($existe) {
                if(password_verify($password, $password_usuario)) {
                    session_start();
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['nombre'] = $nombre_usuario;
                    $respuesta = array(
                        'respuesta' => 'exitoso',
                        'usuario' => $nombre_usuario
                    );
                } else {
                    $respuesta = array(
                        'respuesta' => 'error'
                    );
                }
            } else {
                $respuesta = array(
                    'respuesta' => 'error'
                );
            }
        } 
        $stmt->close();
        $conn->close();       
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    die(json_encode($respuesta));
}