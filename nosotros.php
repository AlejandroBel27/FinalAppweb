<?php 
    
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/SYSTEMTECH.webp" type="image/webp">
                    <source srcset="build/img/SYSTEMTECH.png" type="image/jpeg">
                    <img src="build/img/SYSTEMTECH.png" loading="lazy"
                        alt="nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    3 años de experiencia
                </blockquote>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, nobis quidem officia iure veniam
                    nesciunt esse tenetur, saepe ab fugit earum hic minima nulla deserunt! Modi maiores neque deserunt
                    optio. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio illo fuga maxime ipsam
                    perspiciatis in deleniti dolor est porro dolorum impedit quidem laudantium, et vero adipisci
                    accusantium repudiandae quibusdam debitis.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem est ducimus asperiores sit
                    accusantium ipsa odit similique obcaecati. Exercitationem recusandae non, modi ducimus voluptatum
                    omnis aspernatur corporis error consectetur animi. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Voluptatum tempora, soluta ab minus optio facere tenetur, odit eveniet officia ex
                    porro cumque mollitia ratione, nesciunt unde ipsam temporibus aut aliquid.</p>

            </div>
        </div>

    </main>

    <section class="contenedor seccion">
        <h1>Conocenos más</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/security-shield_icon-icons.com_68133.svg" alt="Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Sit perferendis explicabo blanditiis totam!
                    Deleniti asperiores fugit iusto ullam, debitis in voluptatem recusandae dolor, deserunt distinctio
                    dolores aliquid tempora, quis tenetur.</p>
            </div>
            <div class="icono">
                <img src="build/img/cctvcamerasecuritysurveillancemornitoring_109771.svg" alt="Precio" loading="lazy">
                <h3>Precios</h3>
                <p>Sit perferendis explicabo blanditiis totam!
                    Deleniti asperiores fugit iusto ullam, debitis in voluptatem recusandae dolor, deserunt distinctio
                    dolores aliquid tempora, quis tenetur.</p>
            </div>
            <div class="icono">
                <img src="build/img/clock_hour_minute_second_time_timer_watch_icon_123193.svg" alt="Tiempo"
                    loading="lazy">
                <h3>Tiempo</h3>
                <p>Sit perferendis explicabo blanditiis totam!
                    Deleniti asperiores fugit iusto ullam, debitis in voluptatem recusandae dolor, deserunt distinctio
                    dolores aliquid tempora, quis tenetur.</p>
            </div>
        </div>
    </section>

<?php 
    incluirTemplate('footer');
?>