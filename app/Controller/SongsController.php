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
        $this->set('songs', $this->Song->find('all'));
    }

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->Song->recursive = 0;
        if($this->request->query('type') === null) {
            $type = 'Always';
        }
        else {
            $type = $this->request->query('type');
        }
        $this->set('type', $type);
        $this->set('songs', $this->Song->find('all', array(
            'conditions' => array('Song.availability LIKE' => $type.'%'),
            'order' => array('Song.dateAdded' => 'desc', 'Song.type' => 'desc')
        )));
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

            //Check if image has been uploaded
            if(!empty($this->request->data['Song']['coverArt']['name']))
            {
                $coverArt = $this->request->data['Song']['coverArt'];//put the data into a var for easy use

                $baseExt = substr(strtolower(strrchr($coverArt['name'], '.')), 1);//get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                //only process if the extension is valid
                if(in_array($baseExt, $arr_ext))
                {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    move_uploaded_file($coverArt['tmp_name'], WWW_ROOT . 'img/songs/' .
                        $this->request->data['Song']['eName'].'.'.$baseExt);

                    //prepare the filename for database entry
                    $this->request->data['Song']['coverArt'] = $this->request->data['Song']['eName'].'.'.$baseExt;
                }
            }else {
                unset($this->request->data['Song']['coverArt']);
            }

            //REMOVE THIS LATER
//            $this->request->data['Song']['coverArt'] = $this->request->data['Song']['eName'].'.png';
            //REMOVE THIS LATER

            $this->request->data['Song']['availability'] = $this->request->data['Song']['availDropdown'];
            foreach($this->request->data['Song']['availDetails'] as $detail) {
                if(!empty($detail)){
                    $this->request->data['Song']['availability'] = $this->request->data['Song']['availability'] . '/' . $detail;
                }
            }
//            unset($this->request->data['Song']['availDropdown']);
//            unset($this->request->data['Song']['availDetails']);
            if ($this->Song->save($this->request->data)) {
                $this->Flash->success(__('The song has been saved.'));
                return $this->redirect(array('action' => 'adminindex'));
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

            //Check if image has been uploaded
            if(!empty($this->request->data['Song']['coverArt']['name']))
            {
                $coverArt = $this->request->data['Song']['coverArt'];//put the data into a var for easy use

                $baseExt = substr(strtolower(strrchr($coverArt['name'], '.')), 1);//get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                //only process if the extension is valid
                if(in_array($baseExt, $arr_ext))
                {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    move_uploaded_file($coverArt['tmp_name'], WWW_ROOT . 'img/songs/' .
                        $this->request->data['Song']['eName'].'.'.$baseExt);

                    //prepare the filename for database entry
                    $this->request->data['Song']['coverArt'] = $this->request->data['Song']['eName'].'.'.$baseExt;
                }
            }else {
                unset($this->request->data['Song']['coverArt']);
            }

            //REMOVE THIS LATER
//            $this->request->data['Song']['coverArt'] = $this->request->data['Song']['eName'].'.png';
            //REMOVE THIS LATER

            $this->request->data['Song']['availability'] = $this->request->data['Song']['availDropdown'];
            foreach($this->request->data['Song']['availDetails'] as $detail) {
                if(!empty($detail)){
                    $this->request->data['Song']['availability'] = $this->request->data['Song']['availability'] . '/' . $detail;
                }
            }
//            unset($this->request->data['Song']['availDropdown']);
//            unset($this->request->data['Song']['availDetails']);

            if ($this->Song->save($this->request->data)) {
                $this->Flash->success(__('The song has been saved.'));
                return $this->redirect(array('action' => 'adminindex'));
            } else {
                $this->Flash->error(__('The song could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Song.' . $this->Song->primaryKey => $id));
            $this->request->data = $this->Song->find('first', $options);
            $availSplit = explode('/', $this->request->data['Song']['availability']);
            $this->request->data['Song']['availDropdown'] = $availSplit[0];
            if($availSplit[0] == 'Weekday') {
                $size = sizeof($availSplit) - 1;
                for($i=1;$i<=$size;$i++) {
                    $this->request->data['Song']['availDetails'][$availSplit[$i]] = $availSplit[$i];
                }
            } else {
                if(!empty($availSplit[1])) {
                    $this->request->data['Song']['availDetails']['comment'] = $availSplit[1];
                } else {
                    $this->request->data['Song']['availDetails']['comment'] = '';
                }
            }
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
