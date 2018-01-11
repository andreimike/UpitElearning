<?php
session_start();
require 'links.php';
if (!isset($_SESSION['id']))
{
    header("Location: index.php");
}
elseif (isset($_SESSION['id']))
{
    require "navbar.php";
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
          <?php include 'links.php'; ?>
          <?php include 'navbar.php'; ?>

            <div class="container">
                  <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="container-fluid">
                                    <div class="row">
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                &nbsp;
                                          </div>
                                    </div>
                              </div>
                              <div class="container no-gutters">
                                    <div class="row no-gutters">
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 profile-header">
                                                <div class="profil-banner">
                                                      <img class="img-responsive banner-img" src="css/profile-banner.png" />
                                                </div>
                                                <div class="row banner-down no-gutters">
                                                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 flex-first">
                                                            <figure>
                                                                  <img src="images/user-image.png" class="profile-image" data-pin-nopin="true" />
                                                            </figure>
                                                      </div>
                                                      <div class="col-lg-3 offset-lg-1 col-md-3 offset-md-1 col-sm-10 col-xs-12 flex-unordered">
                                                            <p class="profileTextPerson text-center nume-text-profil">Ianos Ionescu Ionescovici</p>
                                                      </div>
                                                      <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 flex-unordered">
                                                            <p class="profileTextPerson text-center">10 Postari</p>
                                                      </div>
                                                      <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12 flex-last">
                                                            <p class="profileTextPerson2 text-center">adresadeemail@mail.com</p>
                                                            <br />
                                                            <p class="profileTextPerson3 text-center">Descriere aici</p>
                                                            <br />
                                                            <p class="profileTextPerson3 text-center">Descriere aici</p>
                                                      </div>
                                                </div>
                                          </div>                    
                                    </div>
                              </div>
                              <div class="container">
                                    <div class="row">
                                          <div class="spatiu10">
                                                &nbsp;
                                          </div>
                                    </div>
                              </div>


                              <div class="container">
                                    <div class="row">
                                          <div class="spatiu10">
                                                &nbsp;
                                          </div>
                                    </div>
                              </div>
                              <div class="container">
                                    <div class="row no-gutters">
                                          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 align-self-start section-textarea">
                                                <div class="row no-gutters">
                                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                            <div class="form-group">
                                                                  <textarea class="form-group profile-textarea" rows="10" cols="50" placeholder="Introduceti textul aici"></textarea>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="row no-gutters">
                                                      <div class="col col-lg-1 offset-lg-4 col-md-1 offset-md-4 col-sm-2 offset-sm-2">
                                                            <a href=""><i class="fa fa-paperclip fa-lg textarea-side-btns" aria-hidden="true"></i></a>
                                                      </div>                               
                                                      <div class="col col-lg-1 col-md-1 col-sm">
                                                            <a href=""><i class="fa fa-camera fa-lg textarea-side-btns" aria-hidden="true"></i></a>
                                                      </div> 
                                                      <div class="col col-lg-2 col-md-2 col-sm col-sm">
                                                            <form id="an" name="an" method="post">
                                                                  <div class="controls">
                                                                        <select id="an" name="an" class="btn btn-primary textarea-submit-btn" aria-haspopup="true" aria-expanded="false">
                                                                              <option value="Public">Public</option>
                                                                              <option value="Anul 1">Anul 1</option>
                                                                              <option value="Anul 2">Anul 2</option>
                                                                              <option value="Anul 3">Anul 3</option>
                                                                              <option value="Anul 4">Anul 4</option>
                                                                        </select>
                                                                  </div>
                                                            </form>
                                                      </div>
                                                      <div class="col col-lg-2 offset-lg-1 col-md-2 offset-md-1 col-sm col-sm">
                                                            <form method="post">
                                                                  <button type="submit" value="posteaza" class="btn btn-secondary textarea-submit-btn"><span class="fa fa-globe"></span> Posteaza</button>
                                                            </form>
                                                      </div>
                                                </div>
                                          </div>

                                          <div class="col-lg-1 col-md-1 align-self-center">
                                                &nbsp;
                                          </div>

                                          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 align-self-end profile-description-area">
                                                <div class="container">
                                                      <div class="row no-gutters">
                                                            <div class="col col-xl-12 col-lg-12 col-md-12  col-sm-12 col-xs-12">
                                                                  <div class="row no-gutters">
                                                                        <form class="form-group">
                                                                              <div class="form-group row mesaj-individual-label">
                                                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Catre</label>
                                                                                    <div class="col-sm-10">
                                                                                          <input type="email" class="form-control input-email" id="inputEmail3" placeholder="Adresa de email">
                                                                                    </div>
                                                                              </div>
                                                                              <div class="form-group row mesaj-individual-label">
                                                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Subiect</label>
                                                                                    <div class="col-sm-10">
                                                                                          <input type="text" class="form-control input-email" id="inputPassword3" placeholder="Subiect">
                                                                                    </div>
                                                                              </div>
                                                                              <div class="form-group row mesaj-individual-label">
                                                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Mesaj</label>
                                                                                    <div class="col-sm-10">
                                                                                          <textarea class="form-control profile-textarea" rows="10" cols="50" placeholder="Introduceti textul aici"></textarea>
                                                                                    </div>
                                                                              </div>

                                                                              <div class="form-group row">
                                                                                    <div class="offset-sm-2 col-sm-10">
                                                                                          <button type="submit" class="btn btn-primary"><span class="fa fa-paper-plane" aria-hidden="true"></span>
                                                                                                Trimite mesajul</button>
                                                                                    </div>
                                                                              </div>
                                                                        </form>
                                                                  </div>  
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>

                              <div class="container">
                                    <div class="row">
                                          <div class="spatiu10">
                                                &nbsp;
                                          </div>
                                    </div>
                              </div>



                              <div class="container">
                                    <div class="row">
                                          <div class="spatiu10">
                                                &nbsp;
                                          </div>
                                    </div>
                              </div>

                              <div class="container">
                                    <div class="row no-gutters">
                                          <div class="col-lg col-md col-sm-12 col-xs-12 align-self-start section-textarea">
                                                <div class="row no-gutters">
                                                      <div class="col">
                                                            <h4 class="text-center last-post-area">Ultimele postari</h4>
                                                      </div>
                                                </div>
                                                <div class="row no-gutters">
                                                      <div class="col">
                                                            <p class="profile-description-txt text-center" lang="ro">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                      </div>
                                                </div>
                                          </div>                                               
                                    </div>
                              </div>


                        </div>
                  </div>
            </div>
            <?php include "footer.php"; ?>
      </body>
</html>