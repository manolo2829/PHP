<?php

    /* ------------------------------- METODO GET ------------------------------- */

    // La diferencia entre el metodo get y post es que el get envia y muestra los datos por la url, y el metodo post los oculta y los recepciona

    // Este metodo se puede utilizar de la siguiente forma

    // Podemos enviar datos de un documento a otro poniendo la direccion a la hora de usar el metodo
    if($_GET){
        $nombre = $_GET['nombre'];

        echo "Hola ".$nombre;
    }

?>