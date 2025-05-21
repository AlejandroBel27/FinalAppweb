<?php 
    
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor seccion">
        <h1>Conocenos más</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/security-shield_icon-icons.com_68133.svg" alt="Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>En SystemTech, tu seguridad es nuestra prioridad. Utilizamos equipos de alta tecnología y técnicas de instalación profesionales para garantizar 
                    sistemas de videovigilancia confiables y eficientes, adaptados a tus necesidades.</p>
            </div>
            <div class="icono">
                <img src="build/img/cctvcamerasecuritysurveillancemornitoring_109771.svg" alt="Precio" loading="lazy">
                <h3>Precios</h3>
                <p>Ofrecemos soluciones accesibles y personalizadas sin comprometer la calidad. Nos adaptamos a tu presupuesto 
                    con paquetes competitivos que brindan el mejor valor por tu inversión en seguridad y conectividad.</p>
            </div>
            <div class="icono">
                <img src="build/img/clock_hour_minute_second_time_timer_watch_icon_123193.svg" alt="Tiempo"
                    loading="lazy">
                <h3>Tiempo</h3>
                <p>Sabemos que tu tiempo es valioso. Nuestro equipo trabaja con rapidez y 
                    precisión para cumplir con los plazos acordados, garantizando instalaciones efectivas y sin demoras.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Instalaciones realizadas</h2>
        
        <?php
        $limite = 3;
        include 'includes/templates/anuncios.php';?>

        <div class="ver-todas">
            <a href="anuncios.php" class="btn-verde">
                Ver Todas
            </a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Solicita tu cotizacion con nosotros</h2>
        <p>Llena el formulario y en breve un asesor te contactara</p>
        <a href="contacto.php" class="boton-morado-inline-block">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">

        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/IMG_0004.webp" type="image/webp">
                        <source srcset="build/img/IMG_0004.jpeg" type="image/jpeg">
                        <img loading="lazy" src="build/img/IMG_0004.jpeg" alt="imagen de DVR en gabinete.">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Instalacion de DVR en gabinete</h4>
                        <p class="informacion-meta">Escrito el: <span>16/05/2025</span> por: <span>Admin</span> </p>
                        <p>
                            Consejos para una buena organizacion de cables en un gabinete
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/IMG_9768.webp" type="image/webp">
                        <source srcset="build/img/IMG_9768.jpeg" type="image/jpeg">
                        <img loading="lazy" src="build/img/IMG_9768.jpeg" alt="imagen de DVR en gabinete.">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Instalacion de DVR sin gabinete</h4>
                        <p class="informacion-meta">Escrito el: <span>16/05/2025</span> por: <span>Admin</span> </p>
                        <p>
                            Consejos para una buena organizacion de cables sin gabinetes.
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    La persona que realizo la instalacion se porto de una manera muy amigable.
                </blockquote>
                <p>- Alejandro Beltran</p>
            </div>
        </section>
    </div>

<?php 
    incluirTemplate('footer');
?>