<body>
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
									<input name="name" type="text" />
								</label>
							</div>
							<div class="large-6 small-6 columns">
								<label>Apellidos <b class="aviso"> (*)</b>
									<input name="lastName" type="text" />
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Telefono <b class="aviso"> (*)</b>
									<input name="phone" type="text" />
								</label>
							</div>
							<div class="large-6 small-6 columns">
								<label>Institución o universidad<b class="aviso"> (*)</b>
									<input name="institution" type="text" />
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Correo eléctronico <b class="aviso"> (*)</b>
									<input  type="text" />
								</label>
							</div>
							<div class="large-6 small-6 columns">
								<label>Confirmar correo eléctronico<b class="aviso"> (*)</b>
									<input name="email" type="text" />
								</label>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Nivel académico <b class="aviso"> (*)</b>
									<input name="academicGrade" type="text" />
								</label>
							</div>
							<div class="large-6 small-6 columns">
								<label>Área de interes <b class="aviso"> (*)</b>
									<input name="areaInterest" type="text" />
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Disciplina <b class="aviso"> (*)</b>
									<input name="disiplineName" type="text" />
								</label>
							</div>
							<div class="large-6 small-6 columns">
								<label>Subdisciplina <b class="aviso"> (*)</b>
									<input name="subdisiplineName" type="text" />
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="large-6 small-6 columns">
								<label>Especialidad <b class="aviso"> (*)</b>
									<input name="specialismName" type="text" />
								</label>
							</div>
							<div class="large-6 small-6 columns">
								<label>Nivel en el SNI  <b class="aviso"> (*)</b>
							        <select>
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
									<textarea name="lastFiveArticles"></textarea>
								</label>
							</div>
							<div class="large-12 small-12 columns">
								<label>Títulos de los últimos 5 proyectos de investigación<b class="aviso"> (*)</b>
									<textarea name="lastFiveResearch"></textarea>
								</label>
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