<?php 
/* SVN FILE: $Id$ */
/* History Test cases generated on: 2009-10-17 14:04:53 : 1255755893*/
App::import('Model', 'History');

class HistoryTestCase extends CakeTestCase {
	var $History = null;
	var $fixtures = array('app.history');

	function startTest() {
		$this->History =& ClassRegistry::init('History');
	}

	function testHistoryInstance() {
		$this->assertTrue(is_a($this->History, 'History'));
	}

	function test最近の10件が検索できること() {
		$this->History->recursive = -1;
		$results = $this->History->findRecent10();
		$this->assertTrue(!empty($results));
		$this->assertEqual(10, count($results));

		$expected = array(
		    array('History' => array(
			    'id'  => 1,
			    'name'  => 'keyword 1',
			    'created'  => '2009-10-10 10:00:00',
			    'updated'  => '2009-10-10 12:00:00'
			  )),
    	    array('History' => array(
    		    'id'  => 12,
    		    'name'  => 'keyword 12',
    		    'created'  => '2009-10-10 10:00:00',
    		    'updated'  => '2009-10-10 11:50:00'
    		)),
    	    array('History' => array(
    		    'id'  => 2,
    		    'name'  => 'keyword 2',
    		    'created'  => '2009-10-10 10:00:00',
    		    'updated'  => '2009-10-10 11:40:00'
    		)),
    	    array('History' => array(
    		    'id'  => 3,
    		    'name'  => 'keyword 3',
    		    'created'  => '2009-10-10 10:00:00',
    		    'updated'  => '2009-10-10 11:30:00'
    		)),
    	    array('History' => array(
    		    'id'  => 4,
    		    'name'  => 'keyword 4',
    		    'created'  => '2009-10-10 10:00:00',
    		    'updated'  => '2009-10-10 11:20:00'
    		)),
    	    array('History' => array(
    		    'id'  => 5,
    		    'name'  => 'keyword 5',
    		    'created'  => '2009-10-10 10:00:00',
    		    'updated'  => '2009-10-10 11:10:00'
    		)),
    	    array('History' => array(
    		    'id'  => 6,
    		    'name'  => 'keyword 6',
    		    'created'  => '2009-10-10 10:00:00',
    		    'updated'  => '2009-10-10 11:00:00'
    		)),
    	    array('History' => array(
    		    'id'  => 7,
    		    'name'  => 'keyword 7',
    		    'created'  => '2009-10-10 10:00:00',
    		    'updated'  => '2009-10-10 10:50:00'
    		)),
    	    array('History' => array(
    		    'id'  => 8,
    		    'name'  => 'keyword 8',
    		    'created'  => '2009-10-10 10:00:00',
    		    'updated'  => '2009-10-10 10:40:00'
    		)),
    	    array('History' => array(
    		    'id'  => 9,
    		    'name'  => 'keyword 9',
    		    'created'  => '2009-10-10 10:00:00',
    		    'updated'  => '2009-10-10 10:30:00'
    		))
		);
		$this->assertEqual($results, $expected);
	}
	function test新しいキーワードが登録できること() {
	    $this->assertTrue($this->History->saveKeyword("新しいキーワード"));
	    $this->assertEqual(1, $this->History->find('count', array('conditions'=>array('name'=>"新しいキーワード"))));
	}
	function test既存のキーワードの更新日付が更新されること() {
	    $this->assertTrue($this->History->saveKeyword("keyword 11"));
	    $after = $this->History->read(null, 11);
	    $this->assertNotEqual('2009-10-10 10:10:00', $after['History']['updated']);
	}
	function test人気の10件が検索できること() {
		$this->History->recursive = -1;
		$results = $this->History->findPopular10();
		$this->assertTrue(!empty($results));
		$this->assertEqual(10, count($results));

		$expected = array(
		    array('History' => array(
			    'name'  => 'keyword 12',
			  )),
    	    array('History' => array(
    		    'name'  => 'keyword 11',
    		)),
    	    array('History' => array(
    		    'name'  => 'keyword 10',
    		)),
    	    array('History' => array(
    		    'name'  => 'keyword 9',
    		)),
    	    array('History' => array(
    		    'name'  => 'keyword 8',
    		)),
    	    array('History' => array(
    		    'name'  => 'keyword 7',
    		)),
    	    array('History' => array(
    		    'name'  => 'keyword 5',
    		)),
    	    array('History' => array(
    		    'name'  => 'keyword 4',
    		)),
    	    array('History' => array(
    		    'name'  => 'keyword 3',
    		)),
    	    array('History' => array(
    		    'name'  => 'keyword 2',
    		))
		);
		$this->assertEqual($results, $expected);
	}
	function test既存のキーワードのカウントが１アップされること() {
	    $this->assertTrue($this->History->saveKeyword("keyword 11"));
	    $after = $this->History->read(null, 11);
	    $this->assertEqual(12, $after['History']['frequency']);
	}
}
?>