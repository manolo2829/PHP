<?php

    /* -------------------------- Seleccionar text area ------------------------- */

    $txtComentario = ( isset($_POST['txtComentario']) ) ? $_POST['txtComentario'] : "";

    print_r($_POST);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="ejercicio29_4.php" method="post">

    Tienes alguna duda... <br>
    <?php

        // Asi logramos que el valor del select sigan seleccionado despues de enviar el fomulario
    
    ?>
    
    <textarea name="txtComentario" cols="30" rows="10">
        <?php echo $txtComentario; ?>
    </textarea>

    <br><br>

    <strong>Tu mensaje es: </strong><?php echo $txtComentario; ?>

    <br><br>
    <input type="submit" value="Enviar">

</form>
    
</body>
</html>