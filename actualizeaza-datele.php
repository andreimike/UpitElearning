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
            <?php include 'navbar.php';?>
            <br>

            <div class="containter">
                  <div class="row no-gutters">
                        <div class="col col-md-12">
                              <div class="content">
                                    <div class="container-fluid">
                                          <div class="row">
                                                <div class="col-md-8">
                                                      <div class="card">
                                                            <div class="header">
                                                                  <h4 class="title">Edit Profile</h4>
                                                            </div>
                                                            <div class="content">
                                                                  <form>
                                                                        <div class="row">
                                                                              <div class="col-md-5">
                                                                                    <div class="form-group">
                                                                                          <label>Company (disabled)</label>
                                                                                          <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                                                                                    </div>
                                                                              </div>
                                                                              <div class="col-md-3">
                                                                                    <div class="form-group">
                                                                                          <label>Username</label>
                                                                                          <input type="text" class="form-control" placeholder="Username" value="michael23">
                                                                                    </div>
                                                                              </div>
                                                                              <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                          <label for="exampleInputEmail1">Email address</label>
                                                                                          <input type="email" class="form-control" placeholder="Email">
                                                                                    </div>
                                                                              </div>
                                                                        </div>

                                                                        <div class="row">
                                                                              <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                          <label>First Name</label>
                                                                                          <input type="text" class="form-control" placeholder="Company" value="Mike">
                                                                                    </div>
                                                                              </div>
                                                                              <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                          <label>Last Name</label>
                                                                                          <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                                                                                    </div>
                                                                              </div>
                                                                        </div>

                                                                        <div class="row">
                                                                              <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                          <label>Address</label>
                                                                                          <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                                                                    </div>
                                                                              </div>
                                                                        </div>

                                                                        <div class="row">
                                                                              <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                          <label>City</label>
                                                                                          <input type="text" class="form-control" placeholder="City" value="Mike">
                                                                                    </div>
                                                                              </div>
                                                                              <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                          <label>Country</label>
                                                                                          <input type="text" class="form-control" placeholder="Country" value="Andrew">
                                                                                    </div>
                                                                              </div>
                                                                              <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                          <label>Postal Code</label>
                                                                                          <input type="number" class="form-control" placeholder="ZIP Code">
                                                                                    </div>
                                                                              </div>
                                                                        </div>

                                                                        <div class="row">
                                                                              <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                          <label>About Me</label>
                                                                                          <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                                                                    </div>
                                                                              </div>
                                                                        </div>

                                                                        <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                                                        <div class="clearfix"></div>
                                                                  </form>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="card card-user">
                                                            <div class="image">
                                                                  <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp;h=300&amp;q=75&amp;w=400" alt="...">
                                                            </div>
                                                            <div class="content">
                                                                  <div class="author">
                                                                        <a href="#">
                                                                              <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..." data-pin-nopin="true">

                                                                              <h4 class="title">Mike Andrew<br>
                                                                                    <small>michael24</small>
                                                                              </h4>
                                                                        </a>
                                                                  </div>
                                                                  <p class="description text-center"> "Lamborghini Mercy <br>
                                                                        Your chick she so thirsty <br>
                                                                        I'm in that two seat Lambo"
                                                                  </p>
                                                            </div>
                                                            <hr>
                                                            <div class="text-center">
                                                                  <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                                                  <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                                                  <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                                                            </div>
                                                      </div>
                                                </div>

                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <?php            include 'footer.php';?>
      </body>
</html>