<script>
	$(document).ready(function () {
		$('#modalIngreso').modal('toggle')
	});
</script>

<body>
	

<!-- Modal -->
<div class="modal fade" id="modalIngreso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ingreso</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="email">Correo Electronico:</label>
						<input type="email" class="form-control" id="email">
					</div>
					<div class="form-group">
						<label for="pwd">Contraseña:</label>
						<input type="password" class="form-control" id="pwd">
					</div>
					<div class="form-group form-check">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox"> Recordarme
						</label>
					</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>


			</div>

		</div>
	</div>
</div>
</body>