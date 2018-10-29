<?php

include_once 'funciones/funciones.php';

if($conn->ping() ) {
    echo "Conectado";
} else {
    echo "No !";
}

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

    echo $password_hashed;
}    