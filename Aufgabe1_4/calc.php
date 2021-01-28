<?php
   if ($_GET['x']) {
       $x = $_GET['x'];
       $x = intval($x);
       echo "{$x}";
   }
   else {echo "keine erste Zahl gewählt<br>";}

   if ($_GET['y']) {
    $y = $_GET['y'];
    $y = intval($y);
    echo "{$y}";
    }
    else {echo "keine zweite Zahl gewählt<br>";}

    if ($_GET['mode']) {
        $mode = $_GET['mode'];
        if ((is_int($x) && is_int($y)) {

            if ($mode == 'plus') { echo $x+$y; }
            if ($mode == 'minus') { echo $x+$y; }
            if ($mode == 'mal') { echo $x+$y; }
            if ($mode == 'div') { echo $x+$y; }
        }
    }
        else {echo "kein modus gewählt";}
?>