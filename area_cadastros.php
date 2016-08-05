<!--Recebe os dados de area_conf_add.php, area_conf_edit.php e area_conf_del.php -->
<?php
require_once('Connections/conexao.php');

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

$Caminho = "area_lista.php";/* aponta para a pagina da listagem após fazer qualquer operação */
$Id_Fabrica = $_POST['Id_Fabrica'];
$Descricao = $_POST['Descricao'];
$Tipo = $_POST['Tipo'];
$Codigo_Alterador = $_POST['Codigo_Alterador'];
$Conf = $_POST['Conf'];

if ($Conf == "add"){
	$insertSQL = sprintf("INSERT INTO areas (Id_Fabrica, Descricao, Tipo, Codigo_Alterador) VALUES (%s, %s, %s, %s)",
	GetSQLValueString($Id_Fabrica,"text"),
	GetSQLValueString($Descricao,"text"),
	GetSQLValueString($Tipo,"text"),
	GetSQLValueString($Codigo_Alterador,"text"));
	
	mysql_select_db($database_conexao, $conexao);
	$Result1 = mysql_query($insertSQL, $conexao) or die(mysql_error());
}

if ($Conf == "edit"){
  $editSQL = sprintf("UPDATE `custos`.`areas` SET Id_Fabrica = %s, Descricao = %s, Tipo = %s, Codigo_Alterador = %s WHERE Codigo_Areas = %s",
  GetSQLValueString($Id_Fabrica,"text"),
  GetSQLValueString($Descricao,"text"),
  GetSQLValueString($Tipo,"text"),
  GetSQLValueString($Codigo_Alterador,"text"),
  GetSQLValueString($_POST['Codigo_Areas'],"int"));

  mysql_select_db($database_conexao, $conexao);
  $Result2 = mysql_query($editSQL, $conexao) or die(mysql_error());
}

if ($Conf == "del"){
  $deleteSQL = sprintf("UPDATE `custos`.`areas` SET _delete = '1' WHERE Codigo_Areas = %s",
  GetSQLValueString($_POST['Codigo_Areas'],"int"));

  mysql_select_db($database_conexao, $conexao);
  $Result3 = mysql_query($deleteSQL, $conexao) or die(mysql_error());
}

header(sprintf("Location: %s", $Caminho));
?>
