<!-- Navigation -->
		
<?php require_once 'nav_define.php'; ?>
		<nav class="simpleList asideNavigation">
			<ul>
				<li class="active"><a href="<?php echo BASE_URL ?>index.php" title="#"><i class="zmdi zmdi-apps zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Panel de Control</span></a></li>
				
				

				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-border-color zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Formularios <i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
					<li><a href="<?php echo BASE_URL ?>mod_clientes/index.php" title="#">Registro de cliente </a></li>
					</li>
						 
					</ul>
				</li>


<li class="sub js-submenu">
					<div><i class="zmdi zmdi-tune zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Procesos <i class="zmdi zmdi-plus plus"></i></span></div>

					<ul>
							<li><a href="<?php echo BASE_URL ?>contactosNuevos.php" title="#">Contactos Nuevos<span  id="contactos_nuevos_total1" class="label label-info"></span></a>
							<li><a href="<?php echo BASE_URL ?>attClientes.php" title="Atencion al cliente">Att al cliente</a>
							<li><a href="<?php echo BASE_URL ?>seguimiento.php" title="#">Seguimientos</a>
						<li><a href="<?php echo BASE_URL ?>forms-cotizaciones.php" title="#">Cotizaciones online</a>
<li><a href="<?php echo BASE_URL ?>forms-fichas-opciones.php" title="#">Fichas de Opciones</a>
				<li><a href="<?php echo BASE_URL ?>forms-fichas-opciones-franquicias.php" title="#">F.D.O Franquicias</a>

<li><a href="<?php echo BASE_URL ?>mod_asig_fichas_exclusivas/index.php" title="#">Asig F Exclusivas</a>


				<!-- <li><a href="<?php// echo BASE_URL ?>documentos.php" title="#">Documentos</a>  -->
<li><a href="<?php echo BASE_URL ?>listado-whatsapp.php" title="#">Listado whatsapp</a>   

					<?php  if ($_SESSION['usuario']['Tipo'] == 'administrador') {?>


<li><a href="<?php echo BASE_URL ?>contactos_admon.php" title="Administracion de contactos">Admon Contactos</a>  
<li><a href="<?php echo BASE_URL ?>/mod_servicios/index.php" title="Servicios">Servicios</a>  	
<li><a href="<?php echo BASE_URL ?>/mod_documentos/index.php" title="Crear Documentos">Documentos<span   class="label label-info">Beta</span></a>  </li>	
<li><a href="<?php echo BASE_URL ?>/mod_facturacion/index.php" title="Servicios">Facturación</a>  						

						<?php } ?>

					</ul>
				</li>

	<li class="sub js-submenu">
					<div><i class="zmdi zmdi-tune zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Mi Gestión <i class="zmdi zmdi-plus plus"></i></span></div>

					<ul >
						<li><a href="<?php echo BASE_URL ?>reporte-clientes-usuario.php" title="Perfil del usuario">Mis clientes</a></li>
						<li><a target="" href="<?php echo BASE_URL ?>reporte-misseguimientos.php" title="Perfil del usuario">Mis seguimientos</a></li>
 

						 
					</ul>
				</li>




				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-chart zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Reportes <i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>

					<?php  if ($_SESSION['usuario']['Tipo'] == 'administrador') {

?>

					<li><a href="<?php echo BASE_URL ?>reporte-clientes.php" title="#">Clientes</a></li>
<li><a href="<?php echo BASE_URL ?>mod_clientes/reporte_clientes_status.php" title="#">Clientes por status</a></li>
<li><a href="<?php echo BASE_URL ?>mod_clientes/reporte_clientes_cartera.php" title="#">Clientes por cartera</a></li>
<li><a href="<?php echo BASE_URL ?>mod_clientes/reporte_clientes_procedencia.php" title="#">Clientes por procedencia</a></li>
<li><a href="<?php echo BASE_URL ?>mod_clientes/reporte_clientes_dias_transcurrido.php" title="#">Clientes por dias transcurrido</a></li>
			 
			<li><a href="<?php echo BASE_URL ?>reporte-seguimientos-abiertos.php" title="#">Seguimientos<span class="label label-danger">ABIERTO</span></a></li>
			<li><a href="<?php echo BASE_URL ?>rep-gestion.php" title="#">REP Gestion</a></li>
			<li><a href="<?php echo BASE_URL ?>rep-gestion2.php" title="#">REP Gestion 2</a></li>
			<li><a href="<?php echo BASE_URL ?>/mod_servicios/reporte.php" title="Servicios">Servicios</a>  	</li>
				<li><a href="<?php echo BASE_URL ?>/mod_facturacion/reporte.php" title="Servicios">Facturación</a>  	</li>

<?php } ?>

					<li><a href="<?php echo BASE_URL ?>reporte-cotizaciones.php" title="#">Cotizaciones</a></li>
						<li><a href="<?php echo BASE_URL ?>reporte-ficha-opciones.php" title="#">Ficha de opciones</a></li>
						<li><a href="<?php echo BASE_URL ?>reporte-ficha-opciones-exclusivas.php" title="#">Fichas Exclusivas</a></li>
						<li><a href="<?php echo BASE_URL ?>reporte-ficha-opciones-franquicias.php" title="#">F.D.O (Franquicias)</a></li>

