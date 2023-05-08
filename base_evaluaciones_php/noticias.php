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
    <h2>Noticias</h2>

        <?php
        $noticias = array (
            array('titulo'=>'Temperaturas récord y anómalas, sequías e incendios', 'parrafo'=>'En medio del calor extremo, la sequía y los incendios forestales, muchas partes del mundo acababan de experimentar uno de los tres julios más cálidos registrados, dijo el martes la Organización Metereológica Mundial.', 'imagen'=>'medio_ambiente.jpg'),
            array('titulo'=>'De la escasez de chips al exceso', 'parrafo'=>'Tras varios años con escasez de chips, ahora ya se habla de justo lo contrario. Con la baja demanda por la incertidumbre económica y la producción aumentada para compensar la situación anterior se ha pasado a una nueva etapa. Una fase donde los consumidores podríamos salir ganando con precios más bajos.', 'imagen'=>'chips.jpg'),
            array('titulo'=>'Empieza la reconquista de la Luna', 'parrafo'=>'Países como China, Corea e India se suman a la carrera espacial lanzada por EE UU, Europa y Rusia en los que se explotarán los recursos minerales del cuerpo celeste y se establecerán bases permanentes como trampolín hacia Marte.', 'imagen'=>'luna.jpg'),
            array('titulo'=>'Apuesta a recursos renovables distribuidos mediante Virtual Power Plants', 'parrafo'=>'La orquestación de una flota de recursos distribuidos residenciales, comerciales y/o industriales como una planta de energía tradicional no resulta tarea sencilla. Por lo que el operador de red explicitó determinados requisitos para optimizar su rendimiento y minimizar su impacto en la red como Virtual Power Plants (VPP).', 'imagen'=>'panel_solar.jpg')
        );
        
        for ($i=0; $i<count($noticias); $i++) { 
            ?>

        <div id="noticia">
                <div id="noticia_img <?php echo $i; ?>">
                    <img src="imagenes/<?php echo $noticias[$i]['imagen']; ?>" alt="imagen" id="caja_img">
                </div>
                <h3><?php echo $noticias[$i]['titulo']; ?></h3>
                <P id="parrafo_noticia"><?php echo $noticias[$i]['parrafo']; ?></p>
            </div>
        <?php } ?>


    </section>

<footer>
<p>Desarrollado por Tomas Noguera, Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>