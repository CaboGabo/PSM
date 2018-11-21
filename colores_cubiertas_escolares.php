<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="Gama de colores disponibles para las cubiertas de mesas escolares" name="description">
    <title>Colores de cubiertas de mesas escolares</title>
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
            <h2 class="text-center">Colores de laminado plástico</h2>
            <?php 
                $nombresColores = array('Caoba', 'Arena', 'Cerezo', 'Encino', 'Grafito', 'Amarillo', 'Gris', 'Maple', 'Roble', 'Negro', 'Oyamel', 'Azul', 'Naranja', 'Rojo', 'Verde');
                $rutasColores = array('./img/colores_cubiertas_escolares/CAOBA.jpg',
                                    './img/colores_cubiertas_escolares/ARENA.jpg',
                                    './img/colores_cubiertas_escolares/CEREZO.jpg',
                                    './img/colores_cubiertas_escolares/ENCINO.jpg',
                                    './img/colores_cubiertas_escolares/GRAFITO.jpg',
                                    './img/colores_cubiertas_escolares/AMARILLO.jpg',
                                    './img/colores_cubiertas_escolares/GRIS.jpg',
                                    './img/colores_cubiertas_escolares/MAPLE.jpg',
                                    './img/colores_cubiertas_escolares/ROBLE.jpg',
                                    './img/colores_cubiertas_escolares/NEGRO.jpg',
                                    './img/colores_cubiertas_escolares/OYAMEL.jpg',
                                    './img/colores_cubiertas_escolares/AZUL.jpg',
                                    './img/colores_cubiertas_escolares/NARANJA.jpg',
                                    './img/colores_cubiertas_escolares/ROJO.jpg',
                                    './img/colores_cubiertas_escolares/VERDE.jpg');
            ?>
            <div class="row color text-center">
                <?php 
                    for($i=0; $i<15; $i++) { //Cambiar el 15 por el número de colores que hay
                ?>
                <div class="col-sm-2">
                    <div class="panel panel-primary">
                        <div class="panel-body"><img class="img-responsive img-center" src="<?php echo $rutasColores[$i]; ?>" alt="<?php echo $nombresColores[$i] ?>" ></div>
                        <div class="panel-footer"><?php echo $nombresColores[$i] ?></div>
                    </div>
                </div>
                <?php } ?> 
                <div class="col-sm-2">
                    <a href="<?=$_SERVER['HTTP_REFERER'] ?>"><button type="button" class="btn btn-danger btn-block">Volver</button></a>
                </div>
            </div>
        </div>
    </main>

    <?php include("footer.html"); ?>
</body>
</html>