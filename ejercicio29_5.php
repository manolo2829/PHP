<?php

    /* -------------------- SELECCIONAR VALOR DE INPUT FILES -------------------- */

    if($_POST){

        print_r($_POST);

        echo "<br/>";

        // Con este metodo obtenemos los datos de los archivos enviados desde un input file.
        print_r($_FILES['archivo']['name']);
        
        // Esta funcione nos permite agarrar el archivo temporarl que crea nuestor sitema y moverlo a la carpeta indicada y ponerle el nombre que qeuramos
        move_uploaded_file($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']);


        // Este metodo se utiliza para mover y copiar los archivos a nuestor servidor
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input File</title>
</head>
<body>

    <!-- Este parametro nos permite enviar archivos -->
    <form action="ejercicio29_5.php" enctype="multipart/form-data" method="post">

        Imagen:
        <input type="file" name="archivo">

        <br><br>
        <input type="submit" name="enviar" value="Enviar informacion">

    </form>
    
</body>
</html>