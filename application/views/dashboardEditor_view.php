<body>
	<script src="<?=base_url();?>statics/foundation/js/foundation/foundation.js"></script>
	<script src="<?=base_url();?>statics/foundation/js/foundation/foundation.tab.js"></script>
	<script src="<?=base_url();?>statics/foundation/js/foundation/foundation.abide.js"></script>
	<script src="<?=base_url();?>statics/foundation/js/foundation/foundation.topbar.js"></script>

	<div class="row">
		<nav class="top-bar" data-topbar>
			<ul class="title-area">
				<li class="name">
					<h1><a href="#">Nombre de la revista</a></h1>
				</li> 
				<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone --> 
				<li class="toggle-topbar menu-icon">
					<a href="#"><span>Menu</span></a>
				</li>
			</ul>
			<section class="top-bar-section"> 
				<!-- Right Nav Section --> 
				<ul class="right"> 
					<li class="active"><a href="#">Right Button Active</a></li> 
					<li class="has-dropdown"> 
						<a href="#">Right Button Dropdown</a> 
						<ul class="dropdown"> 
							<li><a href="#">First link in dropdown</a></li> 
						</ul> 
					</li> 
				</ul> 
				<!-- Left Nav Section --> 
				<ul class="left"> 
					<li><a href="#">Left Nav Button</a></li> 
				</ul> 
			</section> 
		</nav>
	</div>
	
	<div class="row">
		<div class="large-12 small-12 columns topSpace10">
			<!-- Primera columna -->
			<div class="large-2 small-2	columns">
				<div class="row bordeGris">
					
				</div>
				<div id="espacio" class="row"></div>
				<!-- Menú con Tabs -->
				<div class="row">
					<dl class="tabs vertical" data-tab>
						<dd class="active"><a href="#panel1a">Perfil</a></dd>
						<dd><a href="#panel2a">Lista de Artículos</a></dd>
						<dd><a href="#panel3a">Lista de Arbitros</a></dd>
					</dl>
				</div>
			</div>
			<!-- Segunda columna -->
			<div id="contenedor" class="large-10 small-10 columns ">
				<div class="row">
					<!-- Contenido de cada Tab Perfil-->
					<div class="tabs-content vertical">
						<!-- Contenido del Tab  -->
						<div class="content active" id="panel1a">
							<div class="row">
								
									<iframe name="datos" width="120%" height="1000px" scrolling="no" id="datos" frameborder="0" src="<?=base_url();?>index.php/dashboardEditor_controller/getProfile"></iframe>
								
							</div>
						</div>
						<!-- Contenido del Tab Artículos -->
						<div class="content" id="panel2a">
							<div class="row">
								<div id="" class="large-12 columns">
									<iframe name="datos2" width="130%" height="1000px" scrolling="no" id="datos2" frameborder="0" src="<?=base_url();?>index.php/dashboardEditor_controller/getArtsList"></iframe>
								</div>
							</div>
						</div>
						<div class="content" id="panel3a">
							<div class="row">
								<div id="" class="large-12 columns">
									<iframe name="datos3" width="130%" height="1000px" scrolling="no" id="datos3" frameborder="0" src="<?=base_url();?>index.php/dashboardEditor_controller/getModeratorList"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>					
			</div>			
		</div>
	</div>
	<script>
		$(document).foundation();
	</script>
</body>
</html>