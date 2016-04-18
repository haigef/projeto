<?php
	session_start();
	$_SESSION['id_usuario'] = '';
	$_SESSION['usuario'] = '';
	$_SESSION['login'] = '';
	$_SESSION['senha'] = '';
	session_destroy();
	header('location: index.php');
?>