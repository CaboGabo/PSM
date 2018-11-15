
<?php

function consultarCategoria($categoria) {
    $conexion = new PDO('mysql:host=localhost;dbname=sym', 'root', 'root');
    $resultados= $conexion->query("SELECT * FROM productos WHERE fkCategorias = $categoria");

    /*foreach($resultados as $fila) {
        $foto = $fila['mini'];
       echo '<img src="'.$foto.'">';
    }*/
    return $resultados;
}
?>
