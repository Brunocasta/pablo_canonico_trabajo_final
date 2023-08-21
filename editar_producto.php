<?php
include('conexion.php');

if(isset($_REQUEST['id']))$id=$_REQUEST['id'];

$sql="  UPDATE  productos SET estado = 'FINALIZADO'
        WHERE id = $id ";

mysqli_query($conexion_db,$sql);

header("Location: ver.php");
?>