<?php
App::uses('MstVideo', 'Model');

/**
 * MstVideo Test Case
 */
class MstVideoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mst_video'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MstVideo = ClassRegistry::init('MstVideo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MstVideo);

		parent::tearDown();
	}

}
