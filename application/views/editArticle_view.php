<body>
	<script type="text/javascript" src="<?=base_url();?>statics/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?=base_url();?>statics/js/articles.js"></script>
	
	<form action="<?=base_url();?>index.php/autor_controller/updateArticle/<?=$article['idarticle']?>" method="post">
		<!-- ACA VA EL INPUT -->
		<input id="idarticle" type="hidden" value="<?=$article['idarticle']?>"> 
		<div class="large-12 small-12 columns">
			<label for=""><h4>Título</h4>
				<input type="text" name="articleName" value="<?=$article['articleName']?>">
			</label>
		</div>
		<div class="large-12 small-12 columns topSpace10">
			<?php 
				echo $this->ckeditor->editor("articleBody",$article['articleBody']);
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
				<a id="sendArticle" class="button [tiny small large]">Enviar</a>	
			</div>
		</div>
	</form>
</body>
</html>