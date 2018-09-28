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
  <body background="img/1.jpg" background-repeat: no-repeat>
    <?php
    include("menu/menuUsua.php");
     ?>
    <div class="container">
      <div class="row">
        <br><br><br>
        <div class="col-md-2"><!--div izquierda-->

        <div class="col-md-8"><!-- div Central-->
          <h2>Nombre(s)</h2>
  <input id="nombre" type="text" name="" value="" placeholder="Nombre(s)">

  <h2>Apellidos</h2>
  <input id="apellidos" type="text" name="" value="" placeholder="Apellido(s)">

  <br>

  <h3>¿En que área te enfocas?</h3>
  <select class="" name="">
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
    <input id="otro" type="text" name="" value="" placeholder="Otro">

  <h3>¿Qué edad tienes?</h3>
  <select class="" name="">
    <option id="edad" value="">Edad</option>
    <option id="edada" value="">15-18 años</option>
    <option id="edadb" value="">19-22 años</option>
    <option id="edadc" value="">23-25 años</option>
    <option id="edadd" value="">26-29 años</option>
    <option id="edade" value="">30-34 años</option>
    <option id="edadf" value="">35 años o más</option>
  </select>

  <h3>Género</h3>
  <select class="" name="">
    <option id="gen" value="">Genero</option>
    <option id="gena" value="">Masculino</option>
    <option id="genb" value="">Femenino</option>
  </select>

  <h3>¿Cuántos años tienes de experiencia?</h3>
  <select class="" name="">
    <option id="exp" value="">Experiencia</option>
    <option id="expa" value="">0-3 años</option>
    <option id="expb" value="">4-7 años</option>
    <option id="expc" value="">8 años o más</option>
  </select>

  <h3>¿Te pones al día de lo que pasa en tu entorno de trabajo?</h3>
  <select class="" name="">
    <option id="Oficio" value="">Elige</option>
    <option id="ent" value="">No me doy cuenta de lo que pasa</option>
    <option id="enta" value="">Leo las noticias para estar al tanto</option>
    <option id="entb" value="">Pregunto a mis compañeros sobre lo más relevante</option>
    <option id="entc" value=""> Estoy siempre al pendiente de las novedades</option>
  </select>

  <h3>¿Cuál es tu comportamiento más habitual al recibir el cargo en un trabajo?</h3>
  <select class="" name="">
    <option id="Oficio" value="">Elige</option>
    <option id="comp" value="">Soy organizado y gestiono tareas</option>
    <option id="compa" value="">Pido ayuda para organizar todo</option>
    <option id="compb" value="">Dejo que las actividades se den por si solas</option>
  </select>

  <h3>¿Qué tan frecuentemente buscas y empleas nuevas ideas para tu trabajo?</h3>
  <select class="" name="">
    <option id="Oficio" value="">Elige</option>
    <option id="inn" value="">Siempre</option>
    <option id="inna" value="">Casi siempre</option>
    <option id="innb" value="">Casi nunca</option>
    <option id="innb" value="">Nunca</option>
  </select>

  <h3>¿Cómo organizas los días con mucho trabajo?</h3>
  <select class="" name="">
    <option id="Oficio" value="">Elige</option>
    <option id="org" value="">No dejo días con mucho trabajo</option>
    <option id="orga" value="">Con mucho estrés</option>
    <option id="orgb" value="">Los organizo bien gestionando tiempos y urgencias</option>
  </select>

  <h3>¿Tienes alguna capacidad diferente?</h3>
  <select class="" name="">
    <option id="Oficio" value="">Elige</option>
    <option id="dis" value="">No</option>
    <option id="disa" value="">Si</option>
  </select>



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
    <script src="js/jquery-1.12.4.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
  </body>
</html>
