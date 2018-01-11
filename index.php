<?php
session_start();
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
                  Cursuri Online
            </title> 
      </head>
      <body class="login-page">
              <?php
              require 'links.php';
              ?>
            <div class="containter-fluid">
                  <div class="row no-gutters">
                        <div class="container">
                              <div class="row">
                                    <div class="col col-xl-3 col-lg-3 col-md-2 hidden-sm-down">
                                          &nbsp;
                                    </div>
                                    <div class="col col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                          <div class="loginPage-logo">
                                                <?php echo "<a href='$acasa' style='border: none; border-style: none;'>"; ?><img class="img-fluid" src="http://old.upit.ro/uploads/facultatea_ecc/images/sigla%20FECC.png" style="width: 270px; display: block; margin: 0 auto;" /><?php echo "</a>"; ?>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-4 col-md-3 hidden-sm-down">
                              &nbsp;
                        </div>

                       
                        <?php
                        if (!isset($_SESSION['id'])) {
                                echo '
                                                       <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="login-container">
                                                       <form class="form-group" name="login_form" action="include/login.inc.php" method="POST">
                                          <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" name="username" placeholder="Username" aria-describedby="basic-addon3" class="form-control login-field" />
                                          </div>
                                          <div class="form-group"> 
                                                <label for="password">Parola</label>
                                                <input class="form-control login-field" name="password" type="password"  placeholder="Parola" value="">
                                          </div>
                                          <div class="form-actions">

                                          </div>
                                          <div class="row">
                                                <div class="col">
                                                      <h6 class="text-center">OR</h6>
                                                </div>
                                          </div>
                                          <div class="form-group">
                                                <div class="container">
                                                      <div class="row no-gutters">
                                                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                                  <a href="#" class="btn btn-primary btn-block"><span class="fa fa-facebook"></span> Facebook</a> 
                                                            </div>
                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                  &nbsp;
                                                            </div>
                                                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                                  <a href="#" class="btn btn-danger btn-block"><span class="fa fa-google-plus" aria-hidden="true"></span> Google</a> 
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="form-actions">
                                                <br />
                                                <p class="text-right"><a href="#">Ai uitat parola?</a></p>
                                                <input type="submit" value="Login" name="login_btn" class="btn btn-info btn-lg btn-block">
                                          </div>
                                          <div class="form-actions">
                                                <br />
                                                <p class="text-center">Nu ai cont? <a href="inregistrare.php">Inscrie-te.</a></p>
                                          </div>
                                         </form>
                                         
                                </div>

                        </div>    
                           ';   
                                if (isset($_GET['info']) && $_GET['info'] == 'gresit') {
                                      echo '<h4 style="text-align: center !important; color: red">Utilizatorul nu exita!</h4>';
                              }
                        } else {
                                header("Location: meniul-principal.php");
                                        
                                
                               
                                
                                
                        }
                        ?>


                  </div>
            </div>
            <?php include "footer.php"; ?>
      </body>
</html>