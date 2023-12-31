<?php

class UsuariosControlador{

	//Ingresar
    
	public function IngresoUsuariosControlador(){

		if(isset($_POST["usuario-Ing"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuario-Ing"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["clave-Ing"])){

				$datosC = array("usuario"=>$_POST["usuario-Ing"], "clave"=>$_POST["clave-Ing"]);

				$tablaBD = "usuarios";

				$respuesta = UsuariosModelo::IngresoUsuariosModelo($datosC, $tablaBD);

				// if($respuesta["usuario"] == $_POST["usuario-Ing"] && $respuesta["clave"] == $_POST["clave-Ing"]){
				if (is_array($respuesta) && $respuesta["usuario"] == $_POST["usuario-Ing"] && $respuesta["clave"] == $_POST["clave-Ing"]) {


					$_SESSION["Ingreso"] = true;

					$_SESSION["id"] = $respuesta["id"];
					$_SESSION["usuario"] = $respuesta["usuario"];
					$_SESSION["clave"] = $respuesta["clave"];
					$_SESSION["foto"] = $respuesta["foto"];
					$_SESSION["rol"] = $respuesta["rol"];

					echo '<script>

						window.location = "inicio";
						</script>';

				}else{

					echo 'ERROR AL INGRESAR';

				}

			}

		}

	}

	// Ver Usuarios

	public function VerUsuariosControlador(){

		$tablaBD = "usuarios";

		$respuesta = UsuariosModelo::VerUsuariosModelo($tablaBD);

		foreach ($respuesta as $key => $value) {
			
			echo '<tr>
                  
				<td>'.($key+1).'</td>
				<td>'.$value["usuario"].'</td>
				<td>'.$value["clave"].'</td>';

					if($value["foto"] != ""){

						echo '<td>

							<img src="'.$value["foto"].'" class="user-image" alt="User Image" width="40px;"></td>';

					}else{

						echo '<td>

					<img src="views/img/usuarios/defecto.png" class="user-image" alt="User Image" width="40px;"></td>';

					}
				
				echo '<td>'.$value["rol"].'</td>

				<td>
				
				<div class="btn-group">
					
					<button class="btn btn-success EditarU" Uid="'.$value["id"].'"><i class="fa fa-pencil" data-toggle="modal" data-target="#EditarU"></i></button>

					<button class="btn btn-danger BorrarU" Uid="'.$value["id"].'" Ufoto="'.$value["foto"].'"><i class="fa fa-times"></i></button>

				</div>

				</td>

			</tr>';

		}

	}

	//Crear Usuarios

	public function CrearUsuariosControlador(){

		if(isset($_POST["usuarioN"])){

			$rutaImg = "";

			if(isset($_FILES["fotoN"]["tmp_name"]) && !empty($_FILES["fotoN"]["tmp_name"])){


				if($_FILES["fotoN"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10,999);

					$rutaImg = "views/img/usuarios/U".$nombre.".jpg";

					$foto = imagecreatefromjpeg($_FILES["fotoN"]["tmp_name"]);

					imagejpeg($foto, $rutaImg);

				}

				if($_FILES["fotoN"]["type"] == "image/png"){

					$nombre = mt_rand(10,999);

					$rutaImg = "views/img/usuarios/U".$nombre.".png";

					$foto = imagecreatefrompng($_FILES["fotoN"]["tmp_name"]);

					imagepng($foto, $rutaImg);

				}

			}

			$tablaBD = "usuarios";

			$datosC = array("usuario"=>$_POST["usuarioN"], "clave"=>$_POST["claveN"], "rol"=>$_POST["rolN"], "foto"=>$rutaImg);

			$respuesta = UsuariosModelo::CrearUsuariosModelo($tablaBD, $datosC);

			if($respuesta == true){

				echo '<script>

						window.location = "usuarios";
						</script>';

			}else{

				echo 'ERROR AL CREAR USUARIO';

			}

		}

	}

	//Borrar Usuarios

	public function BorrarUsuariosControlador(){

		if(isset($_GET["Uid"])){

			$tablaBD = "usuarios";
			$datosC = $_GET["Uid"];

			if($_GET["Ufoto"] != ""){

				unlink($_GET["Ufoto"]);

			}

			$respuesta = UsuariosModelo::BorrarUsuariosModelo($tablaBD, $datosC);

			if($respuesta == true){

				echo '<script>

						window.location = "usuarios";
						</script>';

			}else{

				echo 'ERROR AL BORRAR USUARIO';

			}

		}

	}

	//Llamar datos para editarlos
	static public function EditarUsuariosControlador($item, $valor){

		$tablaBD = "usuarios";

		$respuesta = UsuariosModelo::EditarUsuariosModelo($tablaBD, $item, $valor);

		return $respuesta;

	}

	//Actualizar Usuario

	public function ActualizarUsuariosControlador(){

		if(isset($_POST["Uid"])){

			$rutaImg = $_POST["FotoActual"];

			if(isset($_FILES["fotoE"]["tmp_name"]) && !empty($_FILES["fotoE"]["tmp_name"])){

				if(!empty($_POST["FotoActual"])){

					unlink($_POST["FotoActual"]);

				}else{

					mkdir($direc, 0755);

				}


				if($_FILES["fotoE"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10,999);

					$rutaImg = "views/img/usuarios/U".$nombre.".jpg";

					$foto = imagecreatefromjpeg($_FILES["fotoE"]["tmp_name"]);

					imagejpeg($foto, $rutaImg);

				}

				if($_FILES["fotoE"]["type"] == "image/png"){

					$nombre = mt_rand(10,999);

					$rutaImg = "views/img/usuarios/U".$nombre.".png";

					$foto = imagecreatefrompng($_FILES["fotoE"]["tmp_name"]);

					imagepng($foto, $rutaImg);

				}

			}


			$tablaBD = "usuarios";

			$datosC = array("id"=>$_POST["Uid"], "usuario"=>$_POST["usuarioE"], "clave"=>$_POST["claveE"], "rol"=>$_POST["rolE"], "foto"=>$rutaImg);

			$respuesta = UsuariosModelo::ActualizarUsuariosModelo($tablaBD, $datosC);

			if($respuesta == true){

				echo '<script>

						window.location = "usuarios";
						</script>';

				}else{

					echo 'ERROR AL EDITAR USUARIO';

				}

		}

	}

	//Ver Perfil del Usuario Actual

	public function VerPerfilControlador(){

		$tablaBD = "usuarios";

		$id = $_SESSION["id"];

		$respuesta = UsuariosModelo::VerPerfilModelo($tablaBD, $id);

		echo '<tr>
                  
				<td>'.$respuesta["usuario"].'</td>
				<td>'.$respuesta["clave"].'</td>';

				if($respuesta["foto"] != ""){

					echo '<td>

				<img src="'.$respuesta["foto"].'" class="user-image" alt="User Image" width="40px;"></td>';
				}else{

					echo '<td>

				<img src="views/img/usuarios/defecto.png" class="user-image" alt="User Image" width="40px;"></td>';

				}
				

				echo '

				<td>
				
				<div class="btn-group">
					
					<button class="btn btn-success EditarU" Uid="'.$respuesta["id"].'"><i class="fa fa-pencil" data-toggle="modal" data-target="#EditarU"></i></button>

				</div>

				</td>

	  	</tr>';

	}

}

?>