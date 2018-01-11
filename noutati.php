<?php
session_start();
if (!isset($_SESSION['id']))
{
    header("Location: index.php");
}
else
{
    include 'navbar.php';
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
            <script src="https://use.fontawesome.com/561db4b1e5.js"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>

            <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
            <link rel="stylesheet" type = "text/css" href = "css/style.css">
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
            <title>
                  Noutati
            </title>
      </head>
      <body>
            <section>
                  <div class="container-fluid">
                        <div class="row">
                              <div class="col-md-12 infos-row">
                                    <div class="row">
                                          <div class="col-xl-3 col-lg-3 col-md-2 hidden-sm-down">
                                                &nbsp;
                                          </div>
                                          <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-xs-12">
                                                <i class="fa fa-facebook-square fa-lg infosRow-Items"></i> &nbsp;<span class="infosRow-Items">Distribuiri &bullet; 159</span>
                                          </div>
                                          <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-xs-12">
                                                <i class="fa fa-eye fa-lg infosRow-Items"></i> &nbsp;<span class="infosRow-Items">Vizualizari &bullet; 10k</span>
                                          </div>
                                          <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-xs-12">
                                                <i class="fa fa-folder-o fa-lg infosRow-Items"></i> &nbsp;<span class="infosRow-Items">Postari &bullet; 70</span>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>

                  <div class="spatiere-30">
                        &nbsp;
                  </div>

                  <div class="container post-container">
                        <div class="row">
                              <div class="col-xl-1 col-lg-1 hidden-md-down">
                                    &nbsp;
                              </div>
                              <div class="col col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row no-gutters">
                                          <div class="rowPost-box">
                                                <img class="img-fluid rounded" src="images/image-code.png" style="display: block; margin-top: 10px; margin-bottom: 10px;"/>
                                                <h5>S-au afisat temele propuse pentru proiectele de diploma 2017-2018 ale studentilor din anii 3 CALCULATOARE, EA, RSTc si EM  aici </h5>
                                                <p class="autor-post-txt">Postat de <a href="#">Nume Profesor</a></p>
                                                <p class="tagPostTxt">Tags <a href="#">postare</a>, <a href="#">facultate</a>, <a href="#">articol</a> </p>
                                                <p class="categoriePostTxt">Postat in: <a href="#">Calculatoare</a></p>
                                                <p class="tagPostTxt">Postat la: 12.07.2017</p>

                                                <br>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including ...</p>

                                                <div type="button" class="btn btn-info btn-fill pull-right text-white">
                                                    <?php echo"<a href='$fullarticle' class='text-white'>Citeste tot</a>"; ?>
                                                </div>                                          
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>

                  <div class="spatiere-30">
                        &nbsp;
                  </div>

                  <div class="container post-container">
                        <div class="row"> 
                              <div class="col-md-12">    
                                    <div class="row">
                                          <div class="col col-md-4 col-xs-12">
                                                <div class="rowPost-box">
                                                      <h5>S-au afisat temele propuse pentru proiectele de diploma 2017-2018 ale studentilor din anii 3 CALCULATOARE, EA, RSTc si EM  aici </h5>
                                                      <p class="autor-post-txt">Postat de <a href="#">Nume Profesor</a></p>
                                                      <p class="tagPostTxt">Tags <a href="#">postare</a>, <a href="#">facultate</a>, <a href="#">articol</a> </p>
                                                      <p class="categoriePostTxt">Postat in: <a href="#">Calculatoare</a></p>
                                                      <p class="tagPostTxt">Postat la: 12.07.2017</p>

                                                      <br>
                                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>

                                                      <div type="button" class="btn btn-info btn-fill pull-right text-white"><?php echo"<a href='$fullarticle' class='text-white'>Citeste tot</a>"; ?></div>    
                                                </div>
                                          </div>
                                          <div class="col col-md-4 col-xs-12">
                                                <div class="rowPost-box">
                                                      <h5>S-au afisat temele propuse pentru proiectele de diploma 2017-2018 ale studentilor din anii 3 CALCULATOARE, EA, RSTc si EM  aici </h5>
                                                      <p class="autor-post-txt">Postat de <a href="#">Nume Profesor</a></p>
                                                      <p class="tagPostTxt">Tags <a href="#">postare</a>, <a href="#">facultate</a>, <a href="#">articol</a> </p>
                                                      <p class="categoriePostTxt">Postat in: <a href="#">Calculatoare</a></p>
                                                      <p class="tagPostTxt">Postat la: 12.07.2017</p>

                                                      <br>
                                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>

                                                      <div type="button" class="btn btn-info btn-fill pull-right text-white"><?php echo"<a href='$fullarticle' class='text-white'>Citeste tot</a>"; ?></div>                                             
                                                </div>
                                          </div>
                                          <div class="col col-md-4 col-xs-12">
                                                <div class="rowPost-box">
                                                      <h5>S-au afisat temele propuse pentru proiectele de diploma 2017-2018 ale studentilor din anii 3 CALCULATOARE, EA, RSTc si EM  aici </h5>
                                                      <p class="autor-post-txt">Postat de <a href="#">Nume Profesor</a></p>
                                                      <p class="tagPostTxt">Tags <a href="#">postare</a>, <a href="#">facultate</a>, <a href="#">articol</a> </p>
                                                      <p class="categoriePostTxt">Postat in: <a href="#">Calculatoare</a></p>
                                                      <p class="tagPostTxt">Postat la: 12.07.2017</p>
                                                      <br>
                                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                                                      <div type="button" class="btn btn-info btn-fill pull-right text-white"><?php echo"<a href='$fullarticle' class='text-white'>Citeste tot</a>"; ?></div>                                  
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>

                  <div class="spatiere-30">
                        &nbsp;
                  </div>

                  <div class="container post-container">
                        <div class="row">      
                              <div class="col-md-12">
                                    <div class="row">
                                          <div class="col col-md-6 col-xs-12">
                                                <div class="rowPost-box">
                                                      <h5>S-au afisat temele propuse pentru proiectele de diploma 2017-2018 ale studentilor din anii 3 CALCULATOARE, EA, RSTc si EM  aici </h5>
                                                      <p class="autor-post-txt">Postat de <a href="#">Nume Profesor</a></p>
                                                      <p class="tagPostTxt">Tags <a href="#">postare</a>, <a href="#">facultate</a>, <a href="#">articol</a> </p>
                                                      <p class="categoriePostTxt">Postat in: <a href="#">Calculatoare</a></p>
                                                      <p class="tagPostTxt">Postat la: 12.07.2017</p>

                                                      <br>
                                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>

                                                      <div type="button" class="btn btn-info btn-fill pull-right text-white"><?php echo"<a href='$fullarticle' class='text-white'>Citeste tot</a>"; ?></div>                                               
                                                </div>
                                          </div>
                                          <div class="col col-md-6 col-xs-12">
                                                <div class="rowPost-box">
                                                      <h5>S-au afisat temele propuse pentru proiectele de diploma 2017-2018 ale studentilor din anii 3 CALCULATOARE, EA, RSTc si EM  aici </h5>
                                                      <p class="autor-post-txt">Postat de <a href="#">Nume Profesor</a></p>
                                                      <p class="tagPostTxt">Tags <a href="#">postare</a>, <a href="#">facultate</a>, <a href="#">articol</a> </p>
                                                      <p class="categoriePostTxt">Postat in: <a href="#">Calculatoare</a></p>
                                                      <p class="tagPostTxt">Postat la: 12.07.2017</p>

                                                      <br>
                                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                                                      <div type="button" class="btn btn-info btn-fill pull-right text-white"><?php echo"<a href='$fullarticle' class='text-white'>Citeste tot</a>"; ?></div>                                  
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>

                  <div class="spatiere-30">
                        &nbsp;
                  </div>

            </section>

            <?php include "footer.php"; ?>
      </body>
</html>