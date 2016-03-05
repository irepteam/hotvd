<?php
App::uses('MstUser', 'Model');

/**
 * MstUser Test Case
 */
class MstUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mst_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MstUser = ClassRegistry::init('MstUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MstUser);

		parent::tearDown();
	}

}
