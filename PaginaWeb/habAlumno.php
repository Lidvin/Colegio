<?php
	require('Conexion.php');
	if (isset($_GET['ida'])) {
	$id = $_GET['ida'];

	$query = "";

	$resultado = $mysqli->query($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Habilitar alumno</title>
</head>
<body>
	<center>
		<?php if($resultado>0){ ?>
		<h1>Alumno habilitado</h1>
		<br><br>
		<center>
			<a href="alumno.php"><input class="btn btn-primary" type="submit" value="Inicio"></a>
		</center>
	<?php }else { 

		/*if ($mysqli->error) {
		    try {    
		        throw new Exception("MySQL error $mysqli->error <br> Query:<br> $query", $mysqli->errno);    
		    } catch(Exception $e ) {
		        echo "Error No: ".$e->getCode(). " - ". $e->getMessage() . "<br >";
		        echo nl2br($e->getTraceAsString());
		    }
		}*/
?>
		<h1>Alumno no habilitado</h1>
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