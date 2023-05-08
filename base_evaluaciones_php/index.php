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
        	<h1>Programador Web con PHP y MySQL<br/>Nivel Intermedio</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Introducción a PHP</h2>
    <div id="uni4_1">
        <?php 
            $frase1 = 'Curso de PHP y MySQL de nivel intermedio';
            $frase2 = 'Aprendé lo necesario para programar en PHP';
            $frase3 = 'segui formandote como desarrollador';
        
            echo "<h2>".$frase1."</h2>";
            echo "<p>".$frase2." y ".$frase3."</p>";
        ?>
    </div>
    
    <div id="uni4_2">
        <h3>Palabras una debajo de la otra: </h3>
        <?php 
            $palabra1 = 'EVALUACIÓN';
            $palabra2 = 'INTEGRADORA';
            $palabra3 = 'PHP y MySQL';            
        ?>
        
        <p><?php echo $palabra1; ?></p>
        <p><?php echo $palabra2; ?></p>
        <p><?php echo $palabra3; ?></p>
    </div>    
    
    <div id="uni4_3">
        <h3>Variables de tipo entero, cadena de caracteres y booleana:</h3>
        <?php 
            $entero = 56;
            $cadena_caracteres = 'Curso Intermedio de PHP';
            $booleana = true;

            echo "<p>Número entero: ".$entero."</p>";
            echo "<p>Cadena de caracteres: ".$cadena_caracteres."</p>";
            echo "<p>Booleano: ".$booleana."</p>";
        ?>
    </div>
    
    <div id="uni4_4">
        <h3>Operación matemática:</h3>
        <?php
            $numero1 = 10;
            $numero2 = 35;
            $numero3 = 5;
        
            $suma = $numero1 + $numero2 + $numero3;
        ?>

        <p>Número 1: <?php echo $numero1; ?></p>
        <p>Número 2: <?php echo $numero2; ?></p>
        <p>Número 3: <?php echo $numero3; ?></p>
        <p>Operación: <?php echo $numero1; ?> + <?php echo $numero2; ?> + <?php echo $numero3; ?></p>
        <p>Resultado: <?php echo $suma; ?></p>
    </div>
    </section>

<footer>
<p>Desarrollado por Tomas Noguera, Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>