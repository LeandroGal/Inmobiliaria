<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmobiliaria Galante</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio' : '' ?>"> <!-- Si $inicio = true agrega la clase de inicio (mete la imagen en la principal), sino no agrega nada-->
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/"> <!--Forma de referir a la pagina principal-->
                    <img src="build/img/logo.svg" alt="Imagen del logo">
                </a>
                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="icono menu responsive">
                </div>
                <div class="derecha">
                    <img src="build/img/dark-mode.svg" alt="Boton Tema" class="dark-mode-boton">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
            </div>
        </div> <!--Cierre de barra-->
        <div class="<?php echo $titulo ? 'titulo' : "none" ?>">
        Venta de Casas y Departamentos Exclusivos de Lujo
        </div>
    </header>