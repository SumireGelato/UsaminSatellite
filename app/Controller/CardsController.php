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

//    public $uses=array('Idol','Event');

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
        $this->Paginator->settings['limit'] = 12;
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
     * admin index
     *
     * Datatables list
     */
    public function adminindex() {
        $this->Card->recursive = 0;
        $this->set('cards', $this->Card->find('all', array('order' => 'Card.cardNumber desc')));
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
            //Check if image has been uploaded
            if(!empty($this->request->data['Card']['baseArt']['name']))
            {
                $baseArt = $this->request->data['Card']['baseArt'];//put the data into a var for easy use

                $baseExt = substr(strtolower(strrchr($baseArt['name'], '.')), 1);//get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                //only process if the extension is valid
                if(in_array($baseExt, $arr_ext))
                {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    move_uploaded_file($baseArt['tmp_name'], $this->Html->url('/') . 'img/cards/' .
                        $this->request->data['Card']['cardNumber'].'.'.$baseExt);

                    //prepare the filename for database entry
                    $this->request->data['Card']['baseArt'] = $this->request->data['Card']['cardNumber'].'.'.$baseExt;
                }
            }else {
                unset($this->request->data['Card']['baseArt']);
            }

            if(!empty($this->request->data['Card']['awkArt']['name']))
            {
                $awkArt = $this->request->data['Card']['awkArt'];//put the data into a var for easy use

                $awkExt = substr(strtolower(strrchr($awkArt['name'], '.')), 1);//get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                //only process if the extension is valid
                if(in_array($awkExt, $arr_ext))
                {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    move_uploaded_file($awkArt['tmp_name'], $this->Html->url('/') . 'img/cards/' .
                        $this->request->data['Card']['cardNumber'].'.'.$awkExt);

                    //prepare the filename for database entry
                    $this->request->data['Card']['awkArt'] = ($this->request->data['Card']['cardNumber'] + 1).'.'.$awkExt;
                }
            }else {
                unset($this->request->data['Card']['awkArt']);
            }
            /**
             * REMOVE THIS LATER!!!!!
             */
            $this->request->data['Card']['baseArt'] = $this->request->data['Card']['cardNumber'].'.png';
            $this->request->data['Card']['awkArt'] = ($this->request->data['Card']['cardNumber'] + 1).'.png';
            /**
             * REMOVE THIS LATER!!!!!
             */


            //if no skill / is a n then set skills fields to <no skill>
            if($this->request->data['Card']['rarity'] == 'N') {
                $this->request->data['Card']['centerSkillText'] = 'No Skill';
                $this->request->data['Card']['specialSkillType'] = 'No Skill';
                $this->request->data['Card']['specialSkillText'] = 'N/A';
            }

            if ($this->Card->save($this->request->data)) {
                $this->Flash->success(__('The card has been saved.'));
                return $this->redirect(array('action' => 'adminindex'));
            } else {
                $this->Flash->error(__('The card could not be saved. Please, try again.'));
            }
        }
        $idols = $this->Card->Idol->find('list', array('order' => array('Idol.eName asc')));
        $events = $this->Card->Event->find('list', array('order' => array('Event.begin desc')));
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
            if(!empty($this->request->data['Card']['baseArt']['name']))
            {
                $baseArt = $this->request->data['Card']['baseArt'];//put the data into a var for easy use

                $baseExt = substr(strtolower(strrchr($baseArt['name'], '.')), 1);//get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                //only process if the extension is valid
                if(in_array($baseExt, $arr_ext))
                {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    move_uploaded_file($baseArt['tmp_name'], $this->Html->url('/') . 'img/cards/' .
                        $this->request->data['Card']['cardNumber'].'.'.$baseExt);

                    //prepare the filename for database entry
                    $this->data['Card']['baseArt'] = $this->request->data['Card']['cardNumber'].'.'.$baseExt;
                }
            }

            if(!empty($this->request->data['Card']['awkArt']['name']))
            {
                $awkArt = $this->request->data['Card']['awkArt'];//put the data into a var for easy use

                $awkExt = substr(strtolower(strrchr($awkArt['name'], '.')), 1);//get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                //only process if the extension is valid
                if(in_array($awkExt, $arr_ext))
                {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    move_uploaded_file($awkArt['tmp_name'], $this->Html->url('/') . 'img/cards/' .
                        $this->request->data['Card']['cardNumber'].'.'.$awkExt);

                    //prepare the filename for database entry
                    $this->data['Card']['awkArt'] = ($this->request->data['Card']['cardNumber'] + 1).'.'.$awkExt;
                }
            }

            /**
             * REMOVE THIS LATER!!!!!
             */
            $this->request->data['Card']['baseArt'] = $this->request->data['Card']['cardNumber'].'.png';
            $this->request->data['Card']['awkArt'] = ($this->request->data['Card']['cardNumber'] + 1).'.png';
            /**
             * REMOVE THIS LATER!!!!!
             */


            //if no skill / is a n then set skills fields to <no skill>
            if($this->request->data['Card']['rarity'] == 'N') {
                $this->request->data['Card']['centerSkillText'] = 'No Skill';
                $this->request->data['Card']['specialSkillType'] = 'No Skill';
                $this->request->data['Card']['specialSkillText'] = 'N/A';
            }

            if ($this->Card->save($this->request->data)) {
                $this->Flash->success(__('The card has been saved.'));
                return $this->redirect(array('action' => 'adminIndex'));
            } else {
                $this->Flash->error(__('The card could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Card.' . $this->Card->primaryKey => $id));
            $this->request->data = $this->Card->find('first', $options);
        }
        $idols = $this->Card->Idol->find('list', array('order' => array('Idol.eName asc')));
        $events = $this->Card->Event->find('list', array('order' => array('Event.begin desc')));
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
        return $this->redirect(array('action' => 'adminindex'));
    }
}
