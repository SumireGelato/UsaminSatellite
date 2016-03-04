<div class="gachas index">
    <h2><?php echo __('Gachas'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
                            <th><?php echo $this->Paginator->sort('id'); ?></th>
                            <th><?php echo $this->Paginator->sort('eName'); ?></th>
                            <th><?php echo $this->Paginator->sort('jName'); ?></th>
                            <th><?php echo $this->Paginator->sort('dateStart'); ?></th>
                            <th><?php echo $this->Paginator->sort('dateFinish'); ?></th>
                            <th><?php echo $this->Paginator->sort('cardId1'); ?></th>
                            <th><?php echo $this->Paginator->sort('cardId2'); ?></th>
                            <th><?php echo $this->Paginator->sort('cardId3'); ?></th>
                            <th><?php echo $this->Paginator->sort('cardId4'); ?></th>
                            <th><?php echo $this->Paginator->sort('pic'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($gachas as $gacha): ?>
	<tr>
		<td><?php echo h($gacha['Gacha']['id']); ?>&nbsp;</td>
		<td><?php echo h($gacha['Gacha']['eName']); ?>&nbsp;</td>
		<td><?php echo h($gacha['Gacha']['jName']); ?>&nbsp;</td>
		<td><?php echo h($gacha['Gacha']['dateStart']); ?>&nbsp;</td>
		<td><?php echo h($gacha['Gacha']['dateFinish']); ?>&nbsp;</td>
		<td><?php echo h($gacha['Gacha']['cardId1']); ?>&nbsp;</td>
		<td><?php echo h($gacha['Gacha']['cardId2']); ?>&nbsp;</td>
		<td><?php echo h($gacha['Gacha']['cardId3']); ?>&nbsp;</td>
		<td><?php echo h($gacha['Gacha']['cardId4']); ?>&nbsp;</td>
		<td><?php echo h($gacha['Gacha']['pic']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $gacha['Gacha']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $gacha['Gacha']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $gacha['Gacha']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $gacha['Gacha']['id']))); ?>
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
	?>    </p>

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
        <li><?php echo $this->Html->link(__('New Gacha'), array('action' => 'add')); ?></li>
            </ul>
</div>
