<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>¡Alta de Empleados!</h1>
    	<input type="text" name="Matricula" placeholder="Matricula">
    	<input type="Telefono" name="Telefono" placeholder="Telefono">
		<input type="RFC" name="RFC" placeholder="RFC">
		<input type="Apellidos" name="Apellidos" placeholder="Apellidos">
		<input type="Nombre" name="Nombre" placeholder="Nombre">
    	<input type="submit" name="dbLicencias">
    </form>
        <?php 
        include("profesores.php");
        ?>
</body>
</html>