<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$this->set('title_for_layout', 'Usamin S@telite | Not Found');
?>
<div class="text-center center-block">
    <h2><?php echo "Sorry we can't find your page!"?></h2>
    <?php echo $this->Html->image('404.jpg', array('alt' => '404 Kaede', 'style' => 'height: 250px; width:250px; margin-bottom: 10px;')) ?>
    <p>The page you requested cannot be found. Please click the links on the top or
    click <a href="javascript:history.back()">here</a> to go back to where you where.</p>
    <p style="font-size: xx-small">Picture source: http://danbooru.donmai.us/posts/1413476?tags=idolmaster_cinderella_girls+confused</p>
</div>
<?php
if (Configure::read('debug') > 0){ ?>
    <p class="error">
        <strong><?php echo __d('cake', 'Error'); ?>: </strong>
        <?php printf(
            __d('cake', 'The requested address %s was not found on this server.'),
            "<strong>'{$url}'</strong>"
        ); ?>
    </p>
    <?php
    echo $this->element('exception_stack_trace');
}
?>
