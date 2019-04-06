
		<div class="container">
			<div class="row">
				<div class="col-md-12 cBusiness">
					<h3>Conoce nuestro producto</h3>
					<h4>Es indispensable como empresa, generar nuevos productos que, a su vez, tengan originalidad e innovación, es por eso que la empresa INNOVASOFF ha decidido crear la “SILLA-ESCRITORIO 3F”, la nueva silla-escritorio, la cual consiste en una silla multifuncional desarmable.</h4>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 centPic">
					<img class="img-responsive"  src="<?=base_url();?>assets/images/ju.jpeg"/>
				</div>
			</div>
		</div>   
 

    <!--about start-->    
    
    <div id="about">
    	<div class="line2">
			<div class="container">
				<div class="row Fresh">

				<?php foreach ($acercade as $a){?>
					<div class="col-md-4 Smi">
						<i class="fa fa-smile-o"></i>
						<h4><?php echo $a->titulo;?></h4>
						<p align="justify"><?php echo $a->informacion;?></p>
					<!--	<p align="justify">INNOVASOFF siempre piensa que la satisfacción de los clientes es su mayor prioridad, es por eso que realizan muebles que satisfagan una de las necesidades básicas de su hogar, que es la reducción de espacios, debido a que, en la actualidad, las nuevas familias viven en hogares pequeños.</p>
					-->
					</div>
					<?php } ?>   

				<!--	
					<div class="col-md-4 Ver">
						<i class="fa fa-cog"></i>
						<h4> </h4>
						<p align="justify"> </p>
					</div> -->
					 

				<!--	<div class="col-md-4 Fully">
						<i class="fa fa-heart"></i>
						<h4>AMOR A NUESTRAS RAÍCES</h4>
						<p>La mayoría de los integrantes que conforman esta empresa son originarios de Maravatío, Michoacán por lo tanto la empresa está establecida en este lugar. </p>
					</div>	-->	

				
				</div>
			</div>
		</div>


		
		<div class="container">
			<div class="row">
				<div class="col-md-12 wwa">
					<span name="about" ></span>
					<h3>Acerca de Nosotros</h3>
					<p align="justify">La empresa fue creada el día 26 de octubre del 2016 con la necesidad de elaborar un proyecto innovador en la institución académica a la que pertenecemos que es la Universidad Tecnológica de León campus Acámbaro, la empresa es nombrada INNOVASOFF que es constituida como una Razón Social.</p>
				</div>
			</div>
		</div>


		<div class="container">
			<div class="row team">
				<div class="col-md-4 b1">
						<img class="img-responsive" src="<?=base_url();?>assets/images/picTeam/mision.png">
						<h4></h4>
						<p align="justify">Somos una empresa dedicada a la fabricación y venta de muebles confortables e innovadores, que brinden a nuestros clientes comodidad y calidad.</p>
				</div>
			
			
				<div class="col-md-4">
						<img class="img-responsive" src="<?=base_url();?>assets/images/picTeam/vision.png">
						<h4></h4>
						<p align="justify">Consolidarnos como una empresa competente y líder en la venta de muebles confortables a nivel nacional para así mismo brindar un servicio de calidad al público en general.</p>
				</div>
		
			
				<div class="col-md-4 b3">
						<img class="img-responsive" src="<?=base_url();?>assets/images/picTeam/valores.png">
					<p>
					Honestidad <br>
					Responsabilidad <br>
					Respeto <br>
					</p>
				</div>
			</div>
		</div>	
		</div>
    </div>


    <!--project start-->    
    <div id="project">    	
		<div class="line3">
			<div class="container">
				<div id="project1" ></div>
				<div class="row Ama">
					<div class="col-md-12">
					<span name="projects" id="projectss"></span>
					<h3>Galería del producto</h3>
					<p>Conoce nuestra banca multifuncional</p>
					</div>
				</div>
			</div>
		</div>          
    
    
       <div class="container">
		<div class="row">
			<div class="portfolio_block columns3   pretty" data-animated="fadeIn">	

			<?php foreach ($galeria as $g){?>

					<div class="element col-sm-3   gall branding ">
						
						<a class="plS" href="<?=base_url();?>images/<?php echo $g->url;?>" rel="prettyPhoto[gallery2]">
							<img class="img-responsive picsGall "  src="<?=base_url();?>images/<?php echo $g->url;?>" alt="pic1 Gallery" />
						</a>
						<div class="view project_descr ">
							<h3><a href="#"><?php echo $g->nombre;?></a></h3> 
							<ul>
							
							</ul>
						</div>
					</div>

			<?php }?>

