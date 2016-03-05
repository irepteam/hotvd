<?php
/**
 * MstUser Fixture
 */
class MstUserFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'mst_user';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'role' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'delete_flg' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'create_time' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'update_time' => array('type' => 'timestamp', 'null' => true, 'default' => null),
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
			'username' => 'Lorem ipsum dolor ',
			'password' => 'Lorem ipsum dolor sit amet',
			'role' => 1,
			'delete_flg' => 1,
			'create_time' => 1457168352,
			'update_time' => 1457168352
		),
	);

}
