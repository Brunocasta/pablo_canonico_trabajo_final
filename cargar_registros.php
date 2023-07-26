<?php

include("conexion.php");
$nombre ="";
$apellido ="";
$direccion ="";
$dni =0;
$genero="";

if(isset($_REQUEST["nombre"]))$nombre=$_REQUEST["nombre"];
if(isset($_REQUEST["apellido"]))$apellido=$_REQUEST["apellido"];
if(isset($_REQUEST["direccion"]))$direccion=$_REQUEST["direccion"];
if(isset($_REQUEST["dni"]))$dni=$_REQUEST["dni"];
if(isset($_REQUEST["genero"]))$genero=$_REQUEST["genero"];

$sql="INSERT into registros (nombre,apellido,direccion,dni,genero) values ( '$nombre','$apellido','$direccion',$dni,'$genero' )";
mysqli_query($conexion_db,$sql);


// mysqli_close($conexion_db);

header('Location:index.php?ok=1');
?>


