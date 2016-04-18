<?php require 'bd.php';?>
<link rel= "stylesheet" tipe= "text/css" href="css/default-2.css">
<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
    <script src="js/ajax_get.js"></script>
    <script src="js/ajax_post.js"></script>
<?php if (@$_POST['tipo'] == 'matriz') {
	echo '	<div class="corpo">
		<form class="form-fabrica" id="matriz" name="cliente" method="post" action="">
			<div class="grupo">
				<div class="texto">Descri&ccedil;&atilde;o:</div>
			</div>
			<div class="campos">
				<textarea name="descricaomatriz"></textarea>
			</div>
			<br>
			<div class="grupo">
				<div class="texto">Tipo:</div>
			</div>
			<div class="campos">
				<input type="number" min:"0" max:"10" name="tipomatriz"></input>
				<input type="submit" value="Salvar" class="btn-sub" />
				<input type="reset" value="Cancelar" class="btn-res" />
			</div>
		</form>
	</div>';
}else{
	echo '	<div class="corpo">
		<form class="form-fabrica" id="filial" name="cliente" method="post">
			<div class="grupo">
				<div class="texto">Descri&ccedil;&atilde;o:</div>
			</div>
			<div class="campos">
				<textarea></textarea>
			</div>
			<br>
			<div class="grupo">
				<div class="texto">Tipo:</div>
			</div>
			<div class="campos">
				<input type="number" min:"0" max:"10"></input>
				<input type="submit" value="Salvar" class="btn-sub" />
				<input type="reset" value="Cancelar" class="btn-res" />
			</div>
		</form>
	</div>';
}
?>