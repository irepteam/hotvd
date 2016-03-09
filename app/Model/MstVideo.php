<?php
App::uses('AppModel', 'Model');

/**
 * MstVideo Model
 * @property MstCategory $MstCateogory
 */
class MstVideo extends AppModel {

    public $tablePrefix = 'mst_';

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'video';

    /**
     * Display field
     *
     * @var string
     */
    //public $displayField = 'id';

    /**
     * 0 CakePHP fetches Group data and its domain
     * Chi lay group data thoi
     * @var type int
     */
    public $recursive = 0;

    /**
     * n user : 1 category
     * @var type 
     */
    public $belongsTo = array(
        'MstCategory' => array(
            'className' => 'MstCategory',
            'foreignKey' => 'category_id',
            'conditions' => array('MstCategory.delete_flg' => 0),
        )
    );
}
