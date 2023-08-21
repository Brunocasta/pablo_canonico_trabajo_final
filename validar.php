<?php
session_start();
include('conexion.php');
if(isset($_POST['clave']))$clave=$_POST['clave'];
if(isset($_POST['usuario']))$usuario=$_POST['usuario'];


$sql="SELECT * FROM administradores WHERE usuario = '$usuario' and clave = '$clave' ";
mysqli_query($conexion_db,$sql);

if($usuario =='admin' && $clave == 'admin123'){
    $_SESSION['admin']= $_POST['usuario']; 
    header('Location: cargar.php');
}else{
    header('Location: index.php?error=1');
}
?>