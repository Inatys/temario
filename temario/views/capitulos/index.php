<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'; ?>

    <div id="main">
        <h1 class="center">Creacion del capitulo</h1>
        

        <form action="<?php echo constant('URL'); ?>capitulos/crearCapitulo" method="POST">
        <br>
        <br>
<p>
    <label for="numero_capitulo">Numero del capitulo &nbsp;</label>
    <input class="center" type="text" name="numero_capitulo" id="numero_capitulo" required> 
</p>
<br>
<p>
    <label for="titulo_capitulo">Titulo del capitulo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input class="center" type="text" name="titulo_capitulo" id="titulo_capitulo" required>
</p>
<p>
<div class="center"><?php echo $this->mensaje; ?></div>
<br>
<input class="boton" type="submit" value="Agregar">
</p>
</form>
    </div>

    <?php require 'views/footer.php'; ?>
</body>
</html>