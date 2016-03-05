<?php
App::uses('MstMedia', 'Model');

/**
 * MstMedia Test Case
 */
class MstMediaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mst_media'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MstMedia = ClassRegistry::init('MstMedia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MstMedia);

		parent::tearDown();
	}

}
