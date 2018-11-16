<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta content="nuestra empresa le ofrece sillas y mobiliario para oficina, hogar o negocio,  con calidad y excelentes precios" name="description">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>¿Quiénes somos?</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="newStyle.css">
</head>
<body>
<?php include("bannernavbar.html"); ?>
<main>
<div class="container backgroundWorkArea">
	<h2 class="text-center">¿Quiénes somos?</h2>
	<div class="row text-center color">
		<div class="col-sm-6">
			<p>ESTIMADO CLIENTE:</p>
			<p class="text-justify">Somos una empresa que tiene como objetivo fundamental, ofrecer a usted sillas y muebles para su oficina, negocio y hogar, fabricados con un alto estándar de calidad, e intentando ofrecer siempre los precios más bajos y competitivos del mercado.</p>
			<p class="text-justify">Tenemos la obligación de atenderle a usted, y a todos nuestros clientes y prospectos, con el trato amable y atento que merecen.</p>
			<p class="text-justify">Usted encontrará una amplia variedad de sillas y mesas como son:</p>
			<p>Sillas plegables y sillas apilables,<br />sillas y mesas escolares,<br />sillas de visita,<br />sillas y mesas para restaurante,<br />tablones plegables para eventos,<br />así como sillas y muebles para oficina.</p>
			<p class="text-justify">Le invitamos a recorrer nuestra página web, donde estamos seguros encontrará el mobiliario que su hogar, negocio u oficina requieren, le damos las gracias por visitar nuestro sitio web, y quedamos a sus apreciables órdenes.</p>
			<h2>Le agradecemos su visita a nuestro sitio web.</h2>
		</div>
		<div class="col-sm-6">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<li data-target="#myCarousel" data-slide-to="4"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img class="img-responsive img-center" src="./assets/slider/img1.png" alt="" style="max-height:362px;">
					</div>

					<div class="item">
						<img class="img-responsive img-center" src="./assets/slider/img2.jpg" alt="" style="max-height:362px;">
					</div>
					
					<div class="item">
						<img class="img-responsive img-center" src="./assets/slider/img3.jpg" alt="" style="max-height:362px;">
					</div>

					<div class="item">
						<img class="img-responsive img-center" src="./assets/slider/img4.jpg" alt="" style="max-height:362px;">
					</div>

					<div class="item">
						<img class="img-responsive img-center" src="./assets/slider/img5.jpg" alt="" style="max-height:362px;">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
				</a>
			</div>
		</div>	
	</div>
</div>
</main>
<?php include("footer.html"); ?>
</body>
</html>