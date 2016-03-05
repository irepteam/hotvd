<?php
App::uses('MstCategory', 'Model');

/**
 * MstCategory Test Case
 */
class MstCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mst_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MstCategory = ClassRegistry::init('MstCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MstCategory);

		parent::tearDown();
	}

}
