﻿<html>
<head>
<meta charset="utf-8">
<title>index</title>
<link rel= "stylesheet" tipe= "text/css" href="css/default-2.css">
</head>
<body>
	<div class="corpo">
		<form class="form-fabrica" method="post">
			<div class="grupo">
				<div class="texto">Matriz/Filial:</div>
			</div>
			<div class="campos">
				<select name="tipo" id="tipo" class="selecao">
					<option value="matriz">Matriz</option>
					<option value="filial">Filial</option>
				</select>
                </div>
                <div class="grupo">
					<div class="texto">Codigo Fabrica:</div>
				</div>
            	<div class="campos">
                	<select name="tipo" id="tipo" class="selecao">
						<option value="exemplo1">exemplo 1</option>
						<option value="exemplo2">exemplo 2</option>
					</select>
                </div>
                <div class="grupo">
					<div class="texto">Tipo:</div>
				</div>
            	<div class="campos">
                	<select name="tipo" id="tipo" class="selecao">
						<option value="administrativo">Administrativo</option>
						<option value="producao">Produção</option>
					</select>
				<input type="submit" value="Salvar" class="btn-sub" />
				<input type="reset" value="Cancelar" class="btn-res" />
			</div>
		</form>
		<div id='expand'>
		</div>
	</div>
</body>
</html>