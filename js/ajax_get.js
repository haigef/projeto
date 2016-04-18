$(document).ready(function() {
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
            $(".cadastros_home").click(function(){
               $.ajax({url: "cadastros_home.php",
                  success:function(a) {
                     $('#conteudo_ajax').html(a);
                  }});
         }).innerHTML = 'Carregando, por favor aguarde...';
            $(".avanc_home").click(function(){
               $.ajax({url: "avanc_home.php",
                  success:function(b) {
                     $('#conteudo_ajax').html(b);
                  }});
         }).innerHTML = 'Carregando, por favor aguarde...';
            $(".relatorios_home").click(function(){
               $.ajax({url: "relatorios_home.php",
                  success:function(c) {
                     $('#conteudo_ajax').html(c);
                  }});
         }).innerHTML = 'Carregando, por favor aguarde...';
            $(".config_home").click(function(){
               $.ajax({url: "config_home.php",
                  success:function(d) {
                     $('#conteudo_ajax').html(d);
                  }});
         }).innerHTML = 'Carregando, por favor aguarde...';
            $(".sair").click(function(){
               $.ajax({url: "box_login.php",
                  success:function(d) {
                     $('#box_login').html(d);
                  }});
         }).innerHTML = 'Carregando, por favor aguarde...';
});

