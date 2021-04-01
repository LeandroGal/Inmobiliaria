<?php 

    require 'includes/funciones.php'; 
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
        </picture>

            <div class="resumen-propiedad anuncio">
                <p class="precio">$3.000.000</p>
                
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                        <p>4</p>
                    </li>
                </ul>
                
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