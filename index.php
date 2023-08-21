
    <?php include('header.php');?>

<section class="contenedor_cargar text-center" >
    <h1>INGRESO</h1>
    <form action="validar.php" method="POST" >
        <div class="form-group mt-2">
            <label for="usuario">USUARIO</label>
            <input type="text" name="usuario" class="form-control" required>
        </div>
        <div class="form-group mt-2">
            <label for="clave">CONTRASEÑA</label>
            <input type="password" name="clave" class="form-control" required>
        </div>
        
        <div class="row">
            <div>
                <button type="submit" value="ingresar" class="btn btn-secondary p-descripcion">INGRESAR</button>
            </div>
        </div>   
        <?php 
        if(isset($_GET["error"])==1){
            echo "<h3 class='mensaje' >Datos Incorrectos </h3>";
        }
    ?> 
    </form>
</section> 


