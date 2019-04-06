<div class="content">
      <div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Modificar Usuarios</h5>
              </div>
              <div class="card-body">
              
              <?php
                if(validation_errors()){ echo validation_errors();
                } ?>

                <form  action="<?=base_url();?>index.php/usuarios/actualizar" method="post"  enctype="multipart/form-data">
                <?php foreach ($usuarios as $u){?>
                  <input type="hidden" name="idUsuario" value="<?php echo $u->idUsuario;?>">
                  <div class="row">

                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label  for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $u->nombre;?>">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label  for="telefono">Telefono:</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $u->telefono;?>">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label  for="email">Email:</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?php echo $u->email;?>">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label  for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" value="<?php echo $u->password;?>">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label  for="privilegios">Prvilegios:</label>
                        <Select type="text" name="privilegios" id="privilegios" class="form-control"  required>
                              <option value=""> Selecciona una opción </option>
                              <option value="1"<?php if($u->privilegios == 1 ){ echo 'selected'; } ?> >Administrador </option>
                              <option value="2"<?php if($u->privilegios == 2 ){ echo 'selected'; } ?> > Empleado </option>

                        </Select>
                      </div>
                    </div>
                   
                    
                  </div>
                
                  <?php } ?>   
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                   
                      <button type="submit" class="btn btn-primary btn-round" onclick="return confirm('¿Esta seguro de editar este campo? Click en Aceptar')">Actualizar</button>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>