<?php
App::uses('AppController', 'Controller');
/**
 * MapCategories Controller
 *
 * @property MapCategory $MapCategory
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class MapCategoriesController extends AppController {

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
		$this->MapCategory->recursive = 0;
		$this->set('mapCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MapCategory->exists($id)) {
			throw new NotFoundException(__('Invalid map category'));
		}
		$options = array('conditions' => array('MapCategory.' . $this->MapCategory->primaryKey => $id));
		$this->set('mapCategory', $this->MapCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MapCategory->create();
			if ($this->MapCategory->save($this->request->data)) {
				$this->Flash->success(__('The map category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The map category could not be saved. Please, try again.'));
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
		if (!$this->MapCategory->exists($id)) {
			throw new NotFoundException(__('Invalid map category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MapCategory->save($this->request->data)) {
				$this->Flash->success(__('The map category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The map category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MapCategory.' . $this->MapCategory->primaryKey => $id));
			$this->request->data = $this->MapCategory->find('first', $options);
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
		$this->MapCategory->id = $id;
		if (!$this->MapCategory->exists()) {
			throw new NotFoundException(__('Invalid map category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MapCategory->delete()) {
			$this->Flash->success(__('The map category has been deleted.'));
		} else {
			$this->Flash->error(__('The map category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->MapCategory->recursive = 0;
		$this->set('mapCategories', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->MapCategory->exists($id)) {
			throw new NotFoundException(__('Invalid map category'));
		}
		$options = array('conditions' => array('MapCategory.' . $this->MapCategory->primaryKey => $id));
		$this->set('mapCategory', $this->MapCategory->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->MapCategory->create();
			if ($this->MapCategory->save($this->request->data)) {
				$this->Flash->success(__('The map category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The map category could not be saved. Please, try again.'));
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
		if (!$this->MapCategory->exists($id)) {
			throw new NotFoundException(__('Invalid map category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MapCategory->save($this->request->data)) {
				$this->Flash->success(__('The map category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The map category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MapCategory.' . $this->MapCategory->primaryKey => $id));
			$this->request->data = $this->MapCategory->find('first', $options);
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
		$this->MapCategory->id = $id;
		if (!$this->MapCategory->exists()) {
			throw new NotFoundException(__('Invalid map category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MapCategory->delete()) {
			$this->Flash->success(__('The map category has been deleted.'));
		} else {
			$this->Flash->error(__('The map category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
