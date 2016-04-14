# projeto
botões do menu
$(document).ready(function() {
            $(".btn-home").click(function(){
               $.ajax({url: "busca.php",async: false,
                  success:function(a) {
                     $('#expand').html(a);
                  }});
         });
            $(".btn-perfil").click(function(){
               $.ajax({url: "perfil.php",async: false,
                  success:function(b) {
                     $('#expand').html(b);
                  }});
         });
            $(".btn-minhas").click(function(){
               $.ajax({url: "minhas.php",async: false,
                  success:function(c) {
                     $('#expand').html(c);
                  }});
         });
            $(".btn-respostas").click(function(){
               $.ajax({url: "respostas.php",async: false,
                  success:function(d) {
                     $('#expand').html(d);
                  }});
         });
});

botões de envio de formulario 
	$(document).ready(function(){
		$(document).on('submit click','.ajax_form', function(){      //.on('keyup change click', function()    .submit(function(){    funções uteis
		//$('.ajax_form').on('submit',function(e) {

    		post = $( this ).find('input[name=id]').val();    //nome da variavel y = $('tipo do campo[nome do selector = nome do campo]', '#id ou .classe do form')
			$.ajax({
				focused: false,
				type: "POST",
				url: "view.php",
				data: {'post_id': post}, //   'x': nome da variavel y
				success: function( data )
				{
					 $("#expand").html(data); // #id ou .classe ou nada se não for uma id ou classe
				}
			});
return false;
		});

		$(document).on('submit','#form_resposta',function(){  //.on('keyup change click', function()    .submit(function(){    funções uteis

			id = $('input[name=id]', '#form_resposta').val();
    		post = $('textarea[name=resposta]', '#form_resposta').val();    //nome da variavel y = $('tipo do campo[nome do selector = nome do campo]', '#id ou .classe do form')
			$.ajax({
				type: "POST",
				url: "adiciona_resposta.php",
				data: {'post_id': id, 'post_text' : post}, //   'x': nome da variavel y
				success: function(r){
					 $("#expand").html(r); // #id ou .classe ou nada se não for uma id ou classe
				}
			});
			return false;
		});
	});



