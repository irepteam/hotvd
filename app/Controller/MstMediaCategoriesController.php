<?php
App::uses('AppController', 'Controller');
/**
 * MstMediaCategories Controller
 *
 * @property MstMediaCategory $MstMediaCategory
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class MstMediaCategoriesController extends AppController {

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
		$this->MstMediaCategory->recursive = 0;
		$this->set('mstMediaCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MstMediaCategory->exists($id)) {
			throw new NotFoundException(__('Invalid mst media category'));
		}
		$options = array('conditions' => array('MstMediaCategory.' . $this->MstMediaCategory->primaryKey => $id));
		$this->set('mstMediaCategory', $this->MstMediaCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MstMediaCategory->create();
			if ($this->MstMediaCategory->save($this->request->data)) {
				$this->Flash->success(__('The mst media category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mst media category could not be saved. Please, try again.'));
			}
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
		if (!$this->MstMediaCategory->exists($id)) {
			throw new NotFoundException(__('Invalid mst media category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MstMediaCategory->save($this->request->data)) {
				$this->Flash->success(__('The mst media category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mst media category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MstMediaCategory.' . $this->MstMediaCategory->primaryKey => $id));
			$this->request->data = $this->MstMediaCategory->find('first', $options);
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
		$this->MstMediaCategory->id = $id;
		if (!$this->MstMediaCategory->exists()) {
			throw new NotFoundException(__('Invalid mst media category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MstMediaCategory->delete()) {
			$this->Flash->success(__('The mst media category has been deleted.'));
		} else {
			$this->Flash->error(__('The mst media category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->MstMediaCategory->recursive = 0;
		$this->set('mstMediaCategories', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->MstMediaCategory->exists($id)) {
			throw new NotFoundException(__('Invalid mst media category'));
		}
		$options = array('conditions' => array('MstMediaCategory.' . $this->MstMediaCategory->primaryKey => $id));
		$this->set('mstMediaCategory', $this->MstMediaCategory->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->MstMediaCategory->create();
			if ($this->MstMediaCategory->save($this->request->data)) {
				$this->Flash->success(__('The mst media category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mst media category could not be saved. Please, try again.'));
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
		if (!$this->MstMediaCategory->exists($id)) {
			throw new NotFoundException(__('Invalid mst media category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MstMediaCategory->save($this->request->data)) {
				$this->Flash->success(__('The mst media category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mst media category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MstMediaCategory.' . $this->MstMediaCategory->primaryKey => $id));
			$this->request->data = $this->MstMediaCategory->find('first', $options);
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
		$this->MstMediaCategory->id = $id;
		if (!$this->MstMediaCategory->exists()) {
			throw new NotFoundException(__('Invalid mst media category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MstMediaCategory->delete()) {
			$this->Flash->success(__('The mst media category has been deleted.'));
		} else {
			$this->Flash->error(__('The mst media category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
