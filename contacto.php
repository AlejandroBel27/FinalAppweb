<?php 
    
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/486707419_642754721830311_4651717697429523564_n.webp" type="image/webp">
            <source srcset="build/img/486707419_642754721830311_4651717697429523564_n.png" type="image/jpeg">
            <img src="build/img/486707419_642754721830311_4651717697429523564_n.png" alt="imagen de contacto SystemTech" loading="lazy">
        </picture>

        <h2>Llene el formulario de contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Información personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu nombre" required id="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="example@systemtech.com" required id="email">

                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Tu telefono" required id="telefono">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje"></textarea>
                
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>Como deseas que te contactemos</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>
                <p>Si eligio telefono, elija la fecha y la hora</p>

                <label for="fecha">Fecha:</label>
                <input type="date"  id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" id="telefono" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="enviar" class="boton-morado">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>