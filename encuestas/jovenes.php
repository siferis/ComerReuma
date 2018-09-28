<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Comercializadora</title>
    <!--Librerias-->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/stilos.css">

  </head>
  <style media="screen">
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
  <body background="../img/1.jpg" background-repeat: no-repeat>
    <?php
    include("../menu/menuUsua.php");
     ?>
    <div class="container">
      <div class="row">
        <br><br><br>
        <h1 class="text-center"  style="color:#FFFFFF";>Integración laboral de jovenes(con o sin estudios)<h1>
        <div class="col-md-2"><!--div izquierda-->
          </div>
        </div>
        <div class="col-md-8"><!-- div Central-->
          <div class="form-group">
            <label  style="color:#FFFFFF";for="inputEmail3" class="col-sm-4 control-label">Nombre</label>
            <div class="col-sm-7">
              <input id="nombre" type="text" class="form-control" name="" value="" placeholder="Nombre(s)">
            </div>
          </div><br><br>
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label  style="color:#FFFFFF";for="inputEmail3" class="col-sm-6 control-label">¿En que área te enfocas?</label>
                <div class="col-sm-5">
                  <select class="form-control" name="">
                    <option id="Oficio" value="">Elige</option>
                    <option id="Oficio" value="">Educación</option>
                    <option id="Oficioa"value="">Trabajo doméstico</option>
                    <option id="Oficiob"value="">Trabajo social</option>
                    <option id="Oficioc"value="">Trabajo empresarial</option>
                    <option id="Oficiod"value="">Agricultor</option>
                    <option id="Oficioe"value="">Trabajo minero</option>
                    <option id="Oficiof"value="">Comercio</option>
                    <option id="Oficiog"value="">Produción</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <div class="col-sm-7">
                  <input id="otroa" class="form-control"  type="text" name="" value="" placeholder="Otro">

                </div>
              </div>
            </div>
          </div><br>
          <div class="form-group">
            <label  style="color:#FFFFFF";for="inputEmail3" class="col-sm-4 control-label">¿Qué edad tienes?</label>
            <div class="col-sm-3">
              <select class="form-control" name="">
                <option id="edad" value="">Edad</option>
                <option id="edada" value="">15-18 años</option>
                <option id="edadb" value="">19-22 años</option>
                <option id="edadc" value="">23-25 años</option>
                <option id="edadd" value="">26-29 años</option>
                <option id="edade" value="">30-34 años</option>
                <option id="edadf" value="">35 años o más</option>
              </select>
            </div>
          </div><br><br>
          <div class="form-group">
            <label  style="color:#FFFFFF";for="inputEmail3" class="col-sm-4 control-label">Género</label>
            <div class="col-sm-3">
              <select class="form-control" name="">
                <option id="gen" value="">Genero</option>
                <option id="gena" value="">Masculino</option>
                <option id="genb" value="">Femenino</option>
              </select>
            </div>
          </div><br><br>
          <div class="form-group">
            <label  style="color:#FFFFFF";for="inputEmail3" class="col-sm-4 control-label">¿Cuántos años tienes de experiencia?</label>
            <div class="col-sm-3">
              <select class="form-control" name="">
                <option id="exp" value="">Experiencia</option>
                <option id="expa" value="">0-3 años</option>
                <option id="expb" value="">4-7 años</option>
                <option id="expc" value="">8 años o más</option>
              </select>
            </div>
          </div><br><br>




        </div>
        <div class="col-md-2"><!--div derecha-->

        </div>

      </div>
    </div>




    <!-- Footer -->
    <footer class="footer" align="left">
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
          <a>TexMM Arandas</a>
        </div>
      </footer>
    <!-- librerias-->
    <script src="../js/jquery-1.12.4.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
  </body>
</html>
