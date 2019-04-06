

<script>
function mueveReloj(){ 
var LaFecha=new Date();
var Mes=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasem=new Array('domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');
var diasemana=LaFecha.getDay();
var FechaCompleta="";
var NumeroDeMes="";
var hora = LaFecha.getHours();
var minuto = LaFecha.getMinutes(); 
var segundo = LaFecha.getSeconds();
NumeroDeMes=LaFecha.getMonth();
FechaCompleta=diasem[diasemana]+" "+LaFecha.getDate()+" de "+Mes[NumeroDeMes]+" del "+LaFecha.getFullYear()+" "+hora+":"+minuto+": "+segundo;
document.getElementById('reloj').innerHTML=FechaCompleta;
setTimeout('mueveReloj()',1000)
} 
</script> 

<!--
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Inicio</h4>
                                    <p class="card-category">Listo para realizar las tareas del día</p>
                                </div>

                                
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        
                                        
                                        <thead>
                                            <th><div id="reloj"> </div></th>
                                           
                                        </thead>

                                 
			
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div> -->
                        



        <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              <h4 class="card-title">Inicio</h4>
            <p class="card-category">Listo para realizar las tareas del día</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th><div id="reloj"> </div></th>
                    
                    </thead>
                    <tbody>
                    
                     
                   
                    <td> <div class="col-xs-12">
			<?php
			if (isset($_SESSION['email'])){
				echo '<strong> <p>Bienvenido: '. $_SESSION['email'].'</p> </strong>';
			}else{
			}
			?>
		</div> </td>
	
                        
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
    
    
                        







  
