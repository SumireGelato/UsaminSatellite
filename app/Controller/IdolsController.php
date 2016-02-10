<?php
App::uses('AppController', 'Controller');

/**
 * Idols Controller
 *
 * @property Idol $Idol
 * @property PaginatorComponent $Paginator
 */
class IdolsController extends AppController
{

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
    public function index()
    {
        $this->Idol->recursive = 0;
        $numItems = 0;
        if (!$this->request->is('ajax')) {
            $totalItems = 1;
        } else {
            $totalItems = $this->passedArgs['pass'];
        }
        $this->set(compact('numItems'));
        $this->set(compact('totalItems'));
        $this->Paginator->settings['limit'] = 12;
        $this->Paginator->settings['order'] = array('Idol.voiced' => 'desc');
        $this->Paginator->settings['conditions'] = array('Idol.type' => 'Cute');
        $this->set('cuteIdols', $this->Paginator->paginate());
        $this->Paginator->settings['conditions'] = array('Idol.type' => 'Cool');
        $this->set('coolIdols', $this->Paginator->paginate());
        $this->Paginator->settings['conditions'] = array('Idol.type' => 'Passion');
        $this->set('passionIdols', $this->Paginator->paginate());
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
        if (!$this->Idol->exists($id)) {
            throw new NotFoundException(__('Invalid idol'));
        }
        $options = array('conditions' => array('Idol.' . $this->Idol->primaryKey => $id));
        $this->set('idol', $this->Idol->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Idol->create();
            if ($this->Idol->save($this->request->data)) {
                $this->Flash->success(__('The idol has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The idol could not be saved. Please, try again.'));
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
        if (!$this->Idol->exists($id)) {
            throw new NotFoundException(__('Invalid idol'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Idol->save($this->request->data)) {
                $this->Flash->success(__('The idol has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The idol could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Idol.' . $this->Idol->primaryKey => $id));
            $this->request->data = $this->Idol->find('first', $options);
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
        $this->Idol->id = $id;
        if (!$this->Idol->exists()) {
            throw new NotFoundException(__('Invalid idol'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Idol->delete()) {
            $this->Flash->success(__('The idol has been deleted.'));
        } else {
            $this->Flash->error(__('The idol could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
