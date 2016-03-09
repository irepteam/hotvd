<?php

App::uses('AppModel', 'Model');

/**
 * MstCategory Model
 *
 */
class MstCategory extends AppModel {

    public $tablePrefix = 'mst_';
    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'category';
    public $recursive = 0;
    public $hasMany = array(
        'MstVideo' => array(
            'className' => 'MstVideo',
            //'foreignKey' => ''
            'conditions' => array('MstVideo.delele_flg' => 0),
            'order' => 'MstVideo.id'
        )
    );

}
