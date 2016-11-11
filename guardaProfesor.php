<?php
	require('Conexion.php');
	if (isset($_POST['nom'])) {
	$nom = $_POST['nom'];
	$tel = $_POST['tel'];
	$pro = $_POST['pro'];
	$sue = $_POST['sue'];
	$niv = $_POST['gra'];

	$query = "INSERT INTO PROFESOR VALUES(50, '$nom', '$tel','$pro','$sue');";

	$resultado = $mysqli->query($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Guardar profesor</title>
</head>
<body>
	<center>
		<?php if($resultado>0){ ?>
		<h1>Profesor guardado</h1>
		<br><br>
		<center>
			<a href="profesor.php"><input class="btn btn-primary" type="submit" value="Inicio"></a>
			<a href="addProfesor.php"><input class="btn btn-primary" type="submit" value="Guardar otro profesor"></a>
		</center>
	<?php }else { ?>
		<h1>Profesor no guardado</h1>
		<br><br>
		<center>
			<a href="addProfesor.php"><input class="btn btn-primary" type="submit" value="Regresar"></a>
		</center>
	</center>
	<?php } 
	}else{?>
		<center>
			<h1>Informacion nula</h1>
			<a href="profesor.php"><input class="btn btn-primary" type="submit" value="Inicio"></a>
		</center>
	<?php	}?>
</body>
</html>