<?php
	echo "factorial of 1 to 10 are given below </br>";
	$n=10;
 	$result=1;
 	$i=1;
 	for($i=1;$i<=$n;$i++){
	$result=$result*$i;
	
 	echo "Factorial of $i :" .$result. "</br>";
	}
 ?>