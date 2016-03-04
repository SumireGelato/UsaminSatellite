<?php
App::uses('AppController', 'Controller');

/**
 * Gachas Controller
 *
 * @property Gacha $Gacha
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class GachasController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Flash', 'Session');

    /**
     * adminindex method
     *
     * @return void
     */
    public function adminindex()
    {
        $this->Gacha->recursive = 0;
        $this->set('gachas', $this->Gacha->find('all'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        if (!$this->Gacha->exists($id)) {
            throw new NotFoundException(__('Invalid gacha'));
        }
        $options = array('conditions' => array('Gacha.' . $this->Gacha->primaryKey => $id));
        $this->set('gacha', $this->Gacha->find('first', $options));
    }

    /**
     * addCards method
     *
     * @param string $id
     * @return void
     */
    public function addCards($id = null)
    {

    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Gacha->create();
            if ($this->Gacha->save($this->request->data)) {
                $this->Flash->success(__('The gacha has been saved.'));
                return $this->redirect(array('action' => 'addCards', $this->Gacha->id));
            } else {
                $this->Flash->error(__('The gacha could not be saved. Please, try again.'));
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
    public function edit($id = null)
    {
        if (!$this->Gacha->exists($id)) {
            throw new NotFoundException(__('Invalid gacha'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Gacha->save($this->request->data)) {
                $this->Flash->success(__('The gacha has been saved.'));
                return $this->redirect(array('action' => 'addCards', $this->Gacha->id));
            } else {
                $this->Flash->error(__('The gacha could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Gacha.' . $this->Gacha->primaryKey => $id));
            $this->request->data = $this->Gacha->find('first', $options);
        }
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null)
    {
        $this->Gacha->id = $id;
        if (!$this->Gacha->exists()) {
            throw new NotFoundException(__('Invalid gacha'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Gacha->delete()) {
            $this->Flash->success(__('The gacha has been deleted.'));
        } else {
            $this->Flash->error(__('The gacha could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