<li><a href="<?php echo BASE_URL ?>reporte-ficha-opciones-franquicias-exclusivo.php" title="#">F.D.O Franquicias Ex</a></li>


<!-- <li><a href="reporte-fichas-opciones-pdf.php" title="#">Ficha de opciones Pdf</a></li> -->





						
					</ul>


				</li>






					<li class="sub js-submenu">
					<div><i class="zmdi zmdi-calendar-check zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Calendario VEN <i class="zmdi zmdi-plus plus"></i></span></div>
                 <ul>
					    <li><a href="<?php echo BASE_URL ?>mod_calendario/index.php" title="Perfil del usuario">Crear evento</a></li>
						<li><a href="<?php echo BASE_URL ?>mod_calendario/ver.php" title="Perfil del usuario">Ver Calendario</a></li>
 

						 
					</ul>

				</li>


						<li class="sub js-submenu">
					<div><i class="zmdi zmdi-calendar-check zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Calendario ESP<i class="zmdi zmdi-plus plus"></i></span></div>
                 <ul>
					    <li><a href="<?php echo BASE_URL ?>mod_calendario_esp/index.php" title="Perfil del usuario">Crear evento</a></li>
						<li><a href="<?php echo BASE_URL ?>mod_calendario_esp/ver.php" title="Perfil del usuario">Ver Calendario</a></li>
 

						 
					</ul>

				</li>
				
				
				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-playlist-plus zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Extras <i class="zmdi zmdi-plus plus"></i></span></div>

					<ul >
						<li><a href="<?php echo BASE_URL ?>user-profile.php" title="Perfil del usuario">Perfil del usuario</a></li>
						<li><a  href="documentos/preguntas-frecuentes.pdf" title="Perfil del usuario">Preguntas frecuentes</a></li>

							<li><a target="_blank" href="<?php echo BASE_URL ?>cumpleanos.php" title="Perfil del usuario">Cumpleaños</a></li>

						 
					</ul>
				</li>



<?php if ($_SESSION['usuario']['Tipo'] == 'administrador'): ?>
	



	<li class="sub js-submenu">
					<div><i class="zmdi zmdi-accounts-add zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Usuarios<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
<li><a href="<?php echo BASE_URL ?>mod_usuarios/index.php" title="Administracion de contactos">Nuevo</a> </li> 
<li><a href="<?php echo BASE_URL ?>mod_usuarios/reporte.php" title="Administracion de contactos">Ver</a> </li> 
	   <li class="sub js-submenu">
					<div class="sub-menu"><i class="zmdi zmdi-layers zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Categorias<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
<li><a href="<?php echo BASE_URL ?>mod_usuarios_cat/index.php" >Nuevo</a></li>
<li><a href="<?php echo BASE_URL ?>mod_usuarios_cat/reporte.php" >Ver</a></li>

			</ul>
			</li>	
			</ul>
			</li>	
<?php endif ?>





			</ul>
		</nav>
		