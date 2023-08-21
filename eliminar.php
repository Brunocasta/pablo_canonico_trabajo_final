<?php
include('conexion.php');

if(isset($_REQUEST['id']))$id = $_REQUEST['id'];
$sql="DELETE from productos where id = $id ";

mysqli_query($conexion_db,$sql);

header("Location: ver.php");
?>


