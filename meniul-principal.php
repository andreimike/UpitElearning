<?php
session_start();
if (!isset($_SESSION['id']))
{
    header("Location: index.php");
}
elseif (isset($_SESSION['id']))
{
    include 'links.php';
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
                  Meniul principal
            </title>
      </head>
      <body>
          <?php
          if ($_SESSION['rol'] == 'student')
          {
              ?>
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
                <div class="container">
                      <div class="row m-t-3">
                            <div class="col-md-12 ">
                                  <div class="row m-t-3">
                                        <div class="col-md-3">
                                              <form action="anul-1-semestrul1.php" method="post">
                                                    <fieldset class="form-group"> 
                                                          <label class="">Specializare</label>
                                                          <select name="specializare[]" class="form-control col-md-11"> 

                                                                <option value="calculatoare">Calculatoare</option> 
                                                                <option value="NULL"><b> - </b></option>
                                                                <option value="RST">RST</option> 
                                                                <option value="EA">Electronica Aplicata</option> 
                                                                <option value="Electrotehnica">Electrotehnica</option>
                                                          </select> 
                                                          <div class="sptiu10">
                                                                &nbsp;
                                                          </div>
                                                          <?php
                                                          if (isset($_POST['specializare']) and $_POST['specializare'] !== 'NULL' and $_POST['specializare'] == 'calculaotare')
                                                          {
                                                              echo "<p>ERROR: You must select a state.\n";
                                                          }
                                                          else
                                                          {
                                                              
                                                          }
                                                          ?>
                                                          <input type="submit" class="btn btn-info" value="submit"/>

                                                    </fieldset>
                                              </form>

                                        </div>
                                        <div class="col-md-3">
                                              <form>
                                                    <fieldset class="form-group"> 
                                                          <label class="">Master</label>
                                                          <select class="form-control col-md-11">
                                                                <option><b> - </b></option>
                                                                <option>Lorem Ipsum_1</option> 
                                                                <option>Lorem Ipsum_2</option> 
                                                                <option>Lorem Ipsum_3</option>
                                                          </select>
                                                    </fieldset>
                                              </form>
                                        </div>
                                        <div class="col-md-3">
                                              <form>
                                                    <fieldset class="form-group"> 
                                                          <label class="">An de studii</label>
                                                          <select class="form-control col-md-11"> 
                                                                <option>1</option> 
                                                                <option>2</option> 
                                                                <option>3</option>
                                                                <option>4</option>
                                                          </select>
                                                    </fieldset>
                                              </form>
                                        </div>
                                        <div class="col-md-3">
                                              <form>
                                                    <fieldset class="form-group"> 
                                                          <label class="">Semestrul</label>
                                                          <select class="form-control col-md-11"> 
                                                                <option>1</option> 
                                                                <option>2</option> 
                                                          </select>
                                                    </fieldset>
                                              </form>
                                        </div>
                                  </div>
                                  <div class="row submitbox">
                                        <div class="col-md-4 offset-md-4">



                                        </div>
                                  </div>
                            </div>
                      </div>
                      <div class="row m-t-3">

                      </div>
                </div>
                <?php include "footer.php"; ?>
          </body>
    </html>
<?php } ?>

<?php
if ($_SESSION['rol'] == 'admin')
{
    ?>
    <?php
    include 'navbar.php';
    ?>
    <?php
    echo '
    <div class="container">
    <div class="row">
    <h4 class="text-muted" style="text-align: center; display: block; margin: 0 auto; padding-top: 50px;">Administrator, bine ai revenit</h4> 
</div>
</div>
    ';
    ?>
    <?php
}
?>