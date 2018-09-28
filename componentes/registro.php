<div class="panel panel-default">
  <div class="panel-body">
    <div class="" align="center">
      <br>
      <button id="Login" type="button" class="btn btn-info" class="btn btn-primary btn-lg" data-toggle="modal"
        data-target="#myModal">Ya tienes Cuenta?</button>
    </div>
    <h3 style="color:#FFFFFF" ;>Registrar</h3>
    <div class="row">
      <div class="col-md-12">
        <!--segundo 1 -->
        <input type="text" class="form-control" name="" value="" id="nombreRegistro" placeholder="Nombre">
      </div>
      <br><br><br>
    </div>
    <div class="row">
      <div class="col-md-12">
        <input type="text" class="form-control" name="" value="" id="UsuarioRegistro" placeholder="Nombre de Usuario">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <input type="password" class="form-control" name="" value="" id="passwordRegistro" placeholder="Password">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6">
        <!--segundo 1 -->
        <input type="text" class="form-control" name="" value="" id="ciudadRegistro" placeholder="Ciudad">
      </div>
      <div class="col-md-6">
        <!--segundo 1 -->
        <input type="text" class="form-control" name="" value="" id="codigoPostRegistro" placeholder="Codigo Postal">

      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h4 style="color:#FFFFFF" ;>Edad</h4>
        <select class="form-control" name="">
          <option value="">Seleccione</option>
          <option value="">18-25</option>
          <option value="">26-35</option>
          <option value="">36-45</option>
          <option value="">45 o MAS</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h4 style="color:#FFFFFF" ;>Profecion</h4>
        <select class="form-control" class="" name="" id="profecionRegistro">
          <option value="">Seleccione Su Profecion</option>
          <option value="">profecion 1</option>
          <option value="">profecion 2</option>
          <option value="">profecion 3</option>
          <option value="">profecion 4</option>
          <option value="">profecion 5</option>
        </select>
      </div>
    </div><br><br>
    <div class="row" align="right">
      <div class="col-md-12">
        <button type="button" id="Registrar" class="btn btn-primary" onClick="crearUsuario($(UsuarioRegistro).val(), $(passwordRegistro).val())">Registrar</button>
      </div>
    </div>
  </div>
</div>