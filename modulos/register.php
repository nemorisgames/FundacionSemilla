<?php

require_once "../modelos/conexion.php";

$error = "";
$user = "";
$pass = "";

if(isset($_REQUEST['fuser']) && $_REQUEST['fuser'] != ""){
	if(isset($_REQUEST['fpass']) && $_REQUEST['fpass'] != ""){
		$user = $_REQUEST['fuser'];
		$pass = $_REQUEST['fpass'];
		
		
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
			<form action='/modulos/register.php'>
			<table>
				<tr>
					<td>Correo Electrónico</td>
					<td><input type='text' id='fmail' name='fmail' value = 'usuario@email.com'></td>
				</tr>
				<tr>
					<td>Contraseña</td>
					<td><input type='text' id='fpass' name='fpass'></td>
				</tr>
				<tr>
					<td>Repetir Contraseña</td>
					<td><input type='text' id='fpassrep' name='fpassrep'></td>
				</tr>
				<tr>
					<td>Nombre Real</td>
					<td><input type='text' id='fname' name='fname'></td>
				</tr>
				<tr>
					<td>RUT</td>
					<td><input type='text' id='frut' name='frut'></td>
				</tr>
				<tr>
					<td>Liceo o Colegio</td>
					<td><input type='text' id='fliceo' name='fliceo'></td>
				</tr>
				<tr>
					<td>Comuna</td>
					<td><input type='text' id='fcomuna' name='fcomuna'></td>
				</tr>
				<tr>
					<td>Instagram</td>
					<td><input type='text' id='finsta' name='finsta'></td>
				</tr>
				<tr>
					<td>Nombre Avatar</td>
					<td><input type='text' id='favatar' name='favatar'></td>
				</tr>
				<tr>
					<td>Foto</td>
					<td><input type='file' name='fimage' id='fimage'></td>
				</tr>
				<tr>
					<td></td>
					<td><input type='submit' value='Registrarse'></td>
				</tr>
			</table>
			</form>
			<button onclick='window.location.href=\"/modulos/login.php\";'>Volver</button>
			<br><br><p>$error</p>
		</body>
	</html>";

?>