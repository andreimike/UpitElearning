
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
            <script src="https://use.fontawesome.com/561db4b1e5.js"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>

            <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
            <link rel="stylesheet" type = "text/css" href = "css/style.css">
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
            <title>
                  Articol complet
            </title>
      </head>
      <body>

            <script>
                    (function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id))
                                    return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v2.9&appId=110990642876314";
                            fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));

                    document.getElementById("copyButton").addEventListener("click", function () {
                            copyToClipboard(document.getElementById("copyTarget"));
                    });

            </script>

            <div class="col-md-10 spatiere-30">
                  &nbsp;
            </div>

            <div class="container-fluid">
                  <div class="row">
                        <div class="col-md-12 cat-search-row">

                              <div class="input-group col-md-10 offset-md-1">
                                    <span class="input-group-btn">
                                          <button class="btn btn-secondary" type="button">Cauta <i class="fa fa-search" aria-hidden="true"></i>
                                          </button>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Cauta...">
                              </div>
                        </div>
                  </div>
            </div>

            <div class="col-md-10 spatiere-30">
                  &nbsp;
            </div>

            <div class="container">
                  <div class="row">
                        <div class="col-md-12">
                              <h4 class="">Categorii</h4>
                        </div>
                  </div>
            </div>

            <div class="spatiu10">
                  &nbsp;
            </div>

            <div class="container">
                  <div class="row">
                        <div class="col-md-3 offset-md-1 category-box">
                                <?php echo "<a class='no-text-decoration' href='$news'>
                              <h5 class='category-name'>Electrotehnica</h5>
                              <p>Anul 1, Anul 2, Anul 3, Anul 4</p>
                              <p>Cursuri, Testari, Note Testari</p>
                              </a>"; ?>
                        </div>

                        <div class="col-md-3 offset-md-1 category-box">
                                <?php echo "<a class='no-text-decoration' href='$news'>
                              <h5 class='category-name'>Master</h5>
                              <p>Anul 1, Anul 2, Anul 3, Anul 4</p>
                              <p>Cursuri, Testari, Note Testari</p>
                              </a>"; ?>
                        </div>

                        <div class="col-md-3 offset-md-1 category-box">
                              <?php echo "<a class='no-text-decoration' href='$news'>
                              <h5 class='category-name'>Cursuri</h5>
                              <p>Anul 1, Anul 2, Anul 3, Anul 4</p>
                              <p>Cursuri, Testari, Note Testari</p>
                              </a>"; ?>
                        </div>
                  </div>

                  <div class="col-md-10 spatiere-30">
                        &nbsp;
                  </div>

                  <div class="row">
                        <div class="col-md-3 offset-md-1 category-box">
                                <?php echo "<a class='no-text-decoration' href='$news'>
                              <h5 class='category-name'>Electrotehnica</h5>
                              <p>Anul 1, Anul 2, Anul 3, Anul 4</p>
                              <p>Cursuri, Testari, Note Testari</p>
                              </a>"; ?>
                        </div>

                        <div class="col-md-3 offset-md-1 category-box">
                                <?php echo "<a class='no-text-decoration' href='$news'>
                              <h5 class='category-name'>Master</h5>
                              <p>Anul 1, Anul 2, Anul 3, Anul 4</p>
                              <p>Cursuri, Testari, Note Testari</p>
                              </a>"; ?>
                        </div>

                        <div class="col-md-3 offset-md-1 category-box">
                              <?php echo "<a class='no-text-decoration' href='$news'>
                              <h5 class='category-name'>Cursuri</h5>
                              <p>Anul 1, Anul 2, Anul 3, Anul 4</p>
                              <p>Cursuri, Testari, Note Testari</p>
                              </a>"; ?>
                        </div>
                  </div>
                  
                  <div class="col-md-10 spatiere-30">
                        &nbsp;
                  </div>

                  <div class="row">
                        <div class="col-md-3 offset-md-1 category-box">
                                <?php echo "<a class='no-text-decoration' href='$news'>
                              <h5 class='category-name'>Testari</h5>
                              <p>Anul 1, Anul 2, Anul 3, Anul 4</p>
                              <p>Cursuri, Testari, Note Testari</p>
                              </a>"; ?>
                        </div>

                        <div class="col-md-3 offset-md-1 category-box">
                                <?php echo "<a class='no-text-decoration' href='$news'>
                              <h5 class='category-name'>Informatii utile</h5>
                              <p>Anul 1, Anul 2, Anul 3, Anul 4</p>
                              <p>Cursuri, Testari, Note Testari</p>
                              </a>"; ?>
                        </div>

                  </div>
            </div>
            <?php include "footer.php"; ?>
      </body>
</html>