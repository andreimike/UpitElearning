<?php
require 'conectare.php';

if (!empty($_POST['nume']) && !empty($_POST['prenume']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['rol']) && isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['rol'])) {
        $nume = $_POST['nume'];
        $prenume = $_POST['prenume'];
        $username = strtolower($_POST['username']);
        $password = $_POST['password'];
        $rol = strtolower($_POST['rol']);

        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        $sql = "SELECT username FROM users WHERE username='$username'";
        $result = mysqli_query($conectare, $sql);
        $check = mysqli_num_rows($result);

        if ($check > 0) {
                header("Location: ../inregistrare.php?info=exista");
                die();
        } else {

                $sql = "INSERT INTO users (nume, prenume, username, password, rol) VALUES ('$nume', '$prenume', '$username', '$password_hashed', '$rol')";
                $result = mysqli_query($conectare, $sql);
                header("Location: ../inregistrare.php?info=ok");
        }
 } else {
        header("Location: ../inregistrare.php?info=eroare");
}
?>