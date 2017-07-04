<div class="logearse" id="logearse">
	<form action="<?php echo base_url() ?>Perfil" method="POST" name ="fomularioIngresar">
  <div class="form-group">
    <label for="email">Correo Electronico:</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="tu_correo@gmail.com">
  </div>
  <div class="form-group">
    <label for="pwd">Contrasena:</label>
    <input name="contrasena" type="password" class="form-control" id="pwd" placeholder="Escriba su contrasena">
  </div>
 
  <button type="submit" value="fav_HTML" class="btn btn-default" id="btnEntrar">Entrar</button>
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
 Registrarse
</button>


	<div id="status"></div>
  
</form>


</div>