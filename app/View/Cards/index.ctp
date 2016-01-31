<!-- page title -->
<?php
$this->set('title_for_layout', 'Usamin S@telite | Cards Gallery');

if (!$this->request->is('ajax'))
{
?>
<!--Search and filter bar-->
<div class="row">
    <div class="col-lg-12">
        <nav class="navbar navbar-default search">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
</div>
<!--Cards Gallery-->
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <?php
    } // End Stuff you don't need if ajax request
    ?>
    <div class="row">
        <?php foreach ($cards as $card) { ?>
        <!--CARD-->
        <div class="col-lg-4">
            <div class="panel panel-default">
                <?php if ($card['Card']['type'] == 'Cool') { ?>
                <div class="panel-heading cool" role="tab" id="<?php echo "heading" . $totalItems; ?>">
                    <?php } elseif ($card['Card']['type'] == 'Cute') { ?>
                    <div class="panel-heading cute" role="tab" id="<?php echo "heading" . $totalItems; ?>">
                        <?php } else { ?>
                        <div class="panel-heading passion" role="tab" id="<?php echo "heading" . $totalItems; ?>">
                            <?php } ?>

                            <a id="cardArt" class="collapsed" role="button" data-toggle="collapse"
                               data-parent="#accordion"
                               href="<?php echo "#collapse" . $totalItems; ?>" aria-expanded="false"
                               aria-controls="<?php echo "collapse" . $totalItems; ?>"
                               style="text-decoration: none; color: black">
                                <?php
                                if ($card['Card']['rarity'] == 'N' || $card['Card']['rarity'] == 'R') {
                                    echo $this->Html->image('cards/' . $card['Card']['baseArt'], array('height' => '50%', 'width' => '50%',
                                        'class' => 'baseCardImage'));
                                    echo $this->Html->image('cards/' . $card['Card']['awkArt'], array('height' => '50%', 'width' => '50%',
                                        'class' => 'awkCardImage'));
                                } else {
                                    echo $this->Html->image('cards/' . $card['Card']['baseArt'], array('height' => '100%', 'width' => '97%',
                                        'class' => 'baseSRCardImage'));
                                    echo $this->Html->image('cards/' . $card['Card']['awkArt'], array('height' => '100%', 'width' => '97%',
                                        'class' => 'awkSRCardImage'));
                                }
                                ?>
                                <!--                            <h4>-->
                                <?php //echo $card['Card']['eName']; ?><!--</h4>-->
                            </a>
                        </div>
                        <div id="<?php echo "collapse" . $totalItems; ?>" class="panel-collapse collapse"
                             role="tabpanel"
                             aria-labelledby="<?php echo "heading" . $totalItems; ?>">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 style="font-weight: bold"><?php echo $card['Card']['eName']; ?></h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <?php
                                        if ($card['Card']['rarity'] == 'N' || $card['Card']['rarity'] == 'R') {
                                            echo '<p style="font-style: italic">' . $card['Card']['jName'] . '</p>';
                                        } else {
                                            echo '<p style="padding-right: 12px; font-style: italic">' . $card['Card']['jName'] . '</p>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <p><span
                                                style="font-weight: bold">Rarity: </span><?php echo $card['Card']['rarity']; ?>
                                        </p>
                                    </div>
                                    <div class="col-xs-6">
                                        <?php switch ($card['Card']['type']) {
                                            case "Cute":
                                                echo '<p><span style="font-weight: bold">Type: </span>' .
                                                    $this->Html->image('cute.png', array('height' => '10%', 'width' => '10%', 'style' => 'padding-bottom:5px')) . ' ' .
                                                    $card['Card']['type'] . '</p>';
                                                break;
                                            case "Cool":
                                                echo '<p><span style="font-weight: bold">Type: </span>' .
                                                    $this->Html->image('cool.png', array('height' => '10%', 'width' => '10%', 'style' => 'padding-bottom:5px')) . ' ' .
                                                    $card['Card']['type'] . '</p>';
                                                break;
                                            case "Passion":
                                                echo '<p><span style="font-weight: bold">Type: </span>' .
                                                    $this->Html->image('passion.png', array('height' => '10%', 'width' => '10%', 'style' => 'padding-bottom:5px')) . ' ' .
                                                    $card['Card']['type'] . '</p>';
                                                break;
                                        } ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="btn-group" data-toggle="buttons">
                                            <?php switch ($card['Card']['type']) {
                                                case "Cute":
                                                    ?>
                                                    <label class="btn btn-cute active" id="regawk1">
                                                        <input type="radio" name="regawk" autocomplete="off" checked>Regular
                                                    </label>
                                                    <label class="btn btn-cute" id="regawk2">
                                                        <input type="radio" name="regawk" autocomplete="off">Awakened
                                                    </label>
                                                    <?php break;
                                                case "Cool":
                                                    ?>
                                                    <label class="btn btn-cool active" id="regawk1">
                                                        <input type="radio" name="regawk" autocomplete="off" checked>Regular
                                                    </label>
                                                    <label class="btn btn-cool" id="regawk2">
                                                        <input type="radio" name="regawk" autocomplete="off">Awakened
                                                    </label>
                                                    <?php break;
                                                case "Passion":
                                                    ?>
                                                    <label class="btn btn-passion active" id="regawk1">
                                                        <input type="radio" name="regawk" autocomplete="off" checked>Regular
                                                    </label>
                                                    <label class="btn btn-passion" id="regawk2">
                                                        <input type="radio" name="regawk" autocomplete="off">Awakened
                                                    </label>
                                                    <?php break;
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="base">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="btn-group" data-toggle="buttons">
                                                <?php switch ($card['Card']['type']) {
                                                    case "Cute":
                                                        ?>
                                                        <label class="btn btn-cute active" id="lvl1">
                                                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Level 1
                                                        </label>
                                                        <label class="btn btn-cute" id="lvl2">
                                                            <?php switch ($card['Card']['rarity']) {
                                                                case "N": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 20 (Max)
                                                                    <?php break;
                                                                case "R": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 40 (Max)
                                                                    <?php break;
                                                                case "SR": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 60 (Max)
                                                                    <?php break;
                                                                case "SSR": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 80 (Max)
                                                                    <?php break;
                                                            } ?>
                                                        </label>
                                                        <?php break;
                                                    case "Cool":
                                                        ?>
                                                        <label class="btn btn-cool active" id="lvl1">
                                                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Level 1
                                                        </label>
                                                        <label class="btn btn-cool" id="lvl2">
                                                            <?php switch ($card['Card']['rarity']) {
                                                                case "N": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 20 (Max)
                                                                    <?php break;
                                                                case "R": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 40 (Max)
                                                                    <?php break;
                                                                case "SR": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 60 (Max)
                                                                    <?php break;
                                                                case "SSR": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 80 (Max)
                                                                    <?php break;
                                                            } ?>
                                                        </label>
                                                        <?php break;
                                                    case "Passion":
                                                        ?>
                                                        <label class="btn btn-passion active" id="lvl1">
                                                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Level 1
                                                        </label>
                                                        <label class="btn btn-passion" id="lvl2">
                                                            <?php switch ($card['Card']['rarity']) {
                                                                case "N": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 20 (Max)
                                                                    <?php break;
                                                                case "R": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 40 (Max)
                                                                    <?php break;
                                                                case "SR": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 60 (Max)
                                                                    <?php break;
                                                                case "SSR": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 80 (Max)
                                                                    <?php break;
                                                            } ?>
                                                        </label>
                                                        <?php break;
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-xs-12"><!--closest id base > find id base > css show/hide-->
                                            <table>
                                                <tr>
                                                    <td>Life 27</td>
                                                    <td>Vocal 2158</td>
                                                    <td>Dance 1578</td>
                                                    <td>Visual 1665</td>
                                                    <td>Total 5571</td>
                                                </tr>
                                            </table>
                                            <table>
                                                <tr>
                                                    <td>Life 27</td>
                                                    <td>Vocal 2158</td>
                                                    <td>Dance 1578</td>
                                                    <td>Visual 1665</td>
                                                    <td>Total 5571</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="awakened">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="btn-group" data-toggle="buttons">
                                                <?php switch ($card['Card']['type']) {
                                                    case "Cute":
                                                        ?>
                                                        <label class="btn btn-cute active">
                                                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Level 1
                                                        </label>
                                                        <label class="btn btn-cute">
                                                            <?php switch ($card['Card']['rarity']) {
                                                                case "N": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 30 (Max)
                                                                    <?php break;
                                                                case "R": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 50 (Max)
                                                                    <?php break;
                                                                case "SR": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 70 (Max)
                                                                    <?php break;
                                                                case "SSR": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 90 (Max)
                                                                    <?php break;
                                                            } ?>
                                                        </label>
                                                        <?php break;
                                                    case "Cool":
                                                        ?>
                                                        <label class="btn btn-cool active">
                                                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Level 1
                                                        </label>
                                                        <label class="btn btn-cool">
                                                            <?php switch ($card['Card']['rarity']) {
                                                                case "N": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 30 (Max)
                                                                    <?php break;
                                                                case "R": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 50 (Max)
                                                                    <?php break;
                                                                case "SR": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 70 (Max)
                                                                    <?php break;
                                                                case "SSR": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 90 (Max)
                                                                    <?php break;
                                                            } ?>
                                                        </label>
                                                        <?php break;
                                                    case "Passion":
                                                        ?>
                                                        <label class="btn btn-passion active">
                                                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Level 1
                                                        </label>
                                                        <label class="btn btn-passion">
                                                            <?php switch ($card['Card']['rarity']) {
                                                                case "N": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 30 (Max)
                                                                    <?php break;
                                                                case "R": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 50 (Max)
                                                                    <?php break;
                                                                case "SR": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 70 (Max)
                                                                    <?php break;
                                                                case "SSR": ?>
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 90 (Max)
                                                                    <?php break;
                                                            } ?>
                                                        </label>
                                                        <?php break;
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <table>
                                                <tr>
                                                    <td>Life 27</td>
                                                    <td>Vocal 2158</td>
                                                    <td>Dance 1578</td>
                                                    <td>Visual 1665</td>
                                                    <td>Total 5571</td>
                                                </tr>
                                            </table>
                                            <table>
                                                <tr>
                                                    <td>Life 27</td>
                                                    <td>Vocal 2158</td>
                                                    <td>Dance 1578</td>
                                                    <td>Visual 1665</td>
                                                    <td>Total 5571</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4>Center Skill</h4>

                                        <p>All Cute Appeal up 30%</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4>Special Skill: Perfect Lock</h4>

                                        <p>GREATs, NICEs and BADs become PERFECTs temporarily, high probability of
                                            triggering every 9 seconds for a very short time.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p><h4>Source:</h4>
                                        Gacha</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $numItems++;
                $totalItems++;
                if ($numItems == 3) {
                    echo '</div> <div class="row">';
                    $numItems = 0;
                }

                }
                ?>
            </div>
        </div>

        <?php
        if ($this->Paginator->counter('{:pages}') > 1) {
            $this->Paginator->options(array(
                'url' => array(
                    'pass' => $totalItems
                )
            ));
            echo $this->Paginator->next('Show More ...');
            ?>
            <script>
                $(document).ready(function (e) {
                    var processing;
                    var url = $('.next a').attr('href');
                    $('.next').text('');
                    if (url == undefined) {
                        return false;
                    }
                    $(document).scroll(function (e) {
                        if (processing) {
                            return false;
                        }
                        if (($(window).scrollTop() + $(window).height()) >= $(document).height()) {
                            processing = true;
                            $(this).remove();
                            $.get(url, function (data) {
                                $('#accordion').append(data);
                            });
                        }
                    });
                });

                $(document).ready(function () {
                    $("[id=regawk1]").click(function () {
                        $(this).closest(".panel.panel-default").find(".awkSRCardImage").css("display", "none");
                        $(this).closest(".panel.panel-default").find(".baseSRCardImage").css("display", "inherit");
                    });
                    $("[id=regawk2]").click(function () {
                        $(this).closest(".panel.panel-default").find(".awkSRCardImage").css("display", "inherit");
                        $(this).closest(".panel.panel-default").find(".baseSRCardImage").css("display", "none");
                    });
                });
            </script>
            <?php
        }
        ?>

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