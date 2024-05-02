<?php
// Iniciar sesion
session_start();
 
// Verifique si el usuario ha iniciado sesion, si no, redirijalo a la pagina de inicio de sesion
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="../asset/css/estiloswelcome.css">
 
</head>
<body>
<!--Nombre del usuario-->
<h1 style="color: aliceblue;"> Buen día, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
<nav>
           <a href="logout.php" class="link" style="color: aliceblue;">Cerrar sesion</a>
            <!--<a href="reset-password.php" class="link">Cambia tu contrasena</a>-->
            <!--Se va a poner un link para direccionar a la tienda online-->
            <!--<a href="carrito/tienda.php" class="link">Tienda</a>-->
            
            <!--Se va a agregar la grafica
            <a href="grafica/grafica.php" class="link">Grafica</a>-->
</nav>
<!DOCTYPE html>
<html>
<style type="text/css">
   body {
      background-image:url(../asset/imgc/saku.jpg);
      font: 10pt Verdana, Geneva, Arial, Helvetica, sans-serif;
   }
   #inputs {
      border:5px inset rgb(153,204,255);
      width: 60px;
      background:rgb(148,204,252);
      text-align : center;
   }
   #boton  {
      background: rgb(102,153,204) border:1px outset rgb(94,71,159);
      width:80px;
      font : 8pt Verdana, Geneva, Arial, Helvetica, sans-serif;
      background-color : #FFFACD;
      color : #4B0082;
   }
</style>
   <head>
<meta charset="utf-8">

<title>NOCHE ESTRELLADA</title>

</head>
<body>     

<a href="register.php"><img src="../asset/imgv/usuario.png" width="50"height="50" align="left"></a>

<a href="../vista/pedido.html"><img src="../asset/imgv/carrito.png" width="50"height="50" align="right"></a>

<h1 align="center" style="color: aliceblue;">"No soy aventurero por elección, sino por el destino"</h1>
<p align="center"><img  src="../asset/imgv/imagen1.jpg" width="100" height="100" ></p> 

 
<h2 align="center" style="color: aliceblue;">CON NOSOSTROS EXPLORARAS UNA MONTAÑA RUSA DE EMOCIONES EXPLOTANDO TU IMAGINACIÓN CON LOS ARTICULOS QUE TENEMOS PARA TI</h2>


<table  align="center"  width="1000"border="5" cellspacing="2" cellpadding="5" style="font: 10pt Verdana, Geneva, Arial, Helvetica, sans-serif;" background = "../asset/imgv/rosa2.jpg">
<thead> 
 <tr>
 <th style="padding: 0px 50px; color: aliceblue; font-size: 20px;">Categorias</th > 
 <th style="padding: 0px 50px; color: aliceblue; font-size: 20px;">Descripción</th>
   <th style="padding: 0px 50px; color: aliceblue; font-size: 20px;">Categorias</th > 
 <th style="padding: 0px 50px; color: aliceblue; font-size: 20px;">Descripción</th>
 </tr>
 </thead> 
 <tr>
    <td><a href="../vista/educacion.html"><img src="../asset/imgv/literatura.jpg" width="300"height="200"></a></td>
    <td style="color: aliceblue; font-size: 15px; text-align: center;">Compra los mejores y exclusivos libros para tu conocimiento.</td>
    <td><a href="../vista/mangas.html"><img src="../asset/imgv/mangas.webp" width="300"height="200"></a></td>
    <td style="color: aliceblue; font-size: 15px; text-align: center;">Compra los mejores y mas vistos mangas para tu entretenimiento</td>
 </tr>
 <tr>
    <td><a href="../vista/comic.html"> <img  src="../asset/imgv/comic.jpg" width="300"height="200"></a></a></td>
    <td style="color: aliceblue; font-size: 15px; text-align: center;">Disfruta las historias de tus superheroes favoritos acompañandolos en cada aventura.</td>
    <td><a href="../vista/novelas.html"> <img src="../asset/imgv/hobbit.jpg" width="300"height="200"></a></td>
    <td style="color: aliceblue; font-size: 15px; text-align: center;">Integrate a las fantasias de tus novelas favoritas y más...</td>
 </tr>
 <tr>
    <td><a href="../vista/Infantil.html"> <img src="../asset/imgv/principito.jpg" width="300"height="200"></a></td>
    <td style="color: aliceblue;font-size: 15px; text-align: center;">Deja que los infantes se sumerjan con los mejores historias en este universo de la lectura. </td>
    <td><a href="../vista/accesorios.html"> <img src="../asset/imgv/separadores.jpg" width="300"height="200"></a></td>
    <td style="color: aliceblue; font-size: 15px;text-align: center;">Complementa tu experiencia adquiriendo los mejores articulos que tenemos para ti. </td>
 </tr>      
   </body>

   </body>
</html>