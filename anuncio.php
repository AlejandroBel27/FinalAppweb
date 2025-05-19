<?php 
    
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Instalacion camara sencilla </h1>

        <picture>
            <source srcset="build/img/IMG_9860.webp" type="image/webp">
            <source srcset="build/img/IMG_9860.jpeg" type="image/jpeg">
            <img loading="lazy" src="build/img/IMG_9860.jpeg" alt="imagen de camara">
        </picture>

        <div class="resumen-instalacion">
            <p class="precio">$6,900.00 mxn</p>

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit labore ut cupiditate ad ea eum tempore
                expedita minus quibusdam modi possimus illum molestiae, neque atque? Veniam enim cum alias itaque?
                Amet necessitatibus, laboriosam provident ad eos tenetur minus nisi odit magnam facere qui? Minus
                explicabo, cumque quam numquam ullam laudantium unde ex impedit placeat quaerat dolorum, sed illum vitae
                quasi?</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere eius minima asperiores porro nulla neque
                iste omnis odit distinctio itaque error tempore molestias, magni modi totam laudantium iusto eligendi
                numquam!
                Debitis quae neque nesciunt! Eum sit pariatur modi fuga minima accusamus autem quod saepe provident
                aliquid suscipit dolores dolor odit natus, rem tempore ratione dicta voluptate itaque ullam sed
                repellendus!</p>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>