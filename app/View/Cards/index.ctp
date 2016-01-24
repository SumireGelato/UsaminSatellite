<!-- page title -->
<?php
$this->set('title_for_layout', 'Usamin S@telite | Cards Gallery');
?>
<!--Search and filter bar-->
<div class="row">
    <div class="col-lg-12">
        <nav class="navbar navbar-default search">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h4>Search</h4>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Go</button>
                    </form>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</div>

<!--Cards Gallery-->
<?php for($i=0;$i<=count($cards);$i+=3) { ?>
<div class="row">
    <div class="col-lg-4"> <!-- PUT BOOTSTRAP PANELS WITH BS JS COLLAPSE HERE TOMORROW
        <?php echo $this->Html->image('cards/'.$cards[$i]['Card']['baseArt'], array('alt' => 'Puchi2', 'height' => '50%', 'width' => '20%')); ?>
        <?php echo $this->Html->image('cards/'.$cards[$i]['Card']['awkArt'], array('alt' => 'Puchi2', 'height' => '50%', 'width' => '20%')); ?>
    </div>
    <div class="col-lg-4">
        <?php echo $this->Html->image('cards/'.$cards[$i+1]['Card']['baseArt'], array('alt' => 'Puchi2', 'height' => '50%', 'width' => '50%')); ?>
        <?php echo $this->Html->image('cards/'.$cards[$i+1]['Card']['awkArt'], array('alt' => 'Puchi2', 'height' => '50%', 'width' => '50%')); ?>
    </div>
    <div class="col-lg-4">
        <?php echo $this->Html->image('cards/'.$cards[$i+2]['Card']['baseArt'], array('alt' => 'Puchi2', 'height' => '50%', 'width' => '50%')); ?>
        <?php echo $this->Html->image('cards/'.$cards[$i+2]['Card']['awkArt'], array('alt' => 'Puchi2', 'height' => '50%', 'width' => '50%')); ?>
    </div>
<?php } ?>
</div>

<!--Rofl don't need ANY of the original code! Only Here as a reference-->
<!--<div class="cards index">
	<h2><?php /*echo __('Cards'); */ ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php /*echo $this->Paginator->sort('id'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('idol_id'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('event_id'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('cardNumber'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('eName'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('jName'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('rarity'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('type'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('maxLvl'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('awkMaxLvl'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('baseLife'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('baseVocal'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('baseDance'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('baseVisual'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('baseMaxLife'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('baseMaxVocal'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('baseMaxDance'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('baseMaxVisual'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('awkBaseLife'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('awkBaseVocal'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('awkBaseDance'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('awkBaseVisual'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('awkMaxLife'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('awkMaxVocal'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('awkMaxDance'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('awkMaxVisual'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('centerSkillText'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('specialSkillType'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('specialSkillText'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('baseArt'); */ ?></th>
			<th><?php /*echo $this->Paginator->sort('awkArt'); */ ?></th>
			<th class="actions"><?php /*echo __('Actions'); */ ?></th>
	</tr>
	</thead>
	<tbody>
	<?php /*foreach ($cards as $card): */ ?>
	<tr>
		<td><?php /*echo h($card['Card']['id']); */ ?>&nbsp;</td>
		<td>
			<?php /*echo $this->Html->link($card['Idol']['id'], array('controller' => 'idols', 'action' => 'view', $card['Idol']['id'])); */ ?>
		</td>
		<td>
			<?php /*echo $this->Html->link($card['Event']['id'], array('controller' => 'events', 'action' => 'view', $card['Event']['id'])); */ ?>
		</td>
		<td><?php /*echo h($card['Card']['cardNumber']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['eName']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['jName']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['rarity']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['type']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['maxLvl']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['awkMaxLvl']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['baseLife']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['baseVocal']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['baseDance']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['baseVisual']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['baseMaxLife']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['baseMaxVocal']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['baseMaxDance']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['baseMaxVisual']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['awkBaseLife']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['awkBaseVocal']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['awkBaseDance']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['awkBaseVisual']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['awkMaxLife']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['awkMaxVocal']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['awkMaxDance']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['awkMaxVisual']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['centerSkillText']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['specialSkillType']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['specialSkillText']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['baseArt']); */ ?>&nbsp;</td>
		<td><?php /*echo h($card['Card']['awkArt']); */ ?>&nbsp;</td>
		<td class="actions">
			<?php /*echo $this->Html->link(__('View'), array('action' => 'view', $card['Card']['id'])); */ ?>
			<?php /*echo $this->Html->link(__('Edit'), array('action' => 'edit', $card['Card']['id'])); */ ?>
			<?php /*echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $card['Card']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $card['Card']['id']))); */ ?>
		</td>
	</tr>
<?php /*endforeach; */ ?>
	</tbody>
	</table>
	<p>
	<?php
/*	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	*/ ?>	</p>
	<div class="paging">
	<?php
/*		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	*/ ?>
	</div>
</div>
<div class="actions">
	<h3><?php /*echo __('Actions'); */ ?></h3>
	<ul>
		<li><?php /*echo $this->Html->link(__('New Card'), array('action' => 'add')); */ ?></li>
		<li><?php /*echo $this->Html->link(__('List Idols'), array('controller' => 'idols', 'action' => 'index')); */ ?> </li>
		<li><?php /*echo $this->Html->link(__('New Idol'), array('controller' => 'idols', 'action' => 'add')); */ ?> </li>
		<li><?php /*echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); */ ?> </li>
		<li><?php /*echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); */ ?> </li>
	</ul>
</div>
-->