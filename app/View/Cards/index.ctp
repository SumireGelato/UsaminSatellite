<?php
if (!$this->request->is('ajax')) {//Page Title
    $this->set('title_for_layout', 'Usamin S@telite | Cards Gallery');
    ?>
    <!--Search and filter bar-->
    <div class="row">
        <div class="col-lg-12">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist" id="toolTabs">
                <li role="presentation" class="active"><a class="hideall" href="#hide" aria-controls="hide" role="tab" data-toggle="tab">Hide All</a>
                </li>
                <li role="presentation"><a href="#filter" aria-controls="filter" role="tab" data-toggle="tab">Filter</a></li>
                <li role="presentation"><a href="#sort" aria-controls="sort" role="tab" data-toggle="tab">Sort</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="hide"></div>
                <!--Filter Bar-->
                <div role="tabpanel" class="tab-pane fade" id="filter">
                    <?php
                    echo $this->Form->create('Card', array(
                        'inputDefaults' => array(
                            'div' => 'form-group',
                            'label' => false,
                            'wrapInput' => false,
                            'class' => 'form-control'
                        ),
                        'class' => 'container-fluid well well-sm form-inline',
                        'novalidate' => true
                    ));
                    echo '<span class="glyphicon glyphicon-search"></span>';
                    echo '<p style="display: inline">  Filter</p>';
                    //                  Type
                    $options = array(
                        1 => array('name' => 'Cute', 'value' => 'Cute'),
                        2 => array('name' => 'Cool', 'value' => 'Cool'),
                        3 => array('name' => 'Passion', 'value' => 'Passion'));

                    echo $this->Form->input('type', array(
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
                        'options' => $options,
                        'empty' => 'All Skills'
                    ));
                    //                  Source
                    echo $this->Form->input('source', array(
                        'options' => $sourceList,
                        'empty' => 'All Sources'
                    ));
                    //                  Limited
                    $options = array(
                        1 => array('name' => 'No Limited Cards', 'value' => '0'),
                        2 => array('name' => 'Limited Cards Only', 'value' => '1'));

                    echo $this->Form->input('limited', array(
                        'options' => $options,
                        'empty' => 'Limited and Standard Cards'
                    ));
                    echo '<button type="button" id="filterSort" class="btn btn-passion" data-toggle="button"
                            aria-pressed="false" autocomplete="off">Show Sorting Options</button>';
                    echo $this->Form->submit('Go', array(
                        'div' => 'form-group',
                        'class' => 'btn btn-passion',
                    ));
                    echo '<button type="button" id="resetForm" class="btn btn-passion" role="button">Reset Filters</button>';
                    //                    Filter Sort Bar
                    echo '<div id="filterSortForm" style="margin-top: 5px">';
                    echo '<span class="glyphicon glyphicon-sort"></span>';
                    echo '<p style="display: inline">  Sort</p>';
                    echo $this->Form->input('sort', array(
                        'options' => array(
                            'dateAdded' => 'Release Date', 'rarity' => 'Rarity',
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
                        'label' => 'Reverse order',
                        'type' => 'checkbox'
                    ));
                    echo $this->Form->end();
                    echo '</div>';
                    ?>
                </div>

                <!--                Sort Bar-->
                <div role="tabpanel" class="tab-pane fade" id="sort">
                    <?php
                    echo $this->Form->create('Card', array(
                        'inputDefaults' => array(
                            'div' => 'form-group',
                            'label' => false,
                            'wrapInput' => false,
                            'class' => 'form-control'
                        ),
                        'class' => 'container-fluid well well-sm form-inline',
                        'novalidate' => true
                    ));
                    echo '<span class="glyphicon glyphicon-sort"></span>';
                    echo '<p style="display: inline">  Sort Cards</p>';
                    echo $this->Form->input('sort', array(
                        'options' => array(
                            'dateAdded' => 'Release Date', 'rarity' => 'Rarity',
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
                        'label' => 'Reverse order',
                        'type' => 'checkbox'
                    ));
                    echo $this->Form->submit('Sort', array(
                        'div' => 'form-group',
                        'class' => 'btn btn-passion'
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
<div class="col-lg-4 col-xl-3">
<div class="panel panel-default">
<?php if ($card['Card']['type'] == 'Cool') { ?>
    <div class="panel-heading cool" role="tab"
    <?php echo 'id="heading' . $totalItems . '"';
    if ($card['Card']['rarity'] != 'N' || $card['Card']['rarity'] != 'R') echo 'style="padding: 0"';?>>
    <?php } elseif ($card['Card']['type'] == 'Cute') { ?>
    <div class="panel-heading cute" role="tab" <?php echo 'id="heading' . $totalItems . '"';
    if ($card['Card']['rarity'] != 'N' || $card['Card']['rarity'] != 'R') echo 'style="padding: 0"';?>>
    <?php } else { ?>
    <div class="panel-heading passion" role="tab" <?php echo 'id="heading' . $totalItems . '"';
    if ($card['Card']['rarity'] != 'N' || $card['Card']['rarity'] != 'R') echo 'style="padding: 0"';?>>
        <?php } ?>
        <div class="row">
            <div class="col-xs-12">
                <a id="cardArt" class="collapsed" role="button" data-toggle="collapse"
                   data-parent="#accordion"
                   href="<?php echo "#collapse" . $totalItems; ?>" aria-expanded="false"
                   aria-controls="<?php echo "collapse" . $totalItems; ?>"
                   style="text-decoration: none; color: black">
                    <?php
                    if ($card['Card']['rarity'] == 'N' || $card['Card']['rarity'] == 'R') {
                        echo $this->Html->image('cards/' . $card['Card']['baseArt'], array('height' => '51%', 'width' => '51%',
                            'class' => 'baseCardImage img-responsive img-rounded center-block'));
                        echo $this->Html->image('cards/' . $card['Card']['awkArt'], array('height' => '51%', 'width' => '51%',
                            'class' => 'awkCardImage img-responsive img-rounded center-block'));
                    } else {
                        echo $this->Html->image('cards/' . $card['Card']['baseArt'], array(/*'height' => '100%', 'width' => '97%',*/
                            'class' => 'baseCardImage img-responsive img-rounded center-block'));
                        echo $this->Html->image('cards/' . $card['Card']['awkArt'], array(/*'height' => '100%', 'width' => '97%',*/
                            'class' => 'awkCardImage img-responsive img-rounded center-block'));
                    }
                    ?>
                </a>
            </div>
        </div>
        <div class="row" style="padding-bottom: 5px">
            <div class="col-xs-12">
                <?php
                switch ($card['Card']['specialSkillType']) {
                    case 'Perfect Lock':
                        echo '<i class="icon-perfectlock pull-left" data-toggle="tooltip" title="Perfect Lock"></i>';
                        break;
                    case 'Combo Lock':
                        echo '<i class="icon-combolock pull-left" data-toggle="tooltip" title="Combo Lock"></i>';
                        break;
                    case 'Healer':
                        echo '<i class="icon-healer pull-left" data-toggle="tooltip" title="HP Recovery"></i>';
                        break;
                    case 'Damage Guard':
                        echo '<i class="icon-damageguard pull-left" data-toggle="tooltip" title="Damage Guard"></i>';
                        break;
                    case 'Combo Bonus':
                        echo '<i class="icon-combobonus pull-left" data-toggle="tooltip" title="Combo Bonus"></i>';
                        break;
                    case 'Score Boost':
                        echo '<i class="icon-scorebonus pull-left" data-toggle="tooltip" title="Score Boost"></i>';
                        break;
                    case 'No Skill':
                        echo '<span class="glyphicon glyphicon-ban-circle pull-left" data-toggle="tooltip" title="No Skill"></span>';
                        break;
                }
                if ($card['Card']['limited']) {
                    echo '<i class="icon-limited pull-right" data-toggle="tooltip" title="Limited Card"></i>';
                } else {
                    echo '<i class="icon-standard pull-right" data-toggle="tooltip" title="Standard Card"></i>';
                }
                //#ff0a55 cute text  #187ace cool text #b38608 passion text
                ?>
            </div>
        </div>
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
    if ($card['Card']['rarity'] != 'N') {
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
    <hr>
    <div class="row">
        <div class="col-xs-12">
            <h4 style="font-weight: bold">Sources:</h4>
            <?php if ($card['Card']['rarity'] == 'R' || $card['Card']['rarity'] == 'N') {
                echo '<p>' . $this->Html->link('Starlight Stage JP Wiki',
                        'http://imascg-slstage-wiki.gamerch.com/' . $card['Card']['jName'] . '【' . $card['Card']['rarity'] . '】',
                        array('target' => '_blank')) . '</p>';
                ?>
            <?php
            } else {
                echo '<p>' . $this->Html->link('Starlight Stage JP Wiki',
                        'http://imascg-slstage-wiki.gamerch.com/' . $card['Card']['jName'], array('target' => '_blank')) . '</p>';
            }?>
            <p><?php echo $this->Html->link('Starlight Kirara',
                    'https://starlight.kirara.ca/', array('target' => '_blank')); ?></p>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <?php
    $numItems++;
    $totalItems++;
}
?>
</div>
<?php
if ($this->Paginator->counter('{:pages}') > 1) {
    $this->Paginator->options(array(
        'url' => array(
            'pass' => $totalItems
        )
    ));
    echo $this->Paginator->next('Show More ...', array('class' => 'next text-center center-block btn btn-default'));
}
?>
<?php if (!$this->request->is('ajax')) { ?>
    </div>
    <script>
        //transistion effects for tabs
        $(document).ready(function () {
            $('#toolTabs').find('a').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            });
        });

        //hide all card panels that have been opened
        $(document).ready(function () {
            $('.hideall').click(function () {
                $('.panel-collapse.in').collapse('hide');
            });
        });

        //Filter show/hide sort
        $(document).ready(function () {
            $("#filterSort").click(function () {
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

        //Filter reset
        $(document).ready(function() {
            $("#resetForm").click(function () {
                //go though each filter and set it to default and submit
            });
        });

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });

        //Reg/Awk Image and Stat change
        $(document).ready(function () {
            $(".panel-group").on("click", "label#regawk1", function () {//Regular
//        alert('hi');
                $(this).closest(".panel.panel-default").find(".awkCardImage").css("display", "none");
                $(this).closest(".panel.panel-default").find(".baseCardImage").css("display", "inherit");
                $(this).closest("div.panel-body").find(".base").css("display", "inherit");
                $(this).closest("div.panel-body").find(".awakened").css("display", "none");
            });
            $(".panel-group").on("click", "label#regawk2", function () {//Awakened
//        alert('hi2');
                $(this).closest(".panel.panel-default").find(".awkCardImage").css("display", "inherit");
                $(this).closest(".panel.panel-default").find(".baseCardImage").css("display", "none");
                $(this).closest("div.panel-body").find(".base").css("display", "none");
                $(this).closest("div.panel-body").find(".awakened").css("display", "inherit");
            });
        });

        //Min/Max Lvl Change
        $(document).ready(function () {
            $(".panel-group").on("click", "label#lvlBtn1", function () {//Level 1
//                alert($(this).closest("div.base").find("#level1").attr("id"));
                $(this).closest("div.base").find("#level1").css("display", "inherit");
                $(this).closest("div.base").find("#levelMax").css("display", "none");
            });
            $(".panel-group").on("click", "label#lvlBtn2", function () {//Level Max
//                alert($(this).closest("div.base").find("#levelMax").attr("id"));
                $(this).closest("div.base").find("#level1").css("display", "none");
                $(this).closest("div.base").find("#levelMax").css("display", "inherit");
            });
            $(".panel-group").on("click", "label#awkLvlBtn1", function () {//Level 1
//                alert($(this).closest("div.base").find("#level1").attr("id"));
                $(this).closest("div.awakened").find("#level1").css("display", "inherit");
                $(this).closest("div.awakened").find("#levelMax").css("display", "none");
            });
            $(".panel-group").on("click", "label#awkLvlBtn2", function () {//Level Max
//                alert($(this).closest("div.base").find("#levelMax").attr("id"));
                $(this).closest("div.awakened").find("#level1").css("display", "none");
                $(this).closest("div.awakened").find("#levelMax").css("display", "inherit");
            });
        });

        //Infinite Scrolling + backup link for large screens
        $(document).ready(function (e) {
            var url;
            var ready = true;
            var scrollTrigger = 100;
            var container = $("#accordion");

            container.on("click", ".next", function() {
                if (document.URL.split('?')[1] == undefined) {
                    url = $('.next a').attr('href');
                }
                else {
                    url = $('.next a').attr('href') + '?' + document.URL.split('?')[1];
                }
                $(this).remove();
                if (url == undefined) {
                    return false;
                }
                $.get(url, function (data) {
                    $('#accordion').append(data);
                });
            });

            container.on("click", ".next a", function(e) {
                e.preventDefault();
                if (document.URL.split('?')[1] == undefined) {
                    url = $('.next a').attr('href');
                }
                else {
                    url = $('.next a').attr('href') + '?' + document.URL.split('?')[1];
                }
                $(this).remove();
                if (url == undefined) {
                    return false;
                }
                $.get(url, function (data) {
                    $('#accordion').append(data);
                });
            });

            $(window).scroll(function() {
                if(ready && $(window).scrollTop() > $(document).height() - $(window).height() - scrollTrigger) {
                    ready = false;
                    if (document.URL.split('?')[1] == undefined) {
                        url = $('.next a').attr('href');
                    }
                    else {
                        url = $('.next a').attr('href') + '?' + document.URL.split('?')[1];
                    }
                    $('.next').remove();
                    if (url == undefined) {
                        return false;
                    }
                    $.get(url, function (data) {
                        $('#accordion').append(data);
                    }).always(function() {
                        ready = true;
                    });
                }
            });
        });
    </script>
<?php } ?>