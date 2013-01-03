<?php
// mp3Data.php
/***********************************************
* Created:            Jan 2, 2013 12:21:54 PM
* Last Modified:      Jan 2, 2013 12:21:54 PM
*
* [LEFT BLANK FOR PROGRAM DISCRIPTION]
*
* Mike Browne - mbrowne@cantorgaming.com
***********************************************/
$mp3 = "/x/music/queen/a_kind_of_magic/queen-a_kind_of_magic-01-one_vision.mp3"; //The mp3 file.

mp3Data($mp3);

function mp3Data($mp3) {
	$filesize = filesize($mp3);
	$file = fopen($mp3, "r");
	
	fseek($file, -128, SEEK_END); // It reads the
	
	$tag = fread($file, 3);
	
	if($tag == "TAG")
	{
		$data["song"] = trim(fread($file, 30));
		$data["artist"] = trim(fread($file, 30));
		$data["album"] = trim(fread($file, 30));
		$data["year"] = trim(fread($file, 4));
		$data["comment"] = trim(fread($file, 30));
		$data["genre"] = trim(fread($file, 1));
		 
	}
	else
		die("MP3 file does not have any ID3 tag!");
	
	fclose($file);
	
	while(list($key, $value) = each($data))
	{
		print("$key: $value<br>\r\n");
	}
}