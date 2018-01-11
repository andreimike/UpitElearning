<?php

require 'conndb.php';

$numeErr = $prenumeErr = $emailErr = $parolaErr = $facultateErr = "";
              $nume = $prenume = $email = $parola = $facultate = "";

              function input($data) {
                      $data = trim($data);
                      $data = stripslashes($data);
                      $data = htmlspecialchars($data);
                      return $data;
              }

              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                      if (empty($_POST["nume"])) {
                              $numeErr = "Introduceti numele";
                      } else {
                              $nume = input($_POST["nume"]);
                      }

                      if (empty($_POST["prenume"])) {
                              $prenumeErr = "Intruceti prenumele";
                      } else {
                              $prenume = input($_POST["prenume"]);
                      }

                      if (empty($_POST["email"])) {
                              $emailErr = "Introduceti adresa de email";
                      } else {
                              $email = input($_POST["email"]);
                              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                      $emailErr = "Format invalid pentru adresa de email";
                              }
                      }

                      if (empty($_POST["parola"])) {
                              $parolaErr = "Introduceti parola";
                      } else {
                              $parola = input($_POST["parola"]);
                      }

                      if (empty($_POST["facultate"])) {
                              $facultateErr = "Introduceti facultatea";
                      } else {
                              $facultate = input($_POST["facultate"]);
                      }
              }

$sql = "INSERT INTO signup (nume, prenume, email, parola, facultate) VALUES ('$nume', '$prenume', '$email', '$parola', '$facultate')";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
