<?php 
    
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin" class="boton boton-morado-inline-block">Volver</a>


        <form class="formulario">

            <fieldset>
                <legend>
                    Informacion General
                </legend>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" placeholder="Titulo de instalación" required >
                <label for="precio">Precio:</label>
                <input type="number" id="precio" placeholder="precio de instalación" required>
                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg , image/png" required>
                <label for="decripcion" required>Decripción:</label>
                <textarea id="descripcion"></textarea>
                
            </fieldset>

            <fieldset>
                <legend>instalador</legend>
                <select>
                    <option value="1">Alejandro</option>
                    <option value="2">Jesus</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear instalación" class="boton boton-morado-inline-block" >
        </form>

    </main>
    
<?php 
    incluirTemplate('footer');
?>