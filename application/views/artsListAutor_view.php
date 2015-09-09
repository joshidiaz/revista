
<body>

	<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/foundation/dataTables.foundation.css">
	<script src="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/foundation/dataTables.foundation.js"></script>
	<script src="<?=base_url();?>statics/DataTables/media/js/jquery.js"></script>
	<script src="<?=base_url();?>statics/DataTables/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?=base_url();?>statics/js/articles.js"></script>
	<link rel="stylesheet" href="<?=base_url();?>statics/DataTables/media/css/jquery.dataTables.css">

	<div class="row">
		<div class="large-12 small-12 columns">
			<a href="<?=base_url();?>index.php/dashboard_controller/getEditor" target="datos2" class="button  [tiny small large] right">Agregar nuevo</a>
		</div>
	</div>
	<div class="row">
		<div id="" class="large-12 small-12 columns">
		<table id="articlesUser" class="display" cellspacing="0" width="100%">
			<thead>
	 				<tr>  
	 					<th>Nombre del artículo</th>
	 					<th>Revisión 1</th>
	 					<th>Revisión 2</th>
	 					<th>Estado</th>
	 				</tr>
			</thead>
			<tbody id="userArticles">

			</tbody>
		</table>
		</div>	
	</div>
</body>
</html>