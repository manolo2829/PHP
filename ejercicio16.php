<?php

    /* -------------------------------- FUNCIONES ------------------------------- */


    // Declarando una funcion
    function imprimirNombre($nombre, $apellido=""){

        echo "Hola ".$nombre." ".$apellido."<br/>";

    }

    imprimirNombre("Oscar", "Diaz");
    imprimirNombre("Manuel", "Diez");
    // Si no queremos enviar los dos argumentos en todos los casos. Podemos igual el parametro en la funcion. $apellido="".
    imprimirNombre("Abuelo");

?>