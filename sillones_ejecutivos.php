<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta content="sillones ejecutivos de respaldo alto, de respaldo bajo y para visitas. Son sillones cómodos, durables, y son orgullosamente, de fabricación propia." name="description">
    <meta content="sillas y sillones ejecutivos importados, ergonomicos, tapizados con piel o malla. Ergonomicos, ajustables." name="description">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sillones ejecutivos e importados</title>
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
            <h2 class="text-center">Sillones ejecutivos de respaldo alto, respaldo bajo y para visitas e importados</h2>
            <div class="row color text-center">
                <?php
                    $resultados = consultarCategoria(9, $conexion); 
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
                <div class="col-sm-12">
                    <p class="negrita">Le recomendamos ampliamente adquirir nuestros sillones de tipo ejecutivo, ya que:</p>
                    <ol class="text-justify">
                        <li>Cuentan en su interior, con un casco de madera que, al ser de una sola pieza impide que los descansa-brazos se puedan romper, al soportar personas de talla grande (como ocasionalmente puede ocurrir con un sillón armado de 2 piezas).</li>
                        <li>Utilizamos para su elaboración, espumas de poliuretano de alta densidad que proporciona un mayor confort, y que además son prácticamente indeformables en el uso diario.</li>
                        <li>Las piezas que lo componen son de alta resistencia, lo cual lo hace ideal para usuarios robustos</li>
                        <li>Ofrecemos cerca de 50 colores de tela (pliana) para que elija el color de su agrado.</li>
                    </ol>
                </div>
            </div>
    </div> 
    </main>
    <?php include("footer.html"); ?>
</body>
</html>