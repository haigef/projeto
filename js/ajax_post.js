$(document).ready(function(){




$(document).on('change','#tipo', function(){ //.on('keyup change click', function() .submit(function(){ funções uteis //$('.ajax_form').on('submit',function(e) {
//tipo = $( this ).find('select[id=tipo]').val();    //nome da variavel y = $('tipo do campo[nome do selector = nome do campo]', '#id ou .classe do form')
tipo = $('select[name=tipo-fabrica]', '.form-fabrica').val();
        $.ajax({type: "POST", url: "fabrica-2.php",
            data: {'tipo': tipo}, //   'x': nome da variavel y
            success: function( data )
            { $("#expand").html(data);}
        });
return false; });

$(document).on('submit','#login', function(){ //.on('keyup change click', function() .submit(function(){ funções uteis //$('.ajax_form').on('submit',function(e) {
//tipo = $( this ).find('select[id=tipo]').val();    //nome da variavel y = $('tipo do campo[nome do selector = nome do campo]', '#id ou .classe do form')
login = $('input[name=login]', '#login').val();
senha = $('input[name=senha]', '#login').val();
        $.ajax({type: "POST", url: "valida_login.php",
            data: {'login': login, 'senha': senha}, //   'x': nome da variavel y
            success: function( data )
            { $("#box_login").html(data);}
        });
return false; });












});