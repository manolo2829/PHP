
<?php

    /* ----------- Recibir informacion de un formulario (Metodo POST) ----------- */
    $nombre = $_POST['txtNombre'];

    echo "Hola ".$nombre." ";

    //Nos sale un error porque el usuario todavia no envia la informacion. Esto se soluciona de la siguiente manera.

    if($_POST){
        //Este condicional pregunta lo siguiente. Si huvo un envio imprime lo siguiente
        $nombre2 = $_POST['txtNombre'];
        echo "Hola ".$nombre2;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 PHP</title>
</head>
<body>

    <p>Formulario metodo POST</p>
    <form action="ejercicio2.php" method="post">
        <input type="text" name="txtNombre">
        <br>
        <input type="submit" value="enviar">
    </form>
    
</body>
</html>