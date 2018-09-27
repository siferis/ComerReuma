<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mi Perfil</title>
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
         <br>
         <div class="col-md-1"><!--div izquierda-->

         </div>
         <div class="col-md-9"><!-- div Central-->
           <form class="form control" action="" method="post">

           </form>
         </div>
         <div class="col-md-2"><!--div derecha-->
           <div class="panel panel-warning">
              <div align="center" class="panel-heading">Mi Perfil</div>
              <img class="img-left" src="../img/login1.png"  width="150" height="150" alt="">
              <div class=""align="right">
                <a href="#">Agregar foto</a>
              </div>

           </div>


         </div>

       </div>
     </div>

    <!-- librerias-->
    <script src="../js/jquery-1.12.4.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
  </body>
</html>
