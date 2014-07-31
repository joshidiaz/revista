
<body>
	<script src="<?=base_url();?>statics/foundation/js/foundation/foundation.js"></script>
  	<script src="<?=base_url();?>statics/foundation/js/foundation/foundation.abide.js"></script>
	<div class="row">
		<!-- Esto es el codigo del top bar --> 
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
		<!-- Termina el codigo del top bar --> 
	</div>
	<div class="row">
		<div class="large-12 small-12 small-centered large-centered columns">
			<fieldset class="">
				<legend>Registro de autor</legend>
				<form data-abide action='<?=base_url();?>index.php/account_controller/setUser' method='post' name='process' accept-charset="utf-8" enctype="multipart/form-data">
					<div class="row">
						<div class="large-12 small-12 columns">
							<label for="" class="aviso"> Campos obligatorios (*)</label>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Nombre(s) <b class="aviso"> (*)</b>
									<input name="name" type="text" required/>
								</label>
								<small class="error">El nombre es obligatorio.</small>
							</div>
							<div class="large-6 small-6 columns">
								<label>Apellidos <b class="aviso"> (*)</b>
									<input name="lastName" type="text" required/>
								</label>
								<small class="error">Los apellidos son obligatorios.</small>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Telefono <b class="aviso"> (*)</b>
									<input name="phone" type="text" required/>
								</label>
								<small class="error">El telefono es obligatorio.</small>
							</div>
							<div class="large-6 small-6 columns">
								<label>Institución o universidad<b class="aviso"> (*)</b>
									<input name="institution" type="text" required/>
								</label>
								<small class="error">La institución es obligatoria.</small>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Correo eléctronico <b class="aviso"> (*)</b>
									<input  type="text" required/>
								</label>
								<small class="error">El correo electronico es obligatorio.</small>
							</div>
							<div class="large-6 small-6 columns">
								<label>Confirmar correo eléctronico<b class="aviso"> (*)</b>
									<input name="email" type="text" required/>
								</label>
								<small class="error">La confirmación del correo es obligatorio.</small>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Nivel académico <b class="aviso"> (*)</b>
									<input name="academicGrade" type="text" required/>
								</label>
								<small class="error">El nivel academico es obligatorio.</small>
							</div>
							<div class="large-6 small-6 columns">
								<label>Área de interes <b class="aviso"> (*)</b>
									<input name="areaInterest" type="text" required/>
								</label>
								<small class="error">El área de interes es obligatorio.</small>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Disciplina <b class="aviso"> (*)</b>
									<select name="iddisipline" id="disiplineName" required>
										
									</select>
								</label>
								<small class="error">La disciplina es obligatoria.</small>
							</div>
							<div class="large-6 small-6 columns">
								<label>Subdisciplina <b class="aviso"> (*)</b>
									<select name="idspecialism" id="subdisiplineName" required>
										
									</select>
								</label>
								<small class="error">La subdisciplina es obligatorio.</small>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Especialidad <b class="aviso"> (*)</b>
									<select name="idsubDiscipline" id="specialismName" required>
										
									</select>
								</label>
								<small class="error">La especialidad es obligatorio.</small>
							</div>
							<div class="large-6 small-6 columns">
								<label>Nivel en el SNI  <b class="aviso"> (*)</b>
							        <select name="sniLevel" required>
							          <option value="">Selecione un nivel</option>
							          <option value="1">Nivel 1</option>
							          <option value="2">Nivel 2</option>
							          <option value="3">Nivel 3</option>
							          <option value="4">Nivel 4</option>
							          <option value="5">Nivel 5</option>
							        </select>
							    </label>
							    <small class="error">Este campo es obligatorio.</small>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-12 small-12 columns">
								<label>Títulos de los últimos 5 artículos<b class="aviso"> (*)</b>
									<textarea name="lastFiveArticles" required></textarea>
								</label>
								<small class="error">Este campo es obligatorio.</small>
							</div>
							<div class="large-12 small-12 columns">
								<label>Títulos de los últimos 5 proyectos de investigación<b class="aviso"> (*)</b>
									<textarea name="lastFiveResearch" required></textarea>
								</label>
								<small class="error">Este campo es obligatorio.</small>
							</div>
							<div class="large-12 small-12 columns">
								<label>Información relevante que considere 
									<textarea name="moreInformation"></textarea>
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-6 small-6 small-centered large-centered columns">
							<!-- <a href="#" class="button expand">Enviar</a> -->
							<input type="submit" class="button expand" value="Enviar">
						</div>
					</div>
				</form>
				<div id="aviso" class="large-12 columms"></div>
			</fieldset>
		</div>
	</div>

	<script>
		$(document).foundation();
	</script>
	
</body>
</html>