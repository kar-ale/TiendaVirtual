<?php
// Incluir archivo de configuración
require_once "../modelo/config.php";
 
// Definir variables e inicializar con valores vacíos
$username = $password = $confirm_password = $email = "";
$username_err = $password_err = $confirm_password_err = $email_err = "";
 
// Procesamiento de datos del formulario cuando se envía el formulario
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validar nombre
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor ingrese un usuario.";
    } else{
        // Preparar una declaración selecta
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Vincular variables a la declaración preparada como parámetros
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Establecer parámetros
            $param_username = trim($_POST["username"]);
            
            // Intento de ejecutar la declaración preparada
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Este usuario ya fue ingresado.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Al parecer algo salió mal.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validar contraseña
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor ingresa una contraseña.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "La contraseña al menos debe tener 6 caracteres.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // confirmar contraseña
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Confirma tu contraseña.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "No coincide la contraseña.";
        }
    }
    
    // Verifique los errores de entrada antes de insertar en la base de datos
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Preparar una declaración de inserción
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Vincular variables a la declaración preparada como parámetros
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Establecer parámetros
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Intento de ejecutar la declaración preparada
            if(mysqli_stmt_execute($stmt)){
                // Redirigir a la página de inicio de sesión
                header("location: login.php");
            } else{
                echo "Algo salió mal, por favor inténtalo de nuevo.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="../asset/css/estilos.css">
</head>
<body>  
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <div class="formulario">
        <h1>Registro</h1>

        <div class="contenedor">

            <div class="form-group">
                <input type="text" name="name" placeholder="Nombre" class="input-contenedor" >
                <br>
            </div>

            <div class="form-group">
                <input type="text" name="direccion" placeholder="Apellido" class="input-contenedor" >
                <br>
            </div>

            <div class="form-group">
                <input type="text" name="direccion" placeholder="Direccion" class="input-contenedor" >
                <br>
            </div>

            <div class="form-group">
                <input type="text" name="ciudad" placeholder="Ciudad" class="input-contenedor" >
                <br>
            </div>

            <div class="form-group">
                <input type="text" name="Telefono" placeholder="Telefono" class="input-contenedor" >
                <br>
            </div>

            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <input type="text" name="username" placeholder="Usuario" class="input-contenedor" value="<?php echo $username; ?>">
                <br>
                <span class="help-block"><?php echo $username_err; ?></span>
            </div> 

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <input type="password" name="password" placeholder="Contraseña" class="input-contenedor" value="<?php echo $password; ?>">
                <br>
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <input type="password" name="confirm_password" placeholder="Confirmar contraseña" class="input-contenedor" value="<?php echo $confirm_password; ?>">
                <br>
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <input type="text" name="email" placeholder="Correo electronico" class="input-contenedor" value="<?php echo $email; ?>">
                <br>
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>

            <div class="form-group">
            <!--<a href="welcome2.php" class="link">Ingresa aquí</a>.</p>    -->
            <input type="submit" class="button" value="Ingresar">
                <!--<input type="reset" class="button" value="Borrar">-->
            </div>

            <p>¿Ya tienes una cuenta? <a href="login.php" class="link">Ingresa aquí</a>.</p>
            <!--Catalogo-->
            
            
            </div>
        </form>
    </div>    
</body>
</html>