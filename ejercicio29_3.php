<?php

    /* ------------------------ Seleccionar valor select ------------------------ */

    $lsHeroes = ( isset($_POST['lsHeroes']) ) ? $_POST['lsHeroes'] : "";

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

<form action="ejercicio29_3.php" method="post">

    Que heroe te gusta... <br>
    <?php

        // Asi logramos que el valor del select sigan seleccionado despues de enviar el fomulario
    
    ?>
    
    <select name="lsHeroes">

        <option value="">Ninguna</option>
        <option value="banaman" <?php echo ($lsHeroes=="banaman") ? "selected" : "" ?> >Banaman</option>
        <option value="iron man" <?php echo ($lsHeroes=="iron man") ? "selected" : "" ?> >Iron man</option>
        <option value="superman" <?php echo ($lsHeroes=="superman") ? "selected" : "" ?> >Superman</option>




    </select>


    <br><br>
    <input type="submit" value="Enviar">

</form>
    
</body>
</html>