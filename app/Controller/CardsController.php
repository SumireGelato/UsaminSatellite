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
    public $components = array(
        'Paginator',
        'Session',
        'Search.Prg' => array(
            'commonProcess' => array(
                'filterEmpty' => true
            )
        ));

/*    public function isAuthorized($user) {
        // All registered users can add posts
        if ($this->action === 'add' || $this->action === 'edit' || $this->action === 'delete') {
            return true;
        }

        return parent::isAuthorized($user);
    }*/


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
        } else {
            $totalItems = $this->passedArgs['pass'];
        }
        $this->set(compact('numItems'));
        $this->set(compact('totalItems'));
        $this->Prg->commonProcess();
        $this->Paginator->settings['conditions'] = $this->Card->parseCriteria($this->Prg->parsedParams());
        $this->Paginator->settings['limit'] = 9;
        if($this->request->is(array('post', 'put', 'get')) && $this->request->query('sort') != null)
        {
            $sortField = $this->request->query('sort');
            $orderBool = $this->request->query('order');
            if($orderBool) {
                $order = 'desc';
            }
            else {
                $order = 'asc';
            }
            if($this->request->query('statSort') != null) {
                $statSortField = $this->request->query('statSort');
                $statsSortOrderBool = $this->request->query('statOrder');
                if($statsSortOrderBool) {
                    $statOrder = 'desc';
                }
                else {
                    $statOrder = 'asc';
                }
                $this->Paginator->settings['order'] = array('Card.'.$sortField => $order, 'Card.'.$statSortField => $statOrder);
            }
            else {
                $this->Paginator->settings['order'] = array('Card.'.$sortField => $order);
            }
        }
        else {
            $this->Paginator->settings['order'] = array('Card.cardNumber' => 'desc');
        }
        if(!$this->request->is('ajax')) {
            $this->Session->write('filter',$this->Prg->parsedParams());
            $this->set('cards', $this->Paginator->paginate());
        }
        else {
            $filter = $this->Session->read('filter');
            $this->set('cards', $this->Paginator->paginate($this->Card->parseCriteria($filter)));
        }
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
