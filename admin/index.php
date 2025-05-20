<?php 
    
    //importar la conexion a BDA
    require '../includes/config/database.php';
    $db = conectarDB();

    //query para BDA
    $query = "SELECT * FROM instalaciones";

    //Consulta a BDA
    $resultadoConsulta = mysqli_query($db, $query);

    // en caso de no tener un resultado le genera un valor nulo para evitar error.
    $resultado = $_GET['resultado'] ?? null;

    //validar que el id Sea int y no algun otro dato para evitar inyeccion SQL
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id){
            
            //eliminar el archivo de la imagen.

            $query="SELECT imagen FROM instalaciones WHERE id= ${id}";

            $resultado = mysqli_query($db, $query);
            $instalacion = mysqli_fetch_assoc($resultado);
            unlink('../imagenes/' . $instalacion['imagen']);
            
            //Eliminar la instalacion.
            $query = "DELETE FROM instalaciones WHERE id = ${id}";
            $resultado = mysqli_query($db,$query);
            if($resultado){
                header('location: /admin?resultado=3');
            }
        }

    }

    // incluye el template de header.php para que sea mas dinamico.
    require '../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de SystemTech</h1>
        <?php if(intval ($resultado) === 1) : ?>
            <p class="alerta exito">Anuncio Creado Correctamente</p>
        <?php elseif(intval ($resultado) === 2) : ?>
            <p class="alerta exito">Anuncio Actualizado Correctamente</p>
        <?php elseif(intval ($resultado) === 3) : ?>
            <p class="alerta exito">Anuncio eliminado Correctamente</p>
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
                <?php while($instalacion = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr>
                    <td> <?php echo $instalacion['id'] ?></td>
                    <td> <?php echo $instalacion['titulo'] ?></td>
                    <td><img src="/imagenes/<?php echo $instalacion['imagen']?>" class="imagen-tabla"> </td>
                    <td>$ <?php echo $instalacion['precio']?> mxn</td>
                    <td>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $instalacion['id'];?>">
                            <input type="submit" value="eliminar" class="boton-rojo-block">
                        </form>
                        
                        <a href="admin/instalaciones/actualizar.php?id=<?php echo $instalacion['id'] ?>" class="btn-amarillo">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </main>
    
<?php 
    mysqli_close($db);
    incluirTemplate('footer');
?>