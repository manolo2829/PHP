<?php include("cabecera.php");?>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Datos del proyecto
                    </div>
                    <div class="card-body">
                        <form action="portafolio.php" method="post">
                            Nombre del proyecto: <input class="form-control" type="text" name="nombre">
                            <br/>
                            Imagen del proyecto: <input class="form-control" type="file" name="archivo">
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
                            <th>Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>3</td>
                            <td>Aplicacion web</td>
                            <td>imagen.jpj</td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
        
    </div>

<?php include("pie.php");?>
