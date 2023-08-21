<?php 
session_start();
if(isset($_SESSION['admin'])){
    include('header.php');

?>

<section class="contenedor_personajes">
    <?php include("conexion.php");
    $sql="SELECT * FROM productos";
    $consulta_db=mysqli_query($conexion_db,$sql);

    $result=mysqli_num_rows($consulta_db);
    if($result>0){
    while($mostar_datos=mysqli_fetch_assoc($consulta_db)){
?>
    <div>
        <h2 class="p-descripcion"><?php echo strtoupper($mostar_datos['nombre_producto'] );?></h2>
        <img src="imagenes/<?php echo $mostar_datos['img'];?>" alt="" style="max-width: 250px;max-height: 250px;">
        <p class="p-descripcion">Codigo: <strong><?php echo $mostar_datos['codigo_producto'];?></strong></p>
        <p class="p-descripcion">Dirección: <strong><?php echo $mostar_datos['direccion'];?></strong></p>
        <p class="p-descripcion">Nombre empleado a Cargo: <strong><?php echo strtoupper($mostar_datos['empleado']);?></strong></p>
        <p class="p-descripcion">Estado: <strong><?php echo strtoupper($mostar_datos['estado']);?></strong></p>
        <input type="button" class="button-eliminar" value="ELIMINAR" onclick="document.location='eliminar.php?id=<?php echo $mostar_datos['id'];?>'"> 
        <?php if($mostar_datos['estado']=="PROCESADO"){?><input type="button" class="button-estado" value="FINALIZAR" onclick="document.location='editar_producto.php?id=<?php echo $mostar_datos['id'];?>'"><?php } ?>
    </div>
    <?php }
    }else{
        echo "<h3><strong> No hay datos cargados </strong></h3>";
    }
}else{
    header('Location: index.php');
}
    ?>
</section>