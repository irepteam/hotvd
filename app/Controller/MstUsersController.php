<?php
App::uses('AppController', 'Controller');
/**
 * MstUsers Controller
 *
 * @property MstUser $MstUser
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class MstUsersController extends AppController {

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
		$this->MstUser->recursive = 0;
		$this->set('mstUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MstUser->exists($id)) {
			throw new NotFoundException(__('Invalid mst user'));
		}
		$options = array('conditions' => array('MstUser.' . $this->MstUser->primaryKey => $id));
		$this->set('mstUser', $this->MstUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MstUser->create();
			if ($this->MstUser->save($this->request->data)) {
				$this->Flash->success(__('The mst user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mst user could not be saved. Please, try again.'));
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
		if (!$this->MstUser->exists($id)) {
			throw new NotFoundException(__('Invalid mst user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MstUser->save($this->request->data)) {
				$this->Flash->success(__('The mst user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mst user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MstUser.' . $this->MstUser->primaryKey => $id));
			$this->request->data = $this->MstUser->find('first', $options);
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
		$this->MstUser->id = $id;
		if (!$this->MstUser->exists()) {
			throw new NotFoundException(__('Invalid mst user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MstUser->delete()) {
			$this->Flash->success(__('The mst user has been deleted.'));
		} else {
			$this->Flash->error(__('The mst user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->MstUser->recursive = 0;
		$this->set('mstUsers', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->MstUser->exists($id)) {
			throw new NotFoundException(__('Invalid mst user'));
		}
		$options = array('conditions' => array('MstUser.' . $this->MstUser->primaryKey => $id));
		$this->set('mstUser', $this->MstUser->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->MstUser->create();
			if ($this->MstUser->save($this->request->data)) {
				$this->Flash->success(__('The mst user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mst user could not be saved. Please, try again.'));
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
		if (!$this->MstUser->exists($id)) {
			throw new NotFoundException(__('Invalid mst user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MstUser->save($this->request->data)) {
				$this->Flash->success(__('The mst user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mst user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MstUser.' . $this->MstUser->primaryKey => $id));
			$this->request->data = $this->MstUser->find('first', $options);
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
		$this->MstUser->id = $id;
		if (!$this->MstUser->exists()) {
			throw new NotFoundException(__('Invalid mst user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MstUser->delete()) {
			$this->Flash->success(__('The mst user has been deleted.'));
		} else {
			$this->Flash->error(__('The mst user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
