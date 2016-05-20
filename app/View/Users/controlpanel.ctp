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
        ?>
    </div>
    <div class="col-lg-6">
        <?php
        echo '<h2>' . $this->Html->link('Idols', array('controller' => 'idols', 'action' => 'adminindex'), array('class' => 'noLinkStyle')) . ' - ' . $this->Html->link('Add', array('controller' => 'idols', 'action' => 'add'), array('class' => 'noLinkStyle')) . '</h2>';
        echo '<h2>' . $this->Html->link('Gacha', array('controller' => 'gachas', 'action' => 'adminindex'), array('class' => 'noLinkStyle')) . ' - ' . $this->Html->link('Add', array('controller' => 'gachas', 'action' => 'add'), array('class' => 'noLinkStyle')) . '</h2>';
        echo '<h2>' . $this->Html->link('Users', array('controller' => 'users', 'action' => 'adminindex'), array('class' => 'noLinkStyle')) . ' - ' . $this->Html->link('Add', array('controller' => 'users', 'action' => 'add'), array('class' => 'noLinkStyle')) . '</h2>';
        ?>
    </div>
</div>
<div class="row text-center">
    <h4 style="font-weight: bold">General Website Settings</h4>
</div>
<div class="row">
    <?php
    echo $this->Form->create('Website', array(
        'inputDefaults' => array(
            'div' => 'form-group',
            'class' => 'form-control'
        ),
        'class' => 'container',
        'novalidate' => true
    ));
    ?>
    <div class="col-lg-6">
        <?php
        echo $this->Form->input('resVersion');
        ?>
    </div>
    <div class="col-lg-6">
        <?php
            echo $this->Form->input('lastUpdated');
        ?>
    </div>
    <div class="col-lg-12">
        <?php
        echo $this->Form->submit('Save', array(
            'div' => 'form-group',
            'class' => 'btn btn-default center-block'
        ));
        echo $this->Form->end();
        ?>
    </div>
</div>