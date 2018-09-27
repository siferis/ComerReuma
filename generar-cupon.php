<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Comercializadora</title>
    
    <!--Librerias-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/stilos.css">
    <link href="webcodecamjs-master/css/style.css" rel="stylesheet">

    <style>
        .main-div {
            background: rgba(59, 64, 69, 0.8);
            color: white;
        }
        .main-div p , .main-div h3 {
            color: white;
        }
        .col-center-block {
            float: none;
            display: block;
            margin: 0 auto;
            text-align: center;
            /* margin-left: auto; margin-right: auto; */
        }
        .vimage {
            width: 200px;
            margin-top: 20px;
        }
        .input-cupon {
            margin: 20px auto;
        }
        nav.navbar {
            background: rgba(0, 0, 0, 0.7);
        }
        .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
        .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
        .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
            color: rgba(0, 0, 0, 0.7);
            background-color: rgba(0, 0, 0, 0.7);
        }
    </style>
</head>

<body background="img/1.jpg">
    <?php include("menu/menuAdmin.php"); ?>
    <div class="container">
    <div class="row col-center-block">
        <div class="col-sm-6 col-md-4 main-div col-center-block">
            <div class="thumbnail main-div">
                <img src="img/coupon.svg" alt="Cupón" class="vimage">
                <div class="caption">
                <h3>Generar un cupón</h3>
                <p>Una manera genial de aumentar la fidelidad de sus clientes, es la de distribuirles cupones. Los cupones le ofrecerán a su cliente un descuento del 2% en el precio de su pedido, y tienen fecha de vencimiento de dos horas. Puede distribuir su código en sus redes sociales.</p>
                <p>
                    <input type="text" id="cupon-code" class="form-control input-cupon" placeholder="Código del cupón" maxlength="10">
                    <button type="button" class="btn btn-default btn-lg" id="activar-cupon">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Activar cupón
                    </button>
                </p>
            </div>
        </div>
    </div>
    </div>
</div>

    <!-- librerias-->
    <script src="js/jquery-1.12.4.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script>
        $("#activar-cupon").on("click", function() {
            alert("Código para guardar el cupón.")
        })
    </script>
</body>

</html>