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
         <div class="col-md-0"><!--div izquierda-->

         </div>
         <div class="col-md-9"><!-- div Central-->
           <div class="col-md-6">
             <div class="form-group">
               <label  style="color:#FFFFFF";for="inputEmail3" class="col-sm-4 control-label">Nombre Completo</label>
               <div class="col-sm-7">
                 <input type="text" class="form-control" id="nombre">
               </div>
             </div><br><br>
             <div class="form-group">
               <label for="inputEmail3" style="color:#FFFFFF"; class="col-sm-4 control-label">Usuario</label>
               <div class="col-sm-7">
                 <input type="text" class="form-control" id="Usuario">
               </div>
             </div><br><br>
             <div class="form-group">
               <label for="inputEmail3" style="color:#FFFFFF"; class="col-sm-4 control-label">Direccion</label>
               <div class="col-sm-7">
                 <input type="text" class="form-control" id="Direccion">
               </div>
             </div><br><br>
             <div class="form-group">
               <label for="inputEmail3"  style="color:#FFFFFF"; class="col-sm-4 control-label">Curriculum(PDF)</label>
               <div class="col-sm-7">
                 <input type="file" class="form-control" id="Curriculum">
               </div>
             </div><br><br>
             <div class="form-group">
               <label for="inputEmail3"style="color:#FFFFFF"; class="col-sm-4 control-label">Codigo Postal</label>
               <div class="col-sm-7">
                 <input type="text" class="form-control" id="Curriculum">
               </div>
             </div><br><br>
           </div>
           <div class="col-md-6">
             <div class="form-group">
               <label for="inputEmail3"style="color:#FFFFFF"; class="col-sm-5 control-label">Ciudad</label>
               <div class="col-sm-7">
                 <input type="text" class="form-control" id="nombre">
               </div>
             </div><br><br>
             <div class="form-group">
               <label for="inputEmail3"style="color:#FFFFFF"; class="col-sm-5 control-label">Edad</label>
               <div class="col-sm-7">
                 <input type="text" class="form-control" id="Usuario">
               </div>
             </div><br><br>
             <div class="form-group">
               <label for="inputEmail3"style="color:#FFFFFF"; class="col-sm-5 control-label">Profecion</label>
               <div class="col-sm-7">
                 <input type="text" class="form-control" id="Direccion">
               </div>
             </div><br><br>

           </div>
         </div>
         <div class="col-md-2" align="right"><!--div derecha-->
           <div class="panel panel-warning" align="right">
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
