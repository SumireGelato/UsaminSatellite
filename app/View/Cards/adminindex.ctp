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
            <th>idolName</th>
            <th>eventName</th>
            <th>dateAdded</th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($cards as $card): ?>
            <tr>
                <td><?php echo h($card['Card']['card_id']); ?></td>
                <td><?php echo h($card['Card']['eName']); ?></td>
                <td><?php echo h($card['Card']['jName']); ?></td>
                <td><?php echo h($card['Card']['rarity']); ?></td>
                <td><?php echo h($card['Card']['type']); ?></td>
                <td><?php echo h($card['Idol']['eName']); ?></td>
                <td><?php echo h($card['Event']['eName']); ?></td>
                <td><?php echo h($card['Card']['dateAdded']); ?></td>
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
            "responsive":     true,
            "order":     [[ 7, 'desc' ], [ 0, 'asc' ]]
        });
    } );
</script>
