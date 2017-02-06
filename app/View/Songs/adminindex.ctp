<div class="row">
    <div class="col-lg-12">
        <h2><?php echo __('Songs'); ?></h2>
    </div>
</div>
<div class="row" style="margin-bottom: 10px">
    <div class="col-lg-6">
        <?php echo $this->Html->link(__('Add Song'), array('action' => 'add'), array('class' => 'btn btn-default')); ?>
    </div>
    <div class="col-lg-6">
        <?php echo $this->Html->link(__('Back to Control Panel'), array('controller' => 'users',
            'action' => 'controlpanel'), array('class' => 'btn btn-default')); ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <table cellpadding="0" id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>eName</th>
                <th>jName</th>
                <th>translated</th>
                <th>artist</th>
                <th>type</th>
                <th>unlock</th>
                <th>availability</th>
                <th>dateAdded</th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($songs as $song): ?>
                <tr>
                    <td><?php echo h($song['Song']['eName']); ?></td>
                    <td><?php echo h($song['Song']['jName']); ?></td>
                    <td><?php echo h($song['Song']['translated']); ?></td>
                    <td><?php echo h($song['Song']['artist']) ?></td>
                    <td><?php echo h($song['Song']['type']); ?></td>
                    <td><?php echo h($song['Song']['unlockCon']); ?></td>
                    <td><?php echo h($song['Song']['availability']); ?></td>
                    <td><?php echo h($song['Song']['dateAdded']); ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $song['Song']['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $song['Song']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $song['Song']['id']))); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <script type="text/javascript">
            $(document).ready( function () {
                $('#table').DataTable({
                    "responsive":     true,
                    "order":          [[ 7, 'desc' ]],
                    "dom": '<"top"iflp<"clear">>rt<"bottom"iflp<"clear">>'
                });
            } );
        </script>