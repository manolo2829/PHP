
<?php

    /* --------------------------------- SWITCH --------------------------------- */

    if($_POST){

        $btn = $_POST["btnValor"];

        switch ($btn) {
            case 1:  
                echo "Se preciono el boton 1";       
                break;
            case 2:
                echo "Se preciono el boton 2";      
                break;
            case 3:
                echo "Se preciono el boton 3";       
                break;
        
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>

    <form action="ejercicio12.php" method="post">

        <input type="submit" name="btnValor" value="1">
        <br>
        <input type="submit" name="btnValor" value="2">
        <br>
        <input type="submit" name="btnValor" value="3">

    </form>
    
</body>
</html>