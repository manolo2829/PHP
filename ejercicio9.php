
<?php

/* --------------------------- OPERADORES LOGICOS --------------------------- */

if($_POST){

    $valorA = $_POST["valorA"];
    $valorB = $_POST["valorB"];  

    if($valorA > $valorB && $valorA < 10 ){

        echo "EL valor de A es mayor que el valor de B y menor que 10";

    }


    

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Operadores aritmeticos</title>
</head>
<body>


<form action="ejercicio9.php" method="post">

    Valor A:
    <input type="text" name="valorA">
    <br>
    Valor B: 
    <input type="text" name="valorB">
    <br>
    <input type="submit" value="Calcular">

</form>


</body>
</html>