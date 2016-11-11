<?php
  require('Conexion.php');
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
    <!--header start-->
    <header class="head-section">
      <div class="navbar navbar-default navbar-static-top container">
          <div class="navbar-header">
              <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse"
              type="button"><span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span></button> <a class="navbar-brand" href="index.html">Sis
              <span>VN</span></a>
          </div>

          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                  <li><input class="form-control search" placeholder=" Search" type="text"></li>
              </ul>
          </div>
      </div>
    </header>
    <!--header end-->

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4 address wow fadeInUp">
                    <h1>Sistema Villa Nueva</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="alumno.php">Alumno</a></li>
                        <li><a href="profesor.php">Pofesor</a></li>
                        <li><a href="notas.php">Notas</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

  <div class="container">
    <h1 class="text-center">::: CRUD PROFESOR :::</h1>
    <br><br>
    <div class="container">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#1ro">Primero</a></li>
        <li><a href="#hab">Habilitar</a></li>
      </ul>

      <div class="tab-content">
        <div id="1ro" class="tab-pane fade in active">
          <br>
          <div class="pull-left">
            <a href="addProfesor.php"><input class="btn btn-primary" type="submit" value="Agregar nuevo profesor"></a>
          </div>
          <br><br><br>
          <div>
              <table class="table table-bordered">
                <thead>
                  <tr class="active">
                    <th>#</th>
                    <th class="text-center">Nombre completo</th>
                    <th class="text-center">Telefono</th>
                    <th class="text-center">Profesion</th>
                    <th class="text-center">Sueldo</th>
                    <th class="text-center">Grado</th>
                    <th class="text-center">Modificar</th>
                    <th class="text-center">Deshabilitar</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $query = "SELECT A.ID AS IDA, A.NON, A.TEL, A.PRO, A.SUE, B.ID AS IDG, B.NIV FROM GRADO B INNER JOIN PROFESOR A ON B.PROFESOR_ID=A.ID;";
                  $niv = "";
                  $cont = 0;

                  if ($resultado=$mysqli->query($query)) {
                    while ($row=$resultado->fetch_assoc()) {
                      $cont++;
                      switch ($row['NIV']) {
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
                    <tr>
                      <td><?php echo $cont ?></td>
                      <td><?php echo $row['NON']; ?></td>
                      <td><?php echo $row['TEL']; ?></td>
                      <td><?php echo $row['PRO']; ?></td>
                      <td><?php echo $row['SUE']; ?></td>
                      <td><?php echo $niv ?></td>
                      <td align="center"><a href="upProfesor.php?ida=<?php echo $row['IDA'];?>&idg=<?php echo $row['IDG'];?>"><button type="button" class="btn btn-warning"> <span class="glyphicon glyphicon-edit"></span></button></a></td>
                      <td align="center"><a href="delProfesor.php?ida=<?php echo $row['IDA'];?>&idg=<?php echo $row['IDG'];?>"><button type="button" class="btn btn-danger"> <span class="glyphicon glyphicon-export"></span></button></a></td>
                    </tr>
                    <?php
                    $niv = "";
                    }
                  }
                ?>
                </tbody>
              </table>
          </div>
        </div>

        <div id="hab" class="tab-pane fade">
        <br>
          <div class="pull-left">
            <a href="addProfesor.php"><input class="btn btn-primary" type="submit" value="Agregar nuevo alumno"></a>
          </div>
          <br><br><br>
          <div>
              <table class="table table-bordered">
                <thead>
                  <tr class="active">
                    <th>#</th>
                    <th class="text-center">Nombre completo</th>
                    <th class="text-center">Telefono</th>
                    <th class="text-center">Profesion</th>
                    <th class="text-center">Sueldo</th>
                    <th class="text-center">Grado</th>
                    <th class="text-center">Habilitar</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $query = "SELECT A.ID AS IDA, A.NON, A.TEL, A.PRO, A.SUE, B.ID AS IDG, B.NIV FROM GRADO B INNER JOIN PROFESOR A ON B.PROFESOR_ID=A.ID;";
                  $niv = "";
                  $cont = 0;

                  if ($resultado=$mysqli->query($query)) {
                    while ($row=$resultado->fetch_assoc()) {
                      $cont++;
                      switch ($row['NIV']) {
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
                    <tr>
                      <td><?php echo $cont ?></td>
                      <td><?php echo $row['NON']; ?></td>
                      <td><?php echo $row['TEL']; ?></td>
                      <td><?php echo $row['PRO']; ?></td>
                      <td><?php echo $row['SUE']; ?></td>
                      <td><?php echo $niv ?></td>
                      <td align="center"><a href="habProfesor.php?ida=<?php echo $row['IDA'];?>"><button type="button" class="btn btn-success"> <span class="glyphicon glyphicon-import"></span></button></a></td>
                    </tr>
                    <?php
                    $niv = "";
                    }
                  }
                ?>
                </tbody>
              </table>
          </div>
        </div>

      </div>
    </div>
  </div>

<hr>
<br><br>

    <!--footer start-->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
            <h1>
              Información SisVn
            </h1>
            <address>
              <p><i class="fa fa-home pr-10"></i>Dirección: Caserío Villa Nueva, Malacatán S.M.</p><br>
              <p><i class="fa fa-globe pr-10"></i>Guatemala C.A.</p><br>
              <p><i class="fa fa-mobile pr-10"></i>Telefono: (502) 7777-7777 </p><br>
              <p><i class="fa fa-phone pr-10"></i>Celular: (205) 3333-3333 </p><br>
              <p><i class="fa fa-envelope pr-10"></i>E-mail: <a href="javascript:;">sisvn_g@example.com</a></p>
            </address>
          </div>
          

          <div class="col-lg-6">
            <div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
              <h1>Proyecto Final - UMG</h1>
              <p>Universidad Mariano Gálvez - San Marcos, Guatemala C.A. <br>
                Ingeniería en Sistemas de Infromación y Ciencias de la Computación. <br>
                Elaboración de Páginas Web - Sexto Semestre Sec. Unica. <br>
                Ing. Iván Antonio de León - Catedrático Titular. <br><br><br>
                Estudiantes: <br>
                - Carlos Daniel Gálvez Barrios.     0903-13-05509. <br>
                - Faustino Lopez Ramos.             0903-11-15729. <br>
                - Lidvin Osbelí Fuentes Navarro.    0903-11-06192. <br>
                - Julio Cesar Soto Bravo.           0903-06-12892.
                </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer end -->
    <!--small footer start -->
    
    <footer class="footer-small">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <div class="copyright">
                    <p>&copy; Copyright - SisVN Proyecto Final UMG
                      <label class="pull-right"><a href="http://www.umg.edu.gt/">Ir a UMG</a></label>
                    </p>
                  </div>
                </div>
            </div>
        </div>
    </footer>

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
    <script>
      $(document).ready(function(){
          $(".nav-tabs a").click(function(){
              $(this).tab('show');
          });
      });
    </script>

  </body>
</html>