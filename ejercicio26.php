<?php

     /* ----------------------- INSERTAR DATOS EN UNA TABLA ---------------------- */

    $servidor = "localhost"; // Localhost se indentifica como la direccion 127.0.0.1;

    $usuario = "root"; // Tambien necesitamos un usuario; 

    $contraseña = "";
    

    try {

        $conexion = new PDO("mysql:host=$servidor;dbname=database_album", $usuario, $contraseña ); 
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

        // Es el codigo SQL para insertar datos en un tabla. Se puede obtener en la tabla yendo a insertar apretando continuar
        $sql ="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg')";

        $conexion->exec($sql); //Es un metodo propio de sql que nos permite ejecutar instrucciones de sql

        echo"Conexion establecida";

    } catch (PDOException $error) {
        echo"Error en la conexion".$error;
    }
?>