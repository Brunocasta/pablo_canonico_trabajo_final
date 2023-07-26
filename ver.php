<?php include("header.php");?>

<section class="contenedor_personajes">
    <?php include("conexion.php");
    $sql="SELECT * FROM registros";
    $consulta_db=mysqli_query($conexion_db,$sql);

    $result=mysqli_num_rows($consulta_db);
    if($result>0){
    while($mostar_datos=mysqli_fetch_assoc($consulta_db)){
?>
    <div>
        <h2 class="p-descripcion"><?php echo strtoupper($mostar_datos['nombre'] ." ".$mostar_datos['apellido']);?></h2>
        <p class="p-descripcion">Dirección: <strong><?php echo $mostar_datos['direccion'];?></strong></p>
        <p class="p-descripcion">Dni: <strong><?php echo $mostar_datos['dni'];?></strong></p>
        <p class="p-descripcion">Genero: <strong><?php echo strtoupper($mostar_datos['genero']);?></strong></p>
        <input type="button" class="button-eliminar" value="ELIMINAR" onclick="document.location='eliminar.php?id=<?php echo $mostar_datos['id'];?>'">
    </div>
    <?php }
    }else{
        echo "<h3><strong> No hay datos cargados </strong></h3>";
    }?>
</section>