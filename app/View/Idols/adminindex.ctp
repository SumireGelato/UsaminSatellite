<div class="row">
    <div class="col-lg-12">
        <h2><?php echo __('Idols'); ?></h2>
    </div>
</div>
<div class="row" style="margin-bottom: 10px">
    <div class="col-lg-6">
        <div class="btn btn-default">
            <?php echo $this->Html->link(__('Add Idol'), array('action' => 'add')); ?>
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
            <th><?php echo $this->Paginator->sort('eName'); ?></th>
            <th><?php echo $this->Paginator->sort('jName'); ?></th>
            <th><?php echo $this->Paginator->sort('age'); ?></th>
            <th><?php echo $this->Paginator->sort('height'); ?></th>
            <th><?php echo $this->Paginator->sort('weight'); ?></th>
            <th><?php echo $this->Paginator->sort('birthday'); ?></th>
            <th><?php echo $this->Paginator->sort('bwh'); ?></th>
            <th><?php echo $this->Paginator->sort('writingHand'); ?></th>
            <th><?php echo $this->Paginator->sort('hometown'); ?></th>
            <th><?php echo $this->Paginator->sort('type'); ?></th>
            <th><?php echo $this->Paginator->sort('cv'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($idols as $idol): ?>
            <tr>
                <td><?php echo h($idol['Idol']['eName']); ?>&nbsp;</td>
                <td><?php echo h($idol['Idol']['jName']); ?>&nbsp;</td>
                <td><?php echo h($idol['Idol']['age']); ?>&nbsp;</td>
                <td><?php echo h($idol['Idol']['height']); ?>&nbsp;</td>
                <td><?php echo h($idol['Idol']['weight']); ?>&nbsp;</td>
                <td><?php echo h($idol['Idol']['birthday']); ?>&nbsp;</td>
                <td><?php echo h($idol['Idol']['bwh']); ?>&nbsp;</td>
                <td><?php echo h($idol['Idol']['writingHand']); ?>&nbsp;</td>
                <td><?php echo h($idol['Idol']['hometown']); ?>&nbsp;</td>
                <td><?php echo h($idol['Idol']['type']); ?>&nbsp;</td>
                <td><?php echo h($idol['Idol']['cv']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $idol['Idol']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $idol['Idol']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $idol['Idol']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $idol['Idol']['id']))); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<script type="text/javascript">
    $(document).ready( function () {
        $('#table').DataTable({
            responsive:     true,
            order:          [[ 9, 'asc' ]]
        });
    } );
</script>