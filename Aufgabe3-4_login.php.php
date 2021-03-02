<?php
$username = $_GET['username'];
$password = $_GET['password'];

if ($username != undefined && $password != undefined) {
    password_verify();
    $sql="SELECT * FROM logins WHERE username = $username AND password = password_hash($password)";
    if($result->num_rows == 1) {
        echo "<script>window.location.href = '/customers'</script>"
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
    }
    else {
        echo "<script>alert('Login fehlgeschlagen');</script>"
    }

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
    if (username == null || password == null) {
        alert("es fehlen angaben");
    }
    else {
        eval ('window.location.href = '/?username=username?password=password';');
    }
}</script>"
echo "<textarea id='username'>Benutzername</textarea>";
echo "<textarea id='password'>Passwort</textarea>";
echo " <button onclick='absenden()'>absenden</button> "

echo "</body>
      </html>";
?>
