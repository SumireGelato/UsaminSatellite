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
     * view method
     *
     * @throws NotFoundException
     * @param string $cardId
     * @return void
     */
    public function view($cardId = null)
    {
        $conditions = array('Card.card_id' => $cardId);
        if (!$this->Card->hasAny($conditions)) {
            throw new NotFoundException(__('Invalid Card'));
        }
        $this->Card->recursive = 2;
        $options = array('conditions' => array('Card.card_id' => $cardId));
        $card = $this->Card->find('first', $options);
        $this->set('card', $card);
    }

    /**
     * indexlite method
     *
     * almost exact copy of index
     * @return void
     */
    public function indexlite()
    {
        $this->Card->recursive = 0;
        $numItems = 0;
        if (!$this->request->is('ajax')) {
            $totalItems = 1;
        } else {
//            $totalItems = $this->passedArgs['pass'];
        }
        $this->set(compact('numItems'));
        $this->set(compact('totalItems'));
        $this->Prg->commonProcess();
        $this->Paginator->settings['conditions'] = $this->Card->parseCriteria($this->Prg->parsedParams());
        $this->Paginator->settings['limit'] = 28;
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
            switch($sortField) {
                case 'dateAdded':
                    $sort = array('Card.'.$sortField => $order, 'Card.rarity' => 'desc', 'Card.limited' => 'desc');
                    break;
                case 'rarity':
                    $sort = array('Card.'.$sortField => $order, 'Card.limited' => 'desc', 'Card.dateAdded' => 'desc');
                    break;
                default:
                    $sort = array('Card.'.$sortField => $order, 'Card.rarity' => 'desc', 'Card.dateAdded' => 'desc', 'Card.limited' => 'desc');
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
                $statSort = array('Card.'.$statSortField => $statOrder);
                $this->Paginator->settings['order'] = array_merge($statSort, $sort);
            }
            else {
                $this->Paginator->settings['order'] = $sort;
            }
        }
        else {
            $this->Paginator->settings['order'] = array('Card.dateAdded' => 'desc', 'Card.rarity' => 'desc', 'Card.limited' => 'desc');
        }
        if(!$this->request->is('ajax')) {
            $this->Session->write('filter',$this->Prg->parsedParams());
            $this->set('cards', $this->Paginator->paginate());
        }
        else {
            $filter = $this->Session->read('filter');
            $this->set('cards', $this->Paginator->paginate($this->Card->parseCriteria($filter)));
        }
        $gacha = array('gacha' => 'Gacha');
        $eventsList = $this->Card->Event->find('list', array(
            'fields' => array('Event.id', 'Event.eName', 'Event.type'),
            'order' => 'Event.finish desc'));
        $sourceList = array_merge($gacha, $eventsList);

        $eventDate = $this->Card->Event->find('list', array(
            'fields' => array('Event.id', 'Event.finish'),
            'order' => 'Event.finish desc'));
        $dateKey = array_keys($eventDate);
        $size = sizeof($dateKey);
        for ($i=0; $i<$size; $i++) {
            $dateOnly = explode(' ', $eventDate[$dateKey[$i]])[0];
            $dateExplode = explode('-', $dateOnly);
            //0 => Year, 1 => Month, 2 => Day
            $eventDate[$dateKey[$i]] = $dateExplode[1].'/'.$dateExplode[0];
        }
        foreach($sourceList as &$type) {
            if($type != 'Gacha') {
                $size = sizeOf($type);
                $key = array_keys($type);
                for ($i=0; $i<$size; $i++) {
                    $type[$key[$i]] = $type[$key[$i]]." ".$eventDate[$key[$i]];
                }
            }
        }
        $this->set('sourceList', $sourceList);
    }

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
            switch($sortField) {
                case 'dateAdded':
                    $sort = array('Card.'.$sortField => $order, 'Card.rarity' => 'desc', 'Card.limited' => 'desc');
                    break;
                case 'rarity':
                    $sort = array('Card.'.$sortField => $order, 'Card.limited' => 'desc', 'Card.dateAdded' => 'desc');
                    break;
                default:
                    $sort = array('Card.'.$sortField => $order, 'Card.rarity' => 'desc', 'Card.dateAdded' => 'desc', 'Card.limited' => 'desc');
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
                $statSort = array('Card.'.$statSortField => $statOrder);
                $this->Paginator->settings['order'] = array_merge($statSort, $sort);
            }
            else {
                $this->Paginator->settings['order'] = $sort;
            }
        }
        else {
            $this->Paginator->settings['order'] = array('Card.dateAdded' => 'desc', 'Card.rarity' => 'desc', 'Card.limited' => 'desc');
        }
        if(!$this->request->is('ajax')) {
            $this->Session->write('filter',$this->Prg->parsedParams());
            $this->set('cards', $this->Paginator->paginate());
        }
        else {
            $filter = $this->Session->read('filter');
            $this->set('cards', $this->Paginator->paginate($this->Card->parseCriteria($filter)));
        }
        $gacha = array('gacha' => 'Gacha');
        $eventsList = $this->Card->Event->find('list', array(
            'fields' => array('Event.id', 'Event.eName', 'Event.type'),
            'order' => 'Event.finish desc'));
        $sourceList = array_merge($gacha, $eventsList);

        $eventDate = $this->Card->Event->find('list', array(
            'fields' => array('Event.id', 'Event.finish'),
            'order' => 'Event.finish desc'));
        $dateKey = array_keys($eventDate);
        $size = sizeof($dateKey);
        for ($i=0; $i<$size; $i++) {
            $dateOnly = explode(' ', $eventDate[$dateKey[$i]])[0];
            $dateExplode = explode('-', $dateOnly);
            //0 => Year, 1 => Month, 2 => Day
            $eventDate[$dateKey[$i]] = $dateExplode[1].'/'.$dateExplode[0];
        }
        foreach($sourceList as &$type) {
            if($type != 'Gacha') {
                $size = sizeOf($type);
                $key = array_keys($type);
                for ($i=0; $i<$size; $i++) {
                    $type[$key[$i]] = $type[$key[$i]]." ".$eventDate[$key[$i]];
                }
            }
        }
        $this->set('sourceList', $sourceList);
    }

    /**
     * admin index
     *
     * Datatables list
     */
    public function adminindex() {
        $this->Card->recursive = 0;
        $this->set('cards', $this->Card->find('all'));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if($this->request->is('post') && isset($this->request->data['type'])) {
            $id = $this->request->data['id'];
            $this->layout = 'ajax';
            $cardDetailsJson = file_get_contents('https://starlight.kirara.ca/api/v1/card_t/'.$id);
            $this->set('cardDetails', $cardDetailsJson);
        }
        else {
            if ($this->request->is('post')) {
                ini_set('upload_max_filesize', '10M');
                ini_set('post_max_size', '10M');
                ini_set('max_input_time', 300);
                ini_set('max execution_time', 300);
                $this->Card->create();
                //Check if image has been uploaded
                if (!empty($this->request->data['Card']['baseArt']['name'])) {
                    $baseArt = $this->request->data['Card']['baseArt'];//put the data into a var for easy use

                    $baseExt = substr(strtolower(strrchr($baseArt['name'], '.')), 1);//get the extension
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                    //only process if the extension is valid
                    if (in_array($baseExt, $arr_ext)) {
                        //do the actual uploading of the file. First arg is the tmp name, second arg is
                        //where we are putting it
                        move_uploaded_file($baseArt['tmp_name'], WWW_ROOT . 'img/cards/' .
                            $this->request->data['Card']['card_id'] . '.' . $baseExt);
                        chmod(WWW_ROOT . 'img/cards/' . $this->request->data['Card']['card_id'] . '.' . $baseExt, 0755);

                        //prepare the filename for database entry
                        $this->request->data['Card']['baseArt'] = $this->request->data['Card']['card_id'] . '.' . $baseExt;
                    }
                } else {
                    unset($this->request->data['Card']['baseArt']);
                }

                if (!empty($this->request->data['Card']['awkArt']['name'])) {
                    $awkArt = $this->request->data['Card']['awkArt'];//put the data into a var for easy use

                    $awkExt = substr(strtolower(strrchr($awkArt['name'], '.')), 1);//get the extension
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                    //only process if the extension is valid
                    if (in_array($awkExt, $arr_ext)) {
                        //do the actual uploading of the file. First arg is the tmp name, second arg is
                        //where we are putting it
                        move_uploaded_file($awkArt['tmp_name'], WWW_ROOT . 'img/cards/' .
                            ($this->request->data['Card']['card_id'] + 1) . '.' . $awkExt);
                        chmod(WWW_ROOT . 'img/cards/' .
                            ($this->request->data['Card']['card_id'] + 1) . '.' . $awkExt, 0755);

                        //prepare the filename for database entry
                        $this->request->data['Card']['awkArt'] = ($this->request->data['Card']['card_id'] + 1) . '.' . $awkExt;
                    }
                } else {
                    unset($this->request->data['Card']['awkArt']);
                }

                if (!empty($this->request->data['Card']['baseIconArt']['name'])) {
                    $baseIconArt = $this->request->data['Card']['baseIconArt'];//put the data into a var for easy use

                    $iconExt = substr(strtolower(strrchr($baseIconArt['name'], '.')), 1);//get the extension
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                    //only process if the extension is valid
                    if (in_array($iconExt, $arr_ext)) {
                        //do the actual uploading of the file. First arg is the tmp name, second arg is
                        //where we are putting it
                        move_uploaded_file($baseIconArt['tmp_name'], WWW_ROOT . 'img/cards/' .
                            $this->request->data['Card']['card_id'] . "_icon" . '.' . $iconExt);
                        chmod(WWW_ROOT . 'img/cards/' .
                            $this->request->data['Card']['card_id'] . "_icon" . '.' . $iconExt, 0755);

                        //prepare the filename for database entry
                        $this->request->data['Card']['baseIconArt'] = $this->request->data['Card']['card_id'] . "_icon" . '.' . $iconExt;
                    }
                } else {
                    unset($this->request->data['Card']['baseIconArt']);
                }

                if (!empty($this->request->data['Card']['awkIconArt']['name'])) {
                    $awkIconArt = $this->request->data['Card']['awkIconArt'];//put the data into a var for easy use

                    $iconExt = substr(strtolower(strrchr($awkIconArt['name'], '.')), 1);//get the extension
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                    //only process if the extension is valid
                    if (in_array($iconExt, $arr_ext)) {
                        //do the actual uploading of the file. First arg is the tmp name, second arg is
                        //where we are putting it
                        move_uploaded_file($awkIconArt['tmp_name'], WWW_ROOT . 'img/cards/' .
                            ($this->request->data['Card']['card_id'] + 1) . "_icon" . '.' . $iconExt);
                        chmod(WWW_ROOT . 'img/cards/' .
                            ($this->request->data['Card']['card_id'] + 1) . "_icon" . '.' . $iconExt, 0755);

                        //prepare the filename for database entry
                        $this->request->data['Card']['awkIconArt'] = ($this->request->data['Card']['card_id'] + 1) . "_icon" . '.' . $iconExt;
                    }
                } else {
                    unset($this->request->data['Card']['awkIconArt']);
                }
                /**
                 * REMOVE THIS LATER!!!!!
                 */
                /*            $this->request->data['Card']['baseArt'] = $this->request->data['Card']['card_id'].'.png';
                            $this->request->data['Card']['awkArt'] = ($this->request->data['Card']['card_id'] + 1).'.png';
                            $this->request->data['Card']['baseIconArt'] = $this->request->data['Card']['card_id']."_icon".'.png';
                            $this->request->data['Card']['awkIconArt'] = ($this->request->data['Card']['card_id'] + 1)."_icon".'.png';*/
                /**
                 * REMOVE THIS LATER!!!!!
                 */


                //if no skill / is a n then set skills fields to <no skill>
                if ($this->request->data['Card']['rarity'] == 'N') {
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
            $this->set(compact('idols'));

            $eventsList = $this->Card->Event->find('list', array(
                'fields' => array('Event.id', 'Event.eName', 'Event.type'),
                'order' => 'Event.finish desc'));

            $eventDate = $this->Card->Event->find('list', array(
                'fields' => array('Event.id', 'Event.finish'),
                'order' => 'Event.finish desc'));
            $dateKey = array_keys($eventDate);
            $size = sizeof($dateKey);
            for ($i = 0; $i < $size; $i++) {
                $dateOnly = explode(' ', $eventDate[$dateKey[$i]])[0];
                $dateExplode = explode('-', $dateOnly);
                //0 => Year, 1 => Month, 2 => Day
                $eventDate[$dateKey[$i]] = $dateExplode[1] . '/' . $dateExplode[0];
            }
            foreach ($eventsList as &$type) {
                $size = sizeOf($type);
                $key = array_keys($type);
                for ($i = 0; $i < $size; $i++) {
                    $type[$key[$i]] = $type[$key[$i]] . " " . $eventDate[$key[$i]];
                }

            }
            $this->set('sourceList', $eventsList);
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

        if (!$this->Card->exists($id)) {
            throw new NotFoundException(__('Invalid card'));
        }
        if($this->request->is('post') && isset($this->request->data['type'])) {
            $id = $this->request->data['id'];
            $this->layout = 'ajax';
            $cardDetailsJson = file_get_contents('https://starlight.kirara.ca/api/v1/card_t/'.$id);
            $this->set('cardDetails', $cardDetailsJson);
        }
        else {
            if ($this->request->is(array('post', 'put'))) {
                ini_set('upload_max_filesize', '10M');
                ini_set('post_max_size', '10M');
                ini_set('max_input_time', 300);
                ini_set('max execution_time', 300);
                //Check if image has been uploaded
                if (!empty($this->request->data['Card']['baseArt']['name'])) {
                    $baseArt = $this->request->data['Card']['baseArt'];//put the data into a var for easy use

                    $baseExt = substr(strtolower(strrchr($baseArt['name'], '.')), 1);//get the extension
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                    //only process if the extension is valid
                    if (in_array($baseExt, $arr_ext)) {
                        //do the actual uploading of the file. First arg is the tmp name, second arg is
                        //where we are putting it
                        move_uploaded_file($baseArt['tmp_name'], WWW_ROOT . 'img/cards/' .
                            $this->request->data['Card']['card_id'] . '.' . $baseExt);
                        chmod(WWW_ROOT . 'img/cards/' .
                            $this->request->data['Card']['card_id'] . '.' . $baseExt, 0755);

                        //prepare the filename for database entry
                        $this->request->data['Card']['baseArt'] = $this->request->data['Card']['card_id'] . '.' . $baseExt;
                    }
                } else {
                    unset($this->request->data['Card']['baseArt']);
                }

                if (!empty($this->request->data['Card']['awkArt']['name'])) {
                    $awkArt = $this->request->data['Card']['awkArt'];//put the data into a var for easy use

                    $awkExt = substr(strtolower(strrchr($awkArt['name'], '.')), 1);//get the extension
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                    //only process if the extension is valid
                    if (in_array($awkExt, $arr_ext)) {
                        //do the actual uploading of the file. First arg is the tmp name, second arg is
                        //where we are putting it
                        move_uploaded_file($awkArt['tmp_name'], WWW_ROOT . 'img/cards/' .
                            ($this->request->data['Card']['card_id'] + 1) . '.' . $awkExt);
                        chmod(WWW_ROOT . 'img/cards/' .
                            ($this->request->data['Card']['card_id'] + 1) . '.' . $awkExt, 0755);

                        //prepare the filename for database entry
                        $this->request->data['Card']['awkArt'] = ($this->request->data['Card']['card_id'] + 1) . '.' . $awkExt;
                    }
                } else {
                    unset($this->request->data['Card']['awkArt']);
                }

                if (!empty($this->request->data['Card']['baseIconArt']['name'])) {
                    $baseIconArt = $this->request->data['Card']['baseIconArt'];//put the data into a var for easy use

                    $iconExt = substr(strtolower(strrchr($baseIconArt['name'], '.')), 1);//get the extension
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                    //only process if the extension is valid
                    if (in_array($iconExt, $arr_ext)) {
                        //do the actual uploading of the file. First arg is the tmp name, second arg is
                        //where we are putting it
                        move_uploaded_file($baseIconArt['tmp_name'], WWW_ROOT . 'img/cards/' .
                            $this->request->data['Card']['card_id'] . "_icon" . '.' . $iconExt);
                        chmod(WWW_ROOT . 'img/cards/' .
                            $this->request->data['Card']['card_id'] . "_icon" . '.' . $iconExt, 0755);

                        //prepare the filename for database entry
                        $this->request->data['Card']['baseIconArt'] = $this->request->data['Card']['card_id'] . "_icon" . '.' . $iconExt;
                    }
                } else {
                    unset($this->request->data['Card']['baseIconArt']);
                }

                if (!empty($this->request->data['Card']['awkIconArt']['name'])) {
                    $awkIconArt = $this->request->data['Card']['awkIconArt'];//put the data into a var for easy use

                    $iconExt = substr(strtolower(strrchr($awkIconArt['name'], '.')), 1);//get the extension
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                    //only process if the extension is valid
                    if (in_array($iconExt, $arr_ext)) {
                        //do the actual uploading of the file. First arg is the tmp name, second arg is
                        //where we are putting it
                        move_uploaded_file($awkIconArt['tmp_name'], WWW_ROOT . 'img/cards/' .
                            ($this->request->data['Card']['card_id'] + 1) . "_icon" . '.' . $iconExt);
                        chmod(WWW_ROOT . 'img/cards/' .
                            ($this->request->data['Card']['card_id'] + 1) . "_icon" . '.' . $iconExt, 0755);

                        //prepare the filename for database entry
                        $this->request->data['Card']['awkIconArt'] = ($this->request->data['Card']['card_id'] + 1) . "_icon" . '.' . $iconExt;
                    }
                } else {
                    unset($this->request->data['Card']['awkIconArt']);
                }

                /**
                 * REMOVE THIS LATER!!!!!
                 */
                /*$this->request->data['Card']['baseArt'] = $this->request->data['Card']['card_id'].'.png';
                $this->request->data['Card']['awkArt'] = ($this->request->data['Card']['card_id'] + 1).'.png';
                $this->request->data['Card']['baseIconArt'] = $this->request->data['Card']['card_id']."_icon".'.png';
                $this->request->data['Card']['awkIconArt'] = ($this->request->data['Card']['card_id'] + 1)."_icon".'.png';
                */
                /**
                 * REMOVE THIS LATER!!!!!
                 */


                //if no skill / is a n then set skills fields to <no skill>
                if ($this->request->data['Card']['rarity'] == 'N') {
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
            } else {
                $options = array('conditions' => array('Card.' . $this->Card->primaryKey => $id));
                $this->request->data = $this->Card->find('first', $options);
            }
            $idols = $this->Card->Idol->find('list', array('order' => array('Idol.eName asc')));
            $events = $this->Card->Event->find('list', array('order' => array('Event.begin desc')));
            $this->set(compact('idols', 'events'));

            $eventsList = $this->Card->Event->find('list', array(
                'fields' => array('Event.id', 'Event.eName', 'Event.type'),
                'order' => 'Event.finish desc'));

            $eventDate = $this->Card->Event->find('list', array(
                'fields' => array('Event.id', 'Event.finish'),
                'order' => 'Event.finish desc'));
            $dateKey = array_keys($eventDate);
            $size = sizeof($dateKey);
            for ($i = 0; $i < $size; $i++) {
                $dateOnly = explode(' ', $eventDate[$dateKey[$i]])[0];
                $dateExplode = explode('-', $dateOnly);
                //0 => Year, 1 => Month, 2 => Day
                $eventDate[$dateKey[$i]] = $dateExplode[1] . '/' . $dateExplode[0];
            }
            foreach ($eventsList as &$type) {
                $size = sizeOf($type);
                $key = array_keys($type);
                for ($i = 0; $i < $size; $i++) {
                    $type[$key[$i]] = $type[$key[$i]] . " " . $eventDate[$key[$i]];
                }

            }
            $this->set('sourceList', $eventsList);
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
