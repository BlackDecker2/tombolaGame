<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleTombola.css">
    <title>Document</title>
</head>
<body>
    <h1>JUEGO TOMBOLA</h1>
    <div class="container">
    <a href="formulario.php" target="_blank" class="formPage">REGISTRA TU PUNTAJE</a>
</div>
    <section>
    <?php       
              session_start(); // Iniciar sesión
              $numero1 = mt_rand(1,3);
              $numero2 = mt_rand(1,3);
              $numero3 = mt_rand(1,3);
    ?>

            <div class="imagenes">
                <div class="sub_imagenes">
                    <?php
                        echo '<img src="imagenes/'.$numero1.'.jpg"/>';
                    ?>
                </div>
                <div class="sub_imagenes">
                    <?php
                        echo '<img src="imagenes/'.$numero2.'.jpg"/>';
                    ?>
                </div>
                <div class="sub_imagenes">
                    <?php
                        echo '<img src="imagenes/'.$numero3.'.jpg"/>';
                    ?>
                </div>
            </div>
            <div class="informacion">
                    <div class="mensaje">
                        <?php
                            
                                if($numero1 == $numero2 && $numero1 == $numero3) {
                                    $_SESSION['score'] += 100;
                                    echo "Ganaste";
                                }
                                else{
                                    echo "Sigue jugando";
                                    // Disminuir el puntaje del usuario en 10
                                    $_SESSION['score'] -= 10;
                                };
                        ?>
                    </div>  
                    <h3>Tu puntaje es: <?php
                                // Mostrar el puntaje actual del usuario
                                echo $_SESSION['score'];   
                            
                            ?></h3>            
                    
            </div>
            

            
    </section>
    <button onclick="location.reload();" class="btn">JUGAR</button>
</body>
</html>