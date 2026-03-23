<?php session_start(); ?>
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
        <p class="subtitulo">Comparte gratitud y fortalece la comunidad</p>
    </header>

    <nav>
        <a href="agradecer.php">Agradecer</a>
        <a href="veragradecimientos.php">Recibir</a>
        <a href="inicio.php">Cerrar Sesión</a>
    </nav>

    <main>
        <p>
            <b> Sesión: <?php echo $_SESSION["nombre"]; ?> </b>
        </p>
    </main>
</body>
</html>