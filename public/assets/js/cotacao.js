$(document).ready(function(){
	var url_base = window.location.origin + '/';

	$(".cpf").focusout(function(){

		let cpf = $(".cpf").val();

		if(cpf != "" && cpf.length >= 11){

            $.ajax({
                type: 'GET',
                url: url_base + 'cliente/buscar/segurado/' + cpf,
                dataType: 'json',
                beforeSend: function(){
                    $("#sec_modal").css("opacity", "1");
                    $("#sec_modal").css("pointer-events", "all");
                },
                success: function(data){
					
					console.log(data[0]['id']);
					
					if(data != ""){

						$("#field_nome").val(data[0]['nome']);
						$("#field_sobrenome").val(data[0]['sobrenome']);
						$("#field_nascimento").val(data[0]['nascimento']);
						$("#field_sexo").val(data[0]['sexo']);

						$("#field_nome, #field_sobrenome, #field_nascimento, #field_sexo").parent(".box_field_form").addClass("label_flutua");
					}

                    $("#sec_modal").css("opacity", 0);
                    $("#sec_modal").css("pointer-events", "none");
                }
            });
        }
	});

	$(".cep").focusout(function(){

		let cep = $(".cep").val();

		if(cep != ""){
            $.ajax({
                type: 'GET',
                url: url_base + 'buscar/cep/' + cep,
                dataType: 'json',
                beforeSend: function(){
                    $("#sec_modal").css("opacity", "1");
                    $("#sec_modal").css("pointer-events", "all");
                },
                success: function(data){
                    
                    console.log(data);
                    $("#field_endereco").val(data['logradouro']);
                    $("#field_estado").val(data['uf']);
                    $("#field_cidade").val(data['localidade']);
                    $("#field_bairro").val(data['bairro']);

                    $("#field_endereco, #field_estado, #field_cidade, #field_bairro").parent(".box_field_form").addClass("label_flutua");

                    $("#sec_modal").css("opacity", 0);
                    $("#sec_modal").css("pointer-events", "none");
                }
            });
        }
    });
});