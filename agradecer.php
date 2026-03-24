<?php 
    //session_start();
    include 'funcionesBDD.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" author="Rubí">
    <title>Agradecer</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>AGRADECE EN COMPAÑÍA</h1>
        <p class="subtitulo">Comparte gratitud y fortalece la comunidad</p>
    </header>

    <nav>
        <a href="agradecer.php" class="paginaActual">Agradecer</a>
        <a href="veragradecimientos.php">Recibir</a>
        <a href="destruirsesion.php">Cerrar Sesión</a>
    </nav>

    <main>
        <div class="tarjeta">
            <form action="recogerDatosAgradecimiento.php" method="POST">
                <div class="grupo-formulario">
                    <label>De: <b><u><?php echo $_SESSION['nombre']; ?></u></b> </label> 
                </div>
                <div class="grupo-formulario">
                    <label>A:</label>
                    <div class="contenedor-entrada">
                        <select name="nombreJesuita">
                            <?php
                                listado_jesuitas();
                            ?>      
                        </select>
                    </div>
                </div>

                <div class="grupo-formulario">
                    <label>Quiero agradecerte:</label>
                    <div class="contenedor-entrada">
                        <input placeholder="Escribe aquí tu agradecimiento..." name="mensaje"></input>
                    </div>
                </div>

                <button type="submit" class="boton">ENVIAR</button>
            </form>
        </div>
    </main>
</body>
</html>