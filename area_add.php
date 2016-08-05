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
$query_fabrica = "SELECT * FROM fabrica where _delete = '0' order by Codigo_Fabrica";
$fabrica = mysql_query($query_fabrica, $conexao) or die(mysql_error());
$row_fabrica = mysql_fetch_assoc($fabrica);
$totalRows_fabrica = mysql_num_rows($fabrica);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastrar area</title>
<link rel= "stylesheet" tipe= "text/css" href="css/default-2.css">
</head>
<body>
	<div class="corpo">
		<form class="form" name="area" method="post" action="area_conf_add.php">
			<div class="grupo">
				<div class="texto">F&aacute;brica:</div>
				<div class="texto">Descri&ccedil;&atilde;o:</div>
				<div class="texto">Tipo de Area</div>
			</div>
			<div class="campos">
				<!--somente esses campos precisam ser passados os valores pra frente -->
				<select name="Id_Fabrica" class="selecao">
				<?php do { ?>
					<option value="<?php echo $row_fabrica['Id_Fabrica'];?>"><?php echo $row_fabrica['Codigo_Fabrica'].": ".$row_fabrica['Descricao'];?></option>
				<?php } while ($row_fabrica = mysql_fetch_assoc($fabrica)); ?>
				</select>
				<input type="text" name="Descricao" class="campo_input" placeholder="Descri&ccedil;&atilde;o" required/>
				<select name="Tipo" class="selecao">
					<option value="1">Administrativo</option>
					<option value="2">Produ&ccedil;&atilde;o</option>
					<option value="3">Transporte</option>
				</select>
				<!--<input type="hidden" name="Codigo_Alterador" value="<?php echo $_SESSION['Codigo_Alterador'];?>" /> -->
				<!--somente esses campos precisam ser passados os valores pra frente -->
				<div class="botoes">
					<input type="submit" value="Continuar" class="btn" />
					<a href="area_lista.php"><input type="button" value="Voltar" class="btn" /></a>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
<?php
mysql_free_result($fabrica);
?>
<!--Envia os campos dentro dos outros comentarios para area_conf_add.php -->