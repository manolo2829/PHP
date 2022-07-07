<?php

    /* ------------------------- Seleccionar Input Radio ------------------------ */

    // Asi seleccionamos todos los inputs, y obtenemos el valor.
    $rdgLenguaje = (isset($_POST['lenguaje'])) ?  $_POST['lenguaje'] : "";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Radio</title>
</head>
<body>

    <form action="ejercicio29_1.php" method="post">

        ¿Te gusta? <br>

        <br>PHP: <input type="radio" <?php echo ($rdgLenguaje === "PHP") ? "checked" : ""; // Asi logramos que cando se actualice la pagina siga seleccionando el radio que seleccionamos  ?> value="PHP" name="lenguaje">
        <br>HTML: <input type="radio" <?php echo ($rdgLenguaje === "HTML") ? "checked" : ""; ?> value="HTML" name="lenguaje">
        <br>CSS: <input type="radio" <?php echo ($rdgLenguaje === "CSS") ? "checked" : ""; ?> value="CSS" name="lenguaje">

        <br>
        <br>
        <?php if($_POST){ // Se puede utilizar cogido php para completar campos html sin ningun problema ?>

            <strong>A mi tambien me gusta</strong>: <?php echo $rdgLenguaje // Inclusive adentro de una etiqueta ?>


        <?php } ?>

        <br>
        <br>

        <input type="submit" name="Enviar">


    </form>

    
</body>
</html>