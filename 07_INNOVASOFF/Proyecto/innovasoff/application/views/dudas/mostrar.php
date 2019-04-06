<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Dudas</h4>
                
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Nombre
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Asunto
                      </th>
                      <th>
                        mensaje
                      </th>
                     <!-- <th>Editar</th> -->
                    <th>Eliminar</th>
                    </thead>

                    <?php foreach($dudas as $d){ ?>

                    <tbody>
                      <tr>
                        <td>
                        <?php echo $d->nombre;?>
                        </td> 
                        <td>
                        <?php echo $d->email;?>
                        </td> 
                         <td>
                        <?php echo $d->asunto;?>
                        </td> 
                         <td>
                        <?php echo $d->mensaje;?>
                        </td> 
  

                     
                        <td> <a href="<?=base_url();?>index.php/dudas/eliminar/<?php echo $d->idDudas; ?>" onclick="return confirm('¿Esta seguro de eliminar este campo? Click en Aceptar')"> <button class="btn btn-danger btn-round"> Eliminar</button> </a> </td>

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