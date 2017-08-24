<?php 
	/*function factorial_n($number) {          
        if ($number <=1) { 
            return 1; 
        } else { 
            return ($number * factorial_n($number-1)); 
        } 
    }
	echo "Factorial of 9 is =" .factorial_n(9); */
	
	
	$n=10;
	$result=1;
	$i=1;
	for($i=1;$i<=$n;$i++){
		$result=$result*$i;
		echo "Factorial of 1-10 :" .$result. "</br>";
	
	}
	
?>