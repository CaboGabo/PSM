<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta content="Promotora de Sillas y Muebles fabrica sillas de oficina. Sillones y sillas ejecutivas, secretariales, operativas y de visita" name="description">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sillas para Oficina | Sillas de Oficina | Sillas y Sillones | Promotora de sillas y muebles</title>
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
            <h2 class="text-center">Sillas para oficina, secretariales, reclinables, giratorias y de altura ajustable</h2>
            <div class="row color text-center color"> <h3>Línea de sillas para oficina económicas (de uso moderado)</h3></div>
            <div class="row color text-center">
                 <?php
                    $resultados = consultarCategoria(6, $conexion);
                    $i=0; 
                    foreach($resultados as $fila) { 
                        $previa = $fila['Previa'];
                        if(strpos($previa, 'continuo)') != false) {
                            break;
                        }
                        $i++;
                    }
                ?>
                <?php
                    $j=0;
                    $resultados = consultarCategoria(6, $conexion); 
                    foreach($resultados as $fila) { 
                        $id = $fila['idProductos'];
                        $foto = $fila['mini'];
                        $nom = $fila['Nombre'];
                        $previa = $fila['Previa'];
                        if($j==$i) {
                ?>
                    </div>
                    <div class="row text-center color"><h3>Línea de sillas para oficina(de uso continuo)</h3></div>
                    <div class="row">
                        <?php } $j++; ?>
                <a href="producto.php?id=<?php echo $id ?>">
                <div class="col-sm-2">
                    <div class="panel panel-primary">
                        <div class="panel-body tam-min"><img class="img-responsive img-center tam-max" src="<?php echo $foto ?>" alt="<?php echo $nom ?>"/ ></div>
                        <div class="panel-footer tam-des text-center"><?php echo $nom ?></div>
                    </div>
                </div>
                </a>
                <?php } ?> 
            </div>
            <p class="text-center color">Si desea ver los colores de tela disponibles para el tapíz de las sillas, haga clic <a href="colores_de_pliana.php">AQUÍ</a></strong></p>
    </div> 
    </main>
    <?php include("footer.html"); ?>
</body>
</html>