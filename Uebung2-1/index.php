<?php
//SQL Server wird aufgerufen
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT contactname FROM northwind.customers WHERE job_title = 'Purchasing Representative';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo $result->num_rows . " Resultate";
} else {
  echo "Keine Resultate vorhanden";
}


//Applikation trennt sich von SQL Server
mysqli_close($conn);
?>