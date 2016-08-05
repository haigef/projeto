<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro Matriz</title>
<link rel= "stylesheet" tipe= "text/css" href="css/default-2.css">
</head>
<body>
	<div class="corpo">
		<form class="form" name="matriz" method="post" action="fabrica_conf_add.php">
			<div class="grupo">
				<div class="texto">Descri&ccedil;&atilde;o:</div>
			</div>
			<div class="campos">
				<!--somente esses campos precisam ser passados os valores pra frente -->
				<input type="text" name="Descricao" class="campo_input" placeholder="Descri&ccedil;&atilde;o" required/>
				<input type="hidden" name="Tipo" value="Matriz" />
				<!--<input type="hidden" name="Codigo_Alterador" value="<?php echo $_SESSION['Codigo_Alterador'];?>" /> -->
				<!--somente esses campos precisam ser passados os valores pra frente -->
				<div class="botoes">
					<input type="submit" value="Continuar" class="btn" />
					<a href="fabrica_lista.php"><input type="button" value="Voltar" class="btn" /></a>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
<!--Envia os campos dentro dos outros comentarios para fabrica_conf_add.php -->