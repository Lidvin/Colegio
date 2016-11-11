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
    <h1 class="text-center">::: CONSULTAR NOTAS :::</h1>
    <br><br>
    <div class="container">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#1ro">Primero</a></li>
        <li><a href="#2do">Segundo</a></li>
        <li><a href="#3ro">Tercero</a></li>
        <li><a href="#4to">Cuarto</a></li>
        <li><a href="#5to">Quinto</a></li>
        <li><a href="#6to">Sexto</a></li>
      </ul>

      <div class="tab-content">
        <div id="1ro" class="tab-pane fade in active">
          <br><br><br>
          <div>
              <table class="table table-bordered">
                <thead>
                  <tr class="active">
                    <th>#</th>
                    <th class="text-center">Codigo</th>
                    <th class="text-center">Nombre completo</th>
                    <th class="text-center">Direccion</th>
                    <th class="text-center">Sexo</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Departamento</th>
                    <th class="text-center">Notas</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $query = "SELECT A.ID AS IDA, A.COD, A.NOM AS NA, A.DIR, A.SEX, A.BEC, Z.NOM AS ND, C.ID AS IDG FROM DEPARTAMENTO Z INNER JOIN ALUMNO A ON Z.ID=A.DEPARTAMENTO_ID INNER JOIN ASIGNACION B ON A.ID=B.ALUMNO_ID INNER JOIN GRADO C ON B.GRADO_ID=C.ID WHERE C.ID=1 AND B.CURSO_ID=1;";
                  $niv = "";
                  $cont = 0;

                  if ($resultado=$mysqli->query($query)) {
                    while ($row=$resultado->fetch_assoc()) {
                      $cont++;
                      switch ($row['BEC']) {
                        case '0':
                          $niv="Normal";
                          break;
                        case '1':
                          $niv="Becado";
                          break;
                        default:
                          break;
                      }
                    ?>
                    <tr>
                      <td><?php echo $cont ?></td>
                      <td><?php echo $row['COD']; ?></td>
                      <td><?php echo $row['NA']; ?></td>
                      <td><?php echo $row['DIR']; ?></td>
                      <td><?php echo $row['SEX']; ?></td>
                      <td><?php echo $niv ?></td>
                      <td><?php echo $row['ND']; ?></td>
                      <td align="center"><a href="upNotas.php?ida=<?php echo $row['IDA'];?>&idg=<?php echo $row['IDG'];?>"><button type="button" class="btn btn-info"> <span class="glyphicon glyphicon-list-alt"></span></button></a></td>
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

        <div id="2do" class="tab-pane fade">
          <br><br><br>
          <div>
              <table class="table table-bordered">
                <thead>
                  <tr class="active">
                    <th>#</th>
                    <th class="text-center">Codigo</th>
                    <th class="text-center">Nombre completo</th>
                    <th class="text-center">Direccion</th>
                    <th class="text-center">Sexo</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Departamento</th>
                    <th class="text-center">Notas</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $query2 = "SELECT A.ID AS IDA, A.COD, A.NOM AS NA, A.DIR, A.SEX, A.BEC, Z.NOM AS ND, C.ID AS IDG FROM DEPARTAMENTO Z INNER JOIN ALUMNO A ON Z.ID=A.DEPARTAMENTO_ID INNER JOIN ASIGNACION B ON A.ID=B.ALUMNO_ID INNER JOIN GRADO C ON B.GRADO_ID=C.ID WHERE C.ID=2 AND B.CURSO_ID=1;";

                  $niv2 = "";
                  $cont2 = 0;

                  if ($resultado2=$mysqli->query($query2)) {
                    while ($row2=$resultado2->fetch_assoc()) {
                      $cont2++;
                      switch ($row2['BEC']) {
                        case '0':
                          $niv2="Normal";
                          break;
                        case '1':
                          $niv2="Becado";
                          break;
                        default:
                          break;
                      }
                    ?>
                    <tr>
                      <td><?php echo $cont2 ?></td>
                      <td><?php echo $row2['COD']; ?></td>
                      <td><?php echo $row2['NA']; ?></td>
                      <td><?php echo $row2['DIR']; ?></td>
                      <td><?php echo $row2['SEX']; ?></td>
                      <td><?php echo $niv2 ?></td>
                      <td><?php echo $row2['ND']; ?></td>
                      <td align="center"><a href="upNotas.php?ida=<?php echo $row2['IDA'];?>&idg=<?php echo $row2['IDG'];?>"><button type="button" class="btn btn-info"> <span class="glyphicon glyphicon-list-alt"></span></button></a></td>
                    </tr>
                    <?php
                    $niv2 = "";
                    }
                  }
                ?>
                </tbody>
              </table>
          </div>
        </div>



        <div id="3ro" class="tab-pane fade">
          <br><br><br>
          <div>
              <table class="table table-bordered">
                <thead>
                  <tr class="active">
                    <th>#</th>
                    <th class="text-center">Codigo</th>
                    <th class="text-center">Nombre completo</th>
                    <th class="text-center">Direccion</th>
                    <th class="text-center">Sexo</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Departamento</th>
                    <th class="text-center">Notas</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $query3 = "SELECT A.ID AS IDA, A.COD, A.NOM AS NA, A.DIR, A.SEX, A.BEC, Z.NOM AS ND, C.ID AS IDG FROM DEPARTAMENTO Z INNER JOIN ALUMNO A ON Z.ID=A.DEPARTAMENTO_ID INNER JOIN ASIGNACION B ON A.ID=B.ALUMNO_ID INNER JOIN GRADO C ON B.GRADO_ID=C.ID WHERE C.ID=3 AND B.CURSO_ID=1;";
                  $niv3 = "";
                  $cont3 = 0;

                  if ($resultado3=$mysqli->query($query3)) {
                    while ($row3=$resultado3->fetch_assoc()) {
                      $cont3++;
                      switch ($row3['BEC']) {
                        case '0':
                          $niv3="Normal";
                          break;
                        case '1':
                          $niv3="Becado";
                          break;
                        default:
                          break;
                      }
                    ?>
                    <tr>
                      <td><?php echo $cont3 ?></td>
                      <td><?php echo $row3['COD']; ?></td>
                      <td><?php echo $row3['NA']; ?></td>
                      <td><?php echo $row3['DIR']; ?></td>
                      <td><?php echo $row3['SEX']; ?></td>
                      <td><?php echo $niv3 ?></td>
                      <td><?php echo $row3['ND']; ?></td>
                      <td align="center"><a href="upNotas.php?ida=<?php echo $row3['IDA'];?>&idg=<?php echo $row3['IDG'];?>"><button type="button" class="btn btn-info"> <span class="glyphicon glyphicon-list-alt"></span></button></a></td>
                    </tr>
                    <?php
                    $niv3 = "";
                    }
                  }
                ?>
                </tbody>
              </table>
          </div>
        </div>


        <div id="4to" class="tab-pane fade">
          <br><br><br>
          <div>
              <table class="table table-bordered">
                <thead>
                  <tr class="active">
                    <th>#</th>
                    <th class="text-center">Codigo</th>
                    <th class="text-center">Nombre completo</th>
                    <th class="text-center">Direccion</th>
                    <th class="text-center">Sexo</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Departamento</th>
                    <th class="text-center">Notas</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $query4 = "SELECT A.ID AS IDA, A.COD, A.NOM AS NA, A.DIR, A.SEX, A.BEC, Z.NOM AS ND, C.ID AS IDG FROM DEPARTAMENTO Z INNER JOIN ALUMNO A ON Z.ID=A.DEPARTAMENTO_ID INNER JOIN ASIGNACION B ON A.ID=B.ALUMNO_ID INNER JOIN GRADO C ON B.GRADO_ID=C.ID WHERE C.ID=4 AND B.CURSO_ID=1;";
                  $niv4= "";
                  $cont4 = 0;

                  if ($resultado4=$mysqli->query($query4)) {
                    while ($row4=$resultado4->fetch_assoc()) {
                      $cont4++;
                      switch ($row4['BEC']) {
                        case '0':
                          $niv4="Normal";
                          break;
                        case '1':
                          $niv4="Becado";
                          break;
                        default:
                          break;
                      }
                    ?>
                    <tr>
                      <td><?php echo $cont4 ?></td>
                      <td><?php echo $row4['COD']; ?></td>
                      <td><?php echo $row4['NA']; ?></td>
                      <td><?php echo $row4['DIR']; ?></td>
                      <td><?php echo $row4['SEX']; ?></td>
                      <td><?php echo $niv4 ?></td>
                      <td><?php echo $row4['ND']; ?></td>
                      <td align="center"><a href="upNotas.php?ida=<?php echo $row4['IDA'];?>&idg=<?php echo $row4['IDG'];?>"><button type="button" class="btn btn-info"> <span class="glyphicon glyphicon-list-alt"></span></button></a></td>
                    </tr>
                    <?php
                    $niv4 = "";
                    }
                  }
                ?>
                </tbody>
              </table>
          </div>
        </div>


        <div id="5to" class="tab-pane fade">
          <br><br><br>
          <div>
              <table class="table table-bordered">
                <thead>
                  <tr class="active">
                    <th>#</th>
                    <th class="text-center">Codigo</th>
                    <th class="text-center">Nombre completo</th>
                    <th class="text-center">Direccion</th>
                    <th class="text-center">Sexo</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Departamento</th>
                    <th class="text-center">Notas</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $query5 = "SELECT A.ID AS IDA, A.COD, A.NOM AS NA, A.DIR, A.SEX, A.BEC, Z.NOM AS ND, C.ID AS IDG FROM DEPARTAMENTO Z INNER JOIN ALUMNO A ON Z.ID=A.DEPARTAMENTO_ID INNER JOIN ASIGNACION B ON A.ID=B.ALUMNO_ID INNER JOIN GRADO C ON B.GRADO_ID=C.ID WHERE C.ID=5 AND B.CURSO_ID=1;";
                  $niv5= "";
                  $cont5= 0;

                  if ($resultado5=$mysqli->query($query5)) {
                    while ($row5=$resultado5->fetch_assoc()) {
                      $cont5++;
                      switch ($row5['BEC']) {
                        case '0':
                          $niv5="Normal";
                          break;
                        case '1':
                          $niv5="Becado";
                          break;
                        default:
                          break;
                      }
                    ?>
                    <tr>
                      <td><?php echo $cont5 ?></td>
                      <td><?php echo $row5['COD']; ?></td>
                      <td><?php echo $row5['NA']; ?></td>
                      <td><?php echo $row5['DIR']; ?></td>
                      <td><?php echo $row5['SEX']; ?></td>
                      <td><?php echo $niv5 ?></td>
                      <td><?php echo $row5['ND']; ?></td>
                      <td align="center"><a href="upNotas.php?ida=<?php echo $row5['IDA'];?>&idg=<?php echo $row5['IDG'];?>"><button type="button" class="btn btn-info"> <span class="glyphicon glyphicon-list-alt"></span></button></a></td>
                    </tr>
                    <?php
                    $niv5 = "";
                    }
                  }
                ?>
                </tbody>
              </table>
          </div>
        </div>

        <div id="6to" class="tab-pane fade">
          <br><br><br>
          <div>
              <table class="table table-bordered">
                <thead>
                  <tr class="active">
                    <th>#</th>
                    <th class="text-center">Codigo</th>
                    <th class="text-center">Nombre completo</th>
                    <th class="text-center">Direccion</th>
                    <th class="text-center">Sexo</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Departamento</th>
                    <th class="text-center">Notas</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $query6 = "SELECT A.ID AS IDA, A.COD, A.NOM AS NA, A.DIR, A.SEX, A.BEC, Z.NOM AS ND, C.ID AS IDG FROM DEPARTAMENTO Z INNER JOIN ALUMNO A ON Z.ID=A.DEPARTAMENTO_ID INNER JOIN ASIGNACION B ON A.ID=B.ALUMNO_ID INNER JOIN GRADO C ON B.GRADO_ID=C.ID WHERE C.ID=6 AND B.CURSO_ID=1;";
                  $niv6= "";
                  $cont6= 0;

                  if ($resultado6=$mysqli->query($query6)) {
                    while ($row6=$resultado6->fetch_assoc()) {
                      $cont6++;
                      switch ($row6['BEC']) {
                        case '0':
                          $niv6="Normal";
                          break;
                        case '1':
                          $niv6="Becado";
                          break;
                        default:
                          break;
                      }
                    ?>
                    <tr>
                      <td><?php echo $cont6 ?></td>
                      <td><?php echo $row6['COD']; ?></td>
                      <td><?php echo $row6['NA']; ?></td>
                      <td><?php echo $row6['DIR']; ?></td>
                      <td><?php echo $row6['SEX']; ?></td>
                      <td><?php echo $niv6 ?></td>
                      <td><?php echo $row6['ND']; ?></td>
                      <td align="center"><a href="upNotas.php?ida=<?php echo $row6['IDA'];?>&idg=<?php echo $row6['IDG'];?>"><button type="button" class="btn btn-info"> <span class="glyphicon glyphicon-list-alt"></span></button></a></td>
                    </tr>
                    <?php
                    $niv6 = "";
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