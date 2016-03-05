<?php
App::uses('AppModel', 'Model');
/**
 * MstMediaCategory Model
 *
 */
class MstMediaCategory extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'mst_media_category';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'media_category_id, media_id';

}
