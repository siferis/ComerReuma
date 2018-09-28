<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Comercializadora</title>
  <!--Librerias-->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="css/stilos.css">

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
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Iniciar Sesion</h4>
            </div>
            <div class="modal-body">
              <h4>Bienvenido</h4>
              <form class="needs-validation" id="login-form">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="email" type="email" class="form-control" name="email" placeholder="Usuario" required v-model="email">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="password" type="password" class="form-control" name="password" placeholder="Password" required v-model="password">
                </div>
                <div class="modal-footer input-group" style="text-align:center;">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  <button type="button" id="entrar" class="btn btn-primary" @click="checkForm">Iniciar
                    Sesion</button>
               </div>
              </div>
              
            </form>
          </div>
        </div>
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

  <script>
    let loginForm = new Vue({
      el: "#login-form",
      data: {
        email: null,
        password: null
      },
      methods: {
        checkForm: function() {
          console.log(this);
          if(!this.$el.checkValidity()) { // Si el formulario es inválido
            alertify
            .alert("El formulario es inválido.", function(){
                alertify.message('Completar formulario.');
            });
          } else {
            // Lógica para inicio de sesión. Están a disposición las
            // variables email.value y password.value
            
          }
        }
      }
    });
  </script>
  <!-- librerias-->
  <script src="js/jquery-1.12.4.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>