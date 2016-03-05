<?php
/**
 * MstMediaCategory Fixture
 */
class MstMediaCategoryFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'mst_media_category';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'media_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'media_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'media_category_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'create_time' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'update_time' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => array('media_category_id', 'media_id'), 'unique' => 1)
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
			'media_category_id' => 1,
			'media_id' => 1,
			'media_category_name' => 'Lorem ipsum dolor sit amet',
			'create_time' => 1457168332,
			'update_time' => 1457168332
		),
	);

}
