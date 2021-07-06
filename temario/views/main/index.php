<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu temario</title>
</head>
<body>
    <?php require 'views/header.php'; ?>

    <div class="contenedor">
		<aside>
			<div class="contenedor-temario" id="temario">
				<h3 class="titulo">Temario</h3>
				
				<select class="lista">
					<option>Capitulo 1:<br/> Introduccion a las computadoras, a internet y a la World Wide Web </option> 
					<option>Capítulo 2:<br> Introducción a la programación en C</option> 
					<option>Capitulo 3: <br> Desarrollo de programas estructurados en C </option> 
					<option>Capitulo 4:<br> Control de programas en C</option> 
					<option>Capitulo 5:<br> Quinto Capítulo </option> 
		
				</select>

				<div class="btn-toolbar" role="group" aria-label="">
				<a href="<?php echo constant('URL'); ?>subcapitulos"><button type="submit"  value="Agregar" class="btn btn-success">Agregar</button></a>
					<button type="submit"  value="Modificar"class="btn btn-warning">Modificar</button>
					<button type="submit"  value="Eliminar" class="btn btn-danger">Eliminar</button>
							
				</div>
				
			</div>
		</aside>
		<main>
			<div class="card" id="1">
				<h1>1. Primer Capítulo</h1>
				<ul class="list-group">
					<li class="list-group">1.1 Introducción</li>
					<li class="list-group">1.2 ¿Qué es una computadora?</li>
					<li class="list-group">1.3 Organización de computadoras</li>
					<li class="list-group">1.4 Evolución de los sistemas operativos</li>
					<li class="list-group">1.5 Computación personal, distribuida y cliente-servidor</li>
					
				</ul>
				
		<br>
				<div class="btn-group" role="group" aria-label="">
				
				<a href="<?php echo constant('URL'); ?>capitulos"><button type="submit"  value="Agregar" class="btn btn-success" >Agregar</button></a>
				<a href="<?php echo constant('URL'); ?>capitulos"><button type="submit"  value="Modificar"class="btn btn-warning">Modificar</button></a>
				<a href="<?php echo constant('URL'); ?>capitulos"><button type="submit"  value="Eliminar" class="btn btn-danger">Eliminar</button></a>

				</div>
			</div>			
		</main>
	</div>

    <?php require 'views/footer.php'; ?>
</body>
</html>