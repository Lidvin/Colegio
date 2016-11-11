<?php
	require('Conexion.php');
	if (isset($_POST['iden1'])) {
	$id = $_POST['iden1'];
	$nom = $_POST['nom'];
	$tel = $_POST['tel'];
	$pro = $_POST['pro'];
	$sue = $_POST['sue'];
	$niv = $_POST['gra'];

	$query = "UPDATE PROFESOR SET NON='$nom', TEL='$tel', PRO='$pro', SUE='$sue' WHERE ID='$id';";

	$resultado = $mysqli->query($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Actualizar profesor</title>
</head>
<body>
	<center>
		<?php if($resultado>0){ ?>
		<h1>Profesor actualizdo</h1>
		<br><br>
		<center>
			<a href="profesor.php"><input class="btn btn-primary" type="submit" value="Inicio"></a>
		</center>
	<?php }else { ?>
		<h1>Profesor no actualizdo</h1>
		<br><br>
		<center>
			<a href="profesor.php"><input class="btn btn-primary" type="submit" value="Inicio"></a>
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