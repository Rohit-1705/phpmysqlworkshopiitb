<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
      <form method="POST" action="q1_2_vowel.php">
      	<input type="text" name="inp">
      	<input type="submit" value="click here">
      </form>
</body>
</html>



<?php

   $var = $_POST['inp'];

    
    switch ($var) {
    	case 'a':
    	case 'A':
    		echo $var." is a vowel";
    		break;

    	case 'e':
    	case 'E':
    		echo $var." is a vowel";
    		break;

    	case 'i':
    	case 'I':
    		echo $var." is a vowel";
    		break;

    	case 'o':
    	case 'O':
    		echo $var." is a vowel";
    		break;

    	case 'u':
    	case 'U':
    		echo $var." is a vowel";
    		break;
    	default:
    		echo "it's a consonant";
    		break;
    }
   

?>