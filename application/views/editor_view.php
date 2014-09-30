<body>
	<script type="text/javascript" src="<?=base_url();?>statics/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?=base_url();?>statics/ckfinder.js"></script>
	<?php 
		echo $this->ckeditor->editor("textarea name","Escribe algo...");
	?>
</body>
</html>