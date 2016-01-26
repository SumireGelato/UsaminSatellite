<div class="songs view">
    <h2><?php echo __('Song'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($song['Song']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('EName'); ?></dt>
        <dd>
            <?php echo h($song['Song']['eName']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('JName'); ?></dt>
        <dd>
            <?php echo h($song['Song']['jName']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Type'); ?></dt>
        <dd>
            <?php echo h($song['Song']['type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Bpm'); ?></dt>
        <dd>
            <?php echo h($song['Song']['bpm']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('UnlockCon'); ?></dt>
        <dd>
            <?php echo h($song['Song']['unlockCon']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('CoverArt'); ?></dt>
        <dd>
            <?php echo h($song['Song']['coverArt']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('DebutLvl'); ?></dt>
        <dd>
            <?php echo h($song['Song']['debutLvl']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('DebutStam'); ?></dt>
        <dd>
            <?php echo h($song['Song']['debutStam']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('DebutNotes'); ?></dt>
        <dd>
            <?php echo h($song['Song']['debutNotes']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('RegLvl'); ?></dt>
        <dd>
            <?php echo h($song['Song']['regLvl']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('RegStam'); ?></dt>
        <dd>
            <?php echo h($song['Song']['regStam']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('RegNotes'); ?></dt>
        <dd>
            <?php echo h($song['Song']['regNotes']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('ProLvl'); ?></dt>
        <dd>
            <?php echo h($song['Song']['proLvl']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('ProStam'); ?></dt>
        <dd>
            <?php echo h($song['Song']['proStam']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('ProNotes'); ?></dt>
        <dd>
            <?php echo h($song['Song']['proNotes']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('MasterLvl'); ?></dt>
        <dd>
            <?php echo h($song['Song']['masterLvl']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('MasterStam'); ?></dt>
        <dd>
            <?php echo h($song['Song']['masterStam']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('MasterNotes'); ?></dt>
        <dd>
            <?php echo h($song['Song']['masterNotes']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('DateAdded'); ?></dt>
        <dd>
            <?php echo h($song['Song']['dateAdded']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Song'), array('action' => 'edit', $song['Song']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Song'), array('action' => 'delete', $song['Song']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $song['Song']['id']))); ?> </li>
        <li><?php echo $this->Html->link(__('List Songs'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Song'), array('action' => 'add')); ?> </li>
    </ul>
</div>
