<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "test";

    $conexion = new mysqli($server, $user, $pass, $db);

    if ($conexion->connect_errno) {
        die("conexion fallida" . $conexion->connect_errno);
    } else {
        echo "conectado";
    }


        // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $puntaje = $_POST['puntaje'];

    // Insertar los datos en la tabla "usuarios"
    $sql = "INSERT INTO usuarios (nombre, email, edad, puntaje) VALUES ('$nombre', '$email', $edad, $puntaje)";
    if (mysqli_query($conexion, $sql)) {
    echo "Datos insertados correctamente";
    } else {
    echo "Error al insertar los datos: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
?>