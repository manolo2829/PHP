<?php

    /* ------------------------- Seleccionar input text ------------------------- */


    /* --------------------------- OPERADOR TERNEARIO --------------------------- */
    $txtNombre = (isset($_POST['txtNombre'])) ?  $_POST['txtNombre'] : "";
    // Esto es lo mismo que que lo de arriba
    // if($_POST){
    //     $txtNombre = $_POST['txtNombre']);
    // }

    $rdgLenguaje = (isset($_POST['lenguaje'])) ?  $_POST['lenguaje'] : "";

    print_r($_POST)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores input text</title>
</head>
<body>

    <?php if($_POST){ // Se puede utilizar cogido php para completar campos html sin ningun problema ?>

        <strong>Hola</strong>: <?php echo $txtNombre // Inclusive adentro de una etiqueta ?>


    <?php } ?>

    <form action="ejercicio29.php" method="post">

        Nombre: <br>
        <input value="<?php echo $txtNombre ?>" type="text" name="txtNombre">

        <br>
        <br>

        <input type="submit" name="Enviar">


    </form>

</body>
</html>