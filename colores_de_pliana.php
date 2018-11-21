<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="Gama de colores de tela disponibles para el tapizado de sillas para oficina" name="description">
    <title>Colores de pliana para tapizado de sillas de oficina</title>
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
            <h2 class="text-center">Colores de tela (pliana)</h2>
            <div class="panel panel-default">
                <div class="panel-heading"><img class="img-responsive img-center" src="./img/colores de tela.jpg" alt="Colores de tela"></div>
                <div class="panel-body text-center color">Los tonos pueden variar de acuerdo a la configuración de su monitor</div>
                <div class="panel-footer"><a href="<?=$_SERVER['HTTP_REFERER'] ?>"><button type="button" class="btn btn-danger btn-block">Volver</button></a></div>
            </div>
            
        </div>
    </main>

    <?php include("footer.html"); ?>
</body>
</html>