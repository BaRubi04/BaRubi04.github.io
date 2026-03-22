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
    </header>
    <nav>
        <a href="#">Agradecer</a>
        <a href="#">Recibir</a>
        <a href="#">Cerrar Sesión</a>
    </nav>
    <main>
        <div class="tarjeta">
            <form action="okformulario.php" method="POST">
                <div class="grupo-formulario">
                    <label>para</label>
                    <div class="contenedor-entrada">
                        <select>
                             <?php
                                include "operaciones.php";
                                $conexion=conectar();
                                $sql = "select * from alumnos;";
                                $resultado=$conexion->query($sql);
                                    while($fila=$resultado->fetch_array())
                                        echo '<option value="'.$fila["idAlumno"].'" name="'.$fila["nombreAlumno"].'">'.$fila["nombreJesuita"].'</option>';                                    
                                $conexion->close(); 
                             ?>      
                        </select>
                    </div>
                </div>

                <div class="grupo-formulario">
                    <label>quiero agradecerte</label>
                    <div class="contenedor-entrada">
                        <input placeholder="Escribe aquí tu agradecimiento..."></input>
                    </div>
                </div>

                <button type="submit" class="boton">ENVIAR</button>
            </form>
        </div>
    </main>
</body>
</html>