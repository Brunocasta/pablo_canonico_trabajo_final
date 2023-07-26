<?php
include('conexion.php');

if(isset($_REQUEST['id']))$id_registros=$_REQUEST['id'];
$sql="DELETE from registros where id = $id_registros ";

mysqli_query($conexion_db,$sql);

header("Location: ver.php");
?>


