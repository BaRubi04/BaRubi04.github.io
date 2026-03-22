<?php
  //Necesitar hacer include o require del archivo que tiene la conexión
  include "configdb.php";
  function conectar(){
	$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
	$conexion->set_charset("utf8"); 
    return $conexion;
  }
     /*
    //Función para mostrar filas de una tabla
    function mostrar_alumnos(){ 
	//Conecta con la base de datos y crea el objeto $conexión.
	$conexion=conectar();  
	
	//Ejecuta la consulta sql
	$sql="............";
	$resultado=$conexion->query($sql);	
	
	//Extrae cada una fila del resultado de la consulta
	$fila=$resultado->fetch_array();
	
	//Ejemplo que muestra un campo
	   echo '<p>';
	   echo 'Nombre alumno: '.$fila["nombre"]; 
	   echo '</p>';
    }
    */
    function consultar(){
        $conexion=conectar();
        $sql = "select * from Alumnos limit 3;";
        // Muestra las 3 primeras filas de la tabla Alumnos
        $resultado=$conexion->query($sql);
            $total_filas=$resultado->num_rows;
            echo "<p>";
            echo "<b>".$sql."</b>";
            while($fila=$resultado->fetch_array()){
                echo "<p>";
                echo $fila["idAlumno"].'-'.$fila["nombreAlumno"];
                echo "<p>";
            }
        $conexion->close(); 
        return $total_filas;
    }

    consultar();
 ?>