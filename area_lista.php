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
$query_area = "SELECT * FROM areas where _delete = '0' order by Tipo";
$area = mysql_query($query_area, $conexao) or die(mysql_error());
$row_area = mysql_fetch_assoc($area);
$totalRows_area = mysql_num_rows($area);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista de Areas</title>
<link rel= "stylesheet" tipe= "text/css" href="css/default-2.css">
</head>
<body>
	<div class="corpo">
		<table class="lista" border="1px">
			<tr>
				<td><strong>F&aacute;brica</strong></td>
				<td><strong>Descri&ccedil;&atilde;o</strong></td>
				<td><strong>Tipo</strong></td>
				<td><strong>Data ult. altera&ccedil;&atilde;o</strong></td>
				<td><strong>Ultimo alterador</strong></td>
				<td><strong>Alterar</strong></td>
				<td><strong>Deletar</strong></td>
			</tr>
			<?php do {
			mysql_select_db($database_conexao, $conexao);
			$query_alterador = "SELECT * FROM usuarios where Codigo_Usuario = '".$row_area['Codigo_Alterador']."'";
			$alterador = mysql_query($query_alterador, $conexao) or die(mysql_error());
			$row_alterador = mysql_fetch_assoc($alterador);
			$totalRows_alterador = mysql_num_rows($alterador);
			
			mysql_select_db($database_conexao, $conexao);
			$query_fabrica = "SELECT * FROM fabrica where Id_Fabrica = '".$row_area['Id_Fabrica']."'";
			$fabrica = mysql_query($query_fabrica, $conexao) or die(mysql_error());
			$row_fabrica = mysql_fetch_assoc($fabrica);
			$totalRows_fabrica = mysql_num_rows($fabrica);?>
				<tr>
					<td><?php echo $row_fabrica['Codigo_Fabrica'].": ".$row_fabrica['Descricao']; ?></td>
					<td><?php echo $row_area['Descricao']; ?></td>
					<td><?php echo $row_area['Tipo']; ?></td>
					<td><?php echo date("d/m/Y H:i",strtotime($row_area['Data_Alteracao'])); ?></td>
					<td><?php echo $row_alterador['Nome']; ?></td>
					<td><a href="area_edit.php?Codigo_Areas=<?php echo $row_area['Codigo_Areas']; ?>">Alterar</a></td>
					<td><a href="area_conf_del.php?Codigo_Areas=<?php echo $row_area['Codigo_Areas']; ?>">Deletar</a></td>
				</tr>
			<?php mysql_free_result($alterador);mysql_free_result($fabrica);} while ($row_area = mysql_fetch_assoc($area)); ?>
		</table>
		<a href="area_add.php" class="btn-1"><input type="button" value="Cadastrar Area" /></a>
	</div>
</body>
</html>
<?php
mysql_free_result($area);
?>
<!--Envia o codigo pelo link para alterar(area_edit.php) e para deletar(*update do _delete)(area_conf_del.php), ou clicando no botão vai para pagina de cadastro(area_add.php) -->