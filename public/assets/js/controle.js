$(document).ready(function(){

	$(".box_field_form input, .box_field_form select, .box_field_form textarea").focusin(function(){

		var campo_clicado = $(this),
		campo = campo_clicado.parents(".box_field_form");

		if(!campo.hasClass("label_flutua")){
			campo.addClass("label_flutua");
		}
	});

	$(".box_field_form input, .box_field_form select, .box_field_form textarea").focusout(function()
	{
		var campo_clicado = $(this),
		campo = campo_clicado.parents(".box_field_form");

		setTimeout(function(){

			if(campo_clicado.val().length == 0)
			{
				campo.removeClass("label_flutua");
			}

		}, 100);
	});
	
	$(".scroll").click(function(event){
		event.preventDefault();
		$("html, body").animate({scrollTop:$(this.hash).offset().top - 30}, 1500);
	});
	
	$(".btn_bar").click(function(){
		$("#fundo_box_menu").css("left", 0);
	});

	$("#fechar_menu").click(function(){
		$("#fundo_box_menu").css("left", "-100%");
	});

	$(".btn-evento").click(function(){

		$(this).css("background", "#FF6262");
	});
});