<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eliminar Usuarios</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>statics/foundation/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>statics/foundation/css/foundation.css">
	<script type="text/javascript" src="<?=base_url()?>statics/foundation/js/vendor/modernizr.js"></script>
	<script type="text/javascript" src="<?=base_url()?>statics/foundation/js/vendor/jquery.js"></script>
	<script type="text/javascript" src="<?=base_url()?>statics/foundation/js/foundation.min.js"></script>
</head>
<body>
	<script src="js/foundation/foundation.js"></script>
  	<script src="js/foundation/foundation.abide.js"></script>
  	<div class="row">
  		<div class="large-12 small-12">
  			<fieldset>
  				<legend>
					Eliminar Usuarios
				</legend><!-- 
				<?php echo '<pre>';
					print_r($usuarios);
				echo '</pre>'; ?> -->
				<ol>
					<?php foreach ($usuarios as $data): ?>
						<li><?=$data['username']?> <a href="<?=base_url()?>index.php/newcontroller/eliminarUsuario/<?=$data['idusuarios']?>">Eliminar </a></li>
					<?php endforeach ?>
<!-- 				<?php
					foreach ($usuarios as $data) {
						print_r($data['username'])   repasar arreglos , el acceso  
					}
				 ?> -->
				</ol>


  			</fieldeset>
  		</div>
  	</div>	


  	<script>
    	$(document).foundation();
  	</script>
</body>
</html>