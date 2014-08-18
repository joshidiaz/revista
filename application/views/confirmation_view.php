<body>
	<script type="text/javascript">
	if(window.history.forward(1) != null)
		window.history.forward(1);
	</script>
	<body>
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
		<div class="large-10 small-10 small-centered large-centered columns">
			<fieldset>
				<div class="row">
					<div class="large-12 small-12 columns">
						<div data-alert class="alert-box success radius">
							<h5>
								<p style="color:white;">En breve recibirá un correo electrónico, en el cual recibirá su usuario y contraseña 
							asignados. Por favor revise su bandeja de entrada del correo eletónico proporcionado en su registro.</p>
							</h5>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-3 small-5 small-centered large-centered columns">
						<a href="<?=base_url();?>index.php/login_controller" class="button">Ir al inicio</a>
					</div>
				</div>
			</fieldset>
		</div>
	</div>

	<script>
		$(document).foundation();
	</script>
	
</body>
</html>