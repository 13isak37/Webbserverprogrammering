<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title>Isaks sida</title>
</head>
<body>
<h3>Välkommen till Isaks sida</h3>

<?php
$inloggad = $_SESSION['inloggad'];

if ($inloggad=="sant")
{
  echo "Välkommen!<br>";
}
else {
  echo "Förbjudet!<br>";
}
?>
</body>
</html>
