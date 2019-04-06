<div class="content">
<div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Agregar usuarios</h5>
              </div>
              <div class="card-body">
              
              <?php
                if(validation_errors()){ echo validation_errors();
                } ?>

                <form action="guardar" method="post"  enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label  for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" >
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label  for="telefono">Telefono:</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" >
                      </div>
                    </div>

                      <div class="col-md-4">
                      <div class="form-group">
                        <label  for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" >
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label  for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" >
                      </div>
                    </div>

                 <div class="col-md-6">
                      <div class="form-group">
                        <label  for="privilegios">Privilegios:</label>
                        <Select type="text" name="privilegios" id="privilegios" class="form-control"  required>
                                  <option value=""> Selecciona una opción </option>
                                  <option value="1" > Administrador </option>
                                  <option value="2" >  Empleado </option>
                        </Select>
                        
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