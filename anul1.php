<?php
session_start();
require 'links.php';
if (!isset($_SESSION['id'])) {
        header("Location: index.php");
} elseif (isset($_SESSION['id'])) {
        require 'navbar.php';
        require 'links.php'; 
}
?>
<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">         
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="Cursuri Online Universitatea din Pitesti, Electronica, Comunicatii si Calculatoare">
            <meta name="keywords" content="Cursuri Online, indrumatoare laboratoare, laboratoare, elearning, Universitatea din Pitesti, Calculatoare, Electronica, RST, Comunicatii">
            <meta name="author" content="Tanase Andrei">
            <meta lang="ro" xml:lang="ro">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
            <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
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
                  <div class="container-fluid">
                        <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    &nbsp;
                              </div>
                        </div>
                        <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="title-decoration">

                                          <h2 class="text-center title-headline">Anul 1</h2>

                                    </div>
                              </div>
                        </div>
                        <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    &nbsp;
                              </div>
                        </div>
                        <div class="row">
                              <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
                                    &nbsp;
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="row">
                                          <div class="col-lg-6 com-md-6 col-sm-6 col-xs-12">
                                                 <?php echo "<a href=' $an1sem1' ><h3 class='text-center'>Semestrul 1</h3></a>"; ?>
                                                    
                                          </div>
                                          <div class="col-lg-6 com-md-6 col-sm-6 col-xs-12">
                                                <a href="anul-1-semestrul-2.php"><h3 class="text-center">Semestrul 2</h3></a>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="row">
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <table border="0" cellpadding="0" cellspacing="0" align="center">
                                                      <tr>
                                                            <td align="center" valign="top">
                                                                  <h4 class="text-center title-headline-right">
                                                                        Ultimele adaugate
                                                                  </h4>
                                                            </td>
                                                      </tr>
                                                </table>
                                          </div>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <table border="0" cellpadding="0" cellspacing="0" align="center">
                                                      <tr>
                                                            <td align="center" valign="middle">
                                                                  <ul class="list-group lastarticlelist">
                                                                        <li class="list-group-item text-center"><a href="">Articol adaugat</a></li>
                                                                        <li class="list-group-item text-center"><a href="">Articol adaugat</a></li>
                                                                        <li class="list-group-item text-center"><a href="">Articol adaugat</a></li>
                                                                        <li class="list-group-item text-center"><a href="">Articol adaugat</a></li>
                                                                        <li class="list-group-item text-center"><a href="">Articol adaugat</a></li>
                                                                        <li class="list-group-item text-center"><a href="">Articol adaugat</a></li>
                                                                  </ul>
                                                      </tr>
                                                </table>
                                          </div>
                                    </div>
                              </div>

                        </div>
                  </div>
            </section>
          <?php  include "footer.php"; ?>

      </body>
</html>

