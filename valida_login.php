
<script src="js/ajax_get.js"></script>
<link rel= "stylesheet" tipe= "text/css" href="css/default.css">
<?php
require 'bd.php';
ini_set( 'display_errors', true );
error_reporting( E_ALL );

$login = $_POST['login'];
$senha = $_POST['senha'];


$sql = "SELECT * FROM usuarios WHERE Login='$login' AND Senha='$senha'";
$resultID = $conn->query($sql);
$r = mysqli_fetch_array($resultID);
if($r == true):
	 $id_usuario= ($r[0]);
     $Nome= ($r[1]);
     $Login= ($r[2]);
     $Senha= ($r[3]);
     $Email= ($r[4]);
     $Perfil= ($r[5]);
     $Data = ($r[6]);
     $Delete = ($r[7]);

    $_SESSION['id_usuario'] = $id_usuario;
	$_SESSION['usuario'] = $Nome;
	$_SESSION['login'] = $Login;
	$_SESSION['senha'] = $Senha;
	echo('	<div class="corpo">
			<div class="campos">
            <i>Bem vindo - '.$_SESSION['usuario'].'</i>
				<input type="submit" value="Config" class="btn-sub" />
				<form method="POST" action="sair.php"><button class="btn-res" id="sair">sair</button>
			</div>
	</div>');
  else :
    die('Nome ou senha incorretos!<a href="index.php"><input type="button" value="<< Voltar"></a>');
  endif;



?>


