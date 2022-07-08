<?php

    /* ----------------- Leer y mostrar contenido de un archivo ----------------- */

    $archivo="contenido.txt";

    // Esta funcion nos permite abrir un archivo determinado en un afuncione determinada. Tambien le agregamos la opcion de lectura.
    $archivoAbierto=fopen($archivo, "r");

    // Asi mostramos el contenido del archivo
    $contenido=fread($archivoAbierto, filesize($archivo));

    echo $contenido;

?>