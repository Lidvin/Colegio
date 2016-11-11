<?php
	require('Conexion.php');
	if (isset($_POST['cons1'])) {
	$n1=$_POST['nota1'];
	$n2=$_POST['nota2'];
	$n3=$_POST['nota3'];
	$n4=$_POST['nota4'];
	$n5=$_POST['nota5'];
	$n6=$_POST['nota6'];
	$n7=$_POST['nota7'];
	$n8=$_POST['nota8'];
	$n9=$_POST['nota9'];
	$n10=$_POST['nota10'];
	$n11=$_POST['nota11'];
	$n12=$_POST['nota12'];
	$n13=$_POST['nota13'];
	$n14=$_POST['nota14'];
	$n15=$_POST['nota15'];
	$n16=$_POST['nota16'];
	$n17=$_POST['nota17'];
	$n18=$_POST['nota18'];
	$n19=$_POST['nota19'];
	$n20=$_POST['nota20'];
	$n21=$_POST['nota21'];
	$n22=$_POST['nota22'];
	$n23=$_POST['nota23'];
	$n24=$_POST['nota24'];
	$n25=$_POST['nota25'];
	$n26=$_POST['nota26'];
	$n27=$_POST['nota27'];
	$n28=$_POST['nota28'];
	$n29=$_POST['nota29'];
	$n30=$_POST['nota30'];
	$n31=$_POST['nota31'];
	$n32=$_POST['nota32'];
	$n33=$_POST['nota33'];
	$n34=$_POST['nota34'];
	$n35=$_POST['nota35'];
	$n36=$_POST['nota36'];
	$n37=$_POST['nota37'];
	$n38=$_POST['nota38'];
	$n39=$_POST['nota39'];
	$n40=$_POST['nota40'];
	$n41=$_POST['nota41'];
	$n42=$_POST['nota42'];
	$n43=$_POST['nota43'];
	$n44=$_POST['nota44'];

	$pro1 = ($n1+$n2+$n3+$n4)/4;
	$pro2 = ($n5+$n6+$n7+$n8)/4;
	$pro3 = ($n9+$n10+$n11+$n12)/4;
	$pro4 = ($n13+$n14+$n15+$n16)/4;
	$pro5 = ($n17+$n18+$n19+$n20)/4;
	$pro6 = ($n21+$n22+$n23+$n24)/4;
	$pro7 = ($n25+$n26+$n27+$n28)/4;
	$pro8 = ($n29+$n30+$n31+$n32)/4;
	$pro9 = ($n33+$n34+$n35+$n36)/4;
	$pro10 = ($n37+$n38+$n39+$n40)/4;
	$pro11 = ($n41+$n42+$n43+$n44)/4;

	$con1 = $_POST['cons1'];
	$con2 = $_POST['cons2'];
	$con3 = $_POST['cons3'];
	$con4 = $_POST['cons4'];
	$con5 = $_POST['cons5'];
	$con6 = $_POST['cons6'];
	$con7 = $_POST['cons7'];
	$con8 = $_POST['cons8'];
	$con9 = $_POST['cons9'];
	$con10 = $_POST['cons10'];
	$con11 = $_POST['cons11'];

	$query1 = "UPDATE CONSOLIDADO SET N1='$n1', N2='$n2', N3='$n3', N4='$n4', PRO='$pro1' WHERE ID='$con1';";
	$query2 = "UPDATE CONSOLIDADO SET N1='$n5', N2='$n6', N3='$n7', N4='$n8', PRO='$pro2' WHERE ID='$con2';";
	$query3 = "UPDATE CONSOLIDADO SET N1='$n9', N2='$n10', N3='$n11', N4='$n12', PRO='$pro3' WHERE ID='$con3';";
	$query4 = "UPDATE CONSOLIDADO SET N1='$n13', N2='$n14', N3='$n15', N4='$n16', PRO='$pro4' WHERE ID='$con4';";
	$query5 = "UPDATE CONSOLIDADO SET N1='$n17', N2='$n18', N3='$n19', N4='$n20', PRO='$pro5' WHERE ID='$con5';";
	$query6 = "UPDATE CONSOLIDADO SET N1='$n21', N2='$n22', N3='$n23', N4='$n24', PRO='$pro6' WHERE ID='$con6';";
	$query7 = "UPDATE CONSOLIDADO SET N1='$n25', N2='$n26', N3='$n27', N4='$n28', PRO='$pro7' WHERE ID='$con7';";
	$query8 = "UPDATE CONSOLIDADO SET N1='$n29', N2='$n30', N3='$n31', N4='$n32', PRO='$pro8' WHERE ID='$con8';";
	$query9 = "UPDATE CONSOLIDADO SET N1='$n33', N2='$n34', N3='$n35', N4='$n36', PRO='$pro9' WHERE ID='$con9';";
	$query10 = "UPDATE CONSOLIDADO SET N1='$n37', N2='$n38', N3='$n39', N4='$n40', PRO='$pro10' WHERE ID='$con10';";
	$query11 = "UPDATE CONSOLIDADO SET N1='$n41', N2='$n42', N3='$n43', N4='$n44', PRO='$pro11' WHERE ID='$con11';";

	$resultado1 = $mysqli->query($query1);
	$resultado2 = $mysqli->query($query2);
	$resultado3 = $mysqli->query($query3);
	$resultado4 = $mysqli->query($query4);
	$resultado5 = $mysqli->query($query5);
	$resultado6 = $mysqli->query($query6);
	$resultado7 = $mysqli->query($query7);
	$resultado8 = $mysqli->query($query8);
	$resultado9 = $mysqli->query($query9);
	$resultado10 = $mysqli->query($query10);
	$resultado11 = $mysqli->query($query11);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Actualizar notas</title>
</head>
<body>
	<center>
		<?php if($resultado1>0 && $resultado2>0 && $resultado3>0 && $resultado4>0 && $resultado5>0 && $resultado6>0 && $resultado7>0 && $resultado8>0 && $resultado9>0 && $resultado10>0 && $resultado11>0){ ?>
		<h1>Notas actualizadas</h1>
		<br><br>
		<center>
			<a href="notas.php"><input class="btn btn-primary" type="submit" value="Inicio"></a>
		</center>
	<?php }else { 


		if ($mysqli->error) {
		    try {    
		        throw new Exception("MySQL error $mysqli->error <br> Query:<br> $query", $mysqli->errno);    
		    } catch(Exception $e ) {
		        echo "Error No: ".$e->getCode(). " - ". $e->getMessage() . "<br >";
		        echo nl2br($e->getTraceAsString());
		    }
		}


		?>
		<h1>Notas no actualizadas</h1>
		<br><br>
		<center>
			<a href="notas.php"><input class="btn btn-primary" type="submit" value="Inicio"></a>
		</center>
	</center>
	<?php } 
	}else{?>
		<center>
			<h1>Informacion nula</h1>
			<a href="notas.php"><input class="btn btn-primary" type="submit" value="Inicio"></a>
		</center>
	<?php	}?>
</body>
</html>