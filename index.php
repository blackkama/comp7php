<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="front"> 
<form action="index.php" name="myform" method="post"> 
       Введите A: <input type="ini_set" name="a" size="10" maxlength="5">
	   </br>
       Введите B: <input type="int_set" name="b" size="10" maxlength="5">
	   <br>
<input name="Submit" type=submit value="Результат"> 
</form>
<?php
$a= $_POST['a']; 
$b=$_POST['b'];
$result=$a+$b;
echo "</br>";
echo "Результат= ".$result;






?>
</div>	
</body>
</html>