<?php
// settings.class.php
/***********************************************
* Created:            Apr 16, 2013 12:07:22 PM
* Last Modified:      Apr 16, 2013 12:07:22 PM
*
* [LEFT BLANK FOR PROGRAM DISCRIPTION]
*
* Mike Browne - mbrowne@cantorgaming.com
***********************************************/
class settings {
	protected $entity;
	protected $mysqli;
	public $data = array();
	
	public function __construct($mysqli) {
		$this->entity = "siteSettings";
		$this->mysqli = $mysqli;
		$this->getSettings();
	}
	
	private function getSettings() {
		$query = sprintf("SELECT * FROM %s", $this->entity);
		$result = $this->mysqli->query($query);
		
		for ($row_no = 0; $row_no <= $result->num_rows -1; $row_no++) {
			$row = $result->fetch_assoc();
			$this->data[$row['key']] = $row['value'];
			//print_r($row);
		}
	}
	
	public function getSetting($setting) {
		return $this->data[$setting];
	}
	
	public function listSettings() {
		$result = null;
		return $result;
	}
}