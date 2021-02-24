<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";
$database = "northwind";

$stadt = $_GET['stadt'];
$adresse = $_GET['adresse'];
$fax = $_GET['fax'];
$privatnummer = $_GET['privatnummer'];
$geschaeftsnummer = $_GET['geschaeftsnummer'];
$email = $_GET['email'];
$jobtitel = $_GET['jobtitel'];
$email = $_GET['email'];
$unternehmen = $_GET['unternehmen'];
$nachname = $_GET['nachname'];
$vorname = $_GET['vorname'];

$parameterid = $_GET['parameterid'];
if ($parameterid is_countable and $customer_id is_countable) {
  echo "<script>"
   echo "var ortschaft='$row['state_province']."'";
   echo "document.getElementById("vornamen").value = $vornamen; "
   echo "document.getElementById("nachnamen").value = $nachnamen; "
   echo "document.getElementById("unternehmn").value = $unternehmen; "
   echo "document.getElementById("email").value = $email; "
   echo "document.getElementById("geschaeftsnummer").value = $geschaeftsnummer; "
   echo "document.getElementById("privatnummer").value = $privatnummer; "
   echo "document.getElementById("fax").value = $fax; "
   echo "document.getElementById("adresse").value = $adresse; "
   echo "document.getElementById("stadt").value = $stadt; "

   document.getElementById("nachnamen").value = nachnamen; 
   echo "</script>"
   $sql = "ALTER TABLE customers ADD first_name $vorname, ADD last_name $nachname, ADD unternehmen $unternehmen, ADD email $email, ADD job_title $jobtitel, ADD business_phone $geschaeftsnummer, ADD privatnummer $privatnummer, ADD fax_number $fax, ADD adress $adresse, ADD city $stadt";
}
else {
  echo "<script>"
  echo "var ortschaft='$row['state_province']."'";
  echo "document.getElementById("vornamen").value = $vornamen; "
  echo "document.getElementById("nachnamen").value = $nachnamen; "
  echo "document.getElementById("unternehmn").value = $unternehmen; "
  echo "document.getElementById("email").value = $email; "
  echo "document.getElementById("geschaeftsnummer").value = $geschaeftsnummer; "
  echo "document.getElementById("privatnummer").value = $privatnummer; "
  echo "document.getElementById("fax").value = $fax; "
  echo "document.getElementById("adresse").value = $adresse; "
  echo "document.getElementById("stadt").value = $stadt; "
  sql = "UPDATE TABLE customers INSERT first_name $vorname, INSERT last_name $nachname, INSERT unternehmen $unternehmen, INSERT email $email, INSERT job_title $jobtitel, INSERT business_phone $geschaeftsnummer, INSERT privatnummer $privatnummer, INSERT fax_number $fax, INSERT adress $adresse, INSERT city $stadt";
  document.getElementById("nachnamen").value = nachnamen; 
  echo "</script>"
}

}

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

echo '
<!DOCTYPE html>
<html lang="de">
  <head>
    <title>Formular</title>
  </head>
  <script>
  function absenden() {
    var vorname = document.getElementById("vorname").value;
    var nachname = document.getElementById("nachname").value;
    var unternehmen = document.getElementById("unternehmen").value;
    var email = document.getElementById("email").value;
    var jobtitel = document.getElementById("jobtitel").value;
    var email = document.getElementById("email").value;
    var jobtitel = document.getElementById("jobtitel").value;
    var email = document.getElementById("email").value;
    var geschaeftsnummer = document.getElementById("geschaeftsnummer").value;
    var privatnummer = document.getElementById("privatnummer").value;
    var fax = document.getElementById("fax").value;
    var adresse = document.getElementById("adresse").value;
    var stadt = document.getElementById("stadt").value;

    var parameter = "index.php?vorname=" + vorname + "?nachname=" + nachname + "?unternehmen=" + unternehmen + "?email=" + email + "?jobtitel=" + jobtitel + "?email=" + email + "?geschaeftsnummer=" + geschaeftsnummer + "?privatnummer=" + privatnummer + "?fax=" + fax + "?adresse=" + adresse + "?stadt=" + stadt;
    window.location.href = parameter; 
  }
  </script>
  <body>
  <p>vorname:</p><input type="text" id="vorname">
  <p>nachname:</p><input type="text" id="nachname">
  <p>unternehmen:</p><input type="text" id="unternehmen">
  <p>email:</p><input type="text" id="email">
  <p>jobtitel:</p><input type="text" id="jobtitel">
  <p>email:</p><input type="text" id="email">
  <p>geschaeftsnummer:</p><input type="text" id="geschaeftsnummer">
  <p>privatnummer:</p><input type="text" id="privatsnummer">
  <p>fax:</p><input type="text" id="fax">
  <p>adresse:</p><input type="text" id="adresse">
  <p>stadt:</p><input type="text" id="stadt">
  <button onclick="absenden()" type="button">absenden</button> 

  </body>
</html>

';
}
?>