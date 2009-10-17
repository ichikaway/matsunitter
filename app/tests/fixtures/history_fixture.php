<?php 
/* SVN FILE: $Id$ */
/* History Fixture generated on: 2009-10-17 14:04:53 : 1255755893*/

class HistoryFixture extends CakeTestFixture {
	var $name = 'History';
	var $table = 'histories';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 128, 'key' => 'unique'),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'updated' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'name' => array('column' => 'name', 'unique' => 1))
	);
	var $records = array(
        array(
    	    'id'  => 1,
    	    'name'  => 'keyword 1',
    	    'created'  => '2009-10-10 10:00:00',
    	    'updated'  => '2009-10-10 12:00:00'
    	),
        array(
    	    'id'  => 2,
    	    'name'  => 'keyword 2',
    	    'created'  => '2009-10-10 10:00:00',
    	    'updated'  => '2009-10-10 11:40:00'
    	),
        array(
    	    'id'  => 3,
    	    'name'  => 'keyword 3',
    	    'created'  => '2009-10-10 10:00:00',
    	    'updated'  => '2009-10-10 11:30:00'
    	),
        array(
    	    'id'  => 4,
    	    'name'  => 'keyword 4',
    	    'created'  => '2009-10-10 10:00:00',
    	    'updated'  => '2009-10-10 11:20:00'
    	),
        array(
    	    'id'  => 5,
    	    'name'  => 'keyword 5',
    	    'created'  => '2009-10-10 10:00:00',
    	    'updated'  => '2009-10-10 11:10:00'
    	),
        array(
    	    'id'  => 6,
    	    'name'  => 'keyword 6',
    	    'created'  => '2009-10-10 10:00:00',
    	    'updated'  => '2009-10-10 11:00:00'
    	),
        array(
    	    'id'  => 7,
    	    'name'  => 'keyword 7',
    	    'created'  => '2009-10-10 10:00:00',
    	    'updated'  => '2009-10-10 10:50:00'
    	),
        array(
    	    'id'  => 8,
    	    'name'  => 'keyword 8',
    	    'created'  => '2009-10-10 10:00:00',
    	    'updated'  => '2009-10-10 10:40:00'
    	),
        array(
    	    'id'  => 9,
    	    'name'  => 'keyword 9',
    	    'created'  => '2009-10-10 10:00:00',
    	    'updated'  => '2009-10-10 10:30:00'
    	),
        array(
    	    'id'  => 10,
    	    'name'  => 'keyword 10',
    	    'created'  => '2009-10-10 10:00:00',
    	    'updated'  => '2009-10-10 10:20:00'
    	),
        array(
    	    'id'  => 11,
    	    'name'  => 'keyword 11',
    	    'created'  => '2009-10-10 10:00:00',
    	    'updated'  => '2009-10-10 10:10:00'
    	),
        array(
    	    'id'  => 12,
    	    'name'  => 'keyword 12',
    	    'created'  => '2009-10-10 10:00:00',
    	    'updated'  => '2009-10-10 11:50:00'
    	),
	);
}
?>