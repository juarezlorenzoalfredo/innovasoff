<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Galería</h4>
                <a href="<?=base_url();?>index.php/galeria/agregar" class="btn btn-default"> Agregar </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Titulo
                      </th>
                      <th>
                        Imagen
                      </th>
                      
                      <th>
                        Descripción
                      </th>
            
                      <th>Editar</th>
                    <th>Eliminar</th>
                    </thead>

                    <?php foreach($galeria as $g){ ?>

                    <tbody>
                      <tr>
                        <td>
                        <?php echo $g->nombre;?>
                        </td>
                        <td>
                        <img src="<?=base_url()?>images/<?php echo $g->url;?>" width="45" height="45">
                        </td>
                        
                        <td>
                        <?php echo $g->descripcion;?>
                        </td>
                        
                        


                        <td> <a href="<?=base_url();?>index.php/galeria/modificar/<?php echo $g->idGaleria; ?>"> <button class="btn btn-warning btn-round"> Editar</button> </a> </td>
                        <td> <a href="<?=base_url();?>index.php/galeria/eliminar/<?php echo $g->idGaleria; ?>" onclick="return confirm('¿Esta seguro de eliminar este campo? Click en Aceptar')"> <button class="btn btn-danger btn-round"> Eliminar</button> </a> </td>

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
         