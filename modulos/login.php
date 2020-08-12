<?php

require_once "../controladores/formularios.controlador.php";
require_once "../modelos/formularios.modelo.php";
require_once "../modelos/conexion.php";

$error = "";
$user = "";
$pass = "";

if(isset($_REQUEST['fuser']) && $_REQUEST['fuser'] != ""){
	if(isset($_REQUEST['fpass']) && $_REQUEST['fpass'] != ""){
		$user = $_REQUEST['fuser'];
		$pass = $_REQUEST['fpass'];
		$userId = ControladorFormularios::ctrLogin($user, $pass);
		if(count($userId) > 0){
			$userDatos = $userId[0];
			$idUser = $userDatos['id_user'];
			header("Location: ../index.php?pagina=inicio&npag=1&id_user=$idUser");
		}
		else{
			$error = "El RUT/Password no corresponde";
		}
	}
	else{
		$error = "Debe ingresar el password para ingresar";
	}
}

echo "<html>
	<head>
		<style>
		</style>
	</head>
	<body>
		<h1>Login</h1>
			<h3>Ingrese su nombre de usuario y contraseña</h3>
			<form action='/modulos/login.php' method = 'post' >
			<table>
				<tr>
					<td>RUT</td>
					<td><input type='text' id='fuser' name='fuser' value = '17786730-6'></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type='text' id='fpass' name='fpass' value = '1234567890'></td>
				</tr>
				<tr>
					<td></td>
					<td><input type='submit' value='Ingresar'></td>
				</tr>
			</table>
			</form>
			<button onclick='window.location.href=\"/modulos/register.php\";'>Registrarse</button>
			<button onclick='window.location.href=\"/modulos/recover.php\";'>Recuperar Password</button>
			<br><br><p style='color:red;'>$error</p>
		</body>
	</html>";

?>