<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>index</title>
<link rel= "stylesheet" tipe= "text/css" href="css/default.css">
</head>
<body>
<header>
    <div class="boxlogin">
        <form action="#" method="POST">
            <input class="login" type="text" name="login">
            <input class="senha" type="password" name="senha">
            <a href="#">Esqueci minha senha</a>
            <button type="submit">OK</button>
        </form>
    </div>
</header>
    <div class="nav">
        <ul class="navigation">
            <li><button class="buttonmenu">B&aacute;sico</button></li>
            <li><button class="buttonmenu">Avan&ccedil;ado</button></li>
            <li><button class="buttonmenu">Relat&oacute;rios</button></li>
            <li><button class="buttonmenu">Configura&ccedil;&otilde;es</button></li>
        </ul>
        <ul class="dropdown">
            <div class="box">
                <li><button class="buttondrop">B&aacute;sico</button></li>
                <li><button class="buttondrop">Avan&ccedil;ado</button></li>
                <li><button class="buttondrop">Relat&oacute;rios</button></li>
                <li><button class="buttondrop">Configura&ccedil;&otilde;es</button></li>
            </div>
        </ul>
    </div>
<!-- ao fazer as telas de cadastro e tudo mais mudo aqui pra algo mais bonito-->
    <div class="asside">
        <ul>
            <li><button class="assidebutton">► Cadastros</button></li>
        </ul>
    </div>
<!-- iremos trabalhar com o include dentro da div "content" -->
<section>
         <form action="#" method="POST">
         	<input class="busca" placeholder="Busca" type="search" name="busca">
         </form>
         <div class="content">
               <!-- <script>
                    function pesquisa(nome_function)
                        {
                            url="nome_aqui.php";
                            ajax(url);
                        }
                </script> -->
         </div>
</section>
</body>
</html>