<html>
<head>
<meta charset="utf-8">
<title>index</title>
<?php require 'bd.php';?>
<link rel= "stylesheet" tipe= "text/css" href="css/default.css">
<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
    <script src="js/ajax_get.js"></script>
    <script src="js/ajax_post.js"></script>
</head>
<body>
<header><?php echo''.@$_SESSION["login"].'';?>
    <div class="boxlogin" id="box_login">
    <?php @$login = $_SESSION['login'];
if (empty($login)) {
      echo '
        <form id="login" action="" method="POST">
            <input class="login" type="text" name="login"></input>
            <input class="senha" type="password" name="senha"></input>
            <a href="#">Esqueci minha senha</a>
            <button type="submit">OK</button>
        </form>';
}else {
echo'
<div class="corpo">
      <div class="campos">
            <i>Bem vindo - '.$_SESSION['usuario'].'</i>
        <input type="submit" value="Config" class="btn-sub" />
        <form method="POST" action="sair.php"><button class="btn-res sair" id="sair">sair</button>
      </div>
  </div>';
}
;?>
    </div>
</header>
    <div class="nav">
        <ul class="navigation">
            <li><button class="buttonmenu home">B&aacute;sico</button></li>
            <li><button class="buttonmenu avancado">Avan&ccedil;ado</button></li>
            <li><button class="buttonmenu relatorios">Relat&oacute;rios</button></li>
            <li><button class="buttonmenu configuracoes">Configura&ccedil;&otilde;es</button></li>
        </ul>
        <ul class="dropdown">
            <div class="box">
                <li><button class="buttondrop home">B&aacute;sico</button></li>
                <li><button class="buttondrop avancado">Avan&ccedil;ado</button></li>
                <li><button class="buttondrop relatorios">Relat&oacute;rios</button></li>
                <li><button class="buttondrop configuracoes">Configura&ccedil;&otilde;es</button></li>
            </div>
        </ul>
    </div>
<!-- ao fazer as telas de cadastro e tudo mais mudo aqui pra algo mais bonito-->
    <div class="asside" id="menu-asside"><?php
    require 'home.php';
    ?></div>
<!-- iremos trabalhar com o include dentro da div "content" -->
<section id="conteudo_ajax">
         <form action="#" method="POST">
         	<input class="busca" placeholder="Busca" type="search" name="busca">
         </form>
         <div class="content">
               <?php include "cadastro_fabricas.php";?>
         </div>
</section>
</body>
</html>