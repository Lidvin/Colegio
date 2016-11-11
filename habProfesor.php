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
	<title>Habilitar profesor</title>
</head>
<body>
	<center>
		<?php if($resultado>0){ ?>
		<h1>Profesor habilitado</h1>
		<br><br>
		<center>
			<a href="profesor.php"><input class="btn btn-primary" type="submit" value="Inicio"></a>
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
		<h1>Profesor no habilitado</h1>
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