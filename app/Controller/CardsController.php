<?php
App::uses('AppController', 'Controller');

/**
 * Cards Controller
 *
 * @property Card $Card
 * @property PaginatorComponent $Paginator
 */
class CardsController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    public $paginate = array(
        'limit' => 6,
        'order' => array(
            'Card.cardNumber' => 'asc'
        ),
    );


    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->Card->recursive = 0;
        $numItems = 0;
        if (!$this->request->is('ajax')) {
            $totalItems = 1;
        }
        else{
            $totalItems = $this->passedArgs['pass'];
        }
        $this->set(compact('numItems'));
        $this->set(compact('totalItems'));
        $this->Paginator->settings = $this->paginate;
        $this->set('cards', $this->Paginator->paginate());
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
        if (!$this->Card->exists($id)) {
            throw new NotFoundException(__('Invalid card'));
        }
        $options = array('conditions' => array('Card.' . $this->Card->primaryKey => $id));
        $this->set('card', $this->Card->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Card->create();
            if ($this->Card->save($this->request->data)) {
                $this->Flash->success(__('The card has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The card could not be saved. Please, try again.'));
            }
        }
        $idols = $this->Card->Idol->find('list');
        $events = $this->Card->Event->find('list');
        $this->set(compact('idols', 'events'));
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
        if (!$this->Card->exists($id)) {
            throw new NotFoundException(__('Invalid card'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Card->save($this->request->data)) {
                $this->Flash->success(__('The card has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The card could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Card.' . $this->Card->primaryKey => $id));
            $this->request->data = $this->Card->find('first', $options);
        }
        $idols = $this->Card->Idol->find('list');
        $events = $this->Card->Event->find('list');
        $this->set(compact('idols', 'events'));
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
        $this->Card->id = $id;
        if (!$this->Card->exists()) {
            throw new NotFoundException(__('Invalid card'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Card->delete()) {
            $this->Flash->success(__('The card has been deleted.'));
        } else {
            $this->Flash->error(__('The card could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
