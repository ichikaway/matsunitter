<?php
class History extends AppModel {

	var $name = 'History';
	
	function findRecent10() {
	    $result = $this->find('all', array(
	        'order'=>'updated DESC',
	        'limit'=>10
	    ));
	    return $result;
	}

}
?>