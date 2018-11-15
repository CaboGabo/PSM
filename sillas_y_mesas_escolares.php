<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promotora de Sillas y Muebles</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="newStyle.css">
</head>
<body>
    <?php include("conexion.php"); 
        $conexion = conectar();?>
    <?php include("bannernavbar.html"); ?>
    <main>
    <div class="container backgroundWorkArea">
            <h2 class="text-center">Sillas y mesas para escuelas y capacitación</h2>
            <div class="row color text-center">
                <?php
                    $resultados = consultarCategoria(3, $conexion); 
                    foreach($resultados as $fila) { 
                        $id = $fila['idProductos'];
                        $foto = $fila['mini'];
                        $nom = $fila['Nombre'];
                ?>
                <a href="producto.php?id=<?php echo $id ?>">
                <div class="col-sm-2">
                    <div class="panel panel-primary">
                        <div class="panel-body tam-min"><img class="img-responsive img-center tam-max" src="<?php echo $foto ?>" alt="<?php echo $nom ?>"/ ></div>
                        <div class="panel-footer tam-des"><?php echo $nom ?></div>
                    </div>
                </div>
                </a>
                <?php } ?>
            </div>
            <p class="text-center color">Para ver algunos de los colores disponibles para las cubiertas de mesas escolares haga clic <a href="colores_cubiertas_escolares.php">AQUÍ</a></strong></p>  
    </div> 
    </main>
    <?php include("footer.html"); ?>
</body>
</html>