<!--
					<div class="element col-sm-4  gall branding">
						<a class="plS" href="<?=base_url();?>assets/images/prettyPhotoImages/pic2.jpg" rel="prettyPhoto[gallery2]">
							<img class="img-responsive picsGall" src="<?=base_url();?>assets/images/prettyPhotoImages/thumb_pic2.jpg" alt="pic2 Gallery"/>
						</a>
						<div class="view project_descr center">
							<h3><a href="#">Environment Logos Set</a></h3>
							<ul>
								<li><i class="fa fa-eye"></i>369</li>
								<li><a  class="heart" href="#"><i class="fa-heart-o"></i>86</a></li>
							</ul>
						</div>
					</div>
					<div class="element col-sm-4  gall web">
						<a class="plS" href="<?=base_url();?>assets/images/prettyPhotoImages/pic3.jpg" rel="prettyPhoto[gallery2]">
							<img class="img-responsive picsGall" src="<?=base_url();?>assets/images/prettyPhotoImages/thumb_pic3.jpg" alt="pic3 Gallery"/>
						</a>
						<div class="view project_descr ">
							<h3><a href="#">Beag Simple WEB UI</a></h3>
							<ul>
								<li><i class="fa fa-eye"></i>400</li>
								<li><a  class="heart" href="#"><i class="fa-heart-o"></i>124</a></li>
							</ul>
						</div>
					</div>
		
		
					
					<div class="element col-sm-4  gall  text_styles">
						<a class="plS" href="<?=base_url();?>assets/images/prettyPhotoImages/pic4.jpg" rel="prettyPhoto[gallery2]">
							<img class="img-responsive picsGall" src="<?=base_url();?>assets/images/prettyPhotoImages/thumb_pic4.jpg" alt="pic1 Gallery"/>
						</a>
						<div class="view project_descr ">
							<h3><a href="#">Pop Candy Text Effect</a></h3>
							<ul>
								<li><i class="fa fa-eye"></i>480</li>
								<li><a  class="heart" href="#"><i class="fa-heart-o"></i>95</a></li>
							</ul>
						</div>
					</div>
					<div class="element col-sm-4  gall  web">
						<a class="plS" href="<?=base_url();?>assets/images/prettyPhotoImages/pic5.jpg" rel="prettyPhoto[gallery2]">
							<img class="img-responsive picsGall" src="<?=base_url();?>assets/images/prettyPhotoImages/thumb_pic5.jpg" alt="pic1 Gallery"/>
						</a>
						<div class="view project_descr center">
							<h3><a href="#">User Interface Elements</a></h3>
							<ul>
								<li><i class="fa fa-eye"></i>215</li>
								<li><a  class="heart" href="#"><i class="fa-heart-o"></i>14</a></li>
							</ul>
						</div>
					</div>	

						
			</div>

			-->
			
		</div>
			
			<script type="text/javascript">
				jQuery(window).load(function(){
					items_set = [
					
						{category : 'branding', lika_count : '77', view_count : '234', src : 'images/prettyPhotoImages/pic9.jpg', title : 'Foil Mini Badges', content : '' },
						
						{category : 'polygraphy', lika_count : '45', view_count : '100', src : 'images/prettyPhotoImages/pic7.jpg', title : 'Darko – Business Card Mock Up', content : '' },
						
						{category : 'text_styles', lika_count : '22', view_count : '140', src : 'images/prettyPhotoImages/pic8.jpg', title : 'Woody Poster Text Effect', content : '' }
						

					];
					jQuery('.portfolio_block').portfolio_addon({
						type : 1, // 2-4 columns simple portfolio
						load_count : 3,
						
						items : items_set
					});
					$('#container').isotope({
					  animationOptions: {
						 duration: 900,
						 queue: false
					   }
					});
				});
			</script>
		</div>
    </div>    
    
