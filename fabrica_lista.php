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
<title>Lista de Fabricas</title>
<link rel= "stylesheet" tipe= "text/css" href="css/default-2.css">
</head>
<body>
	<div class="corpo">
		<table class="lista" border="1px">
			<tr>
				<td><strong>C&oacute;digo da fabrica</strong></td>
				<td><strong>Descri&ccedil;&atilde;o</strong></td>
				<td><strong>Tipo</strong></td>
				<td><strong>Data ult. altera&ccedil;&atilde;o</strong></td>
				<td><strong>Ultimo alterador</strong></td>
				<td><strong>Alterar</strong></td>
				<td><strong>Deletar</strong></td>
			</tr>
			<?php do {
			mysql_select_db($database_conexao, $conexao);
			$query_alterador = "SELECT * FROM usuarios where Codigo_Usuario = '".$row_fabrica['Codigo_Alterador']."'";
			$alterador = mysql_query($query_alterador, $conexao) or die(mysql_error());
			$row_alterador = mysql_fetch_assoc($alterador);
			$totalRows_alterador = mysql_num_rows($alterador);?>
				<tr>
					<td><?php echo $row_fabrica['Codigo_Fabrica']; ?></td>
					<td><?php echo $row_fabrica['Descricao']; ?></td>
					<td><?php echo $row_fabrica['Tipo']; ?></td>
					<td><?php echo $row_fabrica['Data_Alteracao']; ?></td>
					<td><?php echo $row_alterador['Nome']; ?></td>
					<td><a href="fabrica_conf_edit.php?Id_Fabrica=<?php echo $row_fabrica['Id_Fabrica']; ?>">Alterar</a></td>
					<td><a href="fabrica_conf_del.php?Id_Fabrica=<?php echo $row_fabrica['Id_Fabrica']; ?>">Deletar</a></td>
				</tr>
			<?php mysql_free_result($alterador);} while ($row_fabrica = mysql_fetch_assoc($fabrica)); ?>
		</table>
		<a href="fabrica_matriz.php" class="btn-1"><input type="button" value="Cadastrar Matriz" /></a>
		<a href="fabrica_filial.php" class="btn-2"><input type="button" value="Cadastrar Filial" /></a>
	</div>
</body>
</html>
<?php
mysql_free_result($fabrica);
?>
<!--Envia a id pelo link para alterar(fabrica_conf_edit.php) e para deletar(*update do _delete)(fabrica_conf_del.php), ou clicando nos botões vai para pagina de cadastro de Matriz(fabrica_matriz.php)/Filial(fabrica_filial.php) -->