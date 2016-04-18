<html>
<head>
<meta charset="utf-8">
<title>index</title>
<link rel= "stylesheet" tipe= "text/css" href="css/default.css">
<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
    <script src="js/ajax_get.js"></script>
    <script src="js/ajax_post.js"></script>
</head>
<body>
<header>
    <div class="boxlogin" id="box_login">
    <?php
require 'box_login.php';?>
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
               <?php include "fabrica.php";?>
         </div>
</section>
</body>
</html>