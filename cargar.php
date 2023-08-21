<?php 

session_start();
if(isset($_SESSION['admin'])){
    include('header.php');

    $nro1 = rand(0,9);
    $nro2 = rand(0,9);
    $nro3 = rand(0,9);
    $letra = array('a','h','g','l','d','m','k');
    $simbolo = array('%','$','/','@','#');
    $mezcla_letra = rand(0,6);
    $mezcla_simbolo = rand(0,4);
    $_SESSION['codigo_captcha'] = $nro1 . $letra[$mezcla_letra]. $nro2 . $simbolo[$mezcla_simbolo] . $nro3 ;
?>

<section class="contenedor_cargar text-center" >
    <h1>Producto Ingresado a Deposito</h1>
    <form action="cargar_productos.php" method="POST" enctype="multipart/form-data" >
        <div class="form-group mt-2">
            <input type="text" name="nombre_producto" class="form-control" required placeholder="NOMBRE PRODUCTO">
        </div>
        <div class="form-group mt-2">
            <input type="text" name="codigo_producto" class="form-control" required placeholder="CODIGO PRODUCTO">
        </div>
        <div class="form-group mt-2">
            <input type="text" name="empleado" class="form-control" required placeholder="NOMBRE EMPLEADO">
        </div>
        <div class="form-group mt-2">
            <input type="text" name="direccion" class="form-control" required placeholder="DIRECCIÓN">
        </div>
        <div class="form-group mt-2">
            <input type="file" name="archivo" class="form-control" required >
        </div>
        <div class="form-group mt-2">
        <select name="estado" id="estado" class="form-select" required >
                <option value="0">ESTADO PRODUCTO</option>
                <option value="PROCESADO">PROCESADO</option>
                <option value="FINALIZADO">FINALIZADO</option>
            </select>
        </div>
        <div class="form-group mt-2">
            <img src="captcha.php" alt="captcha">
            <input type="text" name="captcha" class="form-control mt-2" placeholder="Ingresa Captcha">
        <div>
        
        <div class="row">
            <div>
                <button type="submit" value="cargar" class="btn btn-secondary p-descripcion">CARGAR</button>
            </div>
        </div>
    <?php 
        if(isset($_GET["ok"])==1){
            echo "<h3 class='mensaje' >Salio bien la Carga del Producto </h3>";
        }
        if(isset($_GET['error_codigo'])){
            echo "<h3 class='mensaje' >Codigo de verificacion Incorrecto </h3>";
        }
        if(isset($_GET['errorImg'])){
            echo "<h3 class='mensaje' >ERROR en Carga de Imagen </h3>";
        }
    }else{
        header('Location: index.php');
    }
    ?>    
    </form>
</section>

