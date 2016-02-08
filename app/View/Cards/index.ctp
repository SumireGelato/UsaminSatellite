<!-- page title -->
<?php
$this->set('title_for_layout', 'Usamin S@telite | Cards Gallery');

if (!$this->request->is('ajax'))
{
?>
    <!--Search and filter bar-->
    <div class="row">
        <div class="col-lg-12">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#hide" aria-controls="hide" role="tab" data-toggle="tab">Hide</a></li>
                <li role="presentation"><a href="#filter" aria-controls="filter" role="tab" data-toggle="tab">Filter</a></li>
                <li role="presentation"><a href="#sort" aria-controls="sort" role="tab" data-toggle="tab">Sort</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="hide"></div>
                <!--Filter Bar-->
                <div role="tabpanel" class="tab-pane" id="filter">
                    <?php
                    echo $this->Form->create('Card', array(
                        'inputDefaults' => array(
                            'div' => 'form-group',
                            'label' => false,
                            'wrapInput' => false,
                            'class' => 'form-control'
                        ),
                        'class' => 'container well well-sm form-inline',
                        'novalidate' => true
                    ));
                    echo '<span class="glyphicon glyphicon-search"></span>';
                    echo '<p style="font-weight: bold; display: inline">  Filter</p>';
//                  Type
                    $options = array(
                        1 => array('name' => 'Cute', 'value' => 'Cute'),
                        2 => array('name' => 'Cool', 'value' => 'Cool'),
                        3 => array('name' => 'Passion', 'value' => 'Passion'));

                    echo $this->Form->input('type', array(
//                        'type' => 'select',
//                        'label' => 'Type',
//                        'id' => 'typeDropDown',
                        'options' => $options,
                        'empty' => 'All Types'
                    ));
//                  Rarity
                    $options = array(
                        1 => array('name' => 'SS Rare', 'value' => 'SSR'),
                        2 => array('name' => 'S Rare', 'value' => 'SR'),
                        3 => array('name' => 'Rare', 'value' => 'R'),
                        4 => array('name' => 'Normal', 'value' => 'N'));

                    echo $this->Form->input('rarity', array(
//                        'type' => 'select',
//                        'label' => 'Type',
//                        'id' => 'rarityDropDown',
                        'options' => $options,
                        'empty' => 'All Rarities'
                    ));
//                  Skill
                    $options = array(
                        1 => array('name' => 'Perfect Lock (All Variants)', 'value' => 'Perfect Lock'),
                        2 => array('name' => 'Combo Lock', 'value' => 'Combo Lock'),
                        3 => array('name' => 'Healer', 'value' => 'Healer'),
                        4 => array('name' => 'Damage Guard', 'value' => 'Damage Guard'),
                        5 => array('name' => 'Combo Bonus', 'value' => 'Combo Bonus'),
                        6 => array('name' => 'Score Bonus', 'value' => 'Score Boost'),
                        7 => array('name' => 'No Skill', 'value' => 'No Skill'));

                    echo $this->Form->input('skill', array(
//                        'type' => 'select',
//                        'label' => 'Type',
//                        'id' => 'skillDropDown',
                        'options' => $options,
                        'empty' => 'All Skills'
                    ));
//                  Source
                    $options = array(
                        1 => array('name' => 'Event Reward', 'value' => 'Event'),
                        2 => array('name' => 'Gacha', 'value' => 'Gacha'));

                    echo $this->Form->input('source', array(
//                        'type' => 'select',
//                        'label' => 'Type',
//                        'id' => 'sourceDropDown',
                        'options' => $options,
                        'empty' => 'All Sources'
                    ));

                    echo '<button type="button" id="filterSort" class="btn btn-default" data-toggle="button"
                            aria-pressed="false" autocomplete="off">Show Sorting Options</button>';
                    echo $this->Form->submit('Go', array(
                        'div' => 'form-group',
                        'class' => 'btn btn-default',
                    ));
//                    Filter Sort Bar
                    echo '<div id="filterSortForm" style="margin-top: 5px">';
                    echo '<span class="glyphicon glyphicon-sort"></span>';
                    echo '<p style="font-weight: bold; display: inline">  Sort</p>';
                    echo $this->Form->input('sort', array(
                        'options' => array(
                            'cardNumber' => 'Release Date', 'rarity' => 'Rarity',
                            'type' => 'Type', 'idol_id' => 'Idol'),
                        'selected' => 'Release Date'
                    ));
                    echo $this->Form->input('order', array(
                        'class' => false,
                        'label' => 'Reverse order',
                        'type' => 'checkbox',
                        'checked' => true
                    ));
                    echo $this->Form->input('statSort', array(
                        'options' => array(
                            'baseVocal' => 'Vocal - Base Lvl 1', 'baseMaxVocal' => 'Vocal - Base Max Lvl',
                            'awkBaseVocal' => 'Vocal - Awakened Lvl 1', 'awkMaxVocal' => 'Vocal - Awakened Max Lvl',
                            'baseDance' => 'Dance - Base Lvl 1', 'baseMaxDance' => 'Dance - Base Max Lvl',
                            'awkBaseDance' => 'Dance - Awakened Lvl 1', 'awkMaxDance' => 'Dance - Awakened Max Lvl',
                            'baseVisual' => 'Visual - Base Lvl 1', 'baseMaxVisual' => 'Visual - Base Max Lvl',
                            'awkBaseVisual' => 'Visual - Awakened Lvl 1', 'awkMaxVisual' => 'Visual - Awakened Max Lvl',
                            'baseTotal' => 'Total - Base Lvl 1', 'baseMaxTotal' => 'Total - Base Max Lvl',
                            'awkBaseTotal' => 'Total - Awakened Lvl 1', 'awkMaxTotal' => 'Total - Awakened Max Lvl'),
                        'empty' => 'Card Statistics Sorting (Optional)'
                    ));
                    echo $this->Form->input('statOrder', array(
                        'class' => false,
//                        'hiddenField' => false,
                        'label' => 'Reverse order',
                        'type' => 'checkbox'
                    ));
                    echo $this->Form->end();
                    echo '</div>';
                    ?>
                </div>

<!--                Sort Bar-->
                <div role="tabpanel" class="tab-pane" id="sort">
                    <?php
                    echo $this->Form->create('Card', array(
                        'inputDefaults' => array(
                            'div' => 'form-group',
                            'label' => false,
                            'wrapInput' => false,
                            'class' => 'form-control'
                        ),
                        'class' => 'container well well-sm form-inline',
                        'novalidate' => true
                    ));
                    echo '<span class="glyphicon glyphicon-sort"></span>';
                    echo '<p style="font-weight: bold; display: inline">  Sort Cards</p>';
                    echo $this->Form->input('sort', array(
                        'options' => array(
                            'cardNumber' => 'Release Date', 'rarity' => 'Rarity',
                            'type' => 'Type', 'idol_id' => 'Idol'),
                        'selected' => 'Release Date'
                    ));
                    echo $this->Form->input('order', array(
                        'class' => false,
                        'label' => 'Reverse order',
                        'type' => 'checkbox',
                        'checked' => true
                    ));
                    echo $this->Form->input('statSort', array(
                        'options' => array(
                            'baseVocal' => 'Vocal - Base Lvl 1', 'baseMaxVocal' => 'Vocal - Base Max Lvl',
                            'awkBaseVocal' => 'Vocal - Awakened Lvl 1', 'awkMaxVocal' => 'Vocal - Awakened Max Lvl',
                            'baseDance' => 'Dance - Base Lvl 1', 'baseMaxDance' => 'Dance - Base Max Lvl',
                            'awkBaseDance' => 'Dance - Awakened Lvl 1', 'awkMaxDance' => 'Dance - Awakened Max Lvl',
                            'baseVisual' => 'Visual - Base Lvl 1', 'baseMaxVisual' => 'Visual - Base Max Lvl',
                            'awkBaseVisual' => 'Visual - Awakened Lvl 1', 'awkMaxVisual' => 'Visual - Awakened Max Lvl',
                            'baseTotal' => 'Total - Base Lvl 1', 'baseMaxTotal' => 'Total - Base Max Lvl',
                            'awkBaseTotal' => 'Total - Awakened Lvl 1', 'awkMaxTotal' => 'Total - Awakened Max Lvl'),
                        'empty' => 'Card Statistics Sorting (Optional)'
                    ));
                    echo $this->Form->input('statOrder', array(
                        'class' => false,
//                        'hiddenField' => false,
                        'label' => 'Reverse order',
                        'type' => 'checkbox'
                    ));
                    echo $this->Form->submit('Sort', array(
                        'div' => 'form-group',
                        'class' => 'btn btn-default'
                    ));
                    echo $this->Form->end();
                    ?>
                </div>
            </div>
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
<!--<div class="row">
    <div class="col-xs-6" style="margin-top: 10px;">
    <h4 style="font-weight: bold">Idol: </h4>
        <p><?php /*echo $this->Html->link($card['Idol']['eName'], //CHANGE THIS LATER
                array('controller' => 'idols',
                    'action' => 'index'
                )
            );*/
?></p>
    </div>
    <div class="col-xs-6">
        <?php /*echo $this->Html->image('profiles/'.$card['Idol']['pic1'],
            array('alt' => 'Profile Picture',
                'height' => '100%',
                'width'=>'100%',
                'style' => 'margin-top: -35px;'))*/
?>
    </div>
</div>
<hr>-->
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
                        <label class="btn btn-cute active" id="lvlBtn1">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Level 1
                        </label>
                        <label class="btn btn-cute" id="lvlBtn2">
                            <?php switch ($card['Card']['rarity']) {
                                case "N":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 20 (Max)
                                    <?php break;
                                case "R":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 40 (Max)
                                    <?php break;
                                case "SR":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 60 (Max)
                                    <?php break;
                                case "SSR":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 80 (Max)
                                    <?php break;
                            } ?>
                        </label>
                        <?php break;
                    case "Cool":
                        ?>
                        <label class="btn btn-cool active" id="lvlBtn1">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Level 1
                        </label>
                        <label class="btn btn-cool" id="lvlBtn2">
                            <?php switch ($card['Card']['rarity']) {
                                case "N":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 20 (Max)
                                    <?php break;
                                case "R":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 40 (Max)
                                    <?php break;
                                case "SR":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 60 (Max)
                                    <?php break;
                                case "SSR":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 80 (Max)
                                    <?php break;
                            } ?>
                        </label>
                        <?php break;
                    case "Passion":
                        ?>
                        <label class="btn btn-passion active" id="lvlBtn1">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Level 1
                        </label>
                        <label class="btn btn-passion" id="lvlBtn2">
                            <?php switch ($card['Card']['rarity']) {
                                case "N":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 20 (Max)
                                    <?php break;
                                case "R":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 40 (Max)
                                    <?php break;
                                case "SR":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 60 (Max)
                                    <?php break;
                                case "SSR":
                                    ?>
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
    <div class="row" id="level1">
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em; color: lawngreen" class="glyphicon glyphicon-heart"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">' . $card['Card']['baseLife'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-danger" style="margin-left: 5px">Vo.</span>
            <?php echo '<p>' . $card['Card']['baseVocal'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-primary" style="margin-left: 5px">Da.</span>
            <?php echo '<p>' . $card['Card']['baseDance'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-warning" style="margin-left: 5px">Vi.</span>
            <?php echo '<p>' . $card['Card']['baseVisual'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em" class="glyphicon glyphicon-stats"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">'
                . ($card['Card']['baseTotal']) .
                '</p>'; ?>
        </div>
    </div>
    <div class="row" id="levelMax">
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em; color: lawngreen" class="glyphicon glyphicon-heart"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">' . $card['Card']['baseMaxLife'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-danger" style="margin-left: 5px">Vo.</span>
            <?php echo '<p>' . $card['Card']['baseMaxVocal'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-primary" style="margin-left: 5px">Da.</span>
            <?php echo '<p>' . $card['Card']['baseMaxDance'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-warning" style="margin-left: 5px">Vi.</span>
            <?php echo '<p>' . $card['Card']['baseMaxVisual'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em" class="glyphicon glyphicon-stats"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">'
                . ($card['Card']['baseMaxTotal']) .
                '</p>'; ?>
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
                        <label class="btn btn-cute active" id="awkLvlBtn1">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Level 1
                        </label>
                        <label class="btn btn-cute" id="awkLvlBtn2">
                            <?php switch ($card['Card']['rarity']) {
                                case "N":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 30 (Max)
                                    <?php break;
                                case "R":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 50 (Max)
                                    <?php break;
                                case "SR":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 70 (Max)
                                    <?php break;
                                case "SSR":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 90 (Max)
                                    <?php break;
                            } ?>
                        </label>
                        <?php break;
                    case "Cool":
                        ?>
                        <label class="btn btn-cool active" id="awkLvlBtn1">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Level 1
                        </label>
                        <label class="btn btn-cool" id="awkLvlBtn2">
                            <?php switch ($card['Card']['rarity']) {
                                case "N":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 30 (Max)
                                    <?php break;
                                case "R":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 50 (Max)
                                    <?php break;
                                case "SR":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 70 (Max)
                                    <?php break;
                                case "SSR":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 90 (Max)
                                    <?php break;
                            } ?>
                        </label>
                        <?php break;
                    case "Passion":
                        ?>
                        <label class="btn btn-passion active" id="awkLvlBtn1">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Level 1
                        </label>
                        <label class="btn btn-passion" id="awkLvlBtn2">
                            <?php switch ($card['Card']['rarity']) {
                                case "N":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 30 (Max)
                                    <?php break;
                                case "R":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 50 (Max)
                                    <?php break;
                                case "SR":
                                    ?>
                                    <input type="radio" name="options" id="option2" autocomplete="off">Level 70 (Max)
                                    <?php break;
                                case "SSR":
                                    ?>
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
    <div class="row" id="level1">
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em; color: lawngreen" class="glyphicon glyphicon-heart"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">' . $card['Card']['awkBaseLife'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-danger" style="margin-left: 5px">Vo.</span>
            <?php echo '<p>' . $card['Card']['awkBaseVocal'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-primary" style="margin-left: 5px">Da.</span>
            <?php echo '<p>' . $card['Card']['awkBaseDance'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-warning" style="margin-left: 5px">Vi.</span>
            <?php echo '<p>' . $card['Card']['awkBaseVisual'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em" class="glyphicon glyphicon-stats"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">'
                . ($card['Card']['awkBaseTotal']) .
                '</p>'; ?>
        </div>
    </div>
    <div class="row" id="levelMax">
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em; color: lawngreen" class="glyphicon glyphicon-heart"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">' . $card['Card']['awkMaxLife'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-danger" style="margin-left: 5px">Vo.</span>
            <?php echo '<p>' . $card['Card']['awkMaxVocal'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-primary" style="margin-left: 5px">Da.</span>
            <?php echo '<p>' . $card['Card']['awkMaxDance'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-warning" style="margin-left: 5px">Vi.</span>
            <?php echo '<p>' . $card['Card']['awkMaxVisual'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em" class="glyphicon glyphicon-stats"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">'
                . ($card['Card']['awkMaxTotal']) .
                '</p>'; ?>
        </div>
    </div>
</div>
<hr>
    <?php
    if($card['Card']['rarity'] != 'N'){
     ?>
<div class="row">
    <div class="col-xs-12">
        <h4 style="font-weight: bold">Center Skill:</h4>

        <p><?php echo $card['Card']['centerSkillText'] ?></p>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-xs-12">
        <h4 style="font-weight: bold">Special Skill: <?php echo $card['Card']['specialSkillType'] ?></h4>

        <p><?php echo $card['Card']['specialSkillText'] ?></p>
    </div>
</div>
<hr>
    <?php
    }
    ?>
<div class="row">
    <div class="col-xs-12">
        <h4 style="font-weight: bold">Source:</h4>
        <?php if ($card['Card']['event_id'] == null) { ?>
            <p>Gacha</p>
        <?php
        } else {
            echo $this->Html->link(
                $this->Html->image('events/' . $card['Event']['pic'], array('alt' => $card['Event']['eName'], 'width' => '75%',
                    'height' => '75%')),
                array('controller' => 'events',
                    'action' => 'view', $card['Card']['event_id']),
                array('escape' => false)
            );
        } ?>
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
}
?>
<script>
    //Filter show/hide sort
    $(document).ready(function() {
        $("#filterSort").click(function() {
            if (($("#filterSort").attr('aria-pressed')) == "false") {
                $("#filterSortForm").css("display", "Block");
                $("#filterSort").text("Hide Sort Options");
            }
            else {
                $("#filterSortForm").css("display", "None");
                $("#filterSort").text("Show Sort Options");
            }
        });
    });

    //Reg/Awk Image and Stat change
    $(document).ready(function () {
        $("[id=regawk1]").click(function () {//Regular
            $(this).closest(".panel.panel-default").find(".awkSRCardImage").css("display", "none");
            $(this).closest(".panel.panel-default").find(".baseSRCardImage").css("display", "inherit");
            $(this).closest("div.panel-body").find(".base").css("display", "inherit");
            $(this).closest("div.panel-body").find(".awakened").css("display", "none");
        });
        $("[id=regawk2]").click(function () {//Awakened
            $(this).closest(".panel.panel-default").find(".awkSRCardImage").css("display", "inherit");
            $(this).closest(".panel.panel-default").find(".baseSRCardImage").css("display", "none");
            $(this).closest("div.panel-body").find(".base").css("display", "none");
            $(this).closest("div.panel-body").find(".awakened").css("display", "inherit");
        });
    });

    //Min/Max Lvl Change
    $(document).ready(function () {
        $("[id=lvlBtn1]").click(function () {//Level 1
//                alert($(this).closest("div.base").find("#level1").attr("id"));
            $(this).closest("div.base").find("#level1").css("display", "inherit");
            $(this).closest("div.base").find("#levelMax").css("display", "none");
        });
        $("[id=lvlBtn2]").click(function () {//Level Max
//                alert($(this).closest("div.base").find("#levelMax").attr("id"));
            $(this).closest("div.base").find("#level1").css("display", "none");
            $(this).closest("div.base").find("#levelMax").css("display", "inherit");
        });
        $("[id=awkLvlBtn1]").click(function () {//Level 1
//                alert($(this).closest("div.base").find("#level1").attr("id"));
            $(this).closest("div.awakened").find("#level1").css("display", "inherit");
            $(this).closest("div.awakened").find("#levelMax").css("display", "none");
        });
        $("[id=awkLvlBtn2]").click(function () {//Level Max
//                alert($(this).closest("div.base").find("#levelMax").attr("id"));
            $(this).closest("div.awakened").find("#level1").css("display", "none");
            $(this).closest("div.awakened").find("#levelMax").css("display", "inherit");
        });
    });

    //Infinite Scrolling
    $(document).ready(function (e) {
        var processing;
        if(document.URL.split('?')[1] == undefined)
        {
            var url = $('.next a').attr('href');
        }
        else {
            var url = $('.next a').attr('href') + '?' + document.URL.split('?')[1];
        }
//        alert(url);
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
</script>