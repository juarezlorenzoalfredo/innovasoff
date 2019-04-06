<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Acerca de</h4>
                <a href="<?=base_url();?>index.php/acercaDe/agregar" class="btn btn-default"> Agregar </a>
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Título
                      </th>
                      <th>
                        Información
                      </th>
                      <th>Editar</th>
                    <th>Eliminar</th>
                    </thead>

                    <?php foreach($acercaDe as $a){ ?>

                    <tbody>
                      <tr>
                        <td>
                        <?php echo $a->titulo;?>
                        </td> 
                        <td>
                        <?php echo $a->informacion;?>
                        </td> 


                        <td> <a href="<?=base_url();?>index.php/acercaDe/modificar/<?php echo $a->idAcercaDe; ?>"> <button class="btn btn-warning btn-round"> Editar</button> </a> </td>
                        <td> <a href="<?=base_url();?>index.php/acercaDe/eliminar/<?php echo $a->idAcercaDe; ?>" > <button class="btn btn-danger btn-round" onclick="return confirm('¿Esta seguro de eliminar este campo? Click en Aceptar')"> Eliminar</button> </a> </td>

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