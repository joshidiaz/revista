<body>
	<script src="<?=base_url();?>statics/js/profile.js"></script>
	<div class="row">
		<div class="large-12 small-12 small-centered large-centered columns">
			<fieldset class="">
				<legend>Mi perfil</legend>
				<form  id="profileForm" data-abide action='<?=base_url();?>index.php/account_controller/updateUser' method='post' name='process' accept-charset="utf-8" enctype="multipart/form-data">
					<div class="row">
						<div class="large-6 small-6 columns">
							<label for="" class="aviso"> Campos obligatorios (*)</label>
						</div>
						<div id="actionBttn" class="large-6 small-6 columns">
							<a id="edit" class="button [tiny small large] right">Editar</a>
							<a id="cancel" style="display: none;" class="button [tiny small large] right">Cancelar</a>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Nombre(s) <b class="aviso"> (*)</b>
									<input id="name" name="name" type="text" disabled="disabled" pattern="alpha" required/>
								</label>
								<small class="error">El nombre es obligatorio y debe contener únicamente letras.</small>
							</div>
							<div class="large-6 small-6 columns">
								<label>Apellidos <b class="aviso"> (*)</b>
									<input id="lastName" name="lastName" type="text" disabled="disabled" pattern="alpha" required/>
									<small class="error">Los apellidos son obligatorios y debe contener únicamente letras.</small>
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Telefono <b class="aviso"> (*)</b>
									<input id="phone" name="phone" type="text" disabled="disabled" pattern="number" required/>
								</label>
								<small class="error">El teléfono es obligatorio y debe contener únicamente numeros.</small>
							</div>
							<div class="large-6 small-6 columns">
								<label>Institución o universidad<b class="aviso"> (*)</b>
									<input id="institution"  name="institution" type="text" disabled="disabled" required/>
								</label>
								<small class="error">La institución es obligatoria.</small>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Correo eléctronico <b class="aviso"> (*)</b>
									<input id="email" type="email" disabled="disabled" patter="email" required/>
								</label>
								<small class="error">El correo electrónico es obligatorio.</small>
							</div>
							<div id="vEmail" style="display: none;" class="large-6 small-6 columns">
								<label>Confirmar correo eléctronico<b class="aviso"> (*)</b>
									<input id="email2" name="email" type="email"  data-equalto="email" patter="email"  required/>
								</label>
								<small class="error">Los correos eletrónicos no coinciden.</small>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Nivel académico <b class="aviso"> (*)</b>
									<input id="academicGrade" name="academicGrade" type="text" disabled="disabled" pattern="alpha_numeric" required/>
								</label>
								<small class="error">El nivel académico es obligatorio.</small>
							</div>
							<div class="large-6 small-6 columns">
								<label>Área de interes <b class="aviso"> (*)</b>
									<input id="areaInterest" name="areaInterest" type="text" disabled="disabled" required/>
								</label>
								<small class="error">El área de interés es obligatorio.</small>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Disciplina <b class="aviso"> (*)</b>
									<select name="iddiscipline" id="iddiscipline" disabled="disabled" required>
									</select>
									<small class="error">La disciplina es obligatoria.</small>
								</label>
							</div>
							<div class="large-6 small-6 columns">
								<label>Subdisciplina <b class="aviso"> (*)</b>
									<select id="idsubDiscipline" name="idsubDiscipline" disabled="disabled" required>
									</select>
									<small class="error">La subdisciplina es obligatorio.</small>
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Especialidad <b class="aviso"> (*)</b>
									<select name="idspecialism" id="idspecialism" disabled="disabled" required>
									</select>
									<small class="error">La especialidad es obligatorio.</small>
								</label>
							</div>
							<div class="large-6 small-6 columns">
								<label>Nivel en el SNI  <b class="aviso"> (*)</b>
							        <select id="sniLevel" name="sniLevel" disabled="disabled" required>
							          <option value="1">Nivel 1</option>
							          <option value="2">Nivel 2</option>
							          <option value="3">Nivel 3</option>
							          <option value="4">Nivel 4</option>
							          <option value="5">Nivel 5</option>
							        </select>
							        <small class="error">Este campo es obligatorio.</small>
							    </label>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-12 small-12 columns">
								<label>Títulos de los últimos 5 artículos<b class="aviso"> (*)</b>
									<textarea id="lastFiveArticles" name="lastFiveArticles" disabled="disabled" required></textarea>
								</label>
								<small class="error">Este campo es obligatorio.</small>
							</div>
							<div class="large-12 small-12 columns">
								<label>Títulos de los últimos 5 proyectos de investigación<b class="aviso"> (*)</b>
									<textarea id="lastFiveResearch" name="lastFiveResearch" disabled="disabled" required></textarea>
								</label>
								<small class="error">Este campo es obligatorio.</small>
							</div>
							<div class="large-12 small-12 columns">
								<label>Información relevante que considere 
									<textarea id="moreInformation" name="moreInformation" disabled="disabled"></textarea>
								</label>
							</div>
						</div>
					</div>
					<div id="bttnSave" class="row" style="display: none;">
						<div class="large-6 small-6 small-centered large-centered columns">
							<input type="submit" class="button expand" value="Guardar cambios"> 
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