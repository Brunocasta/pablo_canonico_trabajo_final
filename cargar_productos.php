<?php
session_start();
$codigo_captcha= $_POST['captcha'];

if($codigo_captcha == $_SESSION['codigo_captcha']){
    include("conexion.php");

    $nombre ="";
    $codigo_producto ="";
    $direccion ="";
    $empleado ="";
    $archivo="";
    $estado="";

    if(isset($_REQUEST["nombre_producto"]))$nombre=$_REQUEST["nombre_producto"];
    if(isset($_REQUEST["codigo_producto"]))$codigo_producto=$_REQUEST["codigo_producto"];
    if(isset($_REQUEST["direccion"]))$direccion=$_REQUEST["direccion"];
    if(isset($_REQUEST["empleado"]))$empleado=$_REQUEST["empleado"];
    if(isset($_REQUEST["estado"]))$estado=$_REQUEST["estado"];

    $nombre_arch    = $_FILES['archivo']['name'];
    $temporal_arch  = $_FILES['archivo']['tmp_name'];
    $tipo_arch      = $_FILES['archivo']['type'];
    $tamanio_arch   = $_FILES['archivo']['size'];

    $destino = 'imagenes/'.$nombre_arch;

    if( $tipo_arch == 'image/jpeg' && $tipo_arch == 'image/png' && $tipo_arch == 'image/png' && $tipo_arch > 200000){
        header('Location : cargar.php?errorImg=1');
    }else{
        move_uploaded_file($temporal_arch ,$destino);

        $sql="  INSERT into productos (nombre_producto,codigo_producto,direccion,empleado,estado,img) 
                values ( '$nombre','$codigo_producto','$direccion','$empleado','$estado' ,'$nombre_arch')";

        mysqli_query($conexion_db,$sql);

        header('Location:cargar.php?ok=1');
    }
}else{
    header("Location: cargar.php?error_codigo=1");
    exit;
}
mysqli_close($conexion_db);
?>


