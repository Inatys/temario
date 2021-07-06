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
        <h1 class="center">Creacion del subcapitulo</h1>
        <form action="<?php echo constant('URL'); ?>subcapitulos/crearSubcapitulo" method="POST">
        <br>
        <br>
        <p>
    <label for="id_subcapitulo">Numero del subcapitulo &nbsp;</label>
    <input class="center" type="text" name="id_subcapitulo" id="id_subcapitulo" required>
</p>
<p>
    <label for="numero_capitulo">Numero del capitulo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input class="center" type="text" name="numero_capitulo" id="numero_capitulo" required>
</p>
<p>
    <label for="titulo_subcapitulo">Titulo del capitulo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input class="center" type="text" name="titulo_subcapitulo" id="titulo_subcapitulo" required>
</p>
<br>
<p>
<input class="boton" type="submit" value="Agregar">
</p>

</form>
    </div>

    <?php require 'views/footer.php'; ?>
</body>
</html>