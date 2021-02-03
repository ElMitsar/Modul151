<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $value = $_POST['value'];
    }
?>
<form method="POST" action="?">
    <h>Pizza Konfigurator</h1>
    <p>Deine Pizza besteht aus folgenden Topings</p>
    <ul>
    <li>Salami</li>
    <li>Zwiebeln</li>
    <li>Speck</li>
    </ul>
    <input type="text" name="value" placeholder="Zutat">    
    <p>Füge eine weitere Zutat hinzu:</p><input type="submit" value="Hinzufügen" />
</form>
