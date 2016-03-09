<?php
App::uses('AppController', 'Controller');
/**
 * MstVideos Controller
 *
 * @property MstVideo $MstVideo
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class MstVideosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MstVideo->recursive = 0;
		$this->set('mstVideos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MstVideo->exists($id)) {
			throw new NotFoundException(__('Invalid mst video'));
		}
		$options = array('conditions' => array('MstVideo.' . $this->MstVideo->primaryKey => $id));
		$this->set('mstVideo', $this->MstVideo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MstVideo->create();
			if ($this->MstVideo->save($this->request->data)) {
				$this->Flash->success(__('The mst video has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mst video could not be saved. Please, try again.'));
			}
		} else {
                    $categories = $this->MstVideo->MstCategory->find('list', array('fields' => array('id', 'category_name')));
                    $this->set('categories', $categories);
                }
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MstVideo->exists($id)) {
			throw new NotFoundException(__('Invalid mst video'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MstVideo->save($this->request->data)) {
				$this->Flash->success(__('The mst video has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mst video could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MstVideo.' . $this->MstVideo->primaryKey => $id));
			$video = $this->MstVideo->find('first', $options);
                        $this->request->data = $video;
                        // Category list for select box
                        $categories = $this->MstVideo->MstCategory->find('list', array('fields' => array('id', 'category_name')));
                        $this->set('categories', $categories);
                        
                        // Category selected
                        $this->set('category_id', $video['MstVideo']['category_id']);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MstVideo->id = $id;
		if (!$this->MstVideo->exists()) {
			throw new NotFoundException(__('Invalid mst video'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MstVideo->delete()) {
			$this->Flash->success(__('The mst video has been deleted.'));
		} else {
			$this->Flash->error(__('The mst video could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->MstVideo->recursive = 0;
		$this->set('mstVideos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->MstVideo->exists($id)) {
			throw new NotFoundException(__('Invalid mst video'));
		}
		$options = array('conditions' => array('MstVideo.' . $this->MstVideo->primaryKey => $id));
		$this->set('mstVideo', $this->MstVideo->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->MstVideo->create();
			if ($this->MstVideo->save($this->request->data)) {
				$this->Flash->success(__('The mst video has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mst video could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->MstVideo->exists($id)) {
			throw new NotFoundException(__('Invalid mst video'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MstVideo->save($this->request->data)) {
				$this->Flash->success(__('The mst video has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mst video could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MstVideo.' . $this->MstVideo->primaryKey => $id));
			$this->request->data = $this->MstVideo->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->MstVideo->id = $id;
		if (!$this->MstVideo->exists()) {
			throw new NotFoundException(__('Invalid mst video'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MstVideo->delete()) {
			$this->Flash->success(__('The mst video has been deleted.'));
		} else {
			$this->Flash->error(__('The mst video could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
