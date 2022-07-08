<?php


    /* -------------------------- LEER UN FORMATO JSON -------------------------- */

    $jsonContenido ='[{"nombre":"Oscar", "apellido": "Uh"}, {"nombre":"Manuel", "apellido": "Diez"}]';

    print_r($jsonContenido);

    echo "<br/>";

    // Este metodo nos permite convertir en objeto un JSON.
    $resultado = json_decode($jsonContenido);

    print_r($resultado);

    foreach ($resultado as $persona){
        echo "<br/>";
        print_r($persona->nombre);
    }

    /* ---------------------- TRANSFORMAR UN OBJETO A JSON ---------------------- */

    echo "<br/>";
    echo "<br/>";


    $personas = array( "Oscar"=>40, "Jose"=>20, "Marisa"=>38);

    print_r($persona); 
    echo "<br/>";

    // Asi transformamos en JSON
    echo json_encode($persona);
    

?>