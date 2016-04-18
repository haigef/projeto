<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
    <script src="js/ajax_get.js"></script>
    <script src="js/ajax_post.js"></script>
<?php require'bd.php'; echo '
<link rel= "stylesheet" tipe= "text/css" href="css/default-2.css">
	<div class="corpo">
			<form class="form-fabrica" method="post">
			<div class="grupo">
				<div class="texto">Matriz/Filial:</div>
			</div>
			<div class="campos">
				<select name="tipo-fabrica" id="tipo" class="selecao">
					<option></option>
					<option value="matriz">Matriz</option>
					<option value="filial">Filial</option>
				</select>
			</div>
		</form>
		<div id="expand">
		</div>
	</div>
';
?>