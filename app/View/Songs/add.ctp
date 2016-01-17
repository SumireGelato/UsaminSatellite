<div class="songs form">
<?php echo $this->Form->create('Song'); ?>
	<fieldset>
		<legend><?php echo __('Add Song'); ?></legend>
	<?php
		echo $this->Form->input('eName');
		echo $this->Form->input('jName');
		echo $this->Form->input('type');
		echo $this->Form->input('bpm');
		echo $this->Form->input('unlockCon');
		echo $this->Form->input('coverArt');
		echo $this->Form->input('debutLvl');
		echo $this->Form->input('debutStam');
		echo $this->Form->input('debutNotes');
		echo $this->Form->input('regLvl');
		echo $this->Form->input('regStam');
		echo $this->Form->input('regNotes');
		echo $this->Form->input('proLvl');
		echo $this->Form->input('proStam');
		echo $this->Form->input('proNotes');
		echo $this->Form->input('masterLvl');
		echo $this->Form->input('masterStam');
		echo $this->Form->input('masterNotes');
		echo $this->Form->input('dateAdded');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Songs'), array('action' => 'index')); ?></li>
	</ul>
</div>
