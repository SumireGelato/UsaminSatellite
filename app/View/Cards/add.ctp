<div class="cards form">
    <?php echo $this->Form->create('Card'); ?>
    <fieldset>
        <legend><?php echo __('Add Card'); ?></legend>
        <?php
        echo $this->Form->input('idol_id');
        echo $this->Form->input('event_id');
        echo $this->Form->input('cardNumber');
        echo $this->Form->input('eName');
        echo $this->Form->input('jName');
        echo $this->Form->input('rarity');
        echo $this->Form->input('type');
        echo $this->Form->input('maxLvl');
        echo $this->Form->input('awkMaxLvl');
        echo $this->Form->input('baseLife');
        echo $this->Form->input('baseVocal');
        echo $this->Form->input('baseDance');
        echo $this->Form->input('baseVisual');
        echo $this->Form->input('baseMaxLife');
        echo $this->Form->input('baseMaxVocal');
        echo $this->Form->input('baseMaxDance');
        echo $this->Form->input('baseMaxVisual');
        echo $this->Form->input('awkBaseLife');
        echo $this->Form->input('awkBaseVocal');
        echo $this->Form->input('awkBaseDance');
        echo $this->Form->input('awkBaseVisual');
        echo $this->Form->input('awkMaxLife');
        echo $this->Form->input('awkMaxVocal');
        echo $this->Form->input('awkMaxDance');
        echo $this->Form->input('awkMaxVisual');
        echo $this->Form->input('centerSkillName');
        echo $this->Form->input('centerSkillText');
        echo $this->Form->input('specialSkillType');
        echo $this->Form->input('specialSkillText');
        echo $this->Form->input('baseArt');
        echo $this->Form->input('awkArt');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Cards'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Idols'), array('controller' => 'idols', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Idol'), array('controller' => 'idols', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
    </ul>
</div>
