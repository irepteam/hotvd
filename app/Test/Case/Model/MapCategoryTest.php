<?php
App::uses('MapCategory', 'Model');

/**
 * MapCategory Test Case
 */
class MapCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.map_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MapCategory = ClassRegistry::init('MapCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MapCategory);

		parent::tearDown();
	}

}
