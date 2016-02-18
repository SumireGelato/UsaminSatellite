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
        if (!$this->request->is('ajax')) {
            $type = 'cute';
            $this->set('type', $type);
            $this->set('idols', $this->Idol->find('all', array(
                'conditions' => array('Idol.type' => 'Cute'),
                'fields' => array('Idol.eName', 'Idol.puchiPic', 'Idol.voiced'),
                'order' => array('Idol.voiced' => 'desc', 'Idol.id' => 'asc')
            )));
        } else {
            $type = $this->request->query('type');
            $this->set('type', $type);
            $this->set('idols', $this->Idol->find('all', array(
                'conditions' => array('Idol.type' => $type),
                'fields' => array('Idol.eName', 'Idol.puchiPic', 'Idol.voiced'),
                'order' => array('Idol.voiced' => 'desc', 'Idol.id' => 'asc')
            )));
        }
    }

    /**
     * admin index
     *
     * Datatables list
     */
    public function adminindex() {
        $this->Idol->recursive = 0;
        $this->set('idols', $this->Idol->find('all', array('order' => 'Idol.type asc')));
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
        $this->Idol->recursive = 2;
        $options = array('conditions' => array('Idol.' . $this->Idol->primaryKey => $id));
        $idol = $this->Idol->find('first', $options);
        $bwh = explode('/', $idol['Idol']['bwh']);
        $idol['Idol']['b'] = $bwh[0];
        $idol['Idol']['w'] = $bwh[1];
        $idol['Idol']['h'] = $bwh[2];
        unset($idol['Idol']['bwh']);
        $this->set('idol', $idol);
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
            $this->request->data['Idol']['bwh'] = $this->request->data['Idol']['b'].'/'.$this->request->data['Idol']['w'].'/'.$this->request->data['Idol']['h'];
            unset($this->request->data['Idol']['b']);
            unset($this->request->data['Idol']['w']);
            unset($this->request->data['Idol']['h']);

            //Check if image has been uploaded
            if(!empty($this->request->data['Idol']['profilePic']['name']))
            {
                $profilePic = $this->request->data['Idol']['profilePic'];//put the data into a var for easy use

                $profileExt = substr(strtolower(strrchr($profilePic['name'], '.')), 1);//get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                //only process if the extension is valid
                if(in_array($profileExt, $arr_ext))
                {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    move_uploaded_file($profilePic['tmp_name'], WWW_ROOT . 'img/profiles/' .
                        explode(' ', lcfirst(trim($this->request->data['Idol']['eName']))[0]).'1.'.$profileExt);

                    //prepare the filename for database entry
                    $profileFilename = explode(' ', trim($this->request->data['Idol']['eName']))[0];
                    $this->request->data['Idol']['profilePic'] = lcfirst($profileFilename).'1.'.$profileExt;
                }
            }else {
                unset($this->request->data['Idol']['profilePic']);
            }

            if(!empty($this->request->data['Idol']['puchiPic']['name']))
            {
                $puchiPic = $this->request->data['Idol']['puchiPic'];//put the data into a var for easy use

                $puchiExt = substr(strtolower(strrchr($puchiPic['name'], '.')), 1);//get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                //only process if the extension is valid
                if(in_array($puchiExt, $arr_ext))
                {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    move_uploaded_file($puchiPic['tmp_name'], WWW_ROOT . 'img/profiles/' .
                        explode(' ', lcfirst(trim($this->request->data['Idol']['eName']))[0]).'2.'.$puchiExt);

                    //prepare the filename for database entry
                    $puchiFilename = explode(' ', trim($this->request->data['Idol']['eName']))[0];
                    $this->request->data['Idol']['puchiPic'] = lcfirst($puchiFilename).'2.'.$puchiExt;
                }
            }else {
                unset($this->request->data['Idol']['puchiPic']);
            }

            /*
             * REMOVE THIS LATER
             */
//            $profileFilename = explode(' ', trim($this->request->data['Idol']['eName']))[0];
//            $this->request->data['Idol']['profilePic'] = lcfirst($profileFilename).'1.png';
//            $puchiFilename = explode(' ', trim($this->request->data['Idol']['eName']))[0];
//            $this->request->data['Idol']['puchiPic'] = lcfirst($puchiFilename).'2.png';
            /*
             * REMOVE THIS LATER
             */

            if ($this->Idol->save($this->request->data)) {
                $this->Flash->success(__('The idol has been saved.'));
                return $this->redirect(array('action' => 'adminindex'));
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

            $this->request->data['Idol']['bwh'] = $this->request->data['Idol']['b'].'/'.$this->request->data['Idol']['w'].'/'.$this->request->data['Idol']['h'];
            unset($this->request->data['Idol']['b']);
            unset($this->request->data['Idol']['w']);
            unset($this->request->data['Idol']['h']);

            //Check if image has been uploaded
            if(!empty($this->request->data['Idol']['profilePic']['name']))
            {
                $profilePic = $this->request->data['Idol']['profilePic'];//put the data into a var for easy use

                $profileExt = substr(strtolower(strrchr($profilePic['name'], '.')), 1);//get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                //only process if the extension is valid
                if(in_array($profileExt, $arr_ext))
                {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    $profileFilename = explode(' ', trim($this->request->data['Idol']['eName']))[0];
                    move_uploaded_file($profilePic['tmp_name'], WWW_ROOT . 'img/profiles/' .
                        lcfirst($profileFilename).'1.'.$profileExt);

                    //prepare the filename for database entry
                    $this->request->data['Idol']['profilePic'] = lcfirst($profileFilename).'1.png';
                }
            }
            else {
                unset($this->request->data['Idol']['profilePic']);
            }

            if(!empty($this->request->data['Idol']['puchiPic']['name']))
            {
                $puchiPic = $this->request->data['Idol']['puchiPic'];//put the data into a var for easy use

                $puchiExt = substr(strtolower(strrchr($puchiPic['name'], '.')), 1);//get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

                //only process if the extension is valid
                if(in_array($puchiExt, $arr_ext))
                {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    $puchiFilename = explode(' ', trim($this->request->data['Idol']['eName']))[0];
                    move_uploaded_file($puchiPic['tmp_name'], WWW_ROOT . 'img/profiles/' .
                        lcfirst($puchiFilename).'2.'.$puchiExt);

                    //prepare the filename for database entry
                    $this->request->data['Idol']['puchiPic'] = lcfirst($puchiFilename).'2.png';
                }
            }
            else {
                unset($this->request->data['Idol']['puchiPic']);
            }

            /*
             * REMOVE THIS LATER
             */
//            $profileFilename = explode(' ', trim($this->request->data['Idol']['eName']))[0];
//            $this->request->data['Idol']['profilePic'] = lcfirst($profileFilename).'1.png';
//            $puchiFilename = explode(' ', trim($this->request->data['Idol']['eName']))[0];
//            $this->request->data['Idol']['puchiPic'] = lcfirst($puchiFilename).'2.png';
            /*
             * REMOVE THIS LATER
             */

            if ($this->Idol->save($this->request->data)) {
                $this->Flash->success(__('The idol has been saved.'));
                return $this->redirect(array('action' => 'adminindex'));
            } else {
                $this->Flash->error(__('The idol could not be saved. Please, try again.'));
            }
        } else {
            $this->Idol->recursive = 0;
            $options = array('conditions' => array('Idol.' . $this->Idol->primaryKey => $id));
            $this->request->data = $this->Idol->find('first', $options);
            $bwhArray = explode('/',trim($this->request->data['Idol']['bwh']));
            $this->request->data['Idol']['b'] = $bwhArray[0];
            $this->request->data['Idol']['w'] = $bwhArray[1];
            $this->request->data['Idol']['h'] = $bwhArray[2];
            unset($this->request->data['Idol']['bwh']);
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
        return $this->redirect(array('action' => 'adminindex'));
    }
}
