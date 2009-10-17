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
	function saveKeyword($keyword) {
	    $data = array($this->name => array('name'=>$keyword));
	    $this->create();
	    if(!$this->hasAny($data[$this->name])) {
	      $result = $this->save($data);
	    } else {
	      $hasAny = true;
	      $result = false;
	    }
	    if(!empty($hasAny) || (!$result && $this->hasAny($data[$this->name]))) {
	        $result = $this->updateAll(array('updated'=>date("'Y-m-d H:i:s'")), $data[$this->name]);
	    }
	    return $result;
	}

}
?>