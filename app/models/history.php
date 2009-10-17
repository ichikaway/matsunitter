<?php
class History extends AppModel {

	var $name = 'History';
	
	function findRecent10() {
	    $result = $this->find('all', array(
	        'order'=>'updated DESC',
	        'limit'=>10,
	        'fields'=>array('id', 'name', 'created', 'updated')
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
	        $result = $this->updateAll(array('updated'=>date("'Y-m-d H:i:s'"), 'frequency'=>'frequency + 1'), $data[$this->name]);
	    }
	    return $result;
	}
	function findPopular10() {
    $result = $this->find('all', array(
        'order'=>'frequency DESC',
        'limit'=>10,
        'fields'=>array('name')
    ));
    return $result;
	}

}
?>