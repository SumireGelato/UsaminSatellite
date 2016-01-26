<div class="songs index">
    <h2><?php echo __('Songs'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('eName'); ?></th>
            <th><?php echo $this->Paginator->sort('jName'); ?></th>
            <th><?php echo $this->Paginator->sort('type'); ?></th>
            <th><?php echo $this->Paginator->sort('bpm'); ?></th>
            <th><?php echo $this->Paginator->sort('unlockCon'); ?></th>
            <th><?php echo $this->Paginator->sort('coverArt'); ?></th>
            <th><?php echo $this->Paginator->sort('debutLvl'); ?></th>
            <th><?php echo $this->Paginator->sort('debutStam'); ?></th>
            <th><?php echo $this->Paginator->sort('debutNotes'); ?></th>
            <th><?php echo $this->Paginator->sort('regLvl'); ?></th>
            <th><?php echo $this->Paginator->sort('regStam'); ?></th>
            <th><?php echo $this->Paginator->sort('regNotes'); ?></th>
            <th><?php echo $this->Paginator->sort('proLvl'); ?></th>
            <th><?php echo $this->Paginator->sort('proStam'); ?></th>
            <th><?php echo $this->Paginator->sort('proNotes'); ?></th>
            <th><?php echo $this->Paginator->sort('masterLvl'); ?></th>
            <th><?php echo $this->Paginator->sort('masterStam'); ?></th>
            <th><?php echo $this->Paginator->sort('masterNotes'); ?></th>
            <th><?php echo $this->Paginator->sort('dateAdded'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($songs as $song): ?>
            <tr>
                <td><?php echo h($song['Song']['id']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['eName']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['jName']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['type']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['bpm']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['unlockCon']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['coverArt']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['debutLvl']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['debutStam']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['debutNotes']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['regLvl']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['regStam']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['regNotes']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['proLvl']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['proStam']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['proNotes']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['masterLvl']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['masterStam']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['masterNotes']); ?>&nbsp;</td>
                <td><?php echo h($song['Song']['dateAdded']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $song['Song']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $song['Song']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $song['Song']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $song['Song']['id']))); ?>
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
        <li><?php echo $this->Html->link(__('New Song'), array('action' => 'add')); ?></li>
    </ul>
</div>
