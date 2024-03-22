<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="./login.css">
    <title>Crazy-Drivers</title>
</head>
<body>
<div class="login">
	<div class="container">
		<div class="logo">Crazy-Drivers</div>
		<form class="form" method="POST" action="login.php">
			<input type="usuario" class="input" placeholder="Usuario" name="usuario" required>
			<input type="password" class="input" placeholder="Contraseña" name="contraseña" required>
			<button type="submit" class="button">Iniciar sesión</button>
		</form>
		<p>Si aún no tienes cuenta puedes crearla en este link</p>
        <a href="registrar.php">Crear cuenta</a>
        </div>
	</div>
</body>
</html>