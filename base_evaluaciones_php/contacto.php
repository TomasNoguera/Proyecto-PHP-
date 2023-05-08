<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Contáctenos</h2>
        <div id="formulario_contacto">
            <form action="enviar_consulta.php" method="POST">
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="apellido" placeholder="Apellido">
                <input type="email" name="correo" placeholder="Correo Electronico">
                <input type="textarea" name="consulta" placeholder="Deje su consulta aqui">
                <input type="submit" value="Enviar">
            </form>
            
            <?php 
                if(isset($_GET['ok_consulta'])) {
                    echo "<p>Su consulta fue enviada correctamente.</p>";
                }
            ?>
        </div>
   
    </section>

<footer>
Desarrollado por Tomas Noguera, Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>