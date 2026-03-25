<?php 
    //session_start();
    include 'funcionesBDD.php';
    $conexion=conectar();

    $emisor=$_SESSION["id"];
    $receptor=$_POST["nombreJesuita"];//El nombre del select, coge el value del idAlumno seleccionado
    $mensaje=$_POST["mensaje"];

    $sql='INSERT INTO agradecimientos(emisor,receptor,mensaje) VALUES
                ("'.$emisor.'","'.$receptor.'","'.$mensaje.'");';

    echo '<br/><p><b>'.$sql.'</b></p><br/>';
    if($conexion->query($sql))
        $estado='Agradecimiento enviado correctamente.';
    else
        $estado='Ya agradeciste a este jesuita, elige otro.';//Aún no sale cuando da error.
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Enviado</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main class="tarjeta cajitaCentrada">
        <h1><?php echo $estado; ?></h1>
        <a href="index.php"><button class="boton">Regresar</button></a>
    </main>
</body>
</html>