<?php
	require('Conexion.php');
	if (isset($_POST['iden1'])) {
	$id = $_POST['iden1'];
	$cod = $_POST['cod1'];
	$nom1 = $_POST['nom11'];
	$fol = $_POST['fol1'];
	$lib = $_POST['lib1'];
	$act = $_POST['act1'];
	$dir = $_POST['dir1'];
	$sex = $_POST['sex1'];
	$est = $_POST['est1'];
	$fec = $_POST['fec1'];
	$enc = $_POST['enc1'];
	$dpi = $_POST['dpi1'];
	$dep = $_POST['dep1'];
	$gra = $_POST['gra'];
	$prof = isset($_POST['prof']) ? $_POST['prof'] : '';

	$query = "UPDATE ALUMNO SET COD='$cod', NOM='$nom1', FOL='$fol', LIB='$lib', ACT='$act', DIR='$dir', SEX='$sex', BEC='$est', ENC='$enc', DPI='$dpi' WHERE ID='$id';";

	$resultado = $mysqli->query($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Actualizar alumno</title>
</head>
<body>
	<center>
		<?php if($resultado>0){ ?>
		<h1>Alumno actualizado</h1>
		<br><br>
		<center>
			<a href="alumno.php"><input class="btn btn-primary" type="submit" value="Inicio"></a>
		</center>
	<?php }else { ?>
		<h1>Alumno no actualizado</h1>
		<br><br>
		<center>
			<a href="alumno.php"><input class="btn btn-primary" type="submit" value="Inicio"></a>
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