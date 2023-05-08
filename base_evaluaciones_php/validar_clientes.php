<?php 
session_start();
$correo_form = $_POST['correo'];
$contrasena_form = $_POST['contrasena'];

if ($correo_form == 'cliente@gmail.com' && $contrasena_form == 'phpintermedio') {
    $_SESSION['clientes'] = $correo_form;
    header("Location: clientes.php?ok");
} 

else {
    header("Location: clientes.php?error");
}

?>