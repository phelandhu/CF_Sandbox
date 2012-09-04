#!/usr/bin/php
<?php
/***********************************************
* [LEFT BLANK FOR PROGRAM DISCRIPTION]
*
* Mike Browne - mbrowne@cantorgaming.com
* Created:            2012-09-04 Tue 12:18 PM 
* Last Modified:      TIMESTAMP
***********************************************/
	$exists = posix_access("/etc/passwd", POSIX_F_OK);
	if($exists) echo "file exists\n";

	$read = posix_access("/etc/passwd", POSIX_R_OK);
	if($read) echo "file is readable\n";

	$write = posix_access("/etc/passwd", POSIX_W_OK);
	if($write) echo "file is writeable\n";

	$ex = posix_access("etc/passwd", POSIX_X_OK);
	if($ex) echo "file is executable\n";

	exit(0);
?>

