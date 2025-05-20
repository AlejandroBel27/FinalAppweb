<?php 
    // en caso de no tener un resultado le genera un valor nulo para evitar error.
    $resultado = $_GET['resultado'] ?? null;
    // incluye el template de header.php para que sea mas dinamico.
    require '../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de SystemTech</h1>
        <?php if(intval ($resultado) === 1) : ?>
            <p class="alerta exito">Anuncio Creado Correctamente</p>
        <?php endif; ?>

        <a href="/admin/instalaciones/crear.php" class="boton boton-morado-inline-block">Nueva Instalación</a>

        <table class="instalaciones">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Camara</td>
                    <td><img src="/imagenes/b267bf88f6a0d996529c52539bf20d2fjpg" class="imagen-tabla"> </td>
                    <td>$12,000.00 mxn</td>
                    <td>
                        <a href="/admin/instalaciones/borrar.php" class="boton-rojo-block">Eliminar</a>
                        <a href="/admin/instalaciones/actualizar.php" class="btn-amarillo">Actualizar</a>
                    </td>
                </tr>
            </tbody>
        </table>

    </main>
    
<?php 
    incluirTemplate('footer');
?>