<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

mysqli_close($conn);
?>
