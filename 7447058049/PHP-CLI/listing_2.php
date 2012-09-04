#!/usr/bin/php
<?php
/***********************************************
* Parse the text file and show each line
*
* Mike Browne - mbrowne@cantorgaming.com
* Created:            TIMESTAMP 
* Last Modified:      TIMESTAMP
***********************************************/
	$filename = "test.txt";
	$lines = file($filename);

	foreach ( $lines as $num => $line ) {
		$line = trim($line);
		echo "$num : $line\n";
	}

	exit(0);
?>
