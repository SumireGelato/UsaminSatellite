<div class="row">
    <div class="col-lg-12">
    <h2><?php echo __('Cards'); ?></h2>
    </div>
    </div>
<div class="row" style="margin-bottom: 10px">
    <div class="col-lg-6">
        <div class="btn btn-default">
        <?php echo $this->Html->link(__('Add Card'), array('action' => 'add')); ?>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="btn btn-default">
        <?php echo $this->Html->link(__('Back to Control Panel'), array('controller' => 'users',
            'action' => 'controlpanel')); ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
    <table cellpadding="0" id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>cardNumber</th>
            <th>eName</th>
            <th>jName</th>
            <th>rarity</th>
            <th>type</th>
            <th>centerSkillText</th>
            <th>specialSkillType</th>
            <th>specialSkillText</th>
            <th>idolName</th>
            <th>eventName</th>
            <th>baseArt</th>
            <th>awkArt</th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($cards as $card): ?>
            <tr>
                <td><?php echo h($card['Card']['cardNumber']); ?></td>
                <td><?php echo h($card['Card']['eName']); ?>&nbsp;</td>
                <td><?php echo h($card['Card']['jName']); ?>&nbsp;</td>
                <td><?php echo h($card['Card']['rarity']); ?>&nbsp;</td>
                <td><?php echo h($card['Card']['type']); ?>&nbsp;</td>
                <td><?php echo h($card['Card']['centerSkillText']); ?>&nbsp;</td>
                <td><?php echo h($card['Card']['specialSkillType']); ?>&nbsp;</td>
                <td><?php echo h($card['Card']['specialSkillText']); ?>&nbsp;</td>
                <td><?php echo h($card['Idol']['eName']); ?>&nbsp;</td>
                <td><?php echo h($card['Event']['eName']); ?>&nbsp;</td>
                <td><?php echo h($card['Card']['baseArt']); ?>&nbsp;</td>
                <td><?php echo h($card['Card']['awkArt']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $card['Card']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $card['Card']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $card['Card']['id']))); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>

<script type="text/javascript">
    $(document).ready( function () {
        $('#table').DataTable({
            responsive:     true,
            order:          [[ 0, 'desc' ]]
        });
    } );
</script>
