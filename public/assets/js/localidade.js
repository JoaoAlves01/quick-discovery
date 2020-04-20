$(document).ready(function(){
	var url_base = window.location.origin + '/';

	$("#field_estado").change(function(){

        let estado = $("#field_estado").val();

		if(estado != ""){

            $.ajax({
                type: 'GET',
                url: url_base + 'buscar/cidade/' + estado,
                dataType: 'json',
                beforeSend: function(){

                    $("#field_cidade").empty("");

                    $("#sec_modal").css("opacity", "1");
                    $("#sec_modal").css("pointer-events", "all");
                },
                success: function(data){
					
					//console.log(data[0]['id']);
					
					if(data != ""){

                        let total = data.length;
                        $("#field_cidade").append( "<option value=''></option>" );

                        for(var i = 0; i < total; i++){

                            $("#field_cidade").append( "<option value='" + data[i]['id'] + "'>" + data[i]['cidade'] + "</option>" );
                        }
					}

                    $("#sec_modal").css("opacity", 0);
                    $("#sec_modal").css("pointer-events", "none");
                }
            });
        }
    });
    
    $("#field_cidade").change(function(){

        let cobertura = $("#field_cobertura").val();
        let estado = $("#field_estado").val();
        let cidade = $("#field_cidade").val();
        let imagem = "";

        if(cidade == 1){
            imagem = "map-sg.jpg"
        }

        else if(cidade == 2){
            imagem = "map-nt.jpg"
        }

        else if(cidade == 3){
            imagem = "map-rj.jpg"
        }

        else if(cidade == 4){
            imagem = "map-br.jpg"
        }

        else{
            imagem = "map-cp.jpg"
        }

		if(cobertura != "" && estado != "" && cidade != ""){

            $.ajax({
                type: 'GET',
                url: url_base + 'corretor/filtro/localidade/' + cobertura,
                dataType: 'json',
                beforeSend: function(){

                    $(".box_resultado").hide();

                    $("#sec_modal").css("opacity", "1");
                    $("#sec_modal").css("pointer-events", "all");
                },
                success: function(data){
					
                    console.log(data);
                    $(".box_resultado").show();
                    
                    $(".img_map").attr("src", url_base + "assets/images/" + imagem);
                    
                    $("#lable_idade").text(data['mediaIdade']);
                    $("#lable_premio").text(data['mediaPremio']);
                    $("#label_numero_segurado").text(data['numeroSegurado']);
                    $("#label_renovacao").text(data['renovacao']);
                    
                    $("#sec_modal").css("opacity", 0);
                    $("#sec_modal").css("pointer-events", "none");

                    $("html, body").animate({scrollTop:$("#box_map").offset().top - 30}, 1500);
                }
            });
        }
	});
});