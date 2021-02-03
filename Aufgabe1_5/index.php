<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['name'];
        if ($username is_string) {
        echo "Hallo {$username}!";
        }
        else {echo "error"}
    }
?>
<form method="POST" action="?">
    <input type="text" name="name" placeholder="Benutzername">
    <select name="cars" id="cars">
        <option value="one">1. Klasse</option>
        <option value="two">2. Klasse</option>
        <option value="three">3. Klasse</option>
        <option value="four">4. Klasse</option>
        <option value="five">5. Klasse</option>
        <option value="six">6. Klasse</option>
        <option value="seven">7. Klasse</option>
        <option value="eight">8. Klasse</option>
        <option value="nine">9. Klasse</option>
</select>
    <input type="submit" value="Absenden" />

</form>
