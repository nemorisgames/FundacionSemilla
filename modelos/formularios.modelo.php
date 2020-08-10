<?php

require_once "conexion.php";

class ModeloFormularios{

	/*=============================================
	Registro
	=============================================*/

	static public function mdlRegistro($tabla, $datos){

		#statement: declaración

		#prepare() Prepara una sentencia SQL para ser ejecutada por el método PDOStatement::execute(). La sentencia SQL puede contener cero o más marcadores de parámetros con nombre (:name) o signos de interrogación (?) por los cuales los valores reales serán sustituidos cuando la sentencia sea ejecutada. Ayuda a prevenir inyecciones SQL eliminando la necesidad de entrecomillar manualmente los parámetros.

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) VALUES (:nombre, :email, :password)");



		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;	

	}





	static public function mdlPosteo($tabla, $datos){

		
        
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(user_id, messa) VALUES (:user, :mensaje)");
		$stmt->bindParam(":user", $datos["user"], PDO::PARAM_INT);
		$stmt->bindParam(":mensaje", $datos["mensaje"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";
		}



	}

	static public function mdlPosteocom($tabla, $datos2){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(comentario,id_user, id_post) VALUES (:mensaje,:user,:idpost)");
		$stmt->bindParam(":user", $datos2["user"], PDO::PARAM_INT);
		$stmt->bindParam(":idpost", $datos2["idpost"], PDO::PARAM_INT);
		$stmt->bindParam(":mensaje", $datos2["mensaje"], PDO::PARAM_STR);

		if($stmt->execute()){
			return "ok";
		}



	}

	static public function mdlLikes($tabla, $datos){

		
        
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(post_id,user_id) VALUES (:user, :mensaje)");
		$stmt->bindParam(":user", $datos["user"], PDO::PARAM_INT);
		$stmt->bindParam(":mensaje", $datos["mensaje"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";
		}



	}

	static public function mdlInsta($tabla, $datos){

	
        
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_user,id_desafio,urls) VALUES (:id_user,:id_desafio,:urls)");
		$stmt->bindParam(":id_user", $datos["id_user"], PDO::PARAM_INT);
		$stmt->bindParam(":id_desafio", $datos["id_desafio"], PDO::PARAM_INT);
		$stmt->bindParam(":urls", $datos["url"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";
		}



	}
	
	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function mdlSeleccionarRegistros($tabla){



			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY avance DESC");

			$stmt->execute();

			return $stmt -> fetchAll();



		$stmt->close();

		$stmt = null;	

	}
	static public function mdlSeleccionarRegistrosp($tabla,$parametros){


		$stmt5 = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY avance DESC LIMIT :iniciar ,:cantidad");
		$stmt5->bindParam(":iniciar", $parametros['iniciar'], PDO::PARAM_INT);
		$stmt5->bindParam(":cantidad", $parametros['cantidad'], PDO::PARAM_INT);

		$stmt5->execute();

		return $stmt5 -> fetchAll();



	$stmt->close();

	$stmt = null;	

}
		static public function mdlSeleccionarUser($tabla,$id){



			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_user =$id");

			$stmt->execute();

			return $stmt -> fetch();



		$stmt->close();

		$stmt = null;	
		}

		static public function mdlSeleccionarAvance($tabla,$id){



			$stmt = Conexion::conectar()->prepare("SELECT id_desafio FROM $tabla WHERE id_user =$id");

			$stmt->execute();

			return $stmt -> fetchAll();



		$stmt->close();

		$stmt = null;	
		}


		static public function mdlSeleccionarPost($tabla){



			$stmt3 = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt3->execute();

			return $stmt3 -> fetchAll();



		$stmt->close();

		$stmt = null;	
		}
		static public function mdlSeleccionarComPost($tabla,$id,$idpost){



			$stmt6 = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_user =:id and id_post = :idpost");
			$stmt6->bindParam(":id", $id, PDO::PARAM_INT);
			$stmt6->bindParam(":idpost", $idpost, PDO::PARAM_INT);

			$stmt6->execute();

			return $stmt6 -> fetchAll();



		$stmt->close();

		$stmt = null;	
		}

		static public function mdlSeleccionarLikes($tabla,$id_user){



			$stmt2 = Conexion::conectar()->prepare("SELECT * FROM $tabla where user_id=$id_user");
			$stmt2->execute();

			return $stmt2 -> fetchAll();



		$stmt2->close();

		$stmt2 = null;	
		}




		static public function mdlSeleccionarLikes2($tabla,$id_user,$id_post){



		$stmt4 = Conexion::conectar()->prepare("SELECT * FROM $tabla where user_id=$id_user AND id_post=$post_id");
		$stmt4->execute();

		return $stmt4 -> fetchAll();



	$stmt4->close();

	$stmt4 = null;	
	}

		static public function mdlSeleccionarInsta($tabla,$id_user){



			$stmt4 = Conexion::conectar()->prepare("SELECT * FROM $tabla where id_user=$id_user");
			$stmt4->execute();

			return $stmt4 -> fetchAll();



		$stmt4->close();

		$stmt4 = null;	
		}
		
		static public function mdlSeleccionarDesc($tabla,$id_user){



			$stmt4 = Conexion::conectar()->prepare("SELECT * FROM $tabla where id_user=$id_user");
			$stmt4->execute();

			return $stmt4 -> fetchAll();



		$stmt4->close();

		$stmt4 = null;	
		}


	/*=============================================
	Actualizar Registro
	=============================================*/

	static public function mdlActualizarRegistro($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, email=:email, password=:password WHERE id = :id");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;	

	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	static public function mdlEliminarRegistro($tabla, $valor){
	
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt->bindParam(":id", $valor, PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;	

	}



}