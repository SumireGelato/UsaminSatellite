<div class="row">
    <div class="col-lg-12">
        <h2><?php echo __('Gacha'); ?></h2>
    </div>
</div>
<div class="row" style="margin-bottom: 10px">
    <div class="col-lg-6">
        <div class="btn btn-default">
            <?php echo $this->Html->link(__('Add Gacha'), array('action' => 'add')); ?>
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
                <th>card1</th>
                <th>card2</th>
                <th>card3</th>
                <th>card4</th>
                <th>pic</th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($gachas as $gacha): ?>
                <tr>
                    <td><?php echo h($gacha['Gacha']['eName']); ?></td>
                    <td><?php echo h($gacha['Gacha']['jName']); ?></td>
                    <td><?php echo h($gacha['Gacha']['dateStart']); ?></td>
                    <td><?php echo h($gacha['Gacha']['dateFinish']); ?></td>
                    <td><?php echo h($gacha['Gacha']['cardId1']); ?></td>
                    <td><?php echo h($gacha['Gacha']['cardId2']); ?></td>
                    <td><?php echo h($gacha['Gacha']['cardId3']); ?></td>
                    <td><?php echo h($gacha['Gacha']['cardId4']); ?></td>
                    <td><?php echo h($gacha['Gacha']['pic']); ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $gacha['Gacha']['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $gacha['Gacha']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $gacha['Gacha']['id']))); ?>
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