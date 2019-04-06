<div class="content">
        <div class="row">
          <div class="col-md-4">
            
          </div>
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Editar pregunta frecuente</h5>
              </div>
              <div class="card-body">
              
              <?php
                if(validation_errors()){ echo validation_errors();
                } ?>

                <form action="<?=base_url();?>index.php/faq/actualizar" method="post" enctype="multipart/form-data">
                <?php foreach ($faq as $f){?>
                  <input type="hidden" name="idFaq" value="<?php echo $f->idFaq;?>">
                  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label  for="nombre">Pregunta:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $f->nombre;?>" >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div >
                      <div >
                        <label  for="url">Imagen:</label> <br>
                        <input type="hidden" name="viejaUrl" id="url" value="<?php echo $f->url;?>"> 
                        <img src="<?=base_url();?>images/<?=$f->url;?>" width ="45" height="45">  <input type="file" name="url"> <br>
                      </div>
                      </div>
                    </div>

                    
                    
                  </div>
                  
                  <div class="row">
                    
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="descripcion">Respuesta:</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $f->descripcion;?>">
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
      