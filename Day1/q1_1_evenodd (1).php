<?php

$numbers = array(1,2,3,4,5,6);

for($i=0;$i<count($numbers);$i++){

	if($numbers[$i]%2==0){
		echo "$numbers[$i] is a even no <br>";
	}else{
		echo "$numbers[$i] is a odd number no<br>";
	}

}
?>