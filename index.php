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
    include("./bin/comexion.php");
    include("./bin/funciones.php");
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <!--primero 7 -->
        <br><br><br>
        <div class="row">
          <div class="col-md-8">
            <!--div derecha-->
            <br><br><br>
            <h1 style="color:#FFFFFF" ;>Te estamos Buscando </h1>
            <div class="jumbotron">
              <!-- jumbotron Inicio-->
              <h3 style="color:#FFFFFF" ;>Somos Tu mejor opcion</h3><br><br>
              <p style="color:#848484" ;>Siempre al alcance de tus manos</p>
              <br><br>
              <p align="left" style="color:#FFFFFF" ;><a class="btn btn-btnJum btn-lg" href="#" role="button">leer mas</a></p>
            </div><br><!-- jumbotron Cierre-->

          </div>
          <div class="col-md-4">
            <!--div derecha-->
            <img src="img/3.5.1.png" alt="">
          </div>
        </div>
      </div>
      <!--P7-->
      <div class="col-md-1">
        <!--segundo 1 -->
        <div class="col-md-7">
          <div class="col-md-8">
            <!--div derecha-->
            <br><br><br>
          

          </div>
          <div class="col-md-5">


          </div>
          <div class="col-md-4">
            <!--div derecha-->

          </div>
        </div>
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
          include("./componentes/registro.php")
        ?>
      </div>
      <!--Cierre T4 -->
      <!-- Modal -->
    </div><br><br>
    <div class="row" align="right">
      <div class="col-md-12">
      </div>
    </div>
  </div>

  <!--Cierre T4 -->
  <br>
  <?php
        include("./componentes/modal1.php");
      ?>

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
