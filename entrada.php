<?php 

    require 'includes/funciones.php'; 
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la propiedad">
        </picture>
        <div class="texto-entrada">
            <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
        </div>

        <div class="resumen-propiedad">          
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis eius eaque harum commodi quam accusantium, reiciendis voluptate quasi. Corrupti quam, voluptatibus atque a obcaecati quas saepe laudantium voluptate laborum quo? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit id minus iste eaque amet eos animi veritatis eligendi quasi expedita neque cum, consectetur facilis impedit sint asperiores facere, debitis unde.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aspernatur atque voluptas nemo nesciunt illo. Debitis quidem dolore commodi soluta sapiente facilis, fugiat numquam voluptatibus, obcaecati veritatis, sit eveniet vero.</p>
        </div>
    </main>

    <?php 
    incluirTemplate('footer');
    ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>