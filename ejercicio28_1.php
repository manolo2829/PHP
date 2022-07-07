<?php

    /* ------------------------ OBTENER DATOS DE SESSION ------------------------ */

    session_start(); // con la misma funcion podemos obtener los datos de session


    if(isset($_SESSION["usuario"])){ // Revisamos si exiten los datos || El comando isset se fija si la variable tiene algo
        echo $_SESSION["usuario"]." estatus: ".$_SESSION["estatus"]; // Escribimos los datos del otro documento
    }else{
        echo "No hay session";
    }


?>