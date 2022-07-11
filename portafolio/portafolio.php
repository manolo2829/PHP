<?php include("cabecera.php");?>
<?php include("conexion.php");?>


<?php

    if($_POST){

        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];

        $fecha = new DateTime();

        $imagen = $fecha->getTimestamp()."_".$_FILES['archivo']['name'];
        $imagen_temporal = $_FILES['archivo']['tmp_name'];

        move_uploaded_file($imagen_temporal, "imagenes/".$imagen);


        $objConexion = new Conexion();
        $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion')";
        $objConexion->ejecutar($sql);

        // Asi evitamos que vuelvan a enviar los mismos datos.
        header("location:portafolio.php");
    }

    if($_GET){
        // DELETE FROM `proyectos` WHERE `proyectos`.`id` = 15;

        $id=$_GET['borrar'];
        $objConexion = new Conexion();

        $imagen = $objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=".$id);

        // unlink nos permite borrar archivos de una ubicacion.
        unlink("imagenes/".$imagen[0]['imagen']);

        $sql="DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$id;
        $objConexion->ejecutar($sql);

        header("location:portafolio.php");

    }

    $objConexion = new Conexion();
    $resultados = $objConexion->consultar("SELECT * FROM `proyectos`");

?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos del proyecto
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">
                        Nombre del proyecto: <input required class="form-control" type="text" name="nombre">
                        <br/>
                        Descripcion del proyecto: <textarea name="descripcion" required rows="3" class="form-control"></textarea>
                        <br>
                        Imagen del proyecto: <input required class="form-control" type="file" name="archivo">
                        <br/>
                        <input class="btn btn-success" type="submit" value="Enviar">
                    </form>
                </div>
                <div class="card-footer text-muted">
                    
                </div>
            </div>
        </div>
        <div class="col-md-6">

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($resultados as $proyecto) { ?>
                    <tr>
                        <td><?php echo $proyecto['id']; ?></td>
                        <td><?php echo $proyecto['nombre']; ?></td>
                        <td><?php echo $proyecto['descripcion']; ?></td>
                        <td>
                            <img width="100" height="50" src="imagenes/<?php echo $proyecto['imagen']; ?>" alt="">
                        </td>
                        <td><a href="?borrar=<?php echo $proyecto['id']; ?>" class="btn btn-danger" >Eliminar</a></td>
                    </tr>

                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>
    
</div>

<?php include("pie.php");?>
