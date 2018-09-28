<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Comercializadora</title>
  <!--Librerias-->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="css/stilos.css">
  <link href="webcodecamjs-master/css/style.css" rel="stylesheet">
</head>

<body background="img/1.jpg">
  <?php
    include("comexion.php");
    include("funciones.php");
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <!--primero 7 -->
        <br><br><br>
        <div class="row">

          <div class="col-md-7">
            <!--div derecha-->

            <h1 style="color:#FFFFFF" ;>Te estamos Buscando </h1>
            <p>El mejor Sitio para tu negocio</p>

          </div>
          <div class="col-md-5">
            <!--div derecha-->
            <img src="img/3.5.1.png" alt="">
          </div>
        </div>
        <div class="jumbotron">
          <!-- jumbotron Inicio-->
          <h3 style="color:#FFFFFF" ;>Sobre Nosotros</h3>
          <p style="color:#848484" ;>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <p align="right">
            <p style="color:#FFFFFF" ;><a class="btn btn-btnJum btn-lg" href="#" role="button">leer mas</a></p>
        </div><br><!-- jumbotron Cierre-->
      </div>
      <!--P7-->
      <div class="col-md-1">
        <!--segundo 1 -->

      </div>
      <!--Cierre S1-->
      <div class="col-md-4">
        <!--Terceros 4 -->
        <br><br><br>
        <?php
          include("registro.php")
        ?>
      </div>
      <!--Cierre T4 -->
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Iniciar Sesion</h4>
            </div>
            <div class="modal-body">
              <h4>Bienvenido</h4>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="email" type="text" class="form-control" name="email" placeholder="Usuario">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" type="text" class="form-control" name="password" placeholder="Password">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" id="entrar" class="btn btn-primary" onClick="logIn($(email).val(), $(password).val())">Iniciar
                Sesion</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="footer" align="left">
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a>TecMM Arandas</a>
    </div>
  </footer>

  <!-- librerias-->
  <script src="js/jquery-1.12.4.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>


<!--
#F1C40F Amarillo
#65A14D Verde
 -->