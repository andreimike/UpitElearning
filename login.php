<?php
 
$server = "localhost";
$database = "upit";
$username = "pma";
$password = "1234";
 
// conectarea la serverul MySQL
$connect = mysql_connect($server,$username,$password) or die( mysql_error() );
 
// selecteaza baza de date test
$db = mysql_select_db($database,$connect) or die( mysql_error() );
?>