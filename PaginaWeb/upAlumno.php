<?php
  require('Conexion.php');
  if (isset($_GET['ida']) && isset($_GET['idg'])) {
  $idA = $_GET['ida'];
  $idG = $_GET['idg'];

  $query = "SELECT B.COD, B.NOM AS NALUM, B.FOL, B.LIB, B.ACT, B.DIR, B.SEX, B.HAB, B.BEC, B.FEC, B.ENC, B.DPI, A.NOM AS NDEP, A.ID AS IDDEP, D.ID AS IDGRA, D.NIV, E.NON FROM DEPARTAMENTO A INNER JOIN ALUMNO B ON A.ID=B.DEPARTAMENTO_ID INNER JOIN ASIGNACION C ON B.ID=C.ALUMNO_ID INNER JOIN  GRADO D ON C.GRADO_ID=D.ID INNER JOIN PROFESOR E ON D.PROFESOR_ID=E.ID WHERE C.CURSO_ID=1 AND D.ID='$idG' AND B.ID='$idA';";

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

  <body onload="getGrado();">
   
  <div class="container">
  <h1 class="text-center">::: ACTUALIZAR ALUMNO :::</h1>
    <form name="actualizar_alumno" method="POST" action="actualizaAlumno.php">
          <div class="input-group col-lg-3 col-sm-3">
            <span class="input-group-addon" id="sizing-addon2">Código </span>
            <input name="cod1" type="text" class="form-control" placeholder="C987PAQ" value="<?php echo $row['COD'];?>">
          </div>
          
          <div class="input-group col-lg-5 col-sm-5"></div>

          <div class="input-group col-lg-4 col-sm-4">
              <span class="input-group-addon" id="sizing-addon2">Fecha inscripción-alumno: </span>
                <input name="fec1" type="text" class="form-control" value="<?php echo $row['FEC'];?>">
          </div>
          
          <br><br><br>
          
          <div class="input-group col-lg-6 col-sm-6">
            <span class="input-group-addon" id="sizing-addon2">Nombre completo - estudiante: </span>
            <input name="nom11" type="text" class="form-control" placeholder="Juan" value="<?php echo $row['NALUM'];?>">
          </div>
          <div class="input-group col-lg-4 col-sm-4"></div>
          <div class="input-group col-lg-2 col-sm-2">
            <span class="input-group-addon" id="sizing-addon2">Identificador: </span>
            <input name="iden1" type="text" class="form-control" placeholder="C987PAQ" value="<?php echo $_GET['ida'];?>">
          </div>

          <br><br><br>
          
          <div class="input-group col-lg-2 col-sm-2">
            <span class="input-group-addon" id="sizing-addon2">Folio </span>
            <input name="fol1" type="text" class="form-control" placeholder="A123" value="<?php echo $row['FOL'];?>">
          </div>
          <div class="input-group col-lg-2 col-sm-2">
            <span class="input-group-addon" id="sizing-addon2">Libro </span>
            <input name="lib1" type="text" class="form-control" placeholder="911" value="<?php echo $row['LIB'];?>">
          </div>
          <div class="input-group col-lg-2 col-sm-2">
            <span class="input-group-addon" id="sizing-addon2">Acta </span>
            <input name="act1" type="text" class="form-control" placeholder="123" value="<?php echo $row['ACT'];?>">
          </div>
          <div class="input-group col-lg-6 col-sm-6">
            <span class="input-group-addon" id="sizing-addon2">Dirección </span>
            <input name="dir1" type="text" class="form-control" placeholder="Caserío Villa Nueva, Malacatán, S.M." value="<?php echo $row['DIR'];?>">
          </div>

          <br><br><br>
          
          <div class="btn-group input-group col-lg-2 col-sm-2">
            <span class="input-group-addon" id="sizing-addon2">Sexo </span>
            <select name="sex1" class="form-control">
              <?php if ($row['SEX']=='M') { ?>
                 <option value="M">M</option>
                <option value="F">F</option>
               <?php } else { ?>
                <option value="F">M</option>
                <option value="M">F</option>
                <?php }?>
            </select>
          </div>

          <div class="btn-group input-group col-lg-3 col-sm-3">
            <span class="input-group-addon" id="sizing-addon2">Estado </span>
            <select name="est1" class="form-control">
            <?php if ($row['BEC']=='0') { ?>
                 <option value="0">Normal</option>
                  <option value="1">Becado</option>
               <?php } else { ?>
                <option value="0">Becado</option>
                <option value="1">Normal</option>
                <?php }?>
            </select>
          </div>

          <div class="btn-group input-group input-group col-lg-4 col-sm-4">
            <span class="input-group-addon" id="sizing-addon2">Encargado </span>
            <input name="enc1" type="text" class="form-control" placeholder="Pérez Alvarado José Daniel" value="<?php echo $row['ENC'];?>">
          </div>

          <div class="btn-group input-group input-group col-lg-3 col-sm-3">
            <span class="input-group-addon" id="sizing-addon2">DPI </span>
            <input name="dpi1" type="text" class="form-control" placeholder="2742439151208" value="<?php echo $row['DPI'];?>">
          </div>
          
          <br><br><br>

          <div class="btn-group input-group col-lg-4 col-sm-4">
            <span class="input-group-addon" id="sizing-addon2">Departamento </span>
            <select name="dep1" class="form-control">
              <option value="<?php $row['IDDEP']; ?>"><?php echo $row['NDEP']; ?></option>?>
              <option value="1">Alta Verapaz</option>
              <option value="2">Baja Verapaz</option>
              <option value="3">Chimaltenango</option>
              <option value="4">Chiquimula</option>
              <option value="5">Petén</option>
              <option value="6">El Progreso</option>
              <option value="7">Quiché</option>
              <option value="8">Escuintla</option>
              <option value="9">Guatemala</option>
              <option value="10">Huehuetenango</option>
              <option value="11">Izabal</option>
              <option value="12">Jalapa</option>
              <option value="13">Jutiapa</option>
              <option value="14">Quetzaltenango</option>
              <option value="15">Retalhuleu</option>
              <option value="16">Sacatepéquez</option>
              <option value="17">San Marcos</option>
              <option value="18">Santa Rosa</option>
              <option value="19">Sololá</option>
              <option value="20">Suchitepéquez</option>
              <option value="21">Totonicapán</option>
              <option value="22">Zacapa</option>
            </select>
          </div>

          <div id="gradoList" class="btn-group input-group col-lg-4 col-sm-4">
            
          </div>

          <div id="profList" class="btn-group input-group col-lg-4 col-sm-4">
          <span class='input-group-addon' id='sizing-addon2'>Profesor </span>
          <input type="text" class="form-control">
          </div>

          <br><br><br>
          <div class="pull-right container">
            <input class="btn btn-primary" type="submit" name="actualiza" value="Actualizar">
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
      function disable() {
          document.getElementById("fec").disabled=true;
      }
    </script>


	<!--NUEVOS SCRIPT-->
  <script src="nuevos/listado.js"></script> <!--NOS SIRVE PARA EL COMBOBOX GRADO Y PROFESOR-->

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