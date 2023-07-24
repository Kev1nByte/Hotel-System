$(".TB").on("click", ".EditarSlide", function(){

	var Sid = $(this).attr("Sid");
	var datos = new FormData();

	datos.append("Sid", Sid);

	$.ajax({

		url: "Ajax/slide.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			$("#Sid").val(respuesta["id"]);

			$("#imagenActual").val(respuesta["imagen"]);

			if(respuesta["imagen"] != ""){

				$(".visor").attr("src", respuesta["imagen"]);

			}else{

				$(".visor").attr("src", "views/im/default.png");

			}

			$("#titularE").val(respuesta["titular"]);
			$("#descripcionE").val(respuesta["descripcion"]);
			$("#ordenE").val(respuesta["orden"]);

		}

	})

})