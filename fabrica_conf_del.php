<!--Recebe o Id_Fabrica por _GET para deletar o cadastro da matriz ou filial -->
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

mysql_select_db($database_conexao, $conexao);
$query_fabrica = sprintf("SELECT * FROM fabrica where Id_Fabrica = '%s'",$_GET['Id_Fabrica']);
$fabrica = mysql_query($query_fabrica, $conexao) or die(mysql_error());
$row_fabrica = mysql_fetch_assoc($fabrica);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Confirma&ccedil;&atilde;o para deletar</title>
<link rel= "stylesheet" tipe= "text/css" href="css/default-2.css">
</head>
<body>
	<div class="corpo">
		<form class="form" name="del" method="post" action="fabrica_cadastros.php">
			<div class="grupo">
				<div class="texto">C&oacute;digo:</div>
				<div class="texto">Descri&ccedil;&atilde;o:</div>
				<div class="texto">Tipo:</div>
			</div>
			<div class="campos">
				<!--somente esses campos precisam ser passados os valores pra frente -->
				<input type="text" name="Codigo_Fabrica" class="campo_input" value="<?php echo $row_fabrica['Codigo_Fabrica'];?>" readonly/>
				<input type="text" name="Descricao" class="campo_input" value="<?php echo $row_fabrica['Descricao'];?>" readonly/>
				<input type="text" name="Tipo" class="campo_input" value="<?php echo $row_fabrica['Tipo'];?>" readonly/>
				<input type="hidden" name="Conf" value="del" />
				<input type="hidden" name="Id_Fabrica" value="<?php echo $_GET['Id_Fabrica'];?>" />
				<!--<input type="hidden" name="Codigo_Alterador" value="<?php echo $_SESSION['Codigo_Alterador'];?>" /> -->
				<!--somente esses campos precisam ser passados os valores pra frente -->
				<div class="botoes">
					<input type="submit" value="Deletar" class="btn" />
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