#!/usr/bin/php

<?php
/*
 * Created By: Thomas Osgood
 * Name: Pascal Triangle
 *
 * Developed On: Linux (PoP!_Os)
 *
 * Notes:
 * 	- This program assumes PHP version is 5 or above.
 * 	- The input to the Pascal Triangle function isn't validated before.
 * 	- The user input (# of rows) is provided by another form.
 */

/*
 * Function Name: factorial
 * Function Purpose:
 * 	Calculate the factorial of a number.
 * Input(s):
 * 	- $num : Integer. Number who's factorial to determine.
 * Return(s):
 * 	- $fact : Integer. Factorial of $num.
 */
function factorial($num) {
	/*
	 * Validate function input.
	 */
	if((filter_var($num, FILTER_VALIDATE_INT) == false) && ($num != 0)) {
		echo "Input not an integer ...\n";
		return false;
	}

	/*
	 * Calculate factorial of integer input.
	 */
	if( $num <= 1 ) {
		return 1;
	} else {
		return $num * factorial($num - 1);
	}
}


/*
 * Function Name: pascalTriangle
 * Function Purpose:
 * 	Calculate and print out Pascal's Triangle.
 * 	
 * 	row_value = (n!)/(r! * (n-r)!)
 * Input(s):
 * 	- $k : Integer. Number of rows.
 * Return(s):
 * 	None
 */
function pascalTriangle($k) {
	/* Check to make sure input to the function is of correct type */
	if((filter_var($k, FILTER_VALIDATE_INT) == false) && ($num != 0)) {
		echo "Input to function is not a variable ...\n";
		return;
	}

	/* Check to make sure input to the function is within range */
	if(($k < 2) || ($k > 25)) {
		echo "Input is out of acceptable range ...\n";
		return;
	}

	/*
	 * Nested Loop (whole): Print Pascal's Triangle.
	 * Outside Loop: Loop to get correct # of rows.
	 * Inside Loop: Loop to get correct # of items on each row.
	 */
	for($n=0; $n<$k; $n++) {
		for($r = 0; $r < $n+1; $r++) {
			$n_val = factorial($n)/(factorial($r) * factorial($n - $r));
			print $n_val." ";
		}
		print "\n";
	}
}

/*
 * UNCOMMENT THIS BLOCK TO RUN THE FUNCTION CALL BELOW
 *
 * pascalTriangle(4);
 */
?>
