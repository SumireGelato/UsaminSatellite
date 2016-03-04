<div class="gachas view">
    <h2><?php echo __('Gacha'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($gacha['Gacha']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('EName'); ?></dt>
        <dd>
            <?php echo h($gacha['Gacha']['eName']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('JName'); ?></dt>
        <dd>
            <?php echo h($gacha['Gacha']['jName']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('DateStart'); ?></dt>
        <dd>
            <?php echo h($gacha['Gacha']['dateStart']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('DateFinish'); ?></dt>
        <dd>
            <?php echo h($gacha['Gacha']['dateFinish']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('CardId1'); ?></dt>
        <dd>
            <?php echo h($gacha['Gacha']['cardId1']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('CardId2'); ?></dt>
        <dd>
            <?php echo h($gacha['Gacha']['cardId2']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('CardId3'); ?></dt>
        <dd>
            <?php echo h($gacha['Gacha']['cardId3']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('CardId4'); ?></dt>
        <dd>
            <?php echo h($gacha['Gacha']['cardId4']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Pic'); ?></dt>
        <dd>
            <?php echo h($gacha['Gacha']['pic']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Gacha'), array('action' => 'edit', $gacha['Gacha']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Gacha'), array('action' => 'delete', $gacha['Gacha']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $gacha['Gacha']['id']))); ?> </li>
        <li><?php echo $this->Html->link(__('List Gachas'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Gacha'), array('action' => 'add')); ?> </li>
    </ul>
</div>
