<?php

    /* ---------------------------- METODOS DE ARRAYS --------------------------- */

    // https://www.php.net/manual/es/ref.array.php

    $frutas = array("Manzana", "Pera", "Fresa");

    /* ---------------------------------- PUSH ---------------------------------- */
    array_push($frutas, "Uva");
    print_r($frutas);
    echo "<br/>";

    /* ----------------------------------- POP ---------------------------------- */
    array_pop($frutas);
    print_r($frutas);
    echo "<br/>";

?>