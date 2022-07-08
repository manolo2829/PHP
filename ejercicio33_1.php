<?php


    /* ----------------------- CREAR UN ARCHIVO DESDE PHP ----------------------- */

    // Le asignamos un nombre
    $nombreArchivo="archivo.txt";
    // Le asignamos un contenido
    $contenidoArchivo="Hola, saludos";
    // Le indicamos que el archivo se va a abrir en modo de escritura
    $archivoCrear = fopen($nombreArchivo, "w"); 
    // Le inidcamos que se escriba el contenido
    fwrite($archivoCrear, $contenidoArchivo);
    // // Luego cerramos el archivo
    fclose($archivoCrear);


?>