<?php
	require('Conexion.php');
	if (isset($_POST['cod'])) {
	$cod = $_POST['cod'];
	$nom1 = $_POST['nom1'];
	$nom2 = $_POST['nom2'];
	$ape1 = $_POST['ape1'];
	$ape2 = $_POST['ape2'];
	$fol = $_POST['fol'];
	$lib = $_POST['lib'];
	$act = $_POST['act'];
	$dir = $_POST['dir'];
	$sex = $_POST['sex'];
	$est = $_POST['est'];
	$fec = $_POST['fec'];
	$enc = $_POST['enc'];
	$dpi = $_POST['dpi'];
	$dep = $_POST['dep'];
	$gra = $_POST['gra'];
	$prof = isset($_POST['prof']) ? $_POST['prof'] : '';
	$nomCompleto = $ape1+' '+$ape2+' '+$nom1+' '+$nom2;

	$query = "INSERT INTO ALUMNO VALUES(77,'$cod','Hola mundo','$fol','$lib','$act','$dir','$sex',1,'$est','$fec','$enc','$dpi','$dep');";

	$resultado = $mysqli->query($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Guardar alumno</title>
</head>
<body>
	<center>
		<?php if($resultado>0){ ?>
		<h1>Alumno guardado</h1>
		<br><br>
		<center>
			<a href="alumno.php"><input class="btn btn-primary" type="submit" value="Inicio"></a>
			<a href="addAlumno.php"><input class="btn btn-primary" type="submit" value="Guardar otro alumno"></a>
		</center>
	<?php }else { ?>
		<h1>Alumno no guardado</h1>
		<br><br>
		<center>
			<a href="addAlumno.php"><input class="btn btn-primary" type="submit" value="Regresar"></a>
		</center>
	</center>
	<?php } 
	}else{?>
		<center>
			<h1>Informacion nula</h1>
			<a href="alumno.php"><input class="btn btn-primary" type="submit" value="Inicio"></a>
		</center>
	<?php	}?>
</body>
</html>