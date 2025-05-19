<?php 
    
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

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
                        <p>Escrito el: <span>16/05/2025</span> por: <span>Admin</span> </p>
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
                        <p>Escrito el: <span>16/05/2025</span> por: <span>Admin</span> </p>
                        <p>
                            Consejos para una buena organizacion de cables sin gabinetes.
                        </p>
                    </a>
                </div>
            </article>

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
                        <p>Escrito el: <span>16/05/2025</span> por: <span>Admin</span> </p>
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
                        <p>Escrito el: <span>16/05/2025</span> por: <span>Admin</span> </p>
                        <p>
                            Consejos para una buena organizacion de cables sin gabinetes.
                        </p>
                    </a>
                </div>
            </article>
    </main>

<?php 
    incluirTemplate('footer');
?>