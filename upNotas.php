<?php
  require('Conexion.php');
  if (isset($_GET['ida']) && isset($_GET['idg'])) {
  $idA = $_GET['ida'];
  $idG = $_GET['idg'];

  $query = "SELECT A.COD, A.NOM, D.NIV, E.NON FROM ALUMNO A INNER JOIN ASIGNACION B ON A.ID=B.ALUMNO_ID INNER JOIN CONSOLIDADO C ON B.CONSOLIDADO_ID=C.ID INNER JOIN GRADO D ON B.GRADO_ID=D.ID INNER JOIN PROFESOR E ON D.PROFESOR_ID=E.ID WHERE B.CURSO_ID=1 AND A.ID='$idA' AND D.ID='$idG';";

  $resultado = $mysqli->query($query);
  $row=$resultado->fetch_assoc();
  $niv2 = 0;

  switch ($row['NIV']) {
    case '1':
      $niv2="Primero";
      break;
    case '2':
      $niv2="Segundo";
      break;
    case '3':
      $niv2="Tercero";
      break;
    case '4':
      $niv2="Cuarto";
      break;
    case '5':
      $niv2="Quinto";
      break;
    case '6':
      $niv2="Sexto";
      break;
    default:
      break;
    }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Sis | VN</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

      <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
  </head>

  <body">
   
  <div class="container">
  <h1 class="text-center">::: ACTUALIZAR NOTAS :::</h1>
    <form name="actualizar_alumno" method="POST" action="actualizaNotas.php">
          <div class="input-group col-lg-1 col-sm-1"></div>
          <div class="input-group col-lg-2 col-sm-2">
            <span class="input-group-addon" id="sizing-addon2">Código </span>
            <input name="cod1" type="text" class="form-control" placeholder="C987PAQ" value="<?php echo $row['COD'];?>" disabled />
          </div>
          <div class="input-group col-lg-1 col-sm-1"></div>
          <div class="input-group col-lg-7 col-sm-7">
            <span class="input-group-addon" id="sizing-addon2">Nombre completo - alumno </span>
            <input name="nom11" type="text" class="form-control" placeholder="Juan" value="<?php echo $row['NOM'];?>" disabled />
          </div>
          <div class="input-group col-lg-1 col-sm-1"></div>
          <br><br>
          <div class="input-group col-lg-1 col-sm-1"></div>
          <div class="input-group col-lg-2 col-sm-2">
            <span class="input-group-addon" id="sizing-addon2">Grado </span>
            <input name="cod1" type="text" class="form-control" placeholder="C987PAQ" value="<?php echo $niv2; ?>" disabled />
          </div>
          
          <div class="input-group col-lg-1 col-sm-1"></div>
          
          <div class="input-group col-lg-7 col-sm-7">
            <span class="input-group-addon" id="sizing-addon2">Profesor </span>
            <input name="nom11" type="text" class="form-control" placeholder="Juan" value="<?php echo $row['NON'];?>" disabled />
          </div>
          <div class="input-group col-lg-1 col-sm-1"></div>
          <br><br><br>
          <div class="input-group col-lg-2 col-sm-2"></div>
          <div class="input-group col-lg-8 col-sm-8">
              <table class="table table-bordered">
                <thead align="center">
                  <tr class="active">
                    <th class="text-center">#</th>
                    <th class="text-center">Asignatura</th>
                    <th class="text-center">Nota 1</th>
                    <th class="text-center">Nota 2</th>
                    <th class="text-center">Nota 3</th>
                    <th class="text-center">Nota 4</th>
                    <th class="text-center">Promedio</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $query2 = "SELECT F.NOM, C.ID AS IDCON, C.N1, C.N2, C.N3, C.N4, C.PRO FROM ALUMNO A INNER JOIN ASIGNACION B ON A.ID=B.ALUMNO_ID INNER JOIN CONSOLIDADO C ON B.CONSOLIDADO_ID=C.ID INNER JOIN CURSO F ON B.CURSO_ID=F.ID INNER JOIN GRADO D ON B.GRADO_ID=D.ID INNER JOIN PROFESOR E ON D.PROFESOR_ID=E.ID WHERE A.ID='$idA';";
                  $cont2 = 0;
                  $c = 1;
                  $co = 1;

                  if ($resultado2=$mysqli->query($query2)) {
                    while ($row2=$resultado2->fetch_assoc()) {
                      $cont2++;
                    ?>
                    <tr>
                      <td><?php echo $cont2 ?></td>
                      <td><?php echo $row2['NOM']; ?>
                      
                      <input type="text" class="input" id="combo1"  name="cons<?php echo $co; ?>" value="<?php echo $row2['IDCON']; ?>" size="1"></td>
                      
                      <td align="center"><input type="text" class="input" id="combo"  name="nota<?php echo $c; ?>" value="<?php echo $row2['N1']; ?>" size="1"></td>
                      <?php $c++; ?>
                      <td align="center"><input type="text" class="input" id="combo"  name="nota<?php echo $c; ?>" value="<?php echo $row2['N2']; ?>" size="1"></td>
                      <?php $c++; ?>
                      <td align="center"><input type="text" class="input" id="combo"  name="nota<?php echo $c; ?>" value="<?php echo $row2['N3']; ?>" size="1"></td>
                      <?php $c++; ?>
                      <td align="center"><input type="text" class="input" id="combo"  name="nota<?php echo $c; ?>" value="<?php echo $row2['N4']; ?>" size="1"></td>
                      <?php $c++; ?>
                      <td class="text-center"><?php echo $row2['PRO']; ?>
                      <?php $co++; ?>
                    </tr>
                    <?php
                    $niv = "";
                    }
                  }
                ?>
                </tbody>
              </table>
          </div>
          <div class="input-group col-lg-2 col-sm-2"></div>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

          <div class="pull-right container">
            <input class="btn btn-primary" type="submit" name="actualizar" value="Guardar Cambios">
          </div>
        </form>
        <a href="notas.php"><input class="btn btn-default pull-right" type="submit" name="" value="Cancelar"></a>
  </div>

<hr>
<br><br>

  <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>

    <script src="js/jquery.easing.min.js"></script>
    <script src="js/link-hover.js"></script>


     <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        wow = new WOW(
          {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0          // default
          }
        )
        wow.init();
    </script>

    <script type="text/javascript">
      $(".dropdown-menu li a").click(function(){
      var selText = $(this).text();
      $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
    });

    $("#btnSearch").click(function(){
      alert($('.btn-select').text()+", "+$('.btn-select2').text());
    });
        </script>


        <?php
}else { ?>
  <center>
      <h1>Informacion nula</h1>
      <a href="alumno.php"><input class="btn btn-primary" type="submit" value="Inicio"></a>
    </center>
    <?php
}
?>

<style>
#combo{
  font-family: Tahoma, Verdana, Arial;
  font-size: 15px;
  color: #707070;
  background-color: #FFFFFF;
  border-width:0;
}

#combo1{
  font-family: Tahoma, Verdana, Arial;
  font-size: 0px;
  color: #707070;
  background-color: #FFFFFF;
  border-width:0;
}
</style> 

  </body>
</html>