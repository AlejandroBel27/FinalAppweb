<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>

    <header class="header <?php echo $inicio ? 'inicio' : '' ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="/build/img/logo blanco.svg" alt="">
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu">
                </div>

                <nav class="navegacion">
                    <a href="/../../nosotros.php">Nosotros</a>
                    <a href="/../../anuncios.php">Anuncios</a>
                    <a href="/../../blog.php">Blog</a>
                    <a href="/../../contacto.php">Contacto</a>

                </nav>
            </div>
            <?php
                if($inicio){
                    echo "<h1>Siente la seguridad con SystemTech</h1>";
                }
            ?>
        </div>
    </header>