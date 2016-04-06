<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * This controller does not use a model
     *
     * @var array
     */
    public $uses = array();

    /**
     * Displays a view
     *
     * @return void
     * @throws NotFoundException When the view file could not be found
     *    or MissingViewException in debug mode.
     */
    public function display()
    {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        $page = $subpage = $title_for_layout = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        if (!empty($path[$count - 1])) {
            $title_for_layout = Inflector::humanize($path[$count - 1]);
        }
        $this->loadModel('Website');
        $settings = $this->Website->find('first');
        $numChibis = $settings['Website']['numChibis'];

        if($settings['Website']['chibi1'] == 0) {
            $chibi1 = mt_rand(1, $numChibis);
        } else {
            $chibi1 = $settings['Website']['chibi1'];
        }
        if($settings['Website']['chibi2'] == 0) {
            $chibi2 = mt_rand(1, $numChibis);
        } else {
            $chibi2 = $settings['Website']['chibi2'];
        }
        if($settings['Website']['chibi3'] == 0) {
            $chibi3 = mt_rand(1, $numChibis);
        } else {
            $chibi3 = $settings['Website']['chibi3'];
        }
        $chibis = array('num1' => $chibi1, 'num2' => $chibi2, 'num3' => $chibi3);
        $this->set($chibis);

        $this->loadModel('News');
        $this->set('news', $this->News->find('all', array('recursive' => -1, 'order' => 'News.created', 'limit' => 10)));

        $this->set(compact('page', 'subpage', 'title_for_layout'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingViewException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }
}
