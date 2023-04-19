<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleFormulario.css">
    <title>Document</title>
</head>
<body>
    <h1>REGISTRA TU PUNTAJE</h1>
    <form action="conexion.php" method="POST">
        <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="form-group"></div>
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
        </div>
        <div class="form-group">
        <label for="puntaje">Puntaje: </label>
        <input type="number" id="puntaje" name="puntaje" value="<?php
            session_start();
            echo $_SESSION['score'];?>"
        >
        
        </div>
        <button type="submit" class="btn-form">Enviar</button>
      </form>
</body>
</html>