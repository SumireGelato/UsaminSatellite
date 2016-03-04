<!-- page title -->
<?php
$this->set('title_for_layout', 'Admin Control Panel');
?>
<div class="row">
    <div class="col-lg-6">
        <?php
        echo '<h2>' . $this->Html->link('Cards', array('controller' => 'cards', 'action' => 'adminindex'), array('class' => 'noLinkStyle')) . ' - ' . $this->Html->link('Add', array('controller' => 'cards', 'action' => 'add'), array('class' => 'noLinkStyle')) . '</h2>';
        echo '<h2>' . $this->Html->link('Events', array('controller' => 'events', 'action' => 'adminindex'), array('class' => 'noLinkStyle')) . ' - ' . $this->Html->link('Add', array('controller' => 'events', 'action' => 'add'), array('class' => 'noLinkStyle')) . '</h2>';
        echo '<h2>' . $this->Html->link('Songs', array('controller' => 'songs', 'action' => 'adminindex'), array('class' => 'noLinkStyle')) . ' - ' . $this->Html->link('Add', array('controller' => 'songs', 'action' => 'add'), array('class' => 'noLinkStyle')) . '</h2>';
        echo '<h2>' . $this->Html->link('Users', array('controller' => 'users', 'action' => 'index'), array('class' => 'noLinkStyle')) . ' - ' . $this->Html->link('Add', array('controller' => 'users', 'action' => 'add'), array('class' => 'noLinkStyle')) . '</h2>';
        ?>
    </div>
    <div class="col-lg-6">
        <?php
        echo '<h2>' . $this->Html->link('Idols', array('controller' => 'idols', 'action' => 'adminindex'), array('class' => 'noLinkStyle')) . ' - ' . $this->Html->link('Add', array('controller' => 'idols', 'action' => 'add'), array('class' => 'noLinkStyle')) . '</h2>';
        echo '<h2>' . $this->Html->link('Gacha', array('controller' => 'gachas', 'action' => 'adminindex'), array('class' => 'noLinkStyle')) . ' - ' . $this->Html->link('Add', array('controller' => 'gachas', 'action' => 'add'), array('class' => 'noLinkStyle')) . '</h2>';
        echo '<h2>' . $this->Html->link('News', array('controller' => 'news', 'action' => 'adminindex'), array('class' => 'noLinkStyle')) . ' - ' . $this->Html->link('Add', array('controller' => 'news', 'action' => 'add'), array('class' => 'noLinkStyle')) . '</h2>';
        ?>
    </div>
</div>
