<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ventana_actulizar</title>
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
		<div class="large-12 small-12 columns">
			<fieldset>
				<legend>
					Actualizar Datos
				</legend>
				<?php echo '<pre>';
					print_r($datosusuario);
				echo '</pre>'; ?>
				<form data-abide action="<?=base_url()?>index.php/newcontroller/actualizarUsuario/<?=$datosusuario['idusuarios']?>" method="post" name="proces" accept-charset="utf-8">
					<div class="large-6 small-6 columns">
						<label for="">Nombre de Usuario</label>                   
						<input type="text" required name="username" value= "<?=$datosusuario['username']?>">
						 <small class="error"> Este Campo es Requerido</small>
					</div>
					<div class="large-6 small-6 columns">
						<label for="">Password</label>
						<input type="password" required name="password" value="<?=$datosusuario['password']?>">
						<small class="error"> Este Campo es Requerido</small>
					</div>
					<div class="large-12 small-12 columns">
						<input type="submit" class="button expand [tiny small large]" value="Actualizar">
						
						
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