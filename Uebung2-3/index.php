<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";
$database = "northwind";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * FROM customers";
foreach ($conn->query($sql) as $row) {
  echo $row['first_name']."<br />";
   echo $row['last_name']."<br />";
   echo $row['company']."<br />";
   echo $row['email_address']."<br />";
   echo $row['job_title']."<br />";
   echo $row['business_phone']."<br />";
   echo $row['home_phone']."<br />";
   echo $row['mobile_phone']."<br />";
   echo $row['fax_number']."<br />";
   echo $row['adress']."<br />";
   echo $row['city']."<br />";
   echo $row['state_province']."<br /><br />";

echo '<a href="bestellungen.php?id='.$row['id'].'">link zu Kundendaten</a>";
}
?>