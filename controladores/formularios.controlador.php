<?php

class ControladorFormularios{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistro($fmail, $fpass, $fname, $frut, $fliceo, $fcomuna, $finsta, $favatar, $fimgavatar){

			$tabla = "user";

			$datos = array("email" => $fmail,
						   "password" => $fpass,
				           "name" => $fname,
				           "rut" => $frut,
				           "liceo" => $fliceo,
				           "comuna" => $fcomuna,
				           "insta" => $finsta,
				           "avatar" => $favatar,
				           "imgavatar" => $fimgavatar
						);

			$respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

			return $respuesta;
		

	}
	
	/*=============================================
	Login
	=============================================*/

	static public function ctrLogin($user, $pass){

		$tabla = "user";

		$datos = array("rut" => $user,
					   "pass" => $pass
					);

		$respuesta = ModeloFormularios::mdlLogin($tabla, $datos);

		return $respuesta;
	}


	static public function ctrPosteo($id){

		if(isset($_POST["posteo"])){
				
			$tabla = "posts";

			$datos = array("mensaje" => $_POST["posteo"],
				           "user" => $_POST["usr"]
						
						);

			$respuesta = ModeloFormularios::mdlPosteo($tabla, $datos);

			return $respuesta;

		}

	}

	static public function ctrPosteocom($id){

		if(isset($_POST["comentario"])){
				
			$tabla = "comentarios";

			$datos = array("mensaje" => $_POST["comentario"],
						   "user" => $id,
						   "idpost" => $_POST["idpost"]
						   
						);
					
			$respuesta = ModeloFormularios::mdlPosteocom($tabla, $datos);

			return $respuesta;

		}

	}

	static public function ctrLikes($id){

		if(isset($_POST["posteo"])){
				
			$tabla = "posts";

			$datos = array("mensaje" => $_POST["posteo"],
				           "user" => $_POST["usr"]
						
						);

			$respuesta = ModeloFormularios::mdlPosteo($tabla, $datos);

			return $respuesta;

		}

	}

	static public function ctrInsta(){

		if(isset($_POST["link_insta"])){

			$tabla = "insta_desafio";

			$datos = array("id_user" => $_POST["id_usuario"],
				           "id_desafio" => $_POST["id_desafio"],
						   "url" => $_POST["link_insta"]
						
						);

			$respuesta = ModeloFormularios::mdlInsta($tabla, $datos);

			return $respuesta;

		}

	}


	/*=============================================
	Registro
	=============================================*/
	static public function ctrSeleccionRegistro(){

		$tabla="user";

		$respuesta=ModeloFormularios::mdlSeleccionarRegistros($tabla);

		return $respuesta;

	}
	static public function ctrSeleccionRegistrop(){

		$tabla="user";
		$cantidadpagina=18;
		$iniciar=($_GET['npag']-1)*$cantidadpagina;

		$parametros = array("iniciar" => $iniciar,
				           "cantidad" => $cantidadpagina
						
						);

		$respuesta=ModeloFormularios::mdlSeleccionarRegistrosp($tabla,$parametros);

		return $respuesta;

	}

	static public function ctrSeleccionPost(){

		$tabla3="posts";

		$respuesta3=ModeloFormularios::mdlSeleccionarPost($tabla3);

		return $respuesta3;

	}
	static public function ctrSeleccionComPost($id,$idpost){

		$tabla3="comentarios";

		$respuesta3=ModeloFormularios::mdlSeleccionarComPost($tabla3, $id,$idpost);

		return $respuesta3;

	}

	static public function ctrSeleccionUsuario($id_usr){

		$tabla="user";

		$respuesta=ModeloFormularios::mdlSeleccionarUser($tabla,$id_usr);

		return $respuesta;

	}

	static public function ctrSeleccionAvance($id_usr){

		$tabla="avance";

		$respuesta=ModeloFormularios::mdlSeleccionarAvance($tabla,$id_usr);

		return $respuesta;

	}

	static public function ctrSeleccionarLikes($id_usr){

		$tabla="likes";

		$respuesta2=ModeloFormularios::mdlSeleccionarLikes($tabla,$id_usr);

		return $respuesta2;

	}
	static public function ctrSeleccionarLikes2($id_usr,$id_post){

		$tabla="likes";

		$respuesta4=ModeloFormularios::mdlSeleccionarLikes2($tabla,$id_usr,$id_post);

		return $respuesta4;

	}
	static public function ctrSeleccionarInsta($id_usr){

		$tabla="insta_desafio";

		$respuesta4=ModeloFormularios::mdlSeleccionarInsta($tabla,$id_usr);

		return $respuesta4;

	}
	static public function ctrSeleccionarDesc($id_usr){

		$tabla="pin_post";

		$respuesta4=ModeloFormularios::mdlSeleccionarDesc($tabla,$id_usr);

		return $respuesta4;

	}


}