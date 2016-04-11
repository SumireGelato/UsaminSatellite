<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package        app.Controller
 * @link        http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $components = array(
//        'DebugKit.Toolbar',
        'Session',
        'Flash',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'users',
                'action' => 'controlpanel'
            ),
            'logoutRedirect' => array(
                'controller' => 'pages',
                'action' => 'display',
                'home'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            ),
            'authorize' => array('Controller')
        ),);

    public $helpers = array('Session');

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->loadModel('Website');
        if (!$this->Session->check('background')) {
            $background = $this->Website->find('first', array('fields' => array('Website.currentWallpaper', 'Website.numWallpapers')));
            if($background['Website']['currentWallpaper'] == 0) {
                $background = mt_rand(1, $background['Website']['numWallpapers']);
            } else {
                $background = $background['Website']['currentWallpaper'];
            }
            $this->Session->write('background', $background);
        }
        $version = $this->Website->find('first', array('fields' => array('Website.resVersion', 'Website.lastUpdated')));
        $this->set('version', $version);
        $this->Auth->allow('index','view', 'display');
    }

    public function isAuthorized($user) {
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }

        return false;
    }

    public function beforeRender()
    {
        $this->layout = ($this->request->is("ajax")) ? "ajax" : "default";
    }

}
