<?php
//TODO: envío de nuevo pass 

echo "<!DOCTYPE html>
<html>
	<head>
		<style></style>
	</head>
	<body>
		<h1>Recuperar Contraseña</h1>
		<h3>Ingrese su correo electrónico y se le enviará su nueva contraseña</h3>
		<form action='/recover.php'>
			<table>
				<tr>
					<td>Correo Electrónico</td>
				</tr>
				<tr>
					<td>
						<input type='text' id='femail' name='femail' value = 'usuario@email.com'>
					</td>
				</tr>
				<tr>
					<td>
					    <input type='submit' value='Enviar Password'>
					</td>
				</tr>
			</table>
		</form>
			<button onclick='window.location.href=\"/modulos/login.php\";'>Volver</button>
	</body>
</html>";

?>