<?php 
    
    $id = $_GET['id'];
    $id = filter_var($id , FILTER_VALIDATE_INT);
    //evitar la inyeccion SQL al ponerle cualquier cosa que no sea int manda a pagina principal.
    if(!$id){
        header('Location: /');
    }

    //importar la conexion a BD
    require 'includes/config/database.php';
    $db = conectarDB();

    // Consulta a BD

    $query = "SELECT * FROM instalaciones WHERE id = ${id}";

    // obtener el resultado de BD

    $resultado = mysqli_query($db,$query);

    if(!$resultado -> num_rows){
        header('Location: /');
    }

    $instalacion = mysqli_fetch_assoc($resultado);

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $instalacion['titulo']; ?> </h1>
        <img loading="lazy" src="/imagenes/<?php echo $instalacion['imagen']; ?>" alt="imagen de camara">

        <div class="resumen-instalacion">
            <p class="precio">$<?php echo $instalacion['precio']; ?></p>

            <?php echo $instalacion['descripcion']; ?>
            
        </div>
    </main>

<?php 
    // Cerrar la conexion.
        mysqli_close($db);
    incluirTemplate('footer');
?>