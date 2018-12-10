<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="bancas de espera, metálicas, modernas, resistentes. Disponibles tapizadas y de plástico. Disponible para 2, 3 y 4 personas" name="description">
    <title>Bancas de espera acojinadas, de plástico polipropileno o metálicas</title>
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
            <h2 class="text-center">Bancas de espera, metálicas, acojinadas y de plástico</h2>
            <div class="row color text-center">
                <?php
                    $resultados = consultarCategoria(10, $conexion); 
                    foreach($resultados as $fila) { 
                        $id = $fila['idProductos'];
                        $foto = $fila['mini'];
                        $nom = $fila['Nombre'];
                        $pre = $fila['Previa'];
                        $prod = $fila['Titulo'];
                        if($nom!="DESC") {
                            $prod = friendly_url($prod);
                ?>
                <a href="producto/<?php echo "$id/$prod"?>">
                <div class="col-sm-2">
                    <div class="panel panel-primary">
                        <div class="panel-body tam-min"><img class="img-responsive img-center tam-max" src="<?php echo $foto ?>" alt="<?php echo $nom ?>"/ ></div>
                        <div class="panel-footer tam-des-gran"><?php echo "<strong>".$nom . "</strong>" ."<br>" . $pre ?></div>
                    </div>
                </div>
                </a>
                <?php } } ?> 
            </div>
    </div> 
    </main>
    <?php include("footer.html"); ?>
</body>
</html>