<h2 class="gris">Mis Datos</h2>

	<form method="POST" name="form_data" action="http://localhost/correo/app/Http/Controllers/Controller.php">

		<label>Nombre: </label><input class="inputform" type="email" value="<?php echo $_SESSION['usuario']; ?>" readonly>
		<label>Genero: </label><input class="inputform" type="text" value="<?php echo $_SESSION['genero']; ?>" readonly>
		<label>Email: </label><input class="inputform" type="text" value="<?php echo $_SESSION['email']; ?>" readonly>
		<label>Contraseña: </label><input class="inputform" type="text" value="<?php echo $_SESSION['pass']; ?>" readonly>

	</form>