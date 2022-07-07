<?php

    /* ------------------------ Seleccionar Inpt checkbox ----------------------- */

    $chkphp = (isset($_POST['chkphp'])=="si") ? "checked" : "";
    $chkhtml = (isset($_POST['chkhtml'])=="si") ? "checked" : "";
    $chkcss = (isset($_POST['chkcss'])=="si") ? "checked" : "";


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

<form action="ejercicio29_2.php" method="post">

    Estas aprendiendo...
    <?php

        // Asi logramos que el valor de los checkbox sigan seleccionado despues de enviar el fomulario
    
    ?>
    <br>PHP: <input type="checkbox" <?php echo $chkphp; ?> name="chkphp" value="si">
    <br>HTML: <input type="checkbox" <?php echo $chkhtml; ?> name="chkhtml" value="si">
    <br>CSS: <input type="checkbox" <?php echo $chkcss; ?> name="chkcss" value="si">


    <br><br>
    <input type="submit" value="Enviar">

</form>
    
</body>
</html>