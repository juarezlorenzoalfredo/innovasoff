<div class="content">
<div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Agregar acerca de</h5>
              </div>
              <div class="card-body">
              
              <?php
                if(validation_errors()){ echo validation_errors();
                } ?>

                <form action="guardar" method="post"  enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label  for="titulo">Título:</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" >
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label  for="informacion">Información:</label>
                        <input type="text" class="form-control" name="informacion" id="informacion" >
                      </div>
                    </div>

                
                  </div>
                      
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Agregar</button>
                    </div>
                  </div>
                </form>
                
                </div>
            </div>
          </div>
        </div>
      </div>
      