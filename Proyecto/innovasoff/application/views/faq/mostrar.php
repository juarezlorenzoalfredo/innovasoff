<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Preguntas Frecuentes</h4>
                <a href="<?=base_url();?>index.php/faq/agregar" class="btn btn-default"> Agregar </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Pregunta
                      </th>
                      <th>
                        Imagen
                      </th>
                      
                      <th>
                        Respuesta
                      </th>
            
                      <th>Editar</th>
                    <th>Eliminar</th>
                    </thead>

                    <?php foreach($faq as $f){ ?>

                    <tbody>
                      <tr>
                        <td>
                        <?php echo $f->nombre;?>
                        </td>
                        <td>
                        <img src="<?=base_url()?>images/<?php echo $f->url;?>" width="45" height="45">
                        </td>
                        
                        <td>
                        <?php echo $f->descripcion;?>
                        </td>
                        
                        


                        <td> <a href="<?=base_url();?>index.php/faq/modificar/<?php echo $f->idFaq; ?>"> <button class="btn btn-warning btn-round"> Editar</button> </a> </td>
                        <td> <a href="<?=base_url();?>index.php/faq/eliminar/<?php echo $f->idFaq; ?>"> <button class="btn btn-danger btn-round" onclick="return confirm('¿Esta seguro de eliminar este campo? Click en Aceptar')"> Eliminar</button> </a> </td>

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