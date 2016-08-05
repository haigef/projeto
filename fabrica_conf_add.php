<!--Recebe os campos para cadastro de matriz e filial -->
<?php require_once('Connections/conexao.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if($_POST['Tipo'] == "Matriz"){
	mysql_select_db($database_conexao, $conexao);
	$query_fabrica = "SELECT * FROM fabrica where _delete = '0' and Tipo = 'Matriz' order by Codigo_Fabrica desc";
	$fabrica = mysql_query($query_fabrica, $conexao) or die(mysql_error());
	$row_fabrica = mysql_fetch_assoc($fabrica);
	$totalRows_fabrica = mysql_num_rows($fabrica);
	if($totalRows_fabrica >= '1'){
		$codmat = substr($row_fabrica['Codigo_Fabrica'],0,2);
		$codtemp = $codmat+1;
		if($codtemp <= 9){
			$codfab = '0'.$codtemp.'01';
		} else {
			$codfab = $codtemp.'01';
		}
	} else {
		$codfab = '0101';
	}
} else if($_POST['Tipo'] == "Filial"){
	mysql_select_db($database_conexao, $conexao);
	$query_fabrica = "SELECT * FROM fabrica where _delete = '0' and Codigo_Fabrica like '".$_POST['Matriz']."%' order by Codigo_Fabrica desc";
	$fabrica = mysql_query($query_fabrica, $conexao) or die(mysql_error());
	$row_fabrica = mysql_fetch_assoc($fabrica);
	$codfil = substr($row_fabrica['Codigo_Fabrica'],2,2);
	$codtemp = $codfil+1;
	if($codtemp <= 9){
		$codfab = $_POST['Matriz'].'0'.$codtemp;
	} else {
		$codfab = $_POST['Matriz'].$codtemp;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Confirma&ccedil;&atilde;o de Cadastro</title>
<link rel= "stylesheet" tipe= "text/css" href="css/default-2.css">
</head>
<body>
	<div class="corpo">
		<form class="form" name="add" method="post" action="fabrica_cadastros.php">
			<div class="grupo">
				<div class="texto">C&oacute;digo:</div>
				<div class="texto">Descri&ccedil;&atilde;o:</div>
				<div class="texto">Tipo:</div>
			</div>
			<div class="campos">
				<!--somente esses campos precisam ser passados os valores pra frente -->
				<input type="text" name="Codigo_Fabrica" class="campo_input" value="<?php echo $codfab;?>" readonly/>
				<input type="text" name="Descricao" class="campo_input" value="<?php echo $_POST['Descricao'];?>" readonly/>
				<input type="text" name="Tipo" class="campo_input" value="<?php echo $_POST['Tipo'];?>" readonly/>
				<input type="hidden" name="Conf" value="add" />
				<!--<input type="hidden" name="Codigo_Alterador" value="<?php echo $_POST['Codigo_Alterador'];?>" /> -->
				<!--somente esses campos precisam ser passados os valores pra frente -->
				<div class="botoes">
					<input type="submit" value="Confirmar" class="btn" />
					<a href="fabrica_lista.php"><input type="button" value="Voltar" class="btn" /></a>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
<?php
mysql_free_result($fabrica);
?>
<!--Envia os campos dentro dos outros comentarios para fabrica_cadastros.php -->