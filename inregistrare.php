<?php
session_start();
if (!isset($_SESSION['id']))
{
    header("Location: index.php");
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
          <?php
          require 'links.php';
          ?>
            <div class="container">
                  <div class="row">
                        <div class="col col-xl-3 col-lg-3 col-md-3 col-sm-2 hidden-xs-down">
                              &nbsp;
                        </div>
                        <div class="col col-xl-6 col-lg-6 col-md-6 col-sm-8 col-xs-11" id="containerSignUp">
                              <div class="row">
                                    <div class="col col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <span class="aidejauncont text-centred">Ai deja un cont? </span>
                                    </div>
                                    <div class="col col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <a class="btn btn-outline-danger" href="index.php">Login</a>
                                    </div>
                              </div>
                        </div>
                        <div class="col col-xl-3 col-lg-3 col-md-3 col-sm-2 hidden-xs-down">
                              &nbsp;
                        </div>
                  </div>
            </div>
            <div class="container registercontainer">
                  <div class="row">
                        <div class="col col-xl-3 col-lg-3 col-md-3 col-sm-2 hidden-xs-down">
                              &nbsp;
                        </div>
                        <div class="col col-xl-6 col-lg-6 col-md-6 col-sm-8 col-xs-11" id="containerSignUp">
                              <div class="register-headline">
                                    <h3 class="text-center">Inregistrare</h3>
                                    <h5 class="text-center">Site-ul de E-learning FECC</h5>
                              </div>
                              <form class="form-horizontal signUpForm" action="include/signup.inc.php" method="POST">
                                    <div class="form-group">

                                          <div class="controls col-sm-12">
                                                <input class="form-control login-field" name="nume" type="text"  placeholder="Nume" value="">
                                          </div>
                                    </div>

                                    <div class="form-group">

                                          <div class="controls col-sm-12">
                                                <input class="form-control login-field" name="prenume" type="text"  placeholder="Prenume" value="">
                                          </div>
                                    </div>

                                    <div class="form-group">

                                          <div class="controls col-sm-12">
                                                <input class="form-control login-field" name="username" type="text"  placeholder="Username" value="">
                                          </div>
                                    </div>

                                    <div class="form-group">

                                          <div class="controls col-sm-12">
                                                <input class="form-control login-field" name="password" type="password"  placeholder="Parola" value="">
                                          </div>
                                    </div>
                                    
                                    <div class="form-group">

                                          <div class="controls col-sm-12">
                                                <input class="form-control login-field" name="rol" type="text"  placeholder="Rol / Functie" value="">
                                          </div>
                                    </div>
                                    

                                    <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">Inregistrare</button>
                                          <?php echo "<a class='btn' href='$acasa'>Acasa</a>"; ?>
                                    </div>
                              </form>
                              <?php
                              if (isset($_GET['info']) && $_GET['info'] == 'ok')
                              {
                                  echo '<h4 style="text-align: center; color: green">Contul a fost creat! </h4>';
                              }
                              elseif (isset($_GET['info']) && $_GET['info'] == 'eroare')
                              {
                                  echo '<h4 style="text-align: center; color: red">Nu ati introdus toate datele! </h4>';
                              }
                              elseif (isset($_GET['info']) && $_GET['info'] == 'exista')
                              {
                                  echo '<h4 style="text-align: center; color: red">Utilizatorul exista! </h4>';
                              }
                              ?>
                        </div>
                        <div class="col col-xl-3 col-lg-3 col-md-3 col-sm-2 hidden-xs-down">
                              &nbsp;
                        </div>
                  </div>
            </div>

      </body>
</html>