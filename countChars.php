<?php
	$exStr = "Hello world!";
	print_r(count_chars($exStr,1));
	/**
	second part of calling count_chars is mode where...
	0 -> returns array with ASCII value as key and number of occurances as value
	1 -> same as 0 but only lists occurances greater than zero
	2 -> same as 0 but only lists occurances equal to zero
	3 -> returns a string with all different characters used
	4 -> retusn a string with all unused characters
	**/
?>
