<?php 

    require 'includes/funciones.php'; 
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio doloremque sequi mollitia! Tempora voluptatum, alias beatae est aliquid officia expedita magni, quia fugit asperiores, reprehenderit iure aperiam neque vel a. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, accusamus doloribus! Magnam quis nobis fugit! Distinctio consequuntur praesentium voluptatum, possimus quaerat voluptatibus tempore totam doloribus asperiores sequi fuga minima in!</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut itaque excepturi aperiam voluptate id! A saepe error numquam modi ducimus quasi ipsa doloremque sapiente suscipit deleniti dolore est, delectus consequatur!</p>
            </div>
        </div>
    </main>

    <section class="contenedor secion">
        <h1>Mas Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam quaerat quidem blanditiis ratione dolorum consectetur eos</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam quaerat quidem blanditiis ratione dolorum consectetur eos</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam quaerat quidem blanditiis ratione dolorum consectetur eos</p>
            </div>
        </div>
    </section>

    <?php 
    incluirTemplate('footer');
    ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>