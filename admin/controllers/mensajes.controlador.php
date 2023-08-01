<?php

class MensajesControlador{

	//Mostrar mensajes
	static public function MostrarMensajesControlador($item, $valor){

		$tablaBD = "mensajes";

		$respuesta = MensajesModelo::MostrarMensajesModelo($tablaBD, $item, $valor);

		return $respuesta;

	}

	//Eliminar Mensajes

	public function EliminarMensajesControlador(){

		if(isset($_GET["Mid"])){

			$tablaBD = "mensajes";

			$id = $_GET["Mid"];

			$respuesta = MensajesModelo::EliminarMensajesModelo($tablaBD, $id);

			if($respuesta == true){

				echo '<script>

					window.location = "mensajes";

				</script>';

			}

		}

	}

	//Responder Mensajes

	public function RespuestaMensajeControlador(){

		if(isset($_POST["emailM"])){

			$email = $_POST["emailM"];
			$nombre = $_POST["nombreM"];
			$asunto = $_POST["asuntoM"];

			$respuesta = $_POST["respuestaM"];

			$titulo = 'Respuesta a su mensaje: '.$asunto.' ,desde Hotel Zone.';

			$respuesta = '<html>

							<head>
								<title>Respuesta a: '.$asunto.'</title>
							</head>

							<body>

								<h1>Hola '.$nombre.'</h1>

								<p>'.$respuesta.'</p>

							</body>

						</html>';

			$cabecera = 'MIME-Version: 1.0' . "\r\n";
			$cabecera .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
			$cabecera .= 'From: <administracion@hotelbyte.com>' . "\r\n";

			$enviar = mail($email, $titulo, $respuesta, $cabecera);

			if($enviar){

				echo '<script>

				window.location = "mensajes";

				</script>';

			}

		}

	}

}

?>
