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
    <?php require("conexion.php"); 
        $conexion = conectar();?>
    <?php include("bannernavbar.html"); ?>
    <main>
        <div class="container backgroundWorkArea">
        <?php
            $resultados = consultarProducto($_GET['id'], $conexion);
            $i = 0;
            foreach($resultados as $fila) {
                $i++;
            }
            
            if($i==1) {
                $resultados = consultarProducto($_GET['id'], $conexion);
                foreach($resultados as $fila) {
                    $idModelo = $fila['idModelos'];
                    $nombre = $fila['Nombre'];
                    $modelo = $fila['Modelo'];
                    $desc = $fila['Descripcion'];
                    $precio = $fila['Precio'];
    
                    //$imagenes = consultarImagenes($idModelo, $conexion);
                    /*foreach($imagenes as $imagen) {
                        $ruta = $imagen['Ruta'];
                        echo '<img src="'.$ruta.'">';
                    }*/
                }
            }
            else {
                // Codigo para después
            }
        ?>
        <h2 class="text-center">Encabezado del producto</h2>
            <div class="row">
                <div class="col-sm-8">
                    <p class="text-center">Aqui van las imagenes</p>
                    <p class="color text-center negrita"><?php echo $nombre; ?></p>
                <?php
                    if($modelo!=null) {
                ?>   
                <p class="color text-center">(MOD. <?php echo $modelo; ?>)</p><?php }?>
                <p class="color text-justify"><?php echo $desc; ?></p>
                </div>
                <div class="col-sm-4">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <p class="color text-center negrita">Información del producto:</p>
                            </div>
                            <div class="panel-body">
                                <?php
                                    if($precio!=null) {
                                ?>
                                <p class="color text-center">$<?php echo number_format($precio,2); ?> c/u</p>
                                <p class="color text-center">I.V.A. $<?php echo number_format($precio*0.16,2); ?></p>
                                <p class="color text-center negrita">PRECIO $<?php echo number_format($precio*1.16,2); ?></p>
                                <?php } else { ?>
                                    <p class="color text-center">Por favor, solicite su precio vía telefónica o por correo electrónico.</p>    
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="panel-footer">
                            <p class="color text-center">Consulte la política de venta haciendo clic <strong><a href="politicaventa.php">AQUÍ</a></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </main>

    <?php include("footer.html"); ?>
</body>
</html>