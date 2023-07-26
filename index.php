<?php include('header.php');?>

<section class="contenedor_cargar text-center" >
    <h1>Carga de Datos Personales</h1>
    <form action="cargar_registros.php" method="POST">
        <div class="form-group mt-2">
            <input type="text" name="nombre" class="form-control" required placeholder="NOMBRE">
        </div>
        <div class="form-group mt-2">
            <input type="text" name="apellido" class="form-control" required placeholder="APELLIDO">
        </div>
        <div class="form-group mt-2">
            <input type="number" name="dni" class="form-control" required placeholder="DNI">
        </div>
        <div class="form-group mt-2">
            <input type="text" name="direccion" class="form-control" required placeholder="DIRECCIÓN">
        </div>
        <div class="form-group mt-2">
            <select name="genero" id="genero" class="form-select" required >
                <option value="0">ELEGIR GENERO</option>
                <option value="femenino">FEMENINO</option>
                <option value="masculino">MASCULINO</option>
                <option value="no binario">NO BINARIO</option>
            </select>
        </div>
        <div class="row">
            <div>
                <button type="submit" value="cargar personaje" class="btn btn-secondary p-descripcion">CARGAR</button>
            </div>
        </div>

    <?php 
        if(isset($_GET["ok"])==1){
            echo "<h3 class='mensaje' >Salio bien la carga de Datos Personales </h3>";
        }
    ?>    
    </form>
</section>



