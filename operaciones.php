<?php
    include "configdb.php";
    function conectar(){
        $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
        $conexion->set_charset("utf8"); 
        return $conexion;
    }

    function mostrar_alumnos(){ 
	$conexion=conectar();  
	$sql="select * from alumnos;";
	$resultado=$conexion->query($sql);	
	while($fila=$resultado->fetch_array())
	   echo '<p>';
	   echo 'Nombre alumno: '.$fila["nombreAlumno"]; 
	   echo '</p>';
    }

    function consultar(){
        $conexion=conectar();
        $sql = "select * from alumnos;";
        $resultado=$conexion->query($sql);
        while($fila=$resultado->fetch_array())
            echo '<option value="'.$fila["idAlumno"].'" name="'.$fila["nombreAlumno"].'">'.$fila["nombreJesuita"].'</option>';                                    
        $conexion->close(); 
    }
 ?>