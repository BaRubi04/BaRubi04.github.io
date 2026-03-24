<?php
    session_start();
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
        while($fila=$resultado->fetch_array()){
            echo '<p>';
            echo 'Nombre alumno: '.$fila["nombreAlumno"]; 
            echo '</p>';
        }
    }

    function listado_jesuitas(){
        $conexion=conectar();
        $sql = "select idAlumno,nombreJesuita from alumnos;";
        $resultado=$conexion->query($sql);
        while($fila=$resultado->fetch_array())
            if($_SESSION["id"]!=$fila["idAlumno"])
                echo '<option value="'.$fila["idAlumno"].'">'.$fila["nombreJesuita"].'</option>';                                    
        $conexion->close(); 
    }

    function sacar_id(){ 
        $conexion=conectar();  
        $sql="select * from alumnos;";
        $resultado=$conexion->query($sql);	
        while($fila=$resultado->fetch_array()){
            return ;
        }
    }
 ?>