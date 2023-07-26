<?php include('header.php');?>

<section class="contenedor_cargar text-center" >
    <h1>Carga de Descripción </h1>
    <form action="archivo_comentarios.php" method="POST">
        <div class="form-group mt-2">
            <input type="text" name="nombre" class="form-control" required placeholder="NOMBRE">
        </div>
        <div class="form-group mt-2">
            <input type="text" name="apellido" class="form-control" required placeholder="APELLIDO">
        </div>
        <div class="form-group mt-2">
            <textarea name="msj" id="msj" cols="40" rows="5" placeholder="  DESCRIPCIÓN"></textarea>
        </div>
        <input type="submit" value="ENVIAR COMENTARIO" class="btn btn-secondary p-descripcion">
    </form>
</section>

