<div class="row">
    <div class="col-lg-12">
        <h2><?php echo __('Events'); ?></h2>
    </div>
</div>
<div class="row" style="margin-bottom: 10px">
    <div class="col-lg-6">
        <div class="btn btn-default">
            <?php echo $this->Html->link(__('Add Event'), array('action' => 'add')); ?>
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
            <th>eName</th>
            <th>jName</th>
            <th>begin</th>
            <th>finish</th>
            <th>type</th>
            <th>pic</th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($events as $event): ?>
            <tr>
                <td><?php echo h($event['Event']['eName']); ?></td>
                <td><?php echo h($event['Event']['jName']); ?></td>
                <td><?php echo h($event['Event']['begin']); ?></td>
                <td><?php echo h($event['Event']['finish']); ?></td>
                <td><?php echo h($event['Event']['type']); ?></td>
                <td><?php echo h($event['Event']['pic']); ?></td>
                <td class="actions">
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $event['Event']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $event['Event']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $event['Event']['id']))); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<script type="text/javascript">
    $(document).ready( function () {
        $('#table').DataTable({
            "responsive":     true,
            "order":          [[ 3, 'desc' ]],
            "dom": '<"top"iflp<"clear">>rt<"bottom"iflp<"clear">>'
        });
    } );
</script>