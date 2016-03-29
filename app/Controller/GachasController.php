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
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->Gacha->recursive = 2;
        $this->set('gachas', $this->Gacha->find('all', array('order' => 'Gacha.dateFinish desc')));
    }

    /**
     * adminindex method
     *
     * @return void
     */
    public function adminindex()
    {
        $this->Gacha->recursive = 1;
        $this->set('gachas', $this->Gacha->find('all'));
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
            //Check if image has been uploaded
            if (!empty($this->request->data['Gacha']['pic']['name'])) {
                $pic = $this->request->data['Gacha']['pic'];//put the data into a var for easy use

                $picExt = substr(strtolower(strrchr($pic['name'], '.')), 1);//get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                //only process if the extension is valid
                if (in_array($picExt, $arr_ext)) {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    $picFilename = trim($this->request->data['Gacha']['eName']);

                    move_uploaded_file($pic['tmp_name'], WWW_ROOT . 'img/gacha/' .
                        $picFilename . '.' . $picExt);
                    chmod(WWW_ROOT . 'img/gacha/' .
                        $picFilename . '.' . $picExt, 0755);

                    //prepare the filename for database entry
                    $this->request->data['Gacha']['pic'] = $picFilename .'.'. $picExt;
                }
            } else {
                unset($this->request->data['Gacha']['pic']);
            }
            if ($this->Gacha->save($this->request->data['Gacha'])) {
                $this->Flash->success(__('The gacha has been saved.'));
                if(isset($this->request->data['Card']['add'])) {
                    $cardsToBeAdded = $this->request->data['Card']['add'];
                }
                if(isset($this->request->data['Card']['remove'])) {
                    $cardsToBeRemoved = $this->request->data['Card']['remove'];
                }
                if(!empty($cardsToBeRemoved)) {
                    foreach($cardsToBeRemoved as $cardId) {
                        $this->Gacha->Card->id = $cardId;
                        $this->Gacha->Card->saveField('gacha_id', NULL);
                    }
                }
                if(!empty($cardsToBeAdded)) {
                    foreach($cardsToBeAdded as $cardId) {
                        $this->Gacha->Card->id = $cardId;
                        $this->Gacha->Card->saveField('gacha_id', $this->Gacha->id);
                    }
                }
                return $this->redirect(array('action' => 'adminindex'));
            } else {
                $this->Flash->error(__('The gacha could not be saved. Please, try again.'));
            }
        }
        $cards = $this->Gacha->Card->find('all', array(
            'fields' => array('Card.id', 'Card.eName', 'Card.rarity', 'Card.dateAdded')
        ));
        $this->set('cards', $cards);
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
            if (!empty($this->request->data['Gacha']['pic']['name'])) {
                $pic = $this->request->data['Gacha']['pic'];//put the data into a var for easy use

                $picExt = substr(strtolower(strrchr($pic['name'], '.')), 1);//get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                //only process if the extension is valid
                if (in_array($picExt, $arr_ext)) {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    $picFilename = trim($this->request->data['Gacha']['eName']);

                    move_uploaded_file($pic['tmp_name'], WWW_ROOT . 'img/gacha/' .
                        $picFilename . '.' . $picExt);
                    chmod(WWW_ROOT . 'img/gacha/' .
                        $picFilename . '.' . $picExt, 0755);

                    //prepare the filename for database entry
                    $this->request->data['Gacha']['pic'] = $picFilename .'.'. $picExt;
                }
            } else {
                unset($this->request->data['Gacha']['pic']);
            }
            if ($this->Gacha->save($this->request->data['Gacha'])) {
                $this->Flash->success(__('The gacha has been saved.'));
                if(isset($this->request->data['Card']['add'])) {
                    $cardsToBeAdded = $this->request->data['Card']['add'];
                }
                if(isset($this->request->data['Card']['remove'])) {
                    $cardsToBeRemoved = $this->request->data['Card']['remove'];
                }
                if(!empty($cardsToBeRemoved)) {
                    foreach($cardsToBeRemoved as $cardId) {
                        $this->Gacha->Card->id = $cardId;
                        $this->Gacha->Card->saveField('gacha_id', NULL);
                    }
                }
                if(!empty($cardsToBeAdded)) {
                    foreach($cardsToBeAdded as $cardId) {
                        $this->Gacha->Card->id = $cardId;
                        $this->Gacha->Card->saveField('gacha_id', $this->request->data['Gacha']['id']);
                    }
                }
                return $this->redirect(array('action' => 'adminindex'));
            } else {
                $this->Flash->error(__('The gacha could not be saved. Please, try again.'));
            }
        }
        $options = array(
            'conditions' => array('Gacha.' . $this->Gacha->primaryKey => $id));
        $this->request->data = $this->Gacha->find('first', $options);
        $this->set('numCards', sizeof($this->request->data['Card']));
        $cards = $this->Gacha->Card->find('all', array(
            'fields' => array('Card.id', 'Card.eName', 'Card.rarity', 'Card.dateAdded')
        ));
        $this->set('cards', $cards);
//            $こころぴょんぴょん = 'lol';
//            debug($こころぴょんぴょん);
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
