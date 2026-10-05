
<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "sistcourier26";

try{
    $conexion = new PDO("mysql:host=$servidor;dbname=$base_datos;charset=utf8", $usuario, $password);
    // manejo de excepciones
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "¡Conexión Exitosa!";

}catch (PDOException $e){
    echo "Error de conexión: ". $e->getMessage();
}

?>