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
    <table border="1" width="100%" style="width: 100%  !important; max-width: 100%;" cellspacing="10" cellpadding="1">
        <thead>
            <tr>
                <th class="text-center">Nume</th>
                <th class="text-center">Prenume</th>
                <th class="text-center">Specializare</th>
                <th class="text-center">An, grupa, subgrupa</th>
                <th class="text-center">Email</th>
                <th class="text-center">Notificare</th>
                <th class="text-center">Mesaj</th>
            </tr>
        </thead>
        <tbody>
             <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">
                    <ul class="nav navbar-nav navbar-left" style="">
                        <li class="dropdown">
                            <i class="fa fa-bell" aria-hidden="true" style="color: red;"></i><span class="notification" style="color: red; font-weight: bold;">1</span>
                        </li>
                    </ul>
                </td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">
                    <ul class="nav navbar-nav navbar-left" style="">
                        <li class="dropdown">
                            <i class="fa fa-bell" aria-hidden="true" style="color: red;"></i><span class="notification" style="color: red; font-weight: bold;">1</span>
                        </li>
                    </ul>
                </td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">
                    <ul class="nav navbar-nav navbar-left" style="">
                        <li class="dropdown">
                            <i class="fa fa-bell" aria-hidden="true" style="color: red;"></i><span class="notification" style="color: red; font-weight: bold;">1</span>
                        </li>
                    </ul>
                </td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">
                    <ul class="nav navbar-nav navbar-left" style="">
                        <li class="dropdown">
                            <i class="fa fa-bell" aria-hidden="true" style="color: red;"></i><span class="notification" style="color: red; font-weight: bold;">1</span>
                        </li>
                    </ul>
                </td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
            <tr>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Georgescu</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Daniel</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">Calculatoare</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">3.2.2</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';">adresaemail@yahoo.com</td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><i class="fa fa-bell" aria-hidden="true"></i></td>
                <td class="text-center" style="color: #222; font-family: 'Roboto', sans-serif';"><a href="#" class="btn btn-outline-success">Trimite mesaj</a></td>
            </tr>
        </tbody>
    </table>



    <?php include "footer.php"; ?>
</body>
</html>