<div class="content">
<div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Modificar acerca de </h5>
              </div>
              <div class="card-body">
              
              <?php
                if(validation_errors()){ echo validation_errors();
                } ?>

                <form  action="<?=base_url();?>index.php/acercaDe/actualizar" method="post"  enctype="multipart/form-data">
                <?php foreach ($acercade as $a){?>
                  <input type="hidden" name="idAcercaDe" value="<?php echo $a->idAcercaDe;?>">
                  <div class="row">

                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label  for="titulo">Título:</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $a->titulo;?>">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label  for="informacion">Información:</label>
                        <input type="text" class="form-control" name="informacion" id="informacion" value="<?php echo $a->informacion;?>">
                      </div>
                    </div>
                   
                    
                  </div>
                
                  <?php } ?>   
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                   
                      <button type="submit" class="btn btn-primary btn-round">Actualizar</button>
                    </div>
                  </div>
                </form>

                
                </div>
            </div>
          </div>
        </div>
      </div>