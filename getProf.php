<?php
	require('Conexion.php');

	echo "
	<span class='input-group-addon' id='sizing-addon2'>Profesor </span>
		<select name='prof' class='form-control'>";


		$grad = $_GET['id'];
		$query = "SELECT A.id, A.non FROM PROFESOR A INNER JOIN GRADO B ON A.id=B.profesor_id WHERE B.id='$grad'";

		?> <option value='0'>Seleccione profesor</option> <?php

		if ($resultado=$mysqli->query($query)) {
			while ($row=$resultado->fetch_assoc()) {
			?>
			<option value="<?php echo $row['id']; ?>"><?php echo $row['non']; ?></option>
			<?php
			}
		}
		echo "</select>";
?>

