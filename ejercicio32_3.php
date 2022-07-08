<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        // El include_once basicamente se encarga de que si incluimos un archivo mas de una vez, solo se muetre una sola vez
        include_once "ejercicio32.php";
        include_once "ejercicio32.php";

        // El require_once hace los mismo


        echo "<br/>";
    
        echo "Hola estoy en require";

    ?>
    
</body>
</html>