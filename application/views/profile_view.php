<body>
	<script src="<?=base_url();?>statics/js/profile.js"></script>
	<div class="row">
		<div class="large-12 small-12 small-centered large-centered columns">
			<fieldset class="">
				<legend>Mi perfil</legend>
				<form action='' method='post' name='process' accept-charset="utf-8" enctype="multipart/form-data">
					<div class="row">
						<div class="large-6 small-6 columns">
							<label for="" class="aviso"> Campos obligatorios (*)</label>
						</div>
						<div class="large-6 small-6 columns">
							<a href="#" class="button [tiny small large] right">Editar</a>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Nombre(s) <b class="aviso"> (*)</b>
									<input id="name" name="name" type="text" disabled="disabled"/>
								</label>
							</div>
							<div class="large-6 small-6 columns">
								<label>Apellidos <b class="aviso"> (*)</b>
									<input id="lastName" name="lastName" type="text" disabled="disabled"/>
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Telefono <b class="aviso"> (*)</b>
									<input id="phone" name="phone" type="text" disabled="disabled"/>
								</label>
							</div>
							<div class="large-6 small-6 columns">
								<label>Institución o universidad<b class="aviso"> (*)</b>
									<input id="institution"  name="institution" type="text" disabled="disabled"/>
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Correo eléctronico <b class="aviso"> (*)</b>
									<input id="email" type="text" disabled="disabled"/>
								</label>
							</div>
							<!-- <div class="large-6 small-6 columns">
								<label>Confirmar correo eléctronico<b class="aviso"> (*)</b>
									<input name="email" type="text" disabled="disabled"/>
								</label>
							</div> -->
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Nivel académico <b class="aviso"> (*)</b>
									<input id="academicGrade" name="academicGrade" type="text" disabled="disabled"/>
								</label>
							</div>
							<div class="large-6 small-6 columns">
								<label>Área de interes <b class="aviso"> (*)</b>
									<input id="areaInterest" name="areaInterest" type="text" disabled="disabled"/>
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Disciplina <b class="aviso"> (*)</b>
									<select name="iddiscipline" id="iddiscipline" disabled="disabled">
									</select>
								</label>
							</div>
							<div class="large-6 small-6 columns">
								<label>Subdisciplina <b class="aviso"> (*)</b>
									<select id="idsubDiscipline" name="idsubDiscipline" disabled="disabled">
										
									</select>
									
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Especialidad <b class="aviso"> (*)</b>
									<select name="idspecialism" id="idspecialism" disabled="disabled">
										
									</select>
								</label>
							</div>
							<div class="large-6 small-6 columns">
								<label>Nivel en el SNI  <b class="aviso"> (*)</b>
							        <select id="sniLevel" name="sniLevel" disabled="disabled">
							          <option value="1">Nivel 1</option>
							          <option value="2">Nivel 2</option>
							          <option value="3">Nivel 3</option>
							          <option value="4">Nivel 4</option>
							          <option value="5">Nivel 5</option>
							        </select>
							    </label>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-12 small-12 columns">
								<label>Títulos de los últimos 5 artículos<b class="aviso"> (*)</b>
									<textarea id="lastFiveArticles" name="lastFiveArticles" disabled="disabled"></textarea>
								</label>
							</div>
							<div class="large-12 small-12 columns">
								<label>Títulos de los últimos 5 proyectos de investigación<b class="aviso"> (*)</b>
									<textarea id="lastFiveResearch" name="lastFiveResearch" disabled="disabled"></textarea>
								</label>
							</div>
							<div class="large-12 small-12 columns">
								<label>Información relevante que considere 
									<textarea id="moreInformation" name="moreInformation" disabled="disabled"></textarea>
								</label>
							</div>
						</div>
					</div>
					<div class="row" style="display: none;">
						<div class="large-6 small-6 small-centered large-centered columns">
							<a href="#" class="button expand">Guardar</a>
						</div>
					</div>
				</form>
			</fieldset>
		</div>
	</div>

	<script>
		$(document).foundation();
	</script>
	
</body>
</html>