<?php 

	$conexion = new PDO('mysql:host=localhost;dbname=sym', 'root', 'root');

	// Prepared Statements
	//Insertar datos a la base
	// $statement = $conexion->prepare('INSERT INTO usuarios VALUES(null, "Jose")');
	// $statement->execute();

	// //Consulta de datos
	$resultados= $conexion->query('SELECT * FROM productos WHERE fkCategorias = 1 ');

	// //Mostrar resultados de una consulta
		foreach($resultados as $fila){
		 $foto = $fila['mini'];
		echo '<img src="'.$foto.'">';


	 }
?>