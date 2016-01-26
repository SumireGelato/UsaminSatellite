<div class="events form">
    <?php echo $this->Form->create('Event'); ?>
    <fieldset>
        <legend><?php echo __('Edit Event'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('isCurrent');
        echo $this->Form->input('isCaravan');
        echo $this->Form->input('eName');
        echo $this->Form->input('jName');
        echo $this->Form->input('begin');
        echo $this->Form->input('finish');
        echo $this->Form->input('info');
        echo $this->Form->input('t1');
        echo $this->Form->input('t2');
        echo $this->Form->input('t3');
        echo $this->Form->input('t4');
        echo $this->Form->input('t5');
        echo $this->Form->input('t6');
        echo $this->Form->input('t7');
        echo $this->Form->input('pic');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Event.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Event.id')))); ?></li>
        <li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
    </ul>
</div>
