<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

// $cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
// $cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php //echo $this->Html->charset(); ?>
	<!--<title>
		<?php // echo $cakeDescription ?>:
		<?php // echo $this->fetch('title'); ?>
	</title>-->
	<?php
		/*echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		*/
	?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>GIS</title>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <link href="img/strata.ico" type="image/x-icon" rel="icon">
    <link href="img/strata.ico" type="image/x-icon" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="app/webroot/lib/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="app/webroot/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app/webroot/lib/bootstrap-select2/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="app/webroot/lib/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="app/webroot/lib/bootstrap-duallistbox/src/bootstrap-duallistbox.css">
    <link rel="stylesheet" type="text/css" href="app/webroot/lib/sidera/sidera.css">
    <link rel="stylesheet" type="text/css" href="app/webroot/lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="app/appProyecto/webroot/appProyecto.css">
	<link rel="stylesheet" type="text/css" href="app/webroot/lib/simplePagination/simplePagination.css">
    <link rel="stylesheet" type="text/css" href="app/webroot/lib/elfinder/css/elfinder.min.css">
    <link rel="stylesheet" type="text/css" href="app/webroot/lib/elfinder/css/theme.css">
    <script type="text/javascript" src="app/webroot/lib/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="app/webroot/lib/jquery/jquery.form.min.js"></script>
    <script type="text/javascript" src="app/webroot/lib/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="app/webroot/lib/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="app/webroot/lib/jquery-validation/localization/messages_es.js"></script>
    <script type="text/javascript" src="app/webroot/lib/jquery-ui-touch-punch/jquery-ui-touch-punch.min.js"></script>
    <script type="text/javascript" src="app/webroot/lib/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
    <script type="text/javascript" src="app/webroot/lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="app/webroot/lib/bootstrap-select2/js/bootstrap-select.js"></script>
    <script type="text/javascript" src="app/webroot/lib/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="app/webroot/lib/moment/moment.js"></script>
    <script type="text/javascript" src="app/webroot/lib/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="app/webroot/lib/bootstrap-duallistbox/src/jquery.bootstrap-duallistbox.js"></script>
    <script type="text/javascript" src="app/webroot/lib/simplePagination/simplePagination.js"></script>
    <script type="text/javascript" src="app/webroot/lib/sidera/sidera.js"></script>
    <script type="text/javascript" src="app/appProyecto/webroot/appProyecto.js"></script>
    <script type="text/javascript" src="app/appProyecto/webroot/appValidaciones.js"></script>
    <script type="text/javascript" src="app/webroot/lib/jquery-highlight/jquery-highlight1.js"></script>
    <script type="text/javascript" src="app/webroot/lib/elfinder/js/elfinder.min.js"></script>
    <script type="text/javascript" src="app/webroot/lib/elfinder/js/i18n/elfinder.es.js"></script>
</head>
<body>

