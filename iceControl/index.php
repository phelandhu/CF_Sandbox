<?php
// index.php
/***********************************************
* Created:            Mar 26, 2013 4:44:43 PM
* Last Modified:      Mar 26, 2013 4:44:43 PM
*
* Index and main control for the Ice Control application.
*
* Mike Browne - phelandhu@gmail.com
***********************************************/
?>
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<?php 
// Logic: look for the file in the /tmp/ices.pid, if it exists don't show the link to start the stream, but do show the one for restart with new playlist.
$present = 0;
if(!$present):
?>
	<a href="streamStart.php">Start the playlist</a>
<?php 
else:
?>
	<a href="streamStart.php">New playlist</a>
<?php
endif; 
?>


</br>
<a href="streamStop.php">Stop the playlist</a>