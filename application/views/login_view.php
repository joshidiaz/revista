<body>
	<script src="<?=base_url();?>statics/js/login.js"></script>
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
		<div class="large-6 small-6 small-centered large-centered columns spaceTop">
			<fieldset class="">
				<div id="aviso" class="large-12 small-12 columns" >
					<div data-alert class="alert-box warning" style="display: none;">
						
					</div>					
				</div>
				<div class="large-12 small-12 columns">
					<form id="login" action='<?=base_url();?>index.php/login_controller/userAuthenticate' method='post' name='process' accept-charset="utf-8" enctype="multipart/form-data">
						<div class="row">
							<div class="large-8 small-10 small-centered large-centered columns">
							    <input type="text" name="userName" placeholder="Usuario"  autofocus required>
							</div>
						</div>
						<div class="row">
							<div class="large-8 small-10 small-centered large-centered columns">
							    <input type="password" name="password" placeholder="Contraseña" required>
							</div>
						</div>
						<div class="row">
							<div class="large-8 small-10 small-centered large-centered columns">
								<input type="submit" class="button expand [tiny small large]" value="Ingresar">
							</div>
						</div>
						<div class="large-8 small-10 small-centered large-centered columns">
							<a class="right" href="<?=base_url();?>index.php/account_controller">Si no está registrado, registrese</a>
						</div>
					</form>
				</div>
			</fieldset>
		</div>
	</div>

	<script>
		$(document).foundation();
	</script>
	
</body>
</html>