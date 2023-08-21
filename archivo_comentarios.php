<?php  
session_start();
include('header.php');
if(isset($_POST['nombre']))$nombre=$_POST['nombre'];
if(isset($_POST['msj']))$msj=$_POST['msj'];
?>
<section class="text-center" style="padding: 15px;">
    <table  border='0' width="60%" align="center" >
        <tr bgcolor='#808080'>
            <td width="60" align="center">NOMBRE</td>
            <td width="60" align="center">COMENTARIO</td>
            <td width="60" align="center">FECHA</td> 
        </tr>
    <?php
    $fecha_Actual = date("l - d/m/Y");
    $texto="    
    <tr>
        <td bgcolor='#fffff' >".$nombre."</td>
        <td bgcolor='#fffff'>".$msj."</td>
        <td bgcolor='#fffff'>".$fecha_Actual."</td>
    </tr>";
    $archivo=fopen("comentarios.txt","a");
    fputs($archivo,$texto);
    // echo "<p> DATOS ALMACENADOS</p>";

    $archivo=fopen('comentarios.txt','r');
    $tamanio=filesize('comentarios.txt');
    $contenio = fread($archivo,$tamanio);
    echo $contenio;
    fclose($archivo);
    ?>
    
    </table>
</section>