<?php echo ('
<html>
<head>
<meta charset="utf-8">
<title>index</title>
<link rel= "stylesheet" tipe= "text/css" href="css/default-2.css">
</head>
<body>
	<div class="corpo">
		<form class="form-fabrica" name="cliente" method="post" action="cadastraFabrica.php">
			<div class="grupo">
				<div class="texto">Descri&ccedil;&atilde;o:</div>
			</div>
			<div class="campos">
				<textarea>'); echo (''.$_POST["tipo"].''); echo ('</textarea>
				<input type="submit" value="Salvar" class="btn-sub" />
				<input type="reset" value="Cancelar" class="btn-res" />
			</div>
		</form>
	</div>
</body>
</html>
');

echo "".$_POST['tipo']."";

?>