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
    <body>

        <?php require 'links.php'; ?>

        <div class="container">
            <div class="row">
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded col col-xl-12 col-lg-12 col-md-12">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php echo "<a class='navbar-brand navbar-brand-home' href= '$mainMenu'>Cursuri Online</a>"; ?>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item"><?php echo "<a class='nav-link' href='$contulMeu'><i class='fa fa-user' aria-hidden='true'></i> Contul meu</a> "; ?></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fa fa-globe fa-lg"></span>
                                    <span class="notification">5</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown link
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    &nbsp;
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <nav class="navbar navbar-inverse homenavbar">
                        <div class="containers">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span> 
                                </button>
                                <div class="navbar-header">

                                </div>     
                            </div>
                            <form class="navbar-form navbar-right">
                                <div class="input-group">
                                    <input type="search" class="form-control form-control-home" placeholder="Cauta">

                                </div>
                            </form>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav navbar-right">

                                </ul>
                                <ul class="nav navbar-nav navbar-right">

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div>

                </div>
                <div class="col-lg-2 col-md-2">

                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    &nbsp;
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                    &nbsp;
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 menu0">
                    <div style="text-align: center; font-family: 'Roboto', sans-serif; color: #FFF;">
                        <h1>&#8544;</h1>
                    </div>
                    <div class="dropdown0">
                        <button class="dropbtn0">Alege semestrul</button>
                        <div class="dropdown-content0">
                            <?php echo "<a href='$an1sem1'>Semestrul 1</a> "; ?>
                            <a href="#">Semestrul 2</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
                    &nbsp;
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 menu1">
                    <div style="text-align: center; font-family: 'Roboto', sans-serif; color: #FFF;">
                        <h1>&#8544;&#8544;</h1>
                    </div>
                    <div class="dropdown1">
                        <button class="dropbtn1">Alege semestrul</button>
                        <div class="dropdown-content1">
                            <a href="#">Semestrul 1</a>
                            <a href="#">Semestrul 2</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
                    &nbsp;
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 menu2">
                    <div style="text-align: center; font-family: 'Roboto', sans-serif; color: #FFF;">
                        <h1>&#8544;&#8544;&#8544;</h1>
                    </div>
                    <div class="dropdown2">
                        <button class="dropbtn2">Alege semestrul</button>
                        <div class="dropdown-content2">
                            <a href="#">Semestrul 1</a>
                            <a href="#">Semestrul 2</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                    &nbsp;
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-col-md-12 col-xs-12 col-sm-4">
                    &nbsp;
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                    &nbsp;
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 menu3">
                    <div style="text-align: center; font-family: 'Roboto', sans-serif; color: #FFF;">
                        <h1>&#8547;</h1>
                    </div>
                    <div class="dropdown3">
                        <button class="dropbtn3">Alege semestrul</button>
                        <div class="dropdown-content3">
                            <a href="#">Semestrul 1</a>
                            <a href="#">Semestrul 2</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
                    &nbsp;
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 menu5">
                    <div id="contactMenu">
                        <h1 class="contactMenu"><a style="color: #FFFFFF; text-decoration: none;" href="#">Master</a></h1>
                    </div>

                </div>
                <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
                    &nbsp;
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 menu5">
                    <div id="contactMenu">
                        <h1 class="contactMenu"><?php echo "<a style='color: #FFFFFF; text-decoration: none;' href='$news'>Noutati</a>"; ?></h1>
                    </div>

                </div>
                <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                    &nbsp;
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    &nbsp;
                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>