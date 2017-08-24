<?php 
	//factorial of 9

	function factorial_n($number) {          
        if ($number <=1) { 
            return 1; 
        } else { 
            return ($number * factorial_n($number-1)); 
        } 
    }
	echo "Factorial of 9 is =" .factorial_n(9); 
	?>
