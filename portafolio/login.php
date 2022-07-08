<?php

    session_start();
    if($_POST){
        if( ($_POST['usuario'] == "manuel") && ( $_POST['contraseña'] == "123123" ) ){
            $_SESSION['usuario']="manuel";
            // Asi redirigimos al usuario a otro archivo php
            header("location:index.php");

        }else{
            echo "<script> alert('usuario o contraseña incorrecta')</script>";
        }
    }


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>

    
    <div class="container py-5">

        <div class="row justify-content-center align-items-center">
            <div class="col-md-4">

                <div class="card">
                    <div class="card-header">
                        Iniciar sesion
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">

                            Usuario: <input class="form-control" type="text" name="usuario">
                            <br/>
                            Contraseña: <input class="form-control" type="password" name="contraseña">
                            <br/>
                            <button class="btn btn-success" type="submit">Entrar al portafolio</button>

                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        
                    </div>
                </div>           
            </div>
        </div>
        
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>