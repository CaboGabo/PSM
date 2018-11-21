<?php require("conexion.php"); 
    $conexion = conectar();
    $informacion = consultarInformacion($_GET['id'], $conexion);
    foreach($informacion as $info) {
        $meta = $info['Meta'];
        $titulo = $info['Titulo'];
        $encabezado = $info['Encabezado'];
    }
     ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta content="<?php echo $meta; ?>" name="description">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/newStyle.css">
    
</head>
<body>
    <?php include("bannernavbar.html"); ?>
    <main>
        <div class="container backgroundWorkArea">
        <h2 class="text-center"><?php echo $encabezado; ?></h2>
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
                }
                $imgs = consultarImagenes($idModelo, $conexion);
                $contador = 0;
        ?>
            <div class="row">
                <div class="col-sm-8">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php
                            foreach($imgs as $img) {
                                $ruta = $img['Ruta'];
                                $contador++;
                            ?><img class="img-responsive img-center tam-max-prin tam-min-prin mySlides" src="<?php echo $ruta;?>" alt="<?php echo $nombre ?>"> <?php } ?> </div>
                        <div class="panel-footer"><p class="color text-center negrita"><?php echo $nombre; ?></p>
                    <?php
                        if($modelo!=null) {
                    ?>   
                    <p class="color text-center">(MOD. <?php echo $modelo; ?>)</p><?php }?>
                    <p class="color text-justify"><?php echo $desc; ?></p></div>
                    </div>
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

                                    if(strpos($nombre,"CONCHA")!=false) {
                                        $nombresColores = array('Amarillo', 'Azul', 'Naranja', 'Negro', 'Rojo', 'Verde');
                                        $rutasColores = array('./img/colores_concha/amarillo.jpg',
                                                            './img/colores_concha/azul.jpg',
                                                            './img/colores_concha/naranja.jpg',
                                                            './img/colores_concha/negro.jpg',
                                                            './img/colores_concha/rojo.jpg',
                                                            './img/colores_concha/verde.jpg');
                                        ?>
                                        <p class="color text-center">Colores disponibles:</p>
                                        <div class="row color text-center">
                                        <?php
                                            for($i=0; $i<6; $i++) { //Cambiar por el 6 por número de colores
                                        ?>
                                            <div class="col-sm-4"><img class="img-responsive img-center" src="<?php echo $rutasColores[$i]; ?>" alt="<?php echo $nombresColores[$i] ?>" ></div>
                                        <?php   
                                        } 
                                        ?>
                                        </div>
                                        <?php
                                    }
                                ?>
                                
                            </div>
                            <div class="panel-footer">
                                <p class="color text-center">Consulte la política de venta haciendo clic <strong><a href="politicaventa.php">AQUÍ</a></strong></p>
                                <a href="<?=$_SERVER['HTTP_REFERER'] ?>"><button type="button" class="btn btn-danger btn-block">Volver</button></a>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <p class="color text-center negrita">Imágenes:</p>
                            </div>
                            <div class="panel-body">
                                <p class="text-center">
                                    <?php for ($j=1; $j<=$contador; $j++) { ?>
                                    <button type="button" class="btn btn-primary" onclick="currentDiv(<?php echo $j ?>,0)"><?php echo $j ?></button> <?php } ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        <?php
            }
            else {
                $idModelos = array();
                $nombres = array();
                $modelos = array();
                $descs = array();
                $precios = array();
                $imagenes = array();
                $fkModelos = array();
                $resultados = consultarProducto($_GET['id'], $conexion);
                $j=0;
                foreach($resultados as $fila) {
                    array_push($idModelos,$fila['idModelos']);
                    array_push($nombres,$fila['Nombre']);
                    array_push($modelos,$fila['Modelo']);
                    array_push($descs,$fila['Descripcion']);
                    array_push($precios,$fila['Precio']);
                    $j++;
                }
                $l = 0;
                for($k=0; $k<$j; $k++) {
                    $imgs = consultarImagenes($idModelos[$k], $conexion);
                    foreach($imgs as $img) {
                        array_push($imagenes,$img['Ruta']);
                        array_push($fkModelos, $img['fkModelos']);
                        $l++;
                    }
                }

                if($k==$l) {?>
                    <?php
            ?>
            <div class="row">
                <div class="col-sm-8">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php
                            for($m=0; $m<$k; $m++) {
                            ?><img class="img-responsive img-center tam-max-prin tam-min-prin mySlides" src="<?php echo $imagenes[$m];?>" alt="<?php echo $nombres[$m] ?>"> <?php } ?> </div>
                        <div class="panel-footer">
                            <?php for($m=0; $m<$k; $m++) {
                                if($m==0) {
                                ?>
                            <p id="nombre<?php echo $m ?>" class="color text-center negrita"><?php echo $nombres[$m] ?></p> 
                            <?php if($modelos[$m] != null) {
                                ?>
                                <p id="modelo<?php echo $m ?>" class="color text-center">(MOD. <?php echo $modelos[$m] ?>)</p> <?php
                            } else {
                                ?>
                                <p id="modelo<?php echo $m ?>" class="color text-center"></p>
                                <?php
                            }
                                ?>
                            <p id="descripcion<?php echo $m ?>" class="color text-justify"><?php echo $descs[$m] ?></p>
                            <?php
                                } else {
                                    ?>
                            <p id="nombre<?php echo $m ?>" class="color text-center negrita oculto"><?php echo $nombres[$m] ?></p>
                            <?php  if($modelos[$m] != null) {
                            ?>  
                            <p id="modelo<?php echo $m ?>" class="color text-center oculto">(MOD. <?php echo $modelos[$m] ?>)</p> <?php 
                            } else {
                                ?>
                                <p id="modelo<?php echo $m ?>" class="color text-center oculto"></p>
                                <?php
                            }
                            ?>
                            <p id="descripcion<?php echo $m ?>" class="color text-justify oculto"><?php echo $descs[$m] ?></p>
                              <?php  }
                        } ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <p class="color text-center negrita">Información del producto:</p>
                            </div>
                            <div class="panel-body">
                                <?php
                                for($m=0; $m<$k; $m++) {
                                    if($precios[$m] != null ) {
                                    if($m==0) {
                                            ?>
                                    <p id="precio<?php echo $m ?>" class="color text-center">$<?php echo number_format($precios[$m],2); ?></p>
                                    <p id="iva<?php echo $m ?>" class="color text-center">I.V.A. $<?php echo number_format($precios[$m]*0.16,2); ?></p>
                                    <p id="total<?php echo $m ?>" class="color text-center negrita">PRECIO $<?php echo number_format($precios[$m]*1.16,2); ?></p>   
                                    <?php
                                    } else {
                                        ?>
                                <p id="precio<?php echo $m ?>" class="color text-center oculto">$<?php echo number_format($precios[$m],2); ?></p>
                                <p id="iva<?php echo $m ?>" class="color text-center oculto">I.V.A. $<?php echo number_format($precios[$m]*0.16,2); ?></p>
                                <p id="total<?php echo $m ?>" class="color text-center negrita oculto">PRECIO $<?php echo number_format($precios[$m]*1.16,2); ?></p>   
                                <?php  } } else { ?>
                                    <p id="precio<?php echo $m ?>" class="color text-center oculto">Por favor, solicite su precio vía telefónica o por correo electrónico.</p>
                                    <p id="iva<?php echo $m ?>" class="color text-center oculto"></p>
                                    <p id="total<?php echo $m ?>" class="color text-center negrita oculto"></p>   
                                    <?php 
                                }
                                }
                                ?>
                            </div>
                            <div class="panel-footer">
                                <p class="color text-center">Consulte la política de venta haciendo clic <strong><a href="politicaventa.php">AQUÍ</a></strong></p>
                                <a href="<?=$_SERVER['HTTP_REFERER'] ?>"><button type="button" class="btn btn-danger btn-block">Volver</button></a>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <p class="color text-center negrita">Imágenes:</p>
                            </div>
                            <div class="panel-body">
                                <p class="text-center">
                                    <?php 
                                    for ($m=1; $m<=$k; $m++) { ?>
                                    <button type="button" class="btn btn-primary" onclick="currentDiv(<?php echo $m ?>, <?php echo $k ?>)"><?php echo $m ?></button> <?php } ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <?php
                }
            }
        ?>
        </div>
        <script src="./js/js.js"></script>
    </main>
    <?php include("footer.html"); ?>
</body>
</html>