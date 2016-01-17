<div class="idols form">
<?php echo $this->Form->create('Idol'); ?>
	<fieldset>
		<legend><?php echo __('Edit Idol'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('eName');
		echo $this->Form->input('jName');
		echo $this->Form->input('age');
		echo $this->Form->input('height');
		echo $this->Form->input('weight');
		echo $this->Form->input('birthday');
		echo $this->Form->input('bloodType');
		echo $this->Form->input('bwh');
		echo $this->Form->input('hobbies');
		echo $this->Form->input('writingHand');
		echo $this->Form->input('horoscope');
		echo $this->Form->input('hometown');
		echo $this->Form->input('type');
		echo $this->Form->input('cv');
		echo $this->Form->input('pic1');
		echo $this->Form->input('pic2');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Idol.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Idol.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Idols'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
