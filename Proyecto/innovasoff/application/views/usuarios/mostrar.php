<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Tabla de usuarios</h4>
                
                <a href="<?=base_url();?>index.php/usuarios/agregar" class="btn btn-default"> Agregar </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Nombre
                      </th>
                      <th>
                        Telefono
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Password
                      </th>
                      <th>
                        Privilegios
                      </th>
                      <th>Editar</th>
                    <th>Eliminar</th>
                    </thead>

                    <?php foreach($usuarios as $u){ ?>

                    <tbody>
                      <tr>
                        <td>
                        <?php echo $u->nombre;?>
                        </td> 
                        <td>
                        <?php echo $u->telefono;?>
                        </td> 
                         <td>
                        <?php echo $u->email;?>
                        </td>
                        <td>
                        <?php echo $u->password;?>
                        </td> 
                         <td>
                        <?php echo $u->privilegios;?>
                        </td> 
  
                        <?php if ($u->privilegios != 1) { ?>
                        <td> <a href="<?=base_url();?>index.php/usuarios/modificar/<?php echo $u->idUsuario; ?>"> <button class="btn btn-warning btn-round"> Editar</button> </a> </td>
                        <td> <a href="<?=base_url();?>index.php/usuarios/eliminar/<?php echo $u->idUsuario; ?>" onclick="return confirm('¿Esta seguro de eliminar este campo? Click en Aceptar')"> <button class="btn btn-danger btn-round"> Eliminar</button> </a> </td>
                        <?php	} ?>
                      </tr>
                     
                     

                    </tbody>
                    <?php } ?>
                    
                  </table>

                  </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>