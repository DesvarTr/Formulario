<!DOCTYPE html>
<html>
<head>

	<title>Formulario</title>

	<style>
		form {
			border-style: solid;
			border-width: 2px;
			width: 300px;
			padding-left: 50px;
			padding-top: 30px;
			padding-bottom: 30px;
			padding-right: 10px;
			align-items: center;
			margin-top: 175px;
			margin-left: 760px;

		}

	</style>

</head>

<body>

	<form action="page.php" method="post">

		<h1>
			Bienvenido al formulario goat
		</h1>

		Nombre: <input type="text" name="nombre"><br><br>

		Apellido: <input type="text" name="apellido"><br><br>

		Correo: <input type="text" name="correo"><br><br>
	
		Dirección: <input type="text" name="direccion"><br><br>

		<label>Género:</label><br>
		<input type="radio" id="masculino" name="genero" value="Masculino">
		<label for="masculino">Masculino</label><br>
		<input type="radio" id="femenino" name="genero" value="Femenino">
		<label for="femenino">Femenino</label><br><br>

		<input type="submit" value="Enviar">

	</form>

</body>
</html>