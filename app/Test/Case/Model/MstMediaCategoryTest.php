<?php
App::uses('MstMediaCategory', 'Model');

/**
 * MstMediaCategory Test Case
 */
class MstMediaCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mst_media_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MstMediaCategory = ClassRegistry::init('MstMediaCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MstMediaCategory);

		parent::tearDown();
	}

}
