<?php
/**
 * MstMedia Fixture
 */
class MstMediaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'media_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'score_rate' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'delete_flg' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'create_time' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'media_name' => 'Lorem ipsum dolor sit amet',
			'score_rate' => 1,
			'delete_flg' => 1,
			'create_time' => 1457168298
		),
	);

}
