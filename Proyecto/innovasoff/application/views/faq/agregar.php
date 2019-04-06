<div class="content">
        <div class="row">
          <div class="col-md-4">
            
          </div>
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Agregar pregunta frecuente </h5>
              </div>
              <div class="card-body">
              
              <?php
                if(validation_errors()){ echo validation_errors();
                } ?>

                <form action="guardar" method="post"  enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label  for="nombre">Pregunta:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" >
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div >
                        <label  for="url">Imagen:</label> <br>
                        <input type="file"  name="url" id="url" >
                      </div>
                    </div>

                    
                    
                  </div>
                  
                  <div class="row">
                    
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="descripcion">Respuesta:</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" >
                      </div>
                    </div>
                   
                  </div>
                  
                    
                  
   
                 
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                   
                      <button type="submit" class="btn btn-primary btn-round" onclick="return confirm('¿Los datos agregados son correctos? Click en Aceptar')">Agregar</button>
                    </div>
                  </div>
                </form>

                
              </div>
            </div>
          </div>
        </div>
      </div>