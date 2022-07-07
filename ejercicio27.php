<?php

    /* ------------------------- LEER DATOS DE UN TABLA ------------------------- */

    $servidor = "localhost"; // Localhost se indentifica como la direccion 127.0.0.1;

    $usuario = "root"; // Tambien necesitamos un usuario;

    $contraseña = "";
    

    try {

        $conexion = new PDO("mysql:host=$servidor;dbname=database_album", $usuario, $contraseña ); 
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

        $sql = "SELECT * FROM `fotos`"; // Seleccionamos la instruccion sql. 
              
        $sentencia = $conexion->prepare($sql); // Hacemos la lectura y almacenamos la informacion en la sentencia

        $sentencia->execute(); // Ejecutamos la sentencia con los resultados

        print_r($sentencia);

        echo"<br/>";

        $resultado = $sentencia->fetchAll(); // Asi obtenemos todos los resultados de la sentencia

        print_r($resultado);

        foreach($resultado as $foto){
            echo"<br/>";
            print_r($foto['nombre']);
        }

        echo"<br/>";

        echo"Conexion establecida";

    } catch (PDOException $error) {
        echo"Error en la conexion".$error;
    }
?>