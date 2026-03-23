<?php 
    include 'conexion.php';
    $correo=$_POST[“correo”];
    $contrasenia=$_POST[“contrasena”];

    //consulta para ver si el usuario y la contraseña son correctas
    $sql='SELECT idAlumno FROM alumno 
                WHERE correo="'.$correo.'"
                AND pw="'.$contrasenia.'";';
    
    echo $sql;
    //echo '<br/>';
    $resultado = $conexion->query($sql);
    if($resultado->num_rows > 0){//si el usuario existe
        $fila=$resultado->fetch_array();
        $conexion->close();
        //guarda información del usuario en sesiones
        $_SESSION[‘id’] = $fila[“idAlumno”];

        //echo 'Inicio de sesión correcto';
    }
    else{//si no existe

    }
    
?>