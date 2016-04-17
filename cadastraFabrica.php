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

$caminho = "listaCliente.php";

$colname_fabrica = "-1";
if (isset($_GET['codigo'])) {
  $colname_fabrica = $_GET['codigo'];
}
mysql_select_db($database_conexao, $conexao);
$query_fabrica = sprintf("SELECT * FROM fabrica WHERE codigo = %s", $colname_fabrica);
$fabrica = mysql_query($query_fabrica, $conexao) or die(mysql_error());
$row_fabrica = mysql_fetch_assoc($fabrica);
$totalRows_fabrica = mysql_num_rows($fabrica);

if (!(isset($_POST["codigo"]))){
  $insertSQL = sprintf("INSERT INTO fabrica (cpf, nome, endereco, cidade, uf) VALUES (%s, %s, %s, %s, %s)",
  GetSQLValueString($Codigo_Fabrica,"text"),
  GetSQLValueString($_POST['Descricao'],"text"),
  GetSQLValueString($_POST['Tipo'],"text"),
  GetSQLValueString($Data_Alteração,"text"),
  GetSQLValueString($Codigo_Alterador,"text"));

  mysql_select_db($database_conexao, $conexao);
  $Result1 = mysql_query($insertSQL, $conexao) or die(mysql_error());
}

if ((isset($_POST["codigo"]))){
  $editSQL = sprintf("UPDATE `cantina`.`cliente` SET cpf = %s, nome = %s, endereco = %s, cidade = %s, uf = %s, telefone = %s, email = %s, tipo = %s, situacao = %s, observacoes = %s WHERE codigo = %s",
  GetSQLValueString($_POST['nome'],"text"),
  GetSQLValueString($_POST['endereco'],"text"),
  GetSQLValueString($_POST['cidade'],"text"),
  GetSQLValueString($_POST['estado'],"text"),
  GetSQLValueString($_POST['telefone'],"text"),
  GetSQLValueString($_POST['email'],"text"),
  GetSQLValueString($_POST['tipo'],"text"),
  GetSQLValueString($_POST['situacao'],"text"),
  GetSQLValueString($_POST['obs'],"text"),
  GetSQLValueString($_POST['codigo'],"int"));

  mysql_select_db($database_conexao, $conexao);
  $Result2 = mysql_query($editSQL, $conexao) or die(mysql_error());
}


mysql_free_result($cliente);

header(sprintf("Location: %s", $caminho));
?>
