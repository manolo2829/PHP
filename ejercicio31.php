<?php


    /* ---------------------------- CONSUMIR UNA API ---------------------------- */

    // Inidcamos la url
    $url = "https://api.dailymotion.com/videos?channel=sport&limit=10";

    // Agregamos opciones para consumir este servicio porque tiene un https necesita configuariones de seguridad
    $opciones = array("ssl"=>array("verify_peer"=>false, "verify_peer_name"=>false));

    //Utilizamos esta funcion que nos permite leer todo el contenido y convertirlo en string.
    $respuesta=file_get_contents($url,false,stream_context_create($opciones));

    // Decodificamos la respuesta( de json a obj )
    $objRespuesta=json_decode($respuesta);

    print_r($objRespuesta);

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";


    foreach($objRespuesta->list as $video){

        print_r($video->title);
        echo "<br/>";


    }
?>
<h1>Lista de videos</h1>
<ul>
    <?php // Asi escribimos los datos de un array de php en html?>
    <?php foreach($objRespuesta->list as $video){ ?>
    
        <li><?php echo $video->title?> | <?php echo $video->channel?></li> 
    
    <?php } ?>
</ul>