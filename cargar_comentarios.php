<?php 
session_start();
if(isset($_SESSION['admin'])){
    include('header.php');
?>

<section class="contenedor_cargar text-center" >
    <h1>Descripción Productos</h1>
    <form action="archivo_comentarios.php" method="POST">
        <div class="form-group mt-2">
            <input type="text" name="nombre" class="form-control" required placeholder="NOMBRE PRODUCTO">
        </div>
        <div class="form-group mt-2">
            <textarea name="msj" id="msj" cols="40" rows="5" placeholder="  DESCRIPCIÓN"></textarea>
        </div>
        <input type="submit" value="ENVIAR DESCRIPCIÓN" class="btn btn-secondary p-descripcion">
    </form>
</section>

<?php
}else{
    header('Location: index.php');
}
?>