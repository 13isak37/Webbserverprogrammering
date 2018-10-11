<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title> Kalkylator </title>
</head>
  <body>
<form attribute="post" action="index.php" method="post">

  <p>Tal 1:<br/>
<input type="text" id="tal1" name="tal1"></p>
<p>Tal 2:<br/>
<input type="text" id="tal2" name="tal2"></p>

<input type="radio" name="group1" id="plus" value="plus" checked="true"><p>+</p><br/>
<input type="radio" name="group1" id="minus" value="minus"><p>-</p><br/>
<input type="radio" name="group1" id="multiplikation" value="multiplikation"><p>*</p><br/>

<p></p>
<button type="submit" name="answer" id="answer" value="answer">Beräkna</button>

</form>


<?php



$Tal1 = $_POST['tal1'];
$Tal2 = $_POST['tal2'];
if($_POST['group1'] == 'plus') {
echo $Tal1 + $Tal2;
}
else if($_POST['group1'] == 'minus') {
echo $Tal1 - $Tal2;
}
else if($_POST['group1'] == 'multiplikation') {
echo $Tal1 * $Tal2;
}


 ?>
</body>
</html>
