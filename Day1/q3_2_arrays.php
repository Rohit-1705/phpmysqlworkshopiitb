<?php

$m1 = array(
	        array(1,2),
            array(2,3)
            );

$m2 = array(
	        array(4,5),
            array(5,6)
            );

$ans = array(array(),array());

echo "The first matrix is:<br>";

for($row=0;$row<=1;$row++){
	for($column=0;$column<=1;$column++){

		echo $m1[$row][$column]." " ;
		
	}
	echo "<br>";
}

echo "<br>The second matrix is:<br>";

for($row=0;$row<=1;$row++){
	for($column=0;$column<=1;$column++){

		echo $m2[$row][$column]." " ;
		
	}
	echo "<br>";
}

echo "<br>The additin of these two matrix is:<br>";

for($row=0;$row<=1;$row++){
	for($column=0;$column<=1;$column++){

		$ans[$row][$column] = $m1[$row][$column] + $m2[$row][$column];
		echo $ans[$row][$column]." " ;
	}
	echo "<br>";
}



?>