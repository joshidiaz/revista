<body>
	<script type="text/javascript" src="<?=base_url();?>statics/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?=base_url();?>statics/js/articles.js"></script>
	<script type="text/javascript" src="<?=base_url();?>statics/foundation/js/foundation/foundation.js"></script>
  	<script type="text/javascript" src="<?=base_url();?>statics/foundation/js/foundation/foundation.abide.js"></script>
	
	<form data-abide action="<?=base_url();?>index.php/article_controller/setArticleAutor" method="post">
		<!-- ACA VA EL INPUT -->
		<div class="large-12 small-12 columns">
			<label for=""><h4>Título</h4>
				<input type="text" name="articleName" required>
			</label>
			<small class="error">El título del artículo es obligatorio</small>
		</div>
		<div class="large-12 small-12 columns topSpace10">
			
			<?php 
				echo $this->ckeditor->editor("articleBody","Escribe algo...");
			?>
		</div>

		<div class="large-12 small-12 columns topSpace10">
			<div class="large-6 small-6 columns">
				<a href="<?=base_url();?>index.php/dashboard_controller/getArtsListAutor" target="datos2" class="button  [tiny small large] ">Regresar</a>	
			</div>
			<div class="large-3 small-3 columns" >
				<input type="submit" value="Guardar" class="button  [tiny small large] ">	
			</div>
			<div class="large-3 small-3 columns">
				<a id="sendArticle" href="#" class="button [tiny small large]">Enviar</a>
			</div>
		</div>
	</form>
	<script>
   		$(document).foundation();
  	</script>
</body>
</html>