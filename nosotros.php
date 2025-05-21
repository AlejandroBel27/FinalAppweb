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

                <p>SystemTech nació hace tres años con una visión clara: ofrecer soluciones tecnológicas de alta calidad en instalación de cámaras de seguridad y telecomunicaciones, combinando innovación, confianza y compromiso. Fundada en 2022 por un equipo apasionado por la tecnología, iniciamos brindando servicios a hogares y pequeños negocios, enfocados siempre en la seguridad y conectividad como pilares fundamentales. Desde el primer día, la satisfacción del cliente fue nuestra mejor carta de presentación,
                    y gracias a ella, comenzamos a crecer rápidamente. Con el paso del tiempo, SystemTech amplió su alcance, trabajando con empresas, oficinas, industrias y entes gubernamentales, ofreciendo proyectos a medida que incluyen instalación de cámaras de videovigilancia IP y analógicas, configuración de sistemas de control de acceso, diseño e implementación de redes de telecomunicación, y mantenimiento preventivo y correctivo de sistemas tecnológicos. Nos hemos destacado por nuestro enfoque profesional, atención personalizada y uso de tecnología de punta. Nuestro equipo técnico, altamente capacitado, se actualiza constantemente para brindar soluciones modernas, eficientes y seguras. Hoy, tras tres años de trayectoria, SystemTech se consolida como una empresa sólida en el sector, con más de 300 proyectos ejecutados con éxito y una creciente red de clientes satisfechos. 
                    Seguimos mirando hacia el futuro con el compromiso de seguir innovando, ampliando nuestros servicios y reforzando nuestro propósito: “Protegemos lo que más valoras y conectamos lo que más necesitas.”</p>


            </div>
        </div>

    </main>

    <section class="contenedor seccion">
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
    </section>

<?php 
    incluirTemplate('footer');
?>