<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 */
class ProductsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('商品が見つかりません。'));
		}
		$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
		$this->set('product', $this->Product->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Product->create();
			if ($this->Product->save($this->request->data)) {
				$this->Flash->success(__('商品を登録しました。'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('商品を登録できませんでした。入力内容を確認してください。'));
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
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('商品が見つかりません。'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Product->save($this->request->data)) {
				$this->Flash->success(__('商品を更新しました。'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('商品を更新できませんでした。入力内容を確認してください。'));
			}
		} else {
			$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
			$this->request->data = $this->Product->find('first', $options);
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
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('商品が見つかりません。'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Product->delete($id)) {
			$this->Flash->success(__('商品を削除しました。'));
		} else {
			$this->Flash->error(__('商品を削除できませんでした。もう一度お試しください。'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
