<?php 

require 'links.php'; 
?>
<header class="mainHeader">
      <div class="container">
            <div class="row no-gutters">
                  <!--Mobile Navigation Start-->
                  <div class="col hidden-lg-up col-md col-sm col-xs mobile-nav-box">
                        <nav class="navbar navbar-toggleable-lg navbar-light bg-faded homenavbar">
                              <div class="row align-items-center">
                                    <div class="col">
                                          <div class="navbar-header">
                                                <button type="button" class="navbar-toggler btn-info hidden-lg-up" data-toggle="collapse" data-target="#myNavbar">
                                                      <span class="fa fa-navicon"></span></button> &nbsp; Meniu
                                          </div>    
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-8">
                                          <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Cauta">
                                                <div class="input-group-btn">
                                                      <button class="btn btn-info" type="submit">
                                                            <i class="pe-7s-search pe-lg pe-va"></i>
                                                      </button>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav">
                                          <li class="mobileItems"><?php echo "<a href='$mainMenu'>Acasa</a>"; ?></li>
                                          <li class="mobileItems"><?php echo "<a href='$anul1'>Anul 1</a>"; ?></li>
                                          <li class="mobileItems"><a href="">Anul 2</a></li>
                                          <li class="mobileItems"><a href="">Anul 3</a></li>
                                          <li class="mobileItems"><a href="">Anul 4</a></li>
                                          <li class="mobileItems"><a href="">Master</a></li>
                                          <li class="mobileItems"><?php echo "<a href='$cat''>Noutati</a>"; ?></li>
                                          <li class="mobileItems"><a href="#">Profilul meu</a></li>
                                          <li class="mobileItems"><?php echo "<a href='$updateInfos'>Actualizeze datele</a>"; ?></li>
                                          <li class="mobileItems"><?php echo "<a href='$logout'>Logout</a>"; ?></li>

                                    </ul>
                              </div>
                        </nav>
                  </div>
                  <!--Mobile Navigation Stop-->   
                  <?php
                  if ($_SESSION['rol'] == 'student')
                  {
                      ?>
                      <div class="col col-xl-12 col-lg-12 hidden-md-down desktop-nav-box">
                            <nav class="navbar navbar-toggleable-md navbar-light bg-faded navbarmenu">
                                  <div class="container-fluid">
                                        <ul class="nav nav-bar nav-justified-center">
                                              <li role="presentation" class="nav-item nav-menu-txt"><a class='nav-link' href='meniul-principal.php'><span class='glyphicon glyphicon-home'></span> Acasa</a></li>
                                              <li class="nav-item dropdown nav-menu-txt">
                                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Anul 1<span class="caret"></span></a>
                                                    <div class="dropdown-menu dropdown-menu-nav" aria-labelledby="navbarDropdownMenuLink">
                                                          <a class='' href='anul-1-semestrul1.php'><p class=''>Semestrul 1</p></a>
                                                          <a class="" href="#"><p class="">Semestrul 2</p></a>
                                                    </div>
                                              </li>            
                                              <li role="presentation" class="nav-item dropdown nav-menu-txt">
                                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Anul 2<span class="caret"></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-nav">
                                                          <li><a href="#"><p class="">Semestrul 1</p></a></li>
                                                          <li><a href="#"><p class="">Semestrul 2</p></a></li>
                                                    </ul>
                                              </li>
                                              <li role="presentation" class="nav-item dropdown nav-menu-txt">
                                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Anul 3<span class="caret"></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-nav">
                                                          <li><a href="#"><p class="">Semestrul 1</p></a></li>
                                                          <li><a href="#"><p class="">Semestrul 2</p></a></li>
                                                    </ul>
                                              </li>
                                              <li role="presentation" class="nav-item dropdown nav-menu-txt">
                                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Anul 4<span class="caret"></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-nav">
                                                          <li><a href="#"><p class="">Semestrul 1</p></a></li>
                                                          <li><a href="#"><p class="">Semestrul 2</p></a></li>
                                                    </ul>
                                              </li>
                                              <li role="presentation" class="nav-item nav-menu-txt"><a class="nav-link" href="#">Master</a></li>
                                              <li role="presentation" class="nav-item nav-menu-txt"><a class='nav-link' href='categorii.php'>Noutati</a></li>
                                              <li role="presentation" class="nav-item dropdown nav-menu-txt">
                                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Contul meu<span class="caret"></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-nav">
                                                          <li><a href="#"><p class="">Profil</p></a></li>
                                                          <li><a href='actualizeaza-datele.php'><p class=''>Actualizeze datele</p></a></li>
                                                          <li><a href='include/logout.inc.php'><p class=''>Logout</p></a></li>

                                                    </ul>
                                              </li>
                                        </ul>
                                  </div>
                            </nav>
                      </div>
                  <?php } ?>
<?php if ($_SESSION['rol'] == 'admin')
{ ?>
                      <div class="col col-xl-12 col-lg-12 hidden-md-down desktop-nav-box">
                            <nav class="navbar navbar-toggleable-md navbar-light bg-faded navbarmenu">
                                  <div class="container-fluid">
                                        <ul class="nav nav-bar nav-justified-center">
                                              <li role="presentation" class="nav-item nav-menu-txt"><a class='nav-link' href='meniul-principal.php'><span class='glyphicon glyphicon-home'></span> Acasa</a></li>


                                              <li role="presentation" class="nav-item nav-menu-txt"><a class='nav-link' href='categorii.php'>Noutati</a></li>
                                              <li role="presentation" class="nav-item nav-menu-txt"><a class='nav-link' href='inregistrare.php'>Inregistrare utilizatori</a></li>
                                              <li role="presentation" class="nav-item nav-menu-txt"><a class='nav-link' href='include/logout.inc.php'>Logout</a></li>
                                              
                                    </ul>
                                  </div>
                            </nav>
                      </div>
<?php } ?>

                  <div class="container" id="search-row">
                        <div class="row no-gutters">
                              <div class="col-5 hidden-md-down" id="breadcrumb">
                                  <?php
                                  $path = $_SERVER["PHP_SELF"];
                                  $parts = explode('/', $path);
                                  if (count($parts) < 1)
                                  {
                                      echo("Pagina principala");
                                  }
                                  else
                                  {
                                      echo ("<i class='fa fa-map-marker' aria-hidden='true'></i> ");
                                      for ($i = 1; $i < count($parts); $i++)
                                      {
                                          if (!strstr($parts[$i], "."))
                                          {
                                              echo("<a href=\"");
                                              for ($j = 0; $j <= $i; $j++)
                                              {
                                                  echo $parts[$j] . "/";
                                              };
                                              echo("\">" . str_replace('-', ' ', $parts[$i]) . "</a> &raquo; ");
                                          }
                                          else
                                          {
                                              $str = $parts[$i];
                                              $pos = strrpos($str, ".");
                                              $parts[$i] = substr($str, 0, $pos);
                                              echo str_replace('-', ' ', $parts[$i]);
                                          };
                                      };
                                  };
                                  ?>
                              </div>
                              <div class="col-4 offset-xl-3 offset-lg-3 hidden-md-down nav-search-btn">
                                    <form class="navbar-form navbar-right">
                                          <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Cauta">
                                                <div class="input-group-btn">
                                                      <button class="btn btn-info" type="submit">
                                                            <i class="pe-7s-search pe-lg pe-va"></i>
                                                      </button>
                                                </div>
                                          </div>
                                    </form>
                              </div>
                              <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                                    &nbsp;
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</header>