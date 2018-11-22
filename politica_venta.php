<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="nuestra empresa le ofrece sillas y mobiliario para oficina, hogar o negocio,  con calidad y excelentes precios" name="description">
    <title>Políticas de venta</title>
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
            <h2 class="text-center">Políticas de venta</h2>
            <div class="text-center color">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p class="negrita">ESTIMADO CLIENTE:</p>
                        <p>ES IMPORTANTE PARA NOSOTROS QUE LEA CON ATENCIÓN LAS SIGUIENTES PRECISIONES:</p>
                        <ol class="text-justify">
                            <li>Los precios escritos lo están en pesos mexicanos y a los cuales se deberá  agregar el 16% de I.V.A. (salvo en los productos que se muestran con I.V.A desglosado) y que estos, están sujetos a cambio sin previo aviso.</li>
                            <li>Dentro de cada producto se encuentra una descripción de sus características generales.</li>
                            <li>Los tiempos de entrega estimados son relativos a la cantidad solicitada, de tal manera que una vez recibida su solicitud de cotización, se evaluará  y asimismo se le enviará (ya sea vía fax o correo electrónico) el presupuesto correspondiente con los siguientes datos:
                                <ul>
                                    <li>Vigencia del presupuesto</li>
                                    <li>Tiempos de entrega</li>
                                    <li>Los datos de depósito, así como número de cuenta de la institución bancaria, la fecha de entrega será válida, una vez que haya sido recibido el depósito parcial equivalente al 50% del total de su compra.</li>
                                </ul>
                            </li>
                            <li>Para poder enviar y embarcar su mercancía es necesario que esta se encuentre liquidada en su totalidad, por lo que recomendamos depositar el saldo al menos UN DÍA HÁBIL antes de la fecha de entrega.<br>
                                Todos nuestros clientes pueden mandar su propio transporte o pasar ellos mismos a recolectar su mercancía.
                            </li>
                            <li>El envío de pedidos en la zona metropolitana de la Ciudad de México no tiene ningún costo adicional, siempre y cuando sean DENTRO de la PERIFERIA del D.F. y que sea la cantidad mínima de productos que solicitamos, de lo contrario es posible que genere algún costo de envío, el cual se indicará en el presupuesto</li>
                            <li>Para envío de pedidos fuera de la Ciudad de México, los envíos y maniobras corren por cuenta del cliente, nosotros únicamente nos limitamos a embarcar en la compañía de transporte de su preferencia el producto debidamente emplayado, embolsado y de ser posible flejado. (Existen algunos productos que distribuimos los cuales se entregan empacados en caja de cartón, los cuales se pueden armar en su presencia y a solicitud de usted, siempre y cuando (como lo hemos mencionado con anterioridad) este sea entregado dentro de la periferia de la Ciudad de México.</li>
                            <li>No aceptamos devoluciones, una vez iniciada la fabricación del producto o terminado este, por lo que sugerimos revisar y elegir con cuidado su pedido.</li>
                            <li>Los reembolsos se harán por el monto total de la operación siempre y cuando no se haya iniciado la fabricación del producto que ampare dicho pago. <br>
                                El reembolso (en caso de aplicar), se realizará en el número de cuenta donde se originó el pago, ya que no hay devoluciones en efectivo.
                            </li>
                            <li>La garantía de todos nuestros productos, es de 1 (un) año (a partir de la fecha de recepción/entrega del producto) contra defectos de fabricación e incluyen los gastos derivados de su transportación, sin costo para usted. Una vez evaluadas las condiciones se determinara si procede o no dicha garantía.<br>
                            La garantía no será válida:<br>
                            Cuando el producto se hubiese utilizado en condiciones distintas a las normales, o que por descuido sea dejado en la intemperie. Cuando el producto hubiese sido alterado, presente daño físico, roto, golpeado, intervenido, o cualquier alteración física ajena a su estado original.<br>
                            La garantía no aplica para desgaste normal del producto en su vida útil o uso inadecuado del producto.
                            En caso de que la garantía no proceda, se le indicara a usted el monto derivado por gastos de reparación (si fuera posible dicha reparación), así como los gastos derivados de su transportación.
                            </li>
                        </ol>
                    </div>
                    <div class="panel-footer">
                    <a href="<?=$_SERVER['HTTP_REFERER'] ?>"><button type="button" class="btn btn-danger btn-block">Volver</button></a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include("footer.html"); ?>
</body>
</html>