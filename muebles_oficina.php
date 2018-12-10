<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta content="fabricamos muebles para oficina escritorios, libreros, archiveros en cualquier medida, color y diseño" name="description">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Muebles para oficina, escritorios, libreros, archiveros, módulos ejecutivos, mesas de juntas</title>
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
            <h2 class="text-center">Escritorios, libreros, credenzas y muebles para oficina en general</h2>
            <div class="row color text-center">
                <?php
                    $resultados = consultarCategoria(7, $conexion); 
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
            <p class="text-center color">Si desea ver los colores disponibles para los muebles, haga clic <a href="colores_muebles">AQUÍ</a></strong></p>  
            <div class="row color text-center">
                <div class="col-sm-12">
                    <p class="negrita">Nuestros muebles son fabricados con tableros de madera industrializada, recubiertos de laminado plástico de baja presión (Panel Art)</p>
                    <ul class="text-justify">
                        <li>28 mm para patas y cubiertas, así como costados de libreros y archiveros</li>
                        <li>16 mm para frente de cajones, puertas, faldones y entrepaños móviles (excepto entrepaños fijos los cuales se fabrican en 28mm)</li>
                        <li>Correderas de extensión para cajones de archivo</li>
                        <li>Los cantos de cubiertas son protegidos con moldura "T" de pvc, o bien, cubrecanto melamínico térmico. (El resto de las partes como son: costados, entrepaños, etc. son protegidos únicamente con cubrecanto melamínico térmico)</li>
                        <li>Cuentan con jaladeras metálicas</li>
                    </ul>
                </div>
            </div>
    </div> 
    </main>
    <?php include("footer.html"); ?>
</body>
</html>