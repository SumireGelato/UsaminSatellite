<?php
App::uses('AppController', 'Controller');

/**
 * Events Controller
 *
 * @property Event $Event
 * @property PaginatorComponent $Paginator
 */
class EventsController extends AppController
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
        $this->Event->recursive = 2;
        $this->set('events', $this->Event->find('all', array('order' => 'Event.finish desc')));
    }

    /**
     * index method
     *
     * @return void
     */
    public function adminindex()
    {
        $this->Event->recursive = 1;
        $this->set('events', $this->Event->find('all'));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Event->create();

            //Check if image has been uploaded
            if (!empty($this->request->data['Event']['pic']['name'])) {
                $pic = $this->request->data['Event']['pic'];//put the data into a var for easy use

                $picExt = substr(strtolower(strrchr($pic['name'], '.')), 1);//get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                //only process if the extension is valid
                if (in_array($picExt, $arr_ext)) {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    $picFilenameDateArray = explode('-', trim($this->request->data['Event']['begin']));
                    $picFilename = trim($this->request->data['Event']['eName']) .' '. $picFilenameDateArray[0] . '-' . $picFilenameDateArray[1];

                    move_uploaded_file($pic['tmp_name'], WWW_ROOT . 'img/events/' .
                        $picFilename . '.' . $picExt);

                    //prepare the filename for database entry
                    $this->request->data['Event']['pic'] = $picFilename .'.'. $picExt;
                }
            } else {
                unset($this->request->data['Event']['pic']);
            }

            $picFilenameDateArray = explode('-', trim($this->request->data['Event']['begin']));
            $picFilename = trim($this->request->data['Event']['eName']) .' '. $picFilenameDateArray[0] . '-' . $picFilenameDateArray[1];
            $this->request->data['Event']['pic'] = $picFilename .'.'. $picExt;


            if ($this->Event->save($this->request->data)) {
                $this->Flash->success(__('The event has been saved.'));
                return $this->redirect(array('action' => 'adminindex'));
            } else {
                $this->Flash->error(__('The event could not be saved. Please, try again.'));
            }
        }
        $this->set('songs', $this->Event->Song->find('list', array('fields' => array('Song.eName'))));
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
        if (!$this->Event->exists($id)) {
            throw new NotFoundException(__('Invalid event'));
        }
        if ($this->request->is(array('post', 'put'))) {

            //Check if image has been uploaded
            if (!empty($this->request->data['Event']['pic']['name'])) {
                $pic = $this->request->data['Event']['pic'];//put the data into a var for easy use

                $picExt = substr(strtolower(strrchr($pic['name'], '.')), 1);//get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                //only process if the extension is valid
                if (in_array($picExt, $arr_ext)) {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    $picFilenameDateArray = explode('-', trim($this->request->data['Event']['begin']));
                    $picFilename = trim($this->request->data['Event']['eName']) .' '. $picFilenameDateArray[0] . '-' . $picFilenameDateArray[1];

                    move_uploaded_file($pic['tmp_name'], WWW_ROOT . 'img/events/' .
                        $picFilename . '.' . $picExt);

                    //prepare the filename for database entry
                    $this->request->data['Event']['pic'] = $picFilename .'.'. $picExt;
                }
            } else {
                unset($this->request->data['Event']['pic']);
            }

//            $picFilenameDateArray = explode('-', trim($this->request->data['Event']['begin']));
//            $picFilename = trim($this->request->data['Event']['eName']) .' '. $picFilenameDateArray[0] . '-' . $picFilenameDateArray[1];
//            $this->request->data['Event']['pic'] = $picFilename .'.'. $picExt;

            if ($this->Event->save($this->request->data)) {
                $this->Flash->success(__('The event has been saved.'));
                return $this->redirect(array('action' => 'adminindex'));
            } else {
                $this->Flash->error(__('The event could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
            $this->request->data = $this->Event->find('first', $options);
            $this->set('songs', $this->Event->Song->find('list', array('fields' => array('Song.eName'))));
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
        $this->Event->id = $id;
        if (!$this->Event->exists()) {
            throw new NotFoundException(__('Invalid event'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Event->delete()) {
            $this->Flash->success(__('The event has been deleted.'));
        } else {
            $this->Flash->error(__('The event could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'adminindex'));
    }
}
