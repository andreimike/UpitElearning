
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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
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
            <div class="container-fluid">
                  <div class="row singlearticleRow">
                        <div class="col-md singlearticolBanner">
                              &nbsp;
                        </div>
                  </div>
            </div>

            <div class="spatiere-30">
                  &nbsp;
            </div>

            <div class="container">
                  <div class="row">
                        <div class="col-md-10 fullarticle">
                              <h1 class="">O ultima noutate Universitatea din Pitesti</h1>
                        </div>
                        <div class="col-md-2 siderbararticle">
                              <div class="row">
                                    <h5 class="title title-blog">
                                          Distribuiri &bullet; 3k
                                    </h5>
                              </div>
                              <div class="row">
                                    <div class="col-md-4 btn-round-fb">
                                          <a href="#" class="btn btn-facebook">

                                                <span class="fa fa-facebook"></span>
                                          </a>
                                    </div>
                                    <div class="col-md-4 btn-round-email">
                                          <a href="#" class="btn-facebook">

                                                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                                          </a>
                                    </div>
                                    <div class="col-md-4 btn-round-link">
                                          <a href="#" class="btn-facebook">

                                                <span class="fa fa-link" aria-hidden="true"></span>
                                          </a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <?php include "footer.php"; ?>
      </body>
</html>