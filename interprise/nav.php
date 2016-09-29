<!-- Navigation -->
		<nav class="simpleList asideNavigation">
			<ul>
				<li class="active"><a href="index.php" title="#"><i class="zmdi zmdi-apps zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Panel de Control</span></a></li>
				
				

				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-border-color zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Formularios <i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
					<li><a href="ficha-contacto.php" title="#">Registro de cliente </a></li>
					</li>
						 
					</ul>
				</li>


<li class="sub js-submenu">
					<div><i class="zmdi zmdi-tune zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Procesos <span class="label label-info">2</span><i class="zmdi zmdi-plus plus"></i></span></div>

					<ul>
							<li><a href="contactosNuevos.php" title="#">Contactos Nuevos<span  id="contactos_nuevos_total1" class="label label-info"></span></a>
							<li><a href="attClientes.php" title="Atencion al cliente">Att al cliente</a>
							<li><a href="seguimiento.php" title="#">Seguimientos</a>
						<li><a href="forms-cotizaciones.php" title="#">Cotizaciones online</a>
				<li><a href="forms-fichas-opciones.php" title="#">Fichas de Opciones</a>
				<li><a href="forms-fichas-opciones-franquicias.php" title="#">F.D.O Franquicias</a>
				<li><a href="documentos.php" title="#">Documentos</a>
<li><a href="listado-whatsapp.php" title="#">Listado whatsapp</a>  



					</ul>
				</li>

	<li class="sub js-submenu">
					<div><i class="zmdi zmdi-tune zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Mi Gestión <i class="zmdi zmdi-plus plus"></i></span></div>

					<ul >
						<li><a href="reporte-clientes-usuario.php" title="Perfil del usuario">Mis clientes</a></li>
						<li><a target="" href="reporte-misseguimientos.php" title="Perfil del usuario">Mis seguimientos</a></li>
 

						 
					</ul>
				</li>




				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-chart zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Reportes <span class="label label-info">New</span><i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>

					<?php  if ($_SESSION['usuario']['Tipo'] == 'administrador') {

?>

					<li><a href="reporte-clientes.php" title="#">Clientes</a></li>
			<li><a href="reporte-seguimientos-abiertos.php" title="#">Seguimientos<span class="label label-danger">ABIERTO</span></a></li>
			<li><a href="rep-gestion.php" title="#">REP Gestion</a></li>

<?php } ?>

					<li><a href="reporte-cotizaciones.php" title="#">Cotizaciones</a></li>
						<li><a href="reporte-ficha-opciones.php" title="#">Ficha de opciones</a></li>
						<li><a href="reporte-ficha-opciones-franquicias.php" title="#">F.D.O (Franquicias)</a></li>



<!-- <li><a href="reporte-fichas-opciones-pdf.php" title="#">Ficha de opciones Pdf</a></li> -->





						
					</ul>


				</li>






				<li><a href="calendario.php" title="#"><i class="zmdi zmdi-calendar-check zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Calendario <span class="label label-info">New</span></span></a></li>
				
				
				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-playlist-plus zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Extras <i class="zmdi zmdi-plus plus"></i></span></div>

					<ul >
						<li><a href="user-profile.php" title="Perfil del usuario">Perfil del usuario</a></li>
						<li><a target="_blank" href="documentos/preguntas-frecuentes.pdf" title="Perfil del usuario">Preguntas frecuentes</a></li>

							<li><a target="_blank" href="cumpleanos.php" title="Perfil del usuario">Cumpleaños</a></li>

						 
					</ul>
				</li>
			</ul>
		</nav>
		