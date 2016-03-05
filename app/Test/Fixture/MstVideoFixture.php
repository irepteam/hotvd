<?php
/**
 * MstVideo Fixture
 */
class MstVideoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'mst_video';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'video_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'media_view' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'system_view' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'overall_rank' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'category_rank' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'score' => array('type' => 'float', 'null' => false, 'default' => '0', 'unsigned' => false),
		'delete_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'publish_time' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'video_name' => 'Lorem ipsum dolor sit amet',
			'category_id' => 1,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'media_view' => 1,
			'system_view' => 1,
			'overall_rank' => 1,
			'category_rank' => 1,
			'score' => 1,
			'delete_flag' => 1,
			'publish_time' => '2016-03-05 17:59:47',
			'create_time' => 1457168387,
			'update_time' => 1457168387
		),
	);

}
