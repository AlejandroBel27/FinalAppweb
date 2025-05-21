<?php 
    
    //conexion a db
    require 'includes/config/database.php';
    $db = conectarDB();

    $errores = [];

    //autenticar el usuario.
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) );
        $password = mysqli_real_escape_string($db,$_POST['password']);

        if(!$email){
            $errores []= "El email es obligatorio o no es valido.";
        }

        if(!$password){
            $errores []= "la contraseña es obligatoria o no es valida.";
        }

        if(empty($errores)){
            //revisar si un usuario existe
            $query = "SELECT * FROM usuario WHERE email = '${email}'";
            $resultado = mysqli_query($db,$query);

            if($resultado->num_rows){
                //revisar que la pass este correcta
                $usuario = mysqli_fetch_assoc($resultado);
                //verifica con boolean si es correcto o no el password.
                $auth = password_verify($password, $usuario['password']);

                if($auth){
                    session_start();
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;

                    header("location: /admin");
                }else{
                    $errores [] = "El password es incorrecto";
                }
            }else{
                $errores [] =" El usuario no existe";
            }
        }
    }

    //header
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar sesion.</h1>

        <?php foreach($errores as $error):?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form method="POST" class = "formulario">
            <fieldset>
                <legend>Email y password</legend>

                <label for="email">E-mail</label>
                <input type="email"  name="email" placeholder="example@systemtech.com"  id="email">

                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" >

                
            </fieldset>

            <input type="submit" value="Iniciar Sesion" class="boton btn-verde">
        </form>
    </main>
    
<?php 
    incluirTemplate('footer');
?>