$(document).ready(function() {
//botões menu principal
            $(".home").click(function(){
               $.ajax({url: "home.php",
                  success:function(a) {
                     $('#menu-asside').html(a);
                  }});
         }).innerHTML = 'Carregando, por favor aguarde...';
            $(".avancado").click(function(){
               $.ajax({url: "avacando.php",
                  success:function(b) {
                     $('#menu-asside').html(b);
                  }});
         }).innerHTML = 'Carregando, por favor aguarde...';
            $(".relatorios").click(function(){
               $.ajax({url: "relatorios.php",
                  success:function(c) {
                     $('#menu-asside').html(c);
                  }});
         }).innerHTML = 'Carregando, por favor aguarde...';
            $(".configuracoes").click(function(){
               $.ajax({url: "configuracoes.php",
                  success:function(d) {
                     $('#menu-asside').html(d);
                  }});
         }).innerHTML = 'Carregando, por favor aguarde...';

//botões asside

            $(".cadastro_fabricas ").click(function(){
               $.ajax({url: "cadastro_fabricas.php",
                  success:function(e) {
                     $('#conteudo_ajax').html(e);
                  }});
         }).innerHTML = 'Carregando, por favor aguarde...';
            $(".cadastro_areas ").click(function(){
               $.ajax({url: "cadastro_areas.php",
                  success:function(f) {
                     $('#conteudo_ajax').html(f);
                  }});
         }).innerHTML = 'Carregando, por favor aguarde...';


//exemplos ^^^^^^^^^^^^
            $(".avanc_home").click(function(){
               $.ajax({url: "avanc_home.php",
                  success:function(g) {
                     $('#conteudo_ajax').html(g);
                  }});
         }).innerHTML = 'Carregando, por favor aguarde...';
            $(".relatorios_home").click(function(){
               $.ajax({url: "relatorios_home.php",
                  success:function(h) {
                     $('#conteudo_ajax').html(h);
                  }});
         }).innerHTML = 'Carregando, por favor aguarde...';
            $(".config_home").click(function(){
               $.ajax({url: "config_home.php",
                  success:function(i) {
                     $('#conteudo_ajax').html(i);
                  }});
         }).innerHTML = 'Carregando, por favor aguarde...';


//botões login
            $(".sair").click(function(){
               $.ajax({url: "box_login.php",
                  success:function(j) {
                     $('#box_login').html(j);
                  }});
         }).innerHTML = 'Carregando, por favor aguarde...';
});

