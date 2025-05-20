<?php 
    
    require '../../includes/config/database.php';
    $db = conectarDB();

    //Consultar para obtener los instaladores.
    $consulta = "SELECT * FROM usuarios";
    $resultado = mysqli_query($db, $consulta);
    //arreglo para los errores.
    $errores = [];

    $titulo = '';
    $precio = '';
    $descripcion = '';
    $Usuarios_id = '';

    //Se ejecuta al dar enviar en el boton.
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        // insercion de datos a la base de datos
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $Usuarios_id = $_POST['Usuarios_id'];

        if(!$titulo){
            $errores[] = "Debes añadir un titulo.";           
        }

        if(!$precio){
            $errores[] = "Debes añadir un precio.";           
        }
        if(strlen ($descripcion) < 40 ) {
            $errores[] = "Debes añadir minimo 40 caracteres en la descripción.";           
        }
        if(!$Usuarios_id){
            $errores[] = "Debes añadir un instalador.";           
        }

        

        //revisar que arreglo de errores este vacio.
        if(empty($errores)){
        //cargar valores a la base de datos.    
        $query = " INSERT INTO instalaciones (titulo, precio,descripcion, Usuarios_id) VALUES('$titulo','$precio','$descripcion','$Usuarios_id') " ;

        $resultado = mysqli_query($db, $query);

        if($resultado){
            //redireccionamos para evitar duplicados.
            header('location: /admin');
        }

        }
        
    }

    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin" class="boton boton-morado-inline-block">Volver</a>

        <?php foreach($errores as $error): //Creado para mostrar los errores ?>
            <div class="alerta error">
            <?php echo $error; ?>
            </div>
        <?php endforeach;?>


        <form class="formulario" method="POST" action="/admin/instalaciones/crear.php">

            <fieldset>
                <legend>
                    Informacion General
                </legend>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" placeholder="Titulo de instalación"  name="titulo" value="<?php echo $titulo;?>" >
                <label for="precio">Precio:</label>
                <input type="number" id="precio" placeholder="precio de instalación"  name="precio" value="<?php echo $precio;?>">
                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg , image/png"  >
                <label for="descripcion" >Decripción:</label>
                <textarea id="descripcion"  name="descripcion"><?php echo $descripcion;?></textarea>
                
            </fieldset>

            <fieldset>
                <legend>instalador</legend>
                <select name="Usuarios_id">
                    <option value="">--Seleccionar--</option>
                    <?php while($instalador = mysqli_fetch_assoc($resultado)): ?>
                        <option <?php echo $Usuarios_id === $instalador['id'] ? 'selected' : ''; ?> value="<?php echo $instalador['id'];?>"><?php echo $instalador['nombres']. " " . $instalador['apellidos']; ?></option>
                    <?php endwhile; ?>    
                    </select>
            </fieldset>

            <input type="submit" value="Crear instalación" class="boton boton-morado-inline-block" >
        </form>

    </main>
    
<?php 
    incluirTemplate('footer');
?>