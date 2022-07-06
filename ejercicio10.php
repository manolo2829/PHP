
<?php

/* ------------------------- OPERACIONES ARITMETICAS ------------------------ */

if($_POST){

    $valorA = $_POST["valorA"];
    $valorB = $_POST["valorB"];  

    $suma=$valorA+$valorB;
    $rest=$valorA-$valorB;
    $division=$valorA/$valorB;
    $multiplicacion=$valorA*$valorB;

    echo "Resultados <br/>";
    echo "Suma: ".$suma."<br/>";
    echo "Resta: ".$rest."<br/>";
    echo "Division: ".$division."<br/>";
    echo "Multiplicacion: ".$multiplicacion."<br/>";

    if($valorA > $valorB){
        echo "El valor A es mayor que B <br/>";

        if($valorA > 10){
            echo "El valor A es mayor que 10";
        }
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


<form action="ejercicio10.php" method="post">

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