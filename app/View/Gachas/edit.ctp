<div class="gachas form">
    <?php echo $this->Form->create('Gacha'); ?>
    <fieldset>
        <legend><?php echo __('Edit Gacha'); ?></legend>
        	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('eName');
		echo $this->Form->input('jName');
		echo $this->Form->input('dateStart');
		echo $this->Form->input('dateFinish');
		echo $this->Form->input('cardId1');
		echo $this->Form->input('cardId2');
		echo $this->Form->input('cardId3');
		echo $this->Form->input('cardId4');
		echo $this->Form->input('pic');
	?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

                    <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Gacha.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Gacha.id')))); ?></li>
                <li><?php echo $this->Html->link(__('List Gachas'), array('action' => 'index')); ?></li>
            </ul>
</div>
