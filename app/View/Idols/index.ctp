<div class="idols index">
	<h2><?php echo __('Idols'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('eName'); ?></th>
			<th><?php echo $this->Paginator->sort('jName'); ?></th>
			<th><?php echo $this->Paginator->sort('age'); ?></th>
			<th><?php echo $this->Paginator->sort('height'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('birthday'); ?></th>
			<th><?php echo $this->Paginator->sort('bloodType'); ?></th>
			<th><?php echo $this->Paginator->sort('bwh'); ?></th>
			<th><?php echo $this->Paginator->sort('hobbies'); ?></th>
			<th><?php echo $this->Paginator->sort('writingHand'); ?></th>
			<th><?php echo $this->Paginator->sort('horoscope'); ?></th>
			<th><?php echo $this->Paginator->sort('hometown'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('cv'); ?></th>
			<th><?php echo $this->Paginator->sort('pic1'); ?></th>
			<th><?php echo $this->Paginator->sort('pic2'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($idols as $idol): ?>
	<tr>
		<td><?php echo h($idol['Idol']['id']); ?>&nbsp;</td>
		<td><?php echo h($idol['Idol']['eName']); ?>&nbsp;</td>
		<td><?php echo h($idol['Idol']['jName']); ?>&nbsp;</td>
		<td><?php echo h($idol['Idol']['age']); ?>&nbsp;</td>
		<td><?php echo h($idol['Idol']['height']); ?>&nbsp;</td>
		<td><?php echo h($idol['Idol']['weight']); ?>&nbsp;</td>
		<td><?php echo h($idol['Idol']['birthday']); ?>&nbsp;</td>
		<td><?php echo h($idol['Idol']['bloodType']); ?>&nbsp;</td>
		<td><?php echo h($idol['Idol']['bwh']); ?>&nbsp;</td>
		<td><?php echo h($idol['Idol']['hobbies']); ?>&nbsp;</td>
		<td><?php echo h($idol['Idol']['writingHand']); ?>&nbsp;</td>
		<td><?php echo h($idol['Idol']['horoscope']); ?>&nbsp;</td>
		<td><?php echo h($idol['Idol']['hometown']); ?>&nbsp;</td>
		<td><?php echo h($idol['Idol']['type']); ?>&nbsp;</td>
		<td><?php echo h($idol['Idol']['cv']); ?>&nbsp;</td>
		<td><?php echo h($idol['Idol']['pic1']); ?>&nbsp;</td>
		<td><?php echo h($idol['Idol']['pic2']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $idol['Idol']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $idol['Idol']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $idol['Idol']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $idol['Idol']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Idol'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
