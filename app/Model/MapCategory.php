<?php
App::uses('AppModel', 'Model');
/**
 * MapCategory Model
 *
 */
class MapCategory extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'map_category';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'catefory_id, media_category_id';

}
