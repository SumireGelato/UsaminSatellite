<?php
App::uses('AppController', 'Controller');

/**
 * Songs Controller
 *
 * @property Song $Song
 * @property PaginatorComponent $Paginator
 */
class SongsController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    /**
     * adminindex method
     *
     * @return void
     */
    public function adminindex()
    {
        $this->Song->recursive = 0;
        $this->set('songs', $this->Paginator->paginate());
    }

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->Song->recursive = 0;
        $this->set('songs', $this->Paginator->paginate());
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Song->create();
            if ($this->Song->save($this->request->data)) {
                $this->Flash->success(__('The song has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The song could not be saved. Please, try again.'));
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
        if (!$this->Song->exists($id)) {
            throw new NotFoundException(__('Invalid song'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Song->save($this->request->data)) {
                $this->Flash->success(__('The song has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The song could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Song.' . $this->Song->primaryKey => $id));
            $this->request->data = $this->Song->find('first', $options);
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
        $this->Song->id = $id;
        if (!$this->Song->exists()) {
            throw new NotFoundException(__('Invalid song'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Song->delete()) {
            $this->Flash->success(__('The song has been deleted.'));
        } else {
            $this->Flash->error(__('The song could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
