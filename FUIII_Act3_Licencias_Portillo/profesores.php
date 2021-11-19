<?php 

include("con_db.php");

if (isset($_POST['dbLicencias'])) {
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Apellidos']) >= 1) {
	    $Nombre = trim($_POST['Nombre']);
		$Apellidos = trim($_POST['Apellidos']);
		$Telefono = trim($_POST['Telefono']);
	    $Matricula = trim($_POST['Matricula']);
		$RFC = trim($_POST['RFC']);
	    
	    $consulta = "INSERT INTO profesores(RFC, Nombre, Apellidos, Telefono, Matricula) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>