<?php
//Inicializar la sesión
session_start();
 
// Compruebe si el usuario ya ha iniciado sesión; en caso afirmativo, rediríjalo a la página de bienvenida
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: welcome.php");
  exit;
}
 
// Incluir archivo de configuración
require_once "../modelo/config.php";
 
// Definir las variables y inicializar con valores vacíos
$username = $password = "";
$username_err = $password_err = "";
 
// Procesamiento de datos del formulario cuando se envía el formulario
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Comprobar si el nombre de usuario está vacío
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor ingrese su usuario.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Comprobar si la contraseña está vacía
    if(empty(trim($_POST["password"]))){
        $password_err = "Ingrese su contraseña.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validar credenciales
    if(empty($username_err) && empty($password_err)){
        // Preparar una declaración selecta
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Vincular variables a la declaración preparada como parámetros
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Establecer parámetros
            $param_username = $username;
            
            // Intento de ejecutar la declaración preparada
            if(mysqli_stmt_execute($stmt)){
                // Guardar resultado
                mysqli_stmt_store_result($stmt);
                
                // Verifique si existe el nombre de usuario, si es así, verifique la contraseña
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Vincular variables de resultado
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // La contraseña es correcta, así que inicie una nueva sesión
                            session_start();
                            
                            // Almacenar datos en variables de sesión
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirigir a la usuario a la página de bienvenida
                            header("location: welcome.php");
                        } else{
                            // Mostrar un mensaje de error si la contraseña no es válida
                            $password_err = "La contraseña que has ingresado no es válida.";
                        }
                    }
                } else{
                    // Mostrar un mensaje de error si el nombre de usuario no existe
                    $username_err = "No existe cuenta registrada con ese nombre de usuario.";
                }
            } else{
                echo "Algo salió mal, por favor vuelve a intentarlo.";
            }
        }
        
        // Cerrrar declaración
        mysqli_stmt_close($stmt);
    }
    
    // Cerrar conexión
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ingresa</title>
    <link rel="stylesheet" href="../asset/css/estilos.css">
</head>
<body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <div class="formulario">
        <h1>Iniciar sesión</h1>
        <div class="contenedor">

            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <input type="text" name="username" placeholder="Usuario" class="input-contenedor" value="<?php echo $username; ?>">
                <br>
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>  

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <input type="password" name="password" placeholder="Contraseña" class="input-contenedor">
                <br>
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

                <input type="submit" class="button" value="Ingresar">
                <p>¿No tienes una cuenta? <a href="register.php" class="link">Regístrate ahora</a>.</p>
                <!--<p>¿Quieres ver el catalogo?<a href="catalogo/producto.php" class="link">Ingresa aquí</a></p>-->
                <!--Administrador-->
                <!--<p>¿Eres administrador?<a href="catalogo/administrador/productoadmi.php" class="link">Ingresa aquí</a></p>-->

            </div>
        </form>
    </div>    
</body>
</html>