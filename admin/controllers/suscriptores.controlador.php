<?php

class SuscriptoresControlador{

	//Mostrar Suscriptores

	static public function MostrarSuscriptoresControlador($item, $valor){

		$tablaBD = "suscriptores";

		$respuesta = SuscriptoresModelo::MostrarSuscriptoresModelo($tablaBD, $item, $valor);

		return $respuesta;

	}

    //Eliminar Suscriptores
    
	public function EliminarSuscriptoresControlador(){

		if(isset($_GET["Sid"])){

			$tablaBD = "suscriptores";

			$id = $_GET["Sid"];

			$respuesta = SuscriptoresModelo::EliminarSuscriptoresModelo($tablaBD, $id);

			if($respuesta == true){

				echo '<script>

				window.location = "suscriptores";

				</script>';

			}

		}

	}

	//Enviar Mensajes a los suscriptores

	public function MensajesSuscriptoresControlador(){

		if(isset($_POST["tituloS"])){

			$tablaBD = "suscriptores";

			$respuesta = SuscriptoresM::MensajesSuscriptoresModelo($tablaBD);

			foreach ($respuesta as $key => $value) {
				
				$titulo = $_POST["tituloS"];
				$mensaje = $_POST["mensajeS"];

				$asunto = 'Mensaje para todos los Suscriptores de Hotel Zone';

				$para = $item["email"];

				$mensaje = '<html>

								<head>

									<title>Mensaje a Suscriptores</title>

								</head>

								<body>

									<p>'.$mensaje.'</p>

								</body>

							</html>';

				$cabeceras = 'MIME-Version: 1.0' . "\r\n";
				$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
				$cabeceras .= 'From: <marketing@hotelzone.com>' . "\r\n";

				$enviar = mail($para, $asunto, $mensaje, $cabeceras);

				if($enviar){

					echo '<script>

					window.location = "suscriptores";

					</script>';

				}


			}

		}

	}

}

?>