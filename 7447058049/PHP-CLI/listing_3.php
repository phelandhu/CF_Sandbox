#!/usr/bin/php
<?php
/***********************************************
* Parse a CSV file and show each item as a separate line
*
* Mike Browne - mbrowne@cantorgaming.com
* Created:            TIMESTAMP 
* Last Modified:      TIMESTAMP
***********************************************/
	$file = fopen("list.csv", "r");
	while (($data = fgetcsv($file, 0, ",")) !== FALSE) {
		echo "Line content:\n";
		foreach ( $data as $nr => $entry) {
			$entry = trim($entry);
			echo "$entry\n";
		}
	}
	fclose($file);
	exit(0);
?>
