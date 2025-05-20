<?php
    //importar la conexion a BD
    require __DIR__. '/../config/database.php';
    $db = conectarDB();

    // Consulta a BD

    $query = "SELECT * FROM instalaciones LIMIT ${limite}";

    // obtener el resultado de BD

    $resultado = mysqli_query($db,$query);
?>

<div class="contenedor-anuncio">
    <?php while($instalacion = mysqli_fetch_assoc($resultado)): ?>
    <div class="anuncio">
        
        <img loading="lazy" src="/imagenes/<?php echo $instalacion['imagen']; ?>" alt="anuncio">

        <div class="contenido-anuncio">
            <h3><?php echo $instalacion['titulo']; ?></h3>
            <p><?php echo $instalacion['descripcion']; ?> </p>
            <p class="precio">$ <?php echo $instalacion['precio']; ?> mxn</p>

            <a href="anuncio.php?id=<?php echo $instalacion['id']; ?>" class="boton-morado">Ver Instalacion</a>
        </div> <!--.contenido-anuncio-->
    </div><!--anuncio-->
    <?php endwhile; ?>
</div><!--.contenedor-anuncios-->
<?php

    // Cerrar la conexion.
        mysqli_close($db);
?>