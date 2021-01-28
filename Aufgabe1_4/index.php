<?php
   
   if ($_GET['username']) {
    $username = $_GET['username'];
        if (strlen($username) >= 1) {
            echo "Hallo {$username}!<br />";
        } 
    }
    else {
        echo "Rumpelstilzchen!";
    }

   if ($_GET['age']) {
       $age = $_GET['age'];
       echo "Hallo {$age}!<br />";
   }
    

?>