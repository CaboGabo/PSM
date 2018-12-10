<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta content="bancos y sillas altas periqueras, mesas altas para barra y cafeteria con cubiertas redondas o cuadradas" name="description">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bancos y mesas altas para barra o cafetería</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/newStyle.css">
</head>
<body>
    <?php include("conexion.php"); 
         $conexion = conectar();?>
    <?php include("bannernavbar.html"); ?>
    <main>
    <div class="container backgroundWorkArea">
            <h2 class="text-center">Bancos y mesas altas para cafetería o barra</h2>
            <div class="row color text-center">
                <?php
                    $resultados = consultarCategoria(5, $conexion); 
                    foreach($resultados as $fila) {
                        $id = $fila['idProductos']; 
                        $foto = $fila['mini'];
                        $nom = $fila['Nombre'];
                        $prod = $fila['Titulo'];
                        if($nom!="DESC") {
                            $prod = friendly_url($prod);
                ?>
                <a href="producto/<?php echo "$id/$prod"?>">
                <div class="col-sm-2">
                    <div class="panel panel-primary">
                        <div class="panel-body tam-min"><img class="img-responsive img-center tam-max" src="<?php echo $foto ?>" alt="<?php echo $nom ?>"/ ></div>
                        <div class="panel-footer tam-des"><?php echo $nom ?></div>
                    </div>
                </div>
                </a>
                <?php } } ?> 
            </div>
            <div class="row color text-center">
                <div class="col-sm-12"><p>Las estructuras de las sillas y mesas pueden tener un acabado cromado o esmaltadas en color negro o color aluminio. Las cubiertas de las mesas son en color de su elección. También se fabrican con forma circular o cuadrada (con una medida habitual de 60 cms o la medida que usted requiera, con excepción de los bancos y mesas de aluminio, que al ser importados cuentan con una medida ya establecida.)</p></div>
            </div>
    </div> 
    </main>
    <?php include("footer.html"); ?>
</body>
</html>