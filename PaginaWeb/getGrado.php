<?php
	require('Conexion.php');

	echo "
		<span class='input-group-addon' id='sizing-addon2'>Grado </span>
        
        <select onChange='getProf(this.value);' name='gra' class='form-control' required />
        
        	<option value='0'>Seleccione grado</option>?>

	";

		$query = "SELECT id, niv FROM GRADO ORDER BY id ASC;";
		$niv = "";

		if ($resultado=$mysqli->query($query)) {
			while ($row=$resultado->fetch_assoc()) {
				switch ($row['niv']) {
					case '1':
						$niv="Primero";
						break;
					case '2':
						$niv="Segundo";
						break;
					case '3':
						$niv="Tercero";
						break;
					case '4':
						$niv="Cuarto";
						break;
					case '5':
						$niv="Quinto";
						break;
					case '6':
						$niv="Sexto";
						break;
					default:
						break;
				}
			?>
			<option value="<?php echo $row['id']; ?>"><?php echo $niv; ?></option>
			<?php
			$niv = "";
			}
		}
		echo "</select>";
?>