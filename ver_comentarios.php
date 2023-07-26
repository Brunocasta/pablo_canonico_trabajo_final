<?php include('header.php');?>

    <?php
    $archivo=fopen('comentarios.txt','r');
    $tamanio=filesize('comentarios.txt');
    $contenio = fread($archivo,$tamanio);
    echo $contenio;
    fclose($archivo);
    ?>