<!--news start-->
    
    <div id="news">
    	<div class="line4">		
			<div class="container">
				<div class="row Ama">
					<div class="col-md-12">
					<h3>FAQ</h3>
					<p>Encuentra las respuestas a las preguntas frecuentes.</p>
					</div>
				</div>
			</div>
		</div>

	<!-- INICIA FAQ -->
		<div class="container">
				<div class="row news">
				<?php foreach ($faq as $f){?>
					<div class="col-md-4  text-left">
					<img class="img-responsive picsGall" src="<?=base_url();?>images/<?php echo $f->url;?>" width="100%" height="100%">
						<h3> <strong><?php echo $f->nombre;?> </strong> </h3> 
				<!--	<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul> -->
					<p align="center"><?php echo $f->descripcion;?> </p>
					<hr class="hrNews">
					</div>

		<?php }?>

				<!--	<div class="col-md-6 text-right">
					<img class="img-responsive picsGall" src="<?=base_url();?>assets/images/picNews/news2.jpg"/>
					<h3><a href="#">Nam in Nisl id Ipsum Feugiat Posuere ut sit Amet Sem</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div> -->

				</div>
			</div>
			
		<!--	<div class="container">
				<div class="row news2 news">
					<div class="col-md-6 text-left">
					<img class="img-responsive picsGall" src="<?=base_url();?>assets/images/picNews/news3.jpg"/>
					<h3><a href="#">Lorem Ipsum Dolor sit Amet Pelenntesque Sodales!</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
					<div class="col-md-6 text-right">
					<img class="img-responsive picsGall" src="<?=base_url();?>assets/images/picNews/news4.jpg"/>
					<h3><a href="#">Nam in Nisl id Ipsum Feugiat Posuere ut sit Amet Sem</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
				</div>
			</div> -->

		<!--	<div class="container">
				<div class="row news2 news">
					<div class="col-md-6 text-left">
					<img class="img-responsive picsGall" src="<?=base_url();?>assets/images/picNews/news5.jpg"/>
					<h3 ><a href="#">Lorem Ipsum Dolor sit Amet Pelenntesque Sodales!</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
					<div class="col-md-6 text-right">
					<img class="img-responsive picsGall" src="<?=base_url();?>assets/images/picNews/news6.jpg"/>
					<h3><a href="#">Nam in Nisl id Ipsum Feugiat Posuere ut sit Amet Sem</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
				</div>
			</div> -->
			
			
			
		<!--	<div class="container hideObj2" style="display:none;">
				<div class="row news2 news">
					<div class="col-md-6 text-right">
					<img class="img-responsive picsGall" src="<?=base_url();?>assets/images/picNews/news6.jpg"/>
					<h3><a href="#">Nam in Nisl id Ipsum Feugiat Posuere ut sit Amet Sem</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
					
					<div class="col-md-6 text-left">
					<img class="img-responsive picsGall" src="<?=base_url();?>assets/images/picNews/news5.jpg"/>
					<h3 ><a href="#">Lorem Ipsum Dolor sit Amet Pelenntesque Sodales!</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
				</div>
			</div> -->

		<!--	<div class="container">
			<div class="row cBtn">
				<div class="col-md-12" style="text-align: center; margin-bottom: -90px; z-index: 10;">
					<ul class="mNews">
						<li class="dowbload bhide2"><a href="#"><i class="fa fa-arrow-down"></i>Más</a></li>
					</ul>
				</div>
			</div> -->

		</div>
		</div> 
		
			<!-- TERMINA FAQ -->
    
    
    <!--contact start-->
    
    <div id="contact">
    	<div class="line5">					
			<div class="container">
				<div class="row Ama">
					<div class="col-md-12">
					<h3>¿Tus preguntas no fueron contestadas?</h3>
					<p>¡Aquí podemos ayudarte!</p>
					</div>
				</div>
			</div>
		</div>



		<!-- Formulario -->
	
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-xs-12 forma">
					<form  action="<?=base_url();?>index.php/dudas/guardar" method="post"  enctype="multipart/form-data">
						<input type="text" class="col-md-6 col-xs-12 name" name='nombre' id='nombre' placeholder='Nombre *' pattern="[A-Za-z]{5,30}" title="Ingresa solo letras. Ejemplo: PaolaTroncoso"required/>
						<input type="text" class="col-md-6 col-xs-12 Email" name='email' id='email' placeholder='Correo *' pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" title="Ejemplo: micorreo@gmail.com" required/>
						<input type="text" class="col-md-12 col-xs-12 Subject" name='asunto' id='asunto' placeholder='Asunto' pattern="[A-Za-z]{5,50}" title="Ingresa solo letras. Ejemplo: Dudas"required/>
						<textarea type="text" class="col-md-12 col-xs-12 Message" name='mensaje' id='mensaje' placeholder='Mensaje *'  required></textarea>
		
						<div class="cBtn col-xs-12">
							<ul>
								<!-- <li class="clear"><a href="#"><i class="fa fa-times"></i>Limpiar formulario</a></li> -->
							
								<button type="reset" class="btn btn-primary " onclick="demo.showNotification('top','right')">Limpiar formulario</button>
								
								
								<!--echo '<script language="javascript">alert("juas");</script>'; -->
								<button type="submit"class="btn btn-success" onclick="demo.showNotification2('top','right')">Enviar</button>
								
								
							<!--	<li class="send"><a type="submit"><i class="fa fa-share"></i>Enviar Mensaje</a></li> -->
							</ul>
						</div>
					</form>
				</div>

				
			<!-- Fin Formulario -->

			

				<div class="col-md-3 col-xs-12 cont">
					<ul>
						<li><i class="fa fa-home"></i>3ra privada de Moctezuma #6 Maravatío</li>
						<li><i class="fa fa-phone"></i>+01 447 103 6630</li>
					<!--	<li><a href="#"><i class="fa fa-envelope"></i>mail@compname.com</li></a> -->
						<li><a href="https://www.facebook.com/Innovasoff-2534923276535555/" target="_blank"><i class="fa fa-facebook-square"></i>Innovasoff</li></a>
					</ul>
				</div>
			</div>
		</div>
		<div class="line6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.6519755433674!2d-100.44963288577401!3d19.896912330826744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2d09bd62194bd%3A0xe06a6f2cc570572b!2s3ra%2C+Moctezuma+6%2C+Cristo+Rey%2C+61250+Maravatio%2C+Mich.!5e0!3m2!1ses-419!2smx!4v1552770623015" width="100%" height="700" frameborder="0" style="border:0"></iframe>		
		</div>