
<?php
session_start();
require 'links.php';
if (!isset($_SESSION['id'])) {
        header("Location: index.php");
} elseif (isset($_SESSION['id'])) {
        require 'navbar.php';
}
        ?>
<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">         
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
            <meta name="description" content="Cursuri Online Universitatea din Pitesti, Electronica, Comunicatii si Calculatoare">
            <meta name="keywords" content="Cursuri Online, indrumatoare laboratoare, laboratoare, elearning, Universitatea din Pitesti, Calculatoare, Electronica, RST, Comunicatii">
            <meta name="author" content="Tanase Andrei">
            <meta lang="ro" xml:lang="ro">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
            <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
            <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
            <!--PIXEDEN Stroke 7 Icons -->
            <link rel="stylesheet" href="css/Icon-font-7-stroke-PIXEDEN-v-1.2.0/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
            <link rel="stylesheet" href="css/Icon-font-7-stroke-PIXEDEN-v-1.2.0/pe-icon-7-stroke/css/helper.css">
            <!--END PIXEDEN S7I-->
            <title>
                  Profilul meu
            </title>
      </head>
      <body>


            <section>
                  <div class="container">
                        <div class="row">
                              <div class="col col-xl col-lg col-md col-sm col-xs">
                                    &nbsp;
                              </div>
                        </div>
                        <div class="row">
                              <div class="col col-xl-3 col-lg-3 col-md-3 col-sm-1 hidden-xs-down">
                                    &nbsp;
                              </div>
                              <div class="col col-xl-6 col-lg-6 col-md-6 col-sm-11 col-xs-12">
                                    <h2 class="text-left">Semestrul 1</h2>
                                    <a class="autor-txt" href="https://get.adobe.com/ro/reader/"><b>Descarca Gratuit</b> Adobe Acrobat Reader DC</a>
                                    <div class="separator">
                                          &nbsp;
                                    </div>
                                    <div class="row listgroup">
                                          <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="panel card" id="accordion">
                                                      <div class="card">
                                                            <div class="card-header">
                                                                  <div class="row">
                                                                        <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-11">
                                                                              <h5 class="card-title">
                                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" title="Afiseaza cursurile">
                                                                                          Ingineria Programelor <i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
                                                                                    </a>
                                                                                    <p class="autor-txt"><span class="autor-txt">Lect.  univ.  dr.  Adrian Turcanu</span></p>

                                                                              </h5>
                                                                        </div>
                                                                        <div class="col col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-1">
                                                                              <span class="badge">12</span>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div id="collapse1" class="panel-collapse collapse in">
                                                                  <div class="card-block">
                                                                        <ul class="list-group-item-action list-group-flush">
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      <a href="local/IP_Curs_1.pdf" target="_blank">IP_Curs_1</a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      IP_Curs_2
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      IP_Curs_3
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      IP_Curs_4
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      IP_Curs_5
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      IP_Curs_6
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href="" target="_blank"><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 1
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 2
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 3
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 4
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 5
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 6
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="card">
                                                            <div class="card-header">
                                                                  <div class="row">
                                                                        <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-11">
                                                                              <h5 class="card-title">
                                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" title="Afiseaza cursurile">
                                                                                          Materie 2 <i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
                                                                                    </a>
                                                                              </h5>
                                                                        </div>
                                                                        <div class="col col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-1">
                                                                              <span class="badge">12</span>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div id="collapse2" class="panel-collapse collapse in">
                                                                  <div class="card-block">
                                                                        <ul class="list-group-item-action list-group-flush">
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 1
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 2
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 3
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 4
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 5
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 6
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 1
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 2
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 3
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 4
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 5
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 6
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="card">
                                                            <div class="card-header">
                                                                  <div class="row">
                                                                        <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-11">
                                                                              <h5 class="card-title">
                                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" title="Afiseaza cursurile">
                                                                                          Materie 3 <i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
                                                                                    </a>
                                                                              </h5>
                                                                        </div>
                                                                        <div class="col col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-1">
                                                                              <span class="badge">12</span>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div id="collapse3" class="panel-collapse collapse in">
                                                                  <div class="card-block">
                                                                        <ul class="list-group-item-action list-group-flush">
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 1
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 2
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 3
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 4
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 5
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 6
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 1
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 2
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 3
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 4
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 5
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 6
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="card">
                                                            <div class="card-header">
                                                                  <div class="row">
                                                                        <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-11">
                                                                              <h5 class="card-title">
                                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" title="Afiseaza cursurile">
                                                                                          Materie 4 <i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
                                                                                    </a>
                                                                              </h5>
                                                                        </div>
                                                                        <div class="col col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-1">
                                                                              <span class="badge">12</span>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div id="collapse4" class="panel-collapse collapse in">
                                                                  <div class="card-block">
                                                                        <ul class="list-group-item-action list-group-flush">
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 1
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 2
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 3
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 4
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 5
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 6
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 1
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 2
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 3
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 4
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 5
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 6
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="card">
                                                            <div class="card-header">
                                                                  <div class="row">
                                                                        <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-11">
                                                                              <h5 class="card-title">
                                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" title="Afiseaza cursurile">
                                                                                          Materie 5 <i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
                                                                                    </a>
                                                                              </h5>
                                                                        </div>
                                                                        <div class="col col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-1">
                                                                              <span class="badge">12</span>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div id="collapse5" class="panel-collapse collapse in">
                                                                  <div class="card-block">
                                                                        <ul class="list-group-item-action list-group-flush">
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 1
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 2
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 3
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 4
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 5
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 6
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 1
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 2
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 3
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 4
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 5
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 6
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="card">
                                                            <div class="card-header">
                                                                  <div class="row">
                                                                        <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-11">
                                                                              <h5 class="card-title">
                                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" title="Afiseaza cursurile">
                                                                                          Materie 6 <i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
                                                                                    </a>
                                                                              </h5>
                                                                        </div>
                                                                        <div class="col col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-1">
                                                                              <span class="badge">12</span>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div id="collapse6" class="panel-collapse collapse in">
                                                                  <div class="card-block">
                                                                        <ul class="list-group-item-action list-group-flush">
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 1
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 2
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 3
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 4
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 5
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Curs 6
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 1
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 2
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 3
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 4
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 5
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="list-group-item-action list-group-flush list-group-item-info">
                                                                                    <div class="container">
                                                                                          <div class="row no-gutters">
                                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12 materie-text">
                                                                                                      Laboratorul 6
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-download fa-lg" aria-hidden="true" title="Descarca fisierul"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-envelope fa-lg" aria-hidden="true" title="Trimite prin email"></i></a>
                                                                                                </div>
                                                                                                <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs">
                                                                                                      <a class="share-btn" href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true" title="Distribuie pe Facebook"></i></a>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="col col-xl-3 col-lg-3 col-md-3 col-sm-1 hidden-xs-down">
                                    &nbsp;
                              </div>
                        </div>
            </section>
            <?php
            include "footer.php";?>
      </body>
</html>