<div id="cabeceraConfig" class="row navbar navbar-default navbar-fixed-top">
		<div id="tituloConfig" class="col-md-5 col-sm-5 col-xs-1 navbar-left navbar-header">
			<span class="hidden-xs fa-cog fa fa-lg btn text-warning" aria-hidden="true" href="#"></span>
			<span class="text-warning hidden-xs">Configurar Vista</span>
		</div>
		<div id="menuCabeceraConfigDerecha" class="col-md-3 col-sm-7 col-xs-12 navbar-right navbar-collapse">
			<span id="menu_parte_superior-derecha-config">
				<ul class="nav navbar-nav">
					<li class="dropdown pull-right" title="Guardar Cambios">
						<a id="botonGuardarConfig" data-toggle="tab" href class="text-success">
							<i class="fa fa-lg fa-check-circle"></i>
						</a>
					</li>
					<li class="dropdown pull-right" title="Salir sin guardar cambios">
						<a id="botonCancelarConfig" data-toggle="tab" href class="text-danger">
							<i class="fa fa-lg fa-times-circle"></i>
						</a>
					</li>
					<li class="dropdown pull-right" title="Recuperar la última copia de seguridad de la vista">
						<a id="botonRecuperarCopiaSeguridad" data-toggle="tab" href class="text-warning">
							<i class="fa fa-lg fa-arrow-circle-left"></i>
						</a>
					</li>
					<li class="dropdown pull-right" ayuda-config title="Mostrar Ayuda">
						<a id="botonAyudaConfig" data-toggle="popover" data-placement="bottom" title data-content data-original-title="Configurar Vista" class="fa fa-lg fa-info-circle"></a>
					</li>
				</ul>
			</span>
		</div>
	</div>
	<script type="text/javascript">
		$('#botonAyudaConfig').popover({
			html: true
		});
	</script>
	<div id="cabeceraTituloApp" class="row jumbotron navbar-fixed-top">
		<div id="tituloApp" class="col-md-12" onclick="location.reload();">GIS</div>
	</div>
	<div id="cabeceraApp" class="row navbar  navbar-default navbar-fixed-top">
		<span id="tituloMenuModulo" class="tituloModulo hidden-sm hidden-md hidden-lg hidden-xl"></span>
		<div id="menuResponsive" class="navbar-right navbar-header">
			<span id="menuResponsiveCabeceraApp">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuCabecera" aria-expanded="false" style="margin-right: 27px;">
					<span class="fa fa-user fa-lg"></span>
				</button>
				<button type="button" class="navbar-toggle collapsed" id="botonMenuLateral" data-toggle="collapse" data-target="#menuCabecera" aria-expanded="false" style="margin-right: 27px;">
					<span class="fa fa-navicon fa-lg"></span>
				</button>
			</span>
		</div>
		<div id="menuCabecera" class=" col-md-4 col-xs-12 collapse navbar-collapse">
			<span id="menu_parte_superior">
				<ul class="nav navbar-nav">
					<li class="dropdown" data-menu="220">
						<a href="#" data-toggle="dropdown" onclick="$('#tituloMenuModulo').html('Recursos Humanos')">
							<i class="fa fa fa-users masPequeño"></i>
							Recursos Humanos
							<span class="fa fa-caret-down"></span>
						</a>
						<ul class="dropdown-menu">
							<li class="dropdown-submenu" data-menu="138">
								<a href="personals" onclick="$('#tituloMenuModulo').html('Personal')">
									<i class="fa fa fa-users masPequeño"></i>
									Personal
								</a>
							</li>
							<li class="dropdown-submenu" data-menu="43">
								<a href="vestuarios" onclick="$('#tituloMenuModulo').html('Vestuario')">
									<i class="fa fa fa-star masPequeño"></i>
									Vestuario
								</a>
							</li>
							<li class="dropdown-submenu" data-menu="45">
								<a href="entregas" onclick="$('#tituloMenuModulo').html('Entregas')">
									<i class="fa fa fa-send masPequeño"></i>
									Entregas
								</a>
							</li>
							<li class="dropdown-submenu" data-menu="84">
								<a href="tallas" onclick="$('#tituloMenuModulo').html('Tallas')">
									<i class="fa fa fa-text-height masPequeño"></i>
									Tallas
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</span>
		</div>
		<div id="menuSuperiorDerecha" class="col-md-3 col-xs-12 navbar-right collapse navbar-collapse">
			<span class>
				<ul id="menuSuperiorDerechaL0" class="dropdown nav navbar-nav">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-user fa-lg" title="Usuario"></i>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a onclick="$('#cuerpoApp').load('usuarios/perfil')" title="Mi Perfil">
									<i class="fa fa-user-circle-o" title="Usuario"></i>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a onclick="$('#cuerpoApp').load('avisos/index')" title="Avisos" href="#">
									<i class="fa fa-exclamation-triangle" title="Usuario"></i>
									<span class="badge pull-right" id="numeroDeAvisosUsuario"></span>
									Avisos
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="usuarios/logout" class>
									<i class="fa fa-power-off"></i>
									Salir
								</a>
							</li>
						</ul>
					</li>
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa fa-list-alt fa-lg" title="Desarrollo Web"></i>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a id="botonMejoras">
									<i class="fa fa fa-list-alt fa-lg" title="Mejoras"></i>
									Mejoras
								</a>
							</li>
							<script type="text/javascript" id="myScript">
								$("#botonMejoras").click(
									function(event) {
										event.preventDefault();
										$("#cuerpoApp").load('./vmejoras/index/', {
											accionBusqueda: 'eliminarBusqueda',
											accionSobreCamposBusqueda: 'eliminarCamposBusqueda',
											accionFiltro: 'eliminarFiltro'
										});
									}
								);
							</script>
						</ul>
					</li>
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-folder-open fa-lg" title="Carpetas"></i>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a id="elementoContenidoPublico">
									<i class="fa fa-folder-open fa-lg" title="Carpeta Pública"></i>
									Carpeta Pública
								</a>
							</li>
							<script type="text/javascript" id="myScript">
								$("#elementoContenidoPublico").click(
									function(event) {
										event.preventDefault();
										$("#cuerpoApp").append('<div id="elfinderplantaDiv"></div>');
										$.ajax({
											url: 'vistapresupuestoshormigones/cargarFormModal/',
											async: true,
											type: "POST",
											cache: false,
											data: {
												tipo_modal: 'elfinderModalPublico'
											},
											success: function(data) {
												$("#elfinderplantaDiv").html(data);
												$("#elfinderplantaDialog").modal('show');
											}
										});
									}
								);
							</script>
							<li>
								<a id="elementoContenidoTecnico">
									<i class="fa fa-folder-open fa-lg" title="Carpeta Técnicos"></i>
									Carpeta Técnicos
								</a>
							</li>
							<script type="text/javascript" id="myScript">
								$("#elementoContenidoTecnico").click(
									function(event) {
										event.preventDefault();
										$("#cuerpoApp").append('<div id="elfinderplantaDiv"></div>');
										$.ajax({
											url: 'vistapresupuestoshormigones/cargarFormModal/',
											async: true,
											type: "POST",
											cache: false,
											data: {
												tipo_modal: 'elfinderModalTecnico'
											},
											success: function(data) {
												$("#elfinderplantaDiv").html(data);
												$("#elfinderplantaDialog").modal('show');
											}
										});
									}
								);
							</script>
						</ul>
					</li>
				</ul>
			</span>
		</div>
	</div>
	<div id="container">
		<div id="header">
			<h1><?php //echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php /* echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				); */
			?>
			<p>
				<?php // echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php // echo $this->element('sql_dump'); ?>
</body>
</html>
