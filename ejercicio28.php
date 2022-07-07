<?php

    /* -------------------------------- SESSIONES ------------------------------- */

    session_start(); // Esta funcion nos permite mantener datos en todas las paginas.

    // Asi creamos una varible tipo session
    $_SESSION["usuario"] = "Develoteca";
    $_SESSION["estatus"] = "logueado";

    echo "Sesión iniciada".":<br/>";

    echo $_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];

?>

