<?php 
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Agradecimientos</title>
</head>
<body>
    <header>
        <h1>AGRADECE EN COMPAÑÍA</h1>
        <h2>Comparte gratitud y fortalece la comunidad</h2>
    </header>

    <nav>
        <a href="agradecer.php">Agradecer</a>
        <a href="veragradecimientos.php" class="paginaActual">Recibir</a>
        <a href="destruirsesion.php">Cerrar Sesión</a>
    </nav>

    <main>
        <p>
            <h2><b> Para <?php echo $_SESSION["nombre"]; ?> </b></h2>
        </p>
        <div id="cajaAgradecimientoEnDetalle">
            <div class="tarjeta" id="tarjetaImagenJesuita">
                <img src="imagenes/jesuitaEjemplo.png" id="imgJesuitaEjemplo">
                <h2>
                    Mateo Ricci: 
                </h2>
                <p class="letrasGrandes">
                    "Aunque el amigo y yo tenemos dos cuerpos, en esos dos cuerpos hay un solo corazón."
                </p>
            </div>
            <div class="tarjeta" id="tarjetaMensajeJesuita">
                <!--<p class="comillasGrandes">“</p>
                <p>
                    Eres una inspiración para todos, ¡tus palabras conmueven a millones!.
                </p>
                <p class="comillasGrandes" id="comillaFlotarDerecha">”</p> -->
                <h1>
                    “ Eres una inspiración para todos, ¡tus palabras conmueven a millones! ”
                </h1>
            </div>
        </div>
        
    </main>
</body>
</html>