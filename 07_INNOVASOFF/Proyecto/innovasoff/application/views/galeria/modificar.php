<div class="content">
        <div class="row">
          <div class="col-md-4">
            
          </div>
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Editar Producto</h5>
              </div>
              <div class="card-body">
              
              <?php
                if(validation_errors()){ echo validation_errors();
                } ?>

                <form action="<?=base_url();?>index.php/galeria/actualizar" method="post" enctype="multipart/form-data">
                <?php foreach ($galeria as $g){?>
                  <input type="hidden" name="idGaleria" value="<?php echo $g->idGaleria;?>">
                  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label  for="nombre">Título:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $g->nombre;?>" >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div >
                      <div >
                        <label  for="url">Imagen:</label> <br>
                        <input type="hidden" name="viejaUrl" id="url" value="<?php echo $g->url;?>"> 
                        <img src="<?=base_url();?>images/<?=$g->url;?>" width ="45" height="45">  <input type="file" name="url"> <br>
                      </div>
                      </div>
                    </div>

                    
                    
                  </div>
                  
                  <div class="row">
                    
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $g->descripcion;?>">
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
      