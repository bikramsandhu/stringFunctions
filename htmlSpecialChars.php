<?php
	$lnk = "<a href='echo.php'>Echo</a>";
	$test = htmlspecialchars($lnk, ENT_QUOTES);
	echo $test;
?>
