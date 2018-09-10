<?php
require_once '../../funcoes/funcoes.php';
session_start();
validar();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>CorkExpress</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="csS.css" type="text/css">
    <!-- Main CSS-->
    <link href="css/theme.css" type="text/css" rel="stylesheet" media="all">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="?">
                    <img class="img" src="images/icon/icon_cork.png"/>
                    <label class="text"><b>CORK</b>admin</label>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                      <li class="has-sub">
                          <a class="js-arrow" href="#">
                              <i class="fas fa-users"></i>User</a>
                          <ul class="list-unstyled navbar__sub-list js-sub-list">
                              <li>
                                  <a href="?an=1">Inserir</a>
                              </li>
                              <li>
                                <a href="?an=2">Listar</a>
                              </li>
                          </ul>
                      </li>
                      <li class="has-sub">
                          <a class="js-arrow" href="#">
                              <i class="fa fa-user-secret"></i>Admin</a>
                          <ul class="list-unstyled navbar__sub-list js-sub-list">
                              <li>
                                  <a href="?an=3">Inserir</a>
                              </li>
                              <li>
                                <a href="?an=4">Listar</a>
                              </li>
                          </ul>
                      </li>
                        <li>
                            <a class="js-arrow"  href="#">
                              <i class="fas fa-euro"></i>Salario</a>
                              <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="?an=5">Inserir</a>
                                </li>
                                <li>
                                  <a href="?an=9">Listar</a>
                                </li>
                                <li>
                                  <a href="?an=12">Gastos</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?an=8">
                                <i class="fas fa-ban"></i>Despedir</a>
                        </li>
                        <li>
                            <a href="?an=11">
                                <i class="zmdi zmdi-email"></i>Email</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php   include '../../connect/conn.php'; $dados =mysqli_query($conn,"SELECT nome, apelido FROM trabalhadores  WHERE idtrabalhador=$_SESSION[idtrabalhador] "); $row=mysqli_fetch_assoc($dados);  echo '<span id="a123">'.$row['nome'].' '.$row['apelido']. '</span>';  ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix" style="height:100px;">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php   include '../../connect/conn.php'; $dados =mysqli_query($conn,"SELECT nome, apelido FROM trabalhadores  WHERE idtrabalhador=$_SESSION[idtrabalhador] "); $row=mysqli_fetch_assoc($dados);  echo '<span id="a123">'.$row['nome'].' '.$row['apelido']. '</span>';  ?></a>
                                                    </h5>
                                                    <span class="email"><?php   include '../../connect/conn.php'; $dados =mysqli_query($conn,"SELECT email FROM trabalhadores  WHERE idtrabalhador=$_SESSION[idtrabalhador] "); $row=mysqli_fetch_assoc($dados);  echo $row['email']; ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="fecharsessao.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30" style="height:1000px;">
                  <?php
                  @$an = $_REQUEST["an"];
                   switch ($an) {
                     case '1':
                       include 'an1.php';
                       break;
                     case '2':
                       include 'an2.php';
                       break;
                     case '3':
                       include 'an3.php';
                       break;
                     case '4':
                       include 'an4.php';
                       break;
                     case '5':
                       include 'an5.php';
                       break;
                     case '6':
                       include 'an6.php';
                       break;
                     case '7':
                      include 'an7.php';
                      break;
                     case '8':
                      include 'an8.php';
                      break;
                     case '9':
                      include 'an9.php';
                      break;
                     case '10':
                      include 'an10.php';
                      break;
                    case '11':
                      include 'menu_mail.php';
                      break;
                    case '12':
                      include 'an12.php';
                    break;
                   }
                   ?>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>


    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
