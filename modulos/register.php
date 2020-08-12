<?php

require_once "../controladores/formularios.controlador.php";
require_once "../modelos/formularios.modelo.php";
require_once "../modelos/conexion.php";

$error = "";
$user = "";
$pass = "";

if(isset($_REQUEST['fmail']) && $_REQUEST['fmail'] != "" &&
isset($_REQUEST['fpass']) && $_REQUEST['fpass'] != "" &&
isset($_REQUEST['fpassrep']) && $_REQUEST['fpassrep'] != "" &&
isset($_REQUEST['fname']) && $_REQUEST['fname'] != "" &&
isset($_REQUEST['frut']) && $_REQUEST['frut'] != "" &&
isset($_REQUEST['fliceo']) && $_REQUEST['fliceo'] != "" &&
isset($_REQUEST['fcomuna']) && $_REQUEST['fcomuna'] != "" &&
isset($_REQUEST['favatar']) && $_REQUEST['favatar'] != ""){
	if($_REQUEST['fpass'] != $_REQUEST['fpassrep']){
		$error = "El password repetido no coincide con el original";
	}
	else{
		$registroId = ControladorFormularios::ctrRegistro($_REQUEST['fmail'], $_REQUEST['fpass'], $_REQUEST['fname'], $_REQUEST['frut'], $_REQUEST['fliceo'], $_REQUEST['fcomuna'], $_REQUEST['finsta'], $_REQUEST['favatar'], "rutaprovisoria/imagenProvisoria.jpg"); 	
		echo $registroId;
	}
}
else{
	$error = "Debe completar todos los campos marcados con *";
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
					<td><input type='text' id='fmail' name='fmail' value = 'usuario@email.com'>*</td>
				</tr>
				<tr>
					<td>Contraseña</td>
					<td><input type='text' id='fpass' name='fpass' value = '1234'>*</td>
				</tr>
				<tr>
					<td>Repetir Contraseña</td>
					<td><input type='text' id='fpassrep' name='fpassrep' value = '1234'>*</td>
				</tr>
				<tr>
					<td>Nombre Real</td>
					<td><input type='text' id='fname' name='fname' value = 'Nombre'>*</td>
				</tr>
				<tr>
					<td>RUT</td>
					<td><input type='text' id='frut' name='frut' value = '11111111-1'>*</td>
				</tr>
				<tr>
					<td>Liceo o Colegio</td>
					<td><input type='text' id='fliceo' name='fliceo' value = 'Liceo 1'>*</td>
				</tr>
				<tr>
					<td>Comuna</td>
					<td><input type='text' id='fcomuna' name='fcomuna' value = 'Comuna'>*</td>
				</tr>
				<tr>
					<td>Instagram</td>
					<td><input type='text' id='finsta' name='finsta' value = 'Instagram'></td>
				</tr>
				<tr>
					<td>Nombre Avatar</td>
					<td><input type='text' id='favatar' name='favatar' value = 'Nombre Avatar'>*</td>
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
			<br><br><p style='color:red;'>$error</p>
		</body>
	</html>";

?>