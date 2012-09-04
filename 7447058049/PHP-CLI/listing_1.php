#!/usr/bin/php
<?php
/***********************************************
* Just showing some crap for the command line
* It will display the arguments that you give to it on the command line
*
* Mike Browne - mbrowne@cantorgaming.com
* Created:            TIMESTAMP 
* Last Modified:      TIMESTAMP
***********************************************/

	if(PHP_SAPI == 'cli') {
		echo "Running as Command Line Interpreter\n";
	}
	
	echo "Number of arguments: " . $_SERVER['argc'] . "\n";

	$arguments = $_SERVER['argv'];
	foreach ($arguments as $nr => $argument) {
		echo "arguments[$nr] = $argument\n";
	}

	exit(0);
?>
