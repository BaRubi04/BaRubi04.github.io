<?php
    //session_start();
    include 'funcionesBDD.php';
    $conexion=conectar();

    //pilla las variables
    $correo=$_POST["correo"];
    $contrasenia=$_POST["contrasenia"];

    //consulta para ver si el usuario y la contraseña son correctas
    $sql='SELECT idAlumno,nombreJesuita FROM alumnos 
                WHERE correo="'.$correo.'"
                AND pw="'.$contrasenia.'";';
    
    echo '<br/><p><b>'.$sql.'</b></p><br/>';

    $resultado = $conexion->query($sql);
    if($resultado->num_rows > 0){//si el usuario existe
        $fila=$resultado->fetch_array();
        
        //guarda información del usuario en sesiones
        $_SESSION['id'] = $fila["idAlumno"];
        $_SESSION['nombre'] = $fila["nombreJesuita"];

        echo '<div class="tarjeta">';
        echo '<h1>Inicio de sesión correcto</h1><br>';
        echo '<h2>Bienvenid@: '.$_SESSION["nombre"].'</h2>';
        echo '<a href="veragradecimientos.php"><button class="boton">ACCEDER</button></a>';
    }
    else{//si no existe
        echo 'Inicio de sesión catastrófico';
        echo '<a href="index.html"><button class="boton">REGRESAR</button></a>';
    }
    $conexion->close();

    echo '</div>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Inicio de Sesión</title>
</head>
<body>
    <main>
        <img src="./imagenes/logo.png" id="logoGrande">
    </main>
</body>
</html>