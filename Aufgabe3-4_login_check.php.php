<?php
if (isset($_SESSION['username'])) {
  if (isset($_SESSION['password'])) {
}
else {
  header("Location: login.php");
  exit();
}
}
else {
  header("Location: login.php");
exit();
}
?>


