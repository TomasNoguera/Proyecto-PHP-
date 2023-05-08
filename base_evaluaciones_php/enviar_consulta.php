<?php 
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$consulta = $_POST['consulta'];

$conexion_sql = mysqli_connect('localhost','root','','phpintermedio') or exit ("No se pudo conectar a la base de datos correctamente.");

mysqli_query($conexion_sql, "INSERT INTO consultas VALUES(DEFAULT,'$nombre','$apellido','$correo','$consulta')");

header("Location: contacto.php?ok_consulta");
?>