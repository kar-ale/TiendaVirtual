<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/estilo.css">
    <script src="../asset/js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="../asset/css/sweetalert2.min.css">
    <script src="https://www.paypal.com/sdk/js?client-id=access_token$sandbox$sm69d5dc2sfznsn2$bcc9410596ef78df78d9eaeede1264bb"></script>


    <title>Compras</title>
    <style type="text/css">
            body{

                background-image: url(img/moujib-aghrout-s9ESRUFnKDg-unsplash.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                background-color: transparent;
            }
    </style>

</head>

<body>
    <header>
        <div class="container">
            <div class="row justify-content-between mb-5">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <a class="navbar-brand" href="index.php" style="color: #FFFFFF">Boketto</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
        </div>
    </header>

    <br>
                    

    <main>
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h2 class="d-flex justify-content-center mb-3">Realizar Compra</h2>
                    <form id="procesar-pago" action="#" method="post">
                        <div class="form-group row">

                            <div id="carrito" class="form-group table-responsive">
                                <table class="table" id="lista-compra" bgcolor="white">
                                    <thead>
                                        <tr>
                                            <th scope="col" >Imagen</th>
                                            <th scope="col" >Nombre</th>
                                            <th scope="col" >Precio</th>
                                            <th scope="col" >Cantidad</th>
                                            <th scope="col" >Sub Total</th>
                                            <th scope="col" >Eliminar</th>
                                        </tr>

                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tr>
                                       <!-- <th colspan="4" scope="col" class="text-right" >SUB TOTAL :</th>
                                        <th scope="col">
                                            <p id="subtotal"></p>
                                        </th>
                                        <!-- <th scope="col"></th> -->
                                    </tr>
                                    <tr>
                                        <th colspan="4" scope="col" class="text-right" >IVA : 4 %</th>
                                        <th scope="col">
                                            <!--<p id="igv"></p>-->
                                        </th>
                                        <!-- <th scope="col"></th> -->
                                    </tr>
                                    <tr>
                                        <th colspan="4" scope="col" class="text-right" >TOTAL :</th>
                                        <th scope="col">
                                            <input id="total" name="monto" class="font-weight-bold border-0" readonly
                                                style="background-color: white;"></input>
                                        </th>
                                        <!-- <th scope="col"></th> -->
                                    </tr>

                                </table>
                            </div>

                            <div class="row justify-content-center" id="loaders">
                                <img id="cargando" src="../asset/imgv/carga.jpg" width="220">
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-xs-12 col-md-4">
                                    <button id="procesar-compra"></button>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <!--<a href="index.php" class="btn btn-info btn-block">Seguir comprando</a>-->
                            </div>

                            
                    </form>
                </div>
            </div>
        </div>
    </main>

<center>


      <!--  <form name="form" action="RegistroDB.php" method="post">

            Nombre: <input type="text" name="nombre" required><br><br>
            Apellidos: <input type="text" name="apellidos" required><br><br>
            Dirección: <input type="text" name="direccion" required><br><br>
            Población: <input type="text" name="poblacion" required><br><br>
            Provincia: <input type="text" name="provincia" required><br><br>
            Telefono: <input type="text" name="telefono" required><br><br>

            <input type="submit" value="Registrar"><br><br>
            <input type="reset" value="Borrar">
     


        </form>
   -->
    </center>

    <script src="../asset/js/jquery-3.4.1.min.js"></script>
    <script src="../asset/js/bootstrap.min.js"></script>
    <script src="../asset/js/sweetalert2.min.js"></script>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.3.2/dist/email.min.js"></script>

    <script src="../asset/js/carrito.js"></script>
    <script src="../asset/js/compra.js"></script>

    <div class="col-6">
    <h4>Detalles de pago</h4>
    <div id="paypal-button-container"></div>
    </div>

     <script>
        paypal.Buttons({
            style: {
                color:'blue',
                shape: 'pill',
                label: 'pay'
            },
            createOrder: function(data, actions){
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: <?php echo preciototal;?>
                        }
                    }]
                });
            },
        
            onApprove: function(data, actions){
                actions.order.capture().then(function(detalles){
                    window.location.href="completado.html"
                });
            },

            onCancel: function(data){
                alert("Pago cancelado");
                console.log(data);
            }
        }).render('#paypal-button-container');
</script>
</body>

</html>