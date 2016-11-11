<?php
  require('Conexion.php');
  if (isset($_GET['ida']) && isset($_GET['idg'])) {
  $idA = $_GET['ida'];
  $idG = $_GET['idg'];

  $query = "SELECT A.ID AS IDA, A.NON, A.TEL, A.PRO, A.SUE, B.ID AS IDG, B.NIV FROM GRADO B INNER JOIN PROFESOR A ON B.PROFESOR_ID=A.ID WHERE A.ID='$idA' AND B.ID='$idG';";

  $resultado = $mysqli->query($query);
  $row=$resultado->fetch_assoc();
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

    <body>

  <div class="container">
    <h1 class="text-center">::: ACTUALIZAR PROFESOR :::</h1>
    <form name="nuevo_alumno" method="POST" action="actualizaProfesor.php">
          <br>
          <div class="input-group col-lg-6 col-sm-6">
            <span class="input-group-addon" id="sizing-addon2">Nombre Completo </span>
            <input name="nom" type="text" class="form-control" placeholder="Juan José Pérez Barrios" value="<?php echo $row['NON'];?>" required />
          </div>
          <div class="input-group col-lg-6 col-sm-6">
            <span class="input-group-addon" id="sizing-addon2">Profesion </span>
            <input name="pro" type="text" class="form-control" placeholder="Maestro de Educacion Primaria Urbana" value="<?php echo $row['PRO'];?>" required />
          </div>
          <br><br><br>
          
          <div class="input-group col-lg-3 col-sm-3">
            <span class="input-group-addon" id="sizing-addon2">Telefono </span>
            <input name="tel" type="text" class="form-control" placeholder="+502 40557898" value="<?php echo $row['TEL'];?>" required />
          </div>
          <div class="input-group col-lg-3 col-sm-3">
            <span class="input-group-addon" id="sizing-addon2">Sueldo </span>
            <input name="sue" type="text" class="form-control" placeholder="2560.75" value="<?php echo $row['SUE'];?>" required />
          </div>

          <div class="input-group col-lg-3 col-sm-3">
            <span class='input-group-addon' id='sizing-addon2'>Grado </span>
              <select name='gra' class='form-control'/>
              <?php
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
                      }
                      }
              ?>
                 <option value="<?php echo $row['IDG']; ?>"><?php echo $niv; ?></option>
            <?php

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
          </div>
          <div class="input-group col-lg-3 col-sm-3">
            <span class="input-group-addon" id="sizing-addon2">Identificador: </span>
            <input name="iden1" type="text" class="form-control" placeholder="C987PAQ" value="<?php echo $_GET['ida'];?>">
          </div>
          
          <br><br><br>

          <div class="pull-right container">
            <input class="btn btn-primary" type="submit" name="enviar" value="Actualizar">
          </div>

        </form>
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

    <script>
      $(document).ready(function(){
          $(".nav-tabs a").click(function(){
              $(this).tab('show');
          });
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

  </body>
</html>