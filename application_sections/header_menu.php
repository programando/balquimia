<!--
     Estilos Css => Carpeta CSS => balk-menu.css
            **********  Menu  **********      -->

<div class="col-lg-12 col-md-12 col-sm-12">
    <div ><!-- Contenedor -->

						  <nav class="navbar   navbar-default " id="menu"><!-- Menu -->
						  <div class="container-fluid">

						    <div class="navbar-header">
						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>



						    </div>


						    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						    <!--- Campos de la pagina -->
						      <ul class="nav navbar-nav menu-ion">
										      	<a href="<?=BASE_URL ;?>index" class="text-center <?php if ($_SESSION["folderDirect"] == "index") echo "selection"; ?>">
										      			<li class=""><span class="inicio casa-inicio"></span>&nbsp; Inicio</li>
										      	</a>

																	<a class="text-center <?php if ($_SESSION["folderDirect"] == "nuestra_empresa") echo "selection"; ?>" href="<?=  BASE_URL ;?>empresa/nuestra_empresa">
																			<li class="">Nuestra<br>Empresa</li>
																	</a>

																	<a class="text-center <?php if ($_SESSION["folderDirect"] == "desarrollo_productos") echo "selection"; ?>" href="<?=  BASE_URL ;?>empresa/desarrollo_de_productos">
																			<li class="">Desarrollo<br>de Productos</li>
																	</a>

																	<a class="text-center <?php if ($_SESSION["folderDirect"] == "linea_productos") echo "selection"; ?>" href="<?=  BASE_URL ;?>productos/linea_de_productos">
																			<li class="">Productos<br>Industriales</li>
																	</a>

																	<a class="text-center <?php if ($_SESSION["folderDirect"] == "control_calidad") echo "selection"; ?>" href="<?=  BASE_URL ;?>empresa/contro_de_calidad">
																			<li class="">Control de<br>Calidad</li>
																	</a>
																	<a class="text-center <?php if ($_SESSION["folderDirect"] == "nuestro_servicios") echo "selection"; ?>" href="<?=  BASE_URL ;?>empresa/nuestros_servicios">
																			<li class="">Nuestros<br>Servicios</li>
																	</a>

																	<a class="text-center <?php if ($_SESSION["folderDirect"] == "nuestros_clientes") echo "selection"; ?>" href="<?=  BASE_URL ;?>empresa/nuestros_clientes">
																			<li class="">Nuestros<br>Clientes</li>
																	</a>

																	<li class="aTemp text-center">
																			Catálogos<br>por Línea

																			<ul>
																				<li><a href="<?=  BASE_STATIC_FILES ;?>Presentacion-linea-alimentaria-balquimia-2016.pdf">Alimentaria</a></li>
																				<li><a href="<?=  BASE_STATIC_FILES ;?>Presentacion-linea-automotriz-balquimia-2016.pdf"">Automotriz</a></li>
																				<li><a href="<?=  BASE_STATIC_FILES ;?>Presentacion-linea-hotelera-balquimia-2016.pdf"">Hotelera</a></li>
																				<li><a href="<?=  BASE_STATIC_FILES ;?>Presentacion-linea-industrial-balquimia-2016.pdf"">Industrial</a></li>
																				<li><a href="<?=  BASE_STATIC_FILES ;?>Presentacion-linea-materias-primas-balquimia.pdf"">Materias Primas</a></li>
																				<li><a href="<?=  BASE_STATIC_FILES ;?>Presentacion-linea-sanidad portatil-balquimia.pdf"">Sanidad Portátil</a></li>
																			</ul>
																	</li>


																	<a class="text-center <?php if ($_SESSION["folderDirect"] == "contactenos") echo "selection"; ?>" href="<?=  BASE_URL ;?>empresa/contactanos">
																			<li class="">Contáctenos</li>
																	</a>
						      </ul>
						     <!--- Campos de la pagina -->

						    </div>
						  </div>
						</nav><!-- Menu -->

    </div><!-- Contenedor -->
</div>


