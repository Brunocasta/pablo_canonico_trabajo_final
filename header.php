<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de Productos</title>
    <link rel="stylesheet" href="css/estilos.css?2.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body class="ms-3 mr-3">
    <header>
        <h1 class="titulo text-center">Carga de Productos</h1>
        <?php if(isset($_SESSION['admin'])){?>
        <ul class="menu_principal">
            <li><a class="a" href="cargar.php">CARGAR PRODUCTOS</a></li>
            <li><a class="a" href="ver.php">LISTADO DE PRODUCTOS</a></li>
            <li><a class="a" href="cargar_comentarios.php">DESCRIPCIÓN DE PRODUCTOS</a></li>
            <li><a class="a" href="salir.php">SALIR</a></li>
        </ul>
        <?php }?>
    </header>
</body>
</html>