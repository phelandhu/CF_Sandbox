<?php
// settings.php
/***********************************************
* Created:            Apr 16, 2013 11:49:58 AM
* Last Modified:      Apr 16, 2013 11:49:58 AM
*
* [LEFT BLANK FOR PROGRAM DISCRIPTION]
* http://www.linkedin.com/groupAnswers?viewQuestionAndAnswers=&discussionID=231749468&gid=1915642&trk=eml-anet_dig-b_nd-pst_ttle-cn&ut=2Wg-PhHUp0rlI1
* Mike Browne - mbrowne@cantorgaming.com
***********************************************/
require_once("../bootstrap.php");
require_once("settings.class.php");

$settings = new settings($mysqli);

echo $settings->getSetting("NAME");