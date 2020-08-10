<script>
	$(document).ready(function () {
		$('#modalRegistro').modal('toggle')
	});
</script>

<body>
	

<!-- Modal -->
<div class="modal fade" id="modalRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Registro</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="d-flex justify-content-center text-center">

					<form class="p-5 bg-light" method="post">

						<div class="form-group">

							<label for="email">Correo electrónico:</label>

							<div class="input-group">

								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fas fa-envelope"></i>
									</span>
								</div>

								<input type="email" class="form-control" id="email" name="registroEmail">

							</div>

						</div>

						<div class="form-group">
							<label for="pwd">Contraseña:</label>

							<div class="input-group">

								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fas fa-lock"></i>
									</span>
								</div>

								<input type="password" class="form-control" id="pwd" name="registroPassword">

							</div>

						</div>

						<div class="form-group">
							<label for="pwd">Repetir Contraseña:</label>

							<div class="input-group">

								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fas fa-lock"></i>
									</span>
								</div>

								<input type="password" class="form-control" id="pwd" name="registroPasswordRep">

							</div>

						</div>

						<div class="form-group">
							<label for="nombre">Nombre Real Usuario:</label>

							<div class="input-group">

								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fas fa-user"></i>
									</span>
								</div>

								<input type="text" class="form-control" id="nombre" name="registroNombre">

							</div>

						</div>

						<div class="form-group">
							<label for="nombre">Rut:</label>

							<div class="input-group">

								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fa fa-id-card" aria-hidden="true"></i>
									</span>
								</div>

								<input type="text" class="form-control" id="nombre" name="registroRut">

							</div>

						</div>

						<div class="form-group">
							<label for="nombre">Liceo o Colegio</label>

							<div class="input-group">

								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									</span>
								</div>

								<input type="text" class="form-control" id="nombre" name="registroLiceo">

							</div>

						</div>
						<div class="form-group">
							<label for="nombre">Comuna</label>

							<div class="input-group">

								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									</span>
								</div>

								<input type="text" class="form-control" id="nombre" name="registroComuna">

							</div>

						</div>



						<div class="form-group">
							<label for="nombre">Instagram</label>

							<div class="input-group">

								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									</span>
								</div>

								<input type="text" class="form-control" id="nombre" name="registroInstagram">

							</div>

						</div>


						<div class="form-group">
							<label for="nombre">Nombre Avatar</label>

							<div class="input-group">

								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									</span>
								</div>

								<input type="text" class="form-control" id="nombre" name="registroAvatar">

							</div>

						</div>
						<div class="form-group">
							<label for="nombre">Avatar</label>

							<div class="input-group">


								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fa fa-file" aria-hidden="true"></i>
									</span>
								</div>

								<div class="custom-file">
									<input type="file" class="custom-file-input" id="inputGroupFile01"
										aria-describedby="inputGroupFileAddon01">
									<label class="custom-file-label" for="inputGroupFile01">Seleccione Avatar</label>
								</div>
							</div>

						</div>

				</div>





			</div>

			<?php 

							

							$registro = ControladorFormularios::ctrRegistro();

							if($registro == "ok"){
									//borrar cache
									
								echo '<script>

									if ( window.history.replaceState ) {

										window.history.replaceState( null, null, window.location.href );

									}

								</script>';

								echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
							}


							?>

			<button type="submit" class="btn btn-primary">Enviar</button>

			</form>

		</div>




	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	</div>
</div>
</div>
</div>
</body>