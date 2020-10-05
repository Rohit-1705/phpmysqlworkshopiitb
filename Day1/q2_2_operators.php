<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <form method="POST" action="q2_2_operators.php">
  	<h1>Input two numbers</h1>
  	
  	<input type="text" name="num1">
  	<input type="text" name="num2">

  	<input type="submit" value="click here">
  </form>
</body>
</html>


<?php


$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

if($num1>$num2){
	echo "$num1 is the greatest.<br>";
}
else if($num1<$num2){
	echo "$num2 is the greatest. <br>";
}
else{
	echo "Both numbers are equal.<br>";
}

?>