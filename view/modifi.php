<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<form action="/sesion/index.php?action=modificar" method="POST">
DNI: <input type='text' name='dni' value=<?php echo($_GET['dni']);?>>
<br>Nombre: <input type='text' name='nombre' value=<?php echo($_GET['nombre']);?>>
<br>Clave: <input type='text' name='clave' value=<?php echo($_GET['clave']);?>>
<input type='submit' value="Modificar">
</form>

</body>
</html>
