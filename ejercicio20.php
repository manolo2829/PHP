<?php


    /* --------------------------------- ARRAYS --------------------------------- */

    // declarando un array
    $frutas=array("fresa", "manzana", "pera");

    // Asi imprimimos un array entero. Echo no funciona con arrays
    print_r($frutas);

    echo "<br/>";

    // Asi imprimos un valor del array por indice
    print_r($frutas[0]);

    echo "<br/>";

    // Asi creamos arrays con indices personalizados
    $nombres=array("M"=>"Manuel", "F"=>"Franco", "P"=>"Pablo");

    print_r($nombres);

    echo "<br/>";

    echo $nombres["F"];

    echo "<br/>";

    // Asi imprimimos un arry con un for
    for($i = 0; $i<3; $i++){
        echo $frutas[$i]."<br/>";
    }

    // Asi imprimimos un array con un foreach
    // Obtenemos el valor de un indice con la funcion i y los imprimimos
    foreach($nombres as $i=>&$valor){
        echo $i."<br/>";
        echo $nombres[$i]."<br/>";
    }


?>