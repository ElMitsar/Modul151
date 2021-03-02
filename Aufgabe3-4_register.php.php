<?php
$username = $_GET['username'];
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
$password = $_GET['password'];

if ($username != undefined && $first_name != undefined && $last_name != undefined && $password != undefined) {
        $sql = "SELECT username FROM logins WHERE username = $username";
        if($result->num_rows == 0) {
            $sql = " INSERT INTO ('username', 'first_name', 'last_name', 'password') VALUES ('$username', '$first_name', '$last_name', '$password');
        }
        else {echo "alert('Benutzer bereits angelegt');"}
}

function getConnection() {
    $servername = "localhost";
	$username = "vmadmin";
	$password = "sml12345";
	$database = "northwind";

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conn;
}

echo"<!DOCTYPE html>
    <html lang='de'>
      <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Startseite</title>
      </head>
      <body>";

echo "<script>function absenden() {
    var username = document.getElementById("username");
    var password = document.getElementById("password");
    var first_name = document.getElementById("first_name");
    var last_name = document.getElementById("last_name");
    if (username == null || password == null || first_name == null || last_name == null) {
        alert("es fehlen angaben");
    }
    else {
        eval ('window.location.href = '/?username=username?password=password?first_name=first_name?last_name=last_name');
    }
}</script>"
echo "<textarea id='username'>Benutzername</textarea>";
echo "<textarea id='password'>Passwort</textarea>";
echo "<textarea id='first_name'>Vorname</textarea>";
echo "<textarea id='last_name'>Nachname</textarea>";
echo " <button onclick='absenden()'>absenden</button> "

echo "</body>
      </html>";
?>
