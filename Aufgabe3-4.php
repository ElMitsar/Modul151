<?php

function getConnection() {
    $servername = "localhost";
	$username = "vmadmin";
	$password = "sml12345";
	$database = "northwind";

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conn;
}



$sql = "CREATE TABLE if not exists logins id int autoincrement, username varchar(255), password_hash(password varchar(255)), first_name varchar(255), last_name varchar(255) "
$registrierung = $_GET['registrierung'];
if ($registrierung != undefined) {
    echo"<!DOCTYPE html>
    <html lang='de'>
      <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Startseite</title>
      </head>
      <body>";
      echo "<a href='register.php'>Registrieren</a>"

      echo "</body>
      </html>";
}
?>
