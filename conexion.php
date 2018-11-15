
<?php
function conectar() {
    $conexion = new PDO('mysql:host=localhost;dbname=sym', 'root', 'root');
    return $conexion;
}

function consultarCategoria($categoria, $conexion) {
    $resultados= $conexion->query("SELECT * FROM productos WHERE fkCategorias = $categoria");

    /*foreach($resultados as $fila) {
        $foto = $fila['mini'];
       echo '<img src="'.$foto.'">';
    }*/
    return $resultados;
}

function consultarProducto($producto, $conexion) {
    $resultadosProducto = $conexion->query("SELECT * FROM modelos WHERE fkProductos = $producto");
    return $resultadosProducto;
}

function consultarImagenes($modelo, $conexion) {
    $resultadosImagenes = $conexion->query("SELECT * FROM imagen WHERE fkModelos = $modelo");
    return $resultadosImagenes;
}

?>
