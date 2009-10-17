<?php 
App::import('Controller', 'Search');

class TestSearchController extends SearchController {
	var $autoRender = false;
}

class SearchControllerTestCase extends CakeTestCase {
	var $Search = null;
	var $fixtures = array('app.history');
	var $autoFixtures = false;

	function startTest() {
		$this->Search = new TestSearchController();
		$this->Search->constructClasses();
	}
	function test最近の10件が検索できること() {
	  $this->loadFixtures('History');
		$results = $this->testAction('/recent', array('return'=>'result', 'controller'=>'TestSearch'));
		$this->assertTrue(!empty($results));
		$this->assertEqual(10, count($results));
	}
	function test人気の10件が検索できること() {
	  $this->loadFixtures('History');
		$results = $this->testAction('/popular', array('return'=>'result', 'controller'=>'TestSearch'));
		$this->assertTrue(!empty($results));
		$this->assertEqual(10, count($results));
	}
}
?>