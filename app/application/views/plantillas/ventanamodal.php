
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Registrarse
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form action="<?php echo base_url() ?>/Login/nuevoUsuario" method="POST" name ="fomularioRegistro" class="form-horizontal" role="form">
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Correo Electrónico</label>
                    <div class="col-sm-10">
                        <input name="email" type="email" class="form-control" 
                        id="inputEmail3" placeholder="Email@ejemplo.com"/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >Nombre</label>
                    <div class="col-sm-10">
                        <input name="nombreUsuario" type="text" class="form-control"
                            id="nombreUsuario" placeholder="Nombre"/>
                    </div>
                  </div>

                     <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >Apellido</label>
                    <div class="col-sm-10">
                        <input name="apellidoUsuario" type="text" class="form-control"
                            id="apellidoUsuario" placeholder="Apellido"/>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >Password</label>
                    <div class="col-sm-10">
                        <input name="contrasena1" type="password" class="form-control"
                            id="inputPassword1" placeholder="Password"/>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" > Confirmar Password</label>
                    <div class="col-sm-10">
                        <input name="contrasena2" type="password" class="form-control"
                            id="inputPassword1" placeholder="Password"/>
                    </div>
                  </div>

                 
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Sign in</button>
                    </div>
                  </div>
                </form>
                
                
                
                
                
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Cancelar
                </button>
                <div class="g-signin2" data-onsuccess="onSignIn"></div>
            </div>
        </div>
    </div>
</div>






