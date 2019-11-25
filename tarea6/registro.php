<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
</head>
<body>
	<form action="insertar.php" method="POST">
		<label for="txtNombres">Nombres:</label>
		<input type="text" name="txtNombres"><br>
		<label for="txtApellidos">Apellidos:</label>
		<input type="text" name="txtApellidos"><br>
		<label for="txtEmail">Email:</label>
		<input type="text" name="txtEmail"><br>
		<label for="txtLogin">Login:</label>
		<input type="text" name="txtLogin"><br>
		<label for="txtContraseña">Contraseña:</label>
		<input type="text" name="txtContraseña"><br>
		<label for="txtSexo">Sexo:</label>
		<input type="radio" name="txtSexo"  value="radio" /> F
		<input type="radio" name="txtSexo"  value="radio" /> M<br/>
		<input type="submit" value="Registrar">
		<form>
	</form>
	
</body>
</html>