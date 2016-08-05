<!--Recebe via _GET o Codigo_Areas a ser editado -->
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
$query_area = "SELECT * FROM areas where Codigo_Areas = '".$_GET['Codigo_Areas']."'";
$area = mysql_query($query_area, $conexao) or die(mysql_error());
$row_area = mysql_fetch_assoc($area);
$totalRows_area = mysql_num_rows($area);

mysql_select_db($database_conexao, $conexao);
$query_fabrica = "SELECT * FROM fabrica where Id_Fabrica = '".$row_area['Id_Fabrica']."'";
$fabrica = mysql_query($query_fabrica, $conexao) or die(mysql_error());
$row_fabrica = mysql_fetch_assoc($fabrica);
$totalRows_fabrica = mysql_num_rows($fabrica);

mysql_select_db($database_conexao, $conexao);
$query_fabricas = "SELECT * FROM fabrica where _delete = '0' AND Id_Fabrica != '".$row_area['Id_Fabrica']."' order by Codigo_Fabrica";
$fabricas = mysql_query($query_fabricas, $conexao) or die(mysql_error());
$row_fabricas = mysql_fetch_assoc($fabricas);
$totalRows_fabricas = mysql_num_rows($fabricas);
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
		<form class="form" name="area" method="post" action="area_conf_edit.php">
			<div class="grupo">
				<div class="texto">F&aacute;brica:</div>
				<div class="texto">Descri&ccedil;&atilde;o:</div>
				<div class="texto">Tipo de Area</div>
			</div>
			<div class="campos">
				<!--somente esses campos precisam ser passados os valores pra frente -->
				<select name="Id_Fabrica" class="selecao">
					<option value="<?php echo $row_fabrica['Id_Fabrica'];?>" selected><?php echo $row_fabrica['Codigo_Fabrica'].": ".$row_fabrica['Descricao'];?></option>
				<?php if($totalRows_fabricas >= 1){do { ?>
					<option value="<?php echo $row_fabricas['Id_Fabrica'];?>"><?php echo $row_fabricas['Codigo_Fabrica'].": ".$row_fabricas['Descricao'];?></option>
				<?php } while ($row_fabricas = mysql_fetch_assoc($fabricas));}?>
				</select>
				<input type="text" name="Descricao" class="campo_input" value="<?php echo $row_area['Descricao'];?>" required/>
				<select name="Tipo" class="selecao">
					<option value="1"<?php if($row_area['Tipo'] == "1")echo "selected";?>>Administrativo</option>
					<option value="2"<?php if($row_area['Tipo'] == "2")echo "selected";?>>Produ&ccedil;&atilde;o</option>
					<option value="3"<?php if($row_area['Tipo'] == "3")echo "selected";?>>Transporte</option>
				</select>
				<input type="hidden" name="Codigo_Areas" value="<?php echo $_GET['Codigo_Areas'];?>" />
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
mysql_free_result($area);
mysql_free_result($fabrica);
mysql_free_result($fabricas);
?>
<!--Envia os campos dentro dos outros comentarios para area_conf_edit.php -->