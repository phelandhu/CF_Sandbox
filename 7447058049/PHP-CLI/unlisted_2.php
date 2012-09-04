#!/usr/bin/php
<?php
/***********************************************
* just some demo for exploding a string
*
* Mike Browne - mbrowne@cantorgaming.com
***********************************************/
	if(PHP_SAPI == 'cli') {
		echo "Hi There!\n";
	}
	$text = "Hello Mister Anderson";
	$split = explode(" ", $text);

	foreach ($split as $num => $part) {
		echo "$part\n";
	}

	preg_match("/Mister/", $text, $matches);
	echo $matches[0] . "\n";

	echo $split[0];
?>
