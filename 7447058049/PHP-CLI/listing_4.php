#!/usr/bin/php
<?php
/***********************************************
* Show the process information for a specific user
*
* Mike Browne - mbrowne@cantorgaming.com
* Created:            TIMESTAMP 
* Last Modified:      TIMESTAMP
***********************************************/
	$uid = posix_geteuid();
	$user = posix_getpwuid($uid);
	echo "User of process: $user[name] \n";
	echo "UID: $user[uid] \n";
	echo "GID: $user[gid] \n";
	echo "Home directory: $user[dir] \n";
	print_r($user);
?>
