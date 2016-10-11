<?php
if (!$this->request->is('ajax')) {//Page Title
    $this->set('title_for_layout', 'Usamin S@tellite | Cards Gallery');
    ?>
    <!--Search and filter bar-->
    <div class="row text-center">
        <div class="col-lg-12">
            <p style="text-decoration: underline">Card Filters and Sorting Tools:</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center center-block" id="filterSortButtons">
                <!-- Filter/Sort Buttons -->
                <button class="btn btn-default hideall" type="button">
                    Hide All Card Details
                </button>
                <button class="btn btn-default filter" type="button" data-toggle="collapse" data-target="#filter"
                        aria-expanded="false" aria-controls="filter">
                    Filter
                </button>
                <button class="btn btn-default sort" type="button" data-toggle="collapse" data-target="#sort"
                   aria-expanded="false" aria-controls="sort">
                    Sort
                </button>
            </div>

            <!-- Collapse panes -->
            <!--Filter Bar-->
            <div class="collapse" id="filter">
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
                    7 => array('name' => 'Overload', 'value' => 'Overload'),
                    8 => array('name' => 'No Skill', 'value' => 'No Skill'));

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

            <!--Sort Bar-->
            <div class="collapse" id="sort">
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
    <div class="row text-center"><p>Click on a Card to reveal more information about the card!</p></div>
        <!--Cards Gallery-->
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <?php
    } // End Stuff you don't need if ajax request
    ?>
<div class="row">
    <?php
if(empty($cards)) {
    echo '<h4 class="text-center">No results! Try to broaden your filter(s)!</h4>';
}
foreach ($cards as $card) { ?>
    <!--CARD-->
<div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
<div class="panel panel-default" style="margin-bottom: 10px">
<?php if ($card['Card']['type'] == 'Cool') { ?>
    <div class="panel-heading cool" role="tab" <?php echo 'id="heading' . $totalItems . '"';
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
                            'class' => 'cardImage img-responsive img-rounded center-block', 'data-baseImage' => $card['Card']['baseArt'],
                            'data-awkImage' => $card['Card']['awkArt']));
                    } else {
                        echo $this->Html->image('cards/' . $card['Card']['baseArt'], array(/*'height' => '100%', 'width' => '97%',*/
                            'class' => 'cardImage img-responsive img-rounded center-block', 'data-baseImage' => $card['Card']['baseArt'],
                            'data-awkImage' => $card['Card']['awkArt']));
                    }
                    ?>
                </a>
            </div>
        </div>
        <div class="row text-center" style="padding-bottom: 5px">
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
                    case 'Overload':
                        echo '<span class="glyphicon glyphicon-flash pull-left" data-toggle="tooltip" title="Overload"></span>';
                        break;
                    case 'No Skill':
                        echo '<span class="glyphicon glyphicon-ban-circle pull-left" data-toggle="tooltip" title="No Skill"></span>';
                        break;
                }
                echo '<strong>'.$card['Card']['rarity'].'</strong>';
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
    <div class="panel-body text-center">
    <div class="row">
        <div class="col-xs-12">
            <h4 style="font-weight: bold"><?php echo $this->Html->link($card['Card']['eName'],
                    array('controller' => 'cards',
                        'action' => 'view',
                        $card['Card']['card_id']),
                    array('class' => 'noLinkStyle', 'escape' => false));?></h4>
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
    <div class="row text-center center-block">
        <div class="col-xs-6">
            <p><span style="font-weight: bold">Rarity: </span><?php echo $card['Card']['rarity']; ?></p>
        </div>
        <div class="col-xs-6" id="cardType">
            <?php switch ($card['Card']['type']) {
                case "Cute":
                    echo '<p><span style="font-weight: bold">Type: </span>' .
                        $this->Html->image('cute.png', array('height' => '26px', 'width' => '25px', 'style' => 'padding-bottom:5px')) . ' ' .
                        $card['Card']['type'] . '</p>';
                    break;
                case "Cool":
                    echo '<p><span style="font-weight: bold">Type: </span>' .
                        $this->Html->image('cool.png', array('height' => '26px', 'width' => '25px', 'style' => 'padding-bottom:5px')) . ' ' .
                        $card['Card']['type'] . '</p>';
                    break;
                case "Passion":
                    echo '<p><span style="font-weight: bold">Type: </span>' .
                        $this->Html->image('passion.png', array('height' => '26px', 'width' => '25px', 'style' => 'padding-bottom:5px')) . ' ' .
                        $card['Card']['type'] . '</p>';
                    break;
            } ?>
        </div>
    </div>
    <hr/>
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
        <div class="row text-center center-block" id="level1">
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
        <div class="row text-center center-block" id="levelMax">
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
        <div class="row text-center center-block" id="level1">
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
        <div class="row text-center center-block" id="levelMax">
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
            <?php if ($card['Card']['event_id'] == null) {
                echo '<p>Gacha</p>';
            } else {
                echo $this->Html->link(
                    $this->Html->image('events/' . $card['Event']['pic'], array('alt' => $card['Event']['eName'], 'width' => '75%',
                        'height' => '75%')),
                    array('controller' => 'events',
                        'action' => 'index'),
                    array('escape' => false)
                );
            } ?>
        </div>
    </div>
    <hr/>
    <div class="row center-block text-center">
        <h4 style="font-weight: bold">Icon & Puchi Art:</h4>
        <div class="col-xs-6">
            <?php echo $this->Html->image('cards/'.$card['Card']['baseIconArt'], array(
//                'width' => '63px',
                'class' => 'icon',
                'data-baseicon' => $card['Card']['baseIconArt'],
                'data-awkicon' => $card['Card']['awkIconArt'],
                'url' => array('controller' => 'idols',
                    'action' => 'view',
                    Inflector::slug($card['Idol']['eName'])))); ?>
        </div>
        <div class="col-xs-6">
            <?php echo $this->Html->image('puchis/petit_'.$card['Card']['card_id'].'.dds.png', array(
                'width' => '88px',
                'class' => 'puchi',
                'data-basepuchi' => 'petit_'.$card['Card']['card_id'].'.dds.png',
                'data-awkpuchi' => 'petit_'.($card['Card']['card_id']+1).'.dds.png',
                'url' => array('controller' => 'idols',
                    'action' => 'view',
                    Inflector::slug($card['Idol']['eName'])))); ?>
        </div>
    </div>
    <hr/>
    <div class="row text-center">
        <div class="col-xs-12">
            <h4 style="font-weight: bold">Full Size Art Links</h4>
        </div>
        <div class="col-xs-6">
            <?php echo $this->Html->link('Base <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>',
                '/img/cards/'.$card['Card']['baseArt'], array('escape' => false, 'target' => '_blank')); ?>
        </div>
        <div class="col-xs-6">
            <?php echo $this->Html->link('Awakened <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>',
                '/img/cards/'.$card['Card']['awkArt'], array('escape' => false, 'target' => '_blank')); ?>
        </div>
    </div>
    <hr/>
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
                    'https://starlight.kirara.ca/card/'.$card['Card']['card_id'], array('target' => '_blank')); ?></p>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="row">
            <h4 style="font-weight: bold">Release Date</h4>
            <p><?php echo $card['Card']['dateAdded'];?></p>
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
            //hide all card panels that have been opened
            $(document).ready(function () {
                $('.hideall').click(function () {
                    $('.panel-collapse.in').collapse('hide');
                });
            });

            //Hide sort bar when filter bar is clicked
            $(document).ready(function () {
                $('.filter').click(function () {
                    $(this).button('toggle');
                    $('#sort').collapse('hide');
                    $('#filter').collapse('show');
                });
            });

            //Hide filter bar when sort bar is clicked
            $(document).ready(function () {
                $('.sort').click(function () {
                    $(this).button('toggle');
                    $('#filter').collapse('hide');
                    $('#sort').collapse('show');
                });
            });

            //Filter show/hide sort
            $(document).ready(function () {
                var $filterSort = $("#filterSort");
                $filterSort.click(function () {
                    if (($filterSort.attr('aria-pressed')) == "false") {
                        $("#filterSortForm").css("display", "Block");
                        $filterSort.text("Hide Sort Options");
                    }
                    else {
                        $("#filterSortForm").css("display", "None");
                        $filterSort.text("Show Sort Options");
                    }
                });
            });

            //Filter reset
            $(document).ready(function () {
                $("#resetForm").click(function () {
                    window.location.href = ((window.location.href).split('?'))[0];
                });
            });

            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });

            //Reg/Awk Image/Icon and Stat change
            $(document).ready(function () {
                var $panelgroup = $(".panel-group");
                var host = [location.protocol, '//', location.host].join('');
                $panelgroup.on("click", "label#regawk1", function () {//Regular
                    var baseImg = $(this).closest(".panel.panel-default").find(".cardImage").data('baseimage');
                    if(location.host == 'localhost' || location.host == 'localhost:8080') {
                        $(this).closest(".panel.panel-default").find(".cardImage").attr("src", host + "/Satelite/img/cards/" + baseImg);
                    } else {
                        $(this).closest(".panel.panel-default").find(".cardImage").attr("src", host + "/img/cards/" + baseImg);
                    }
                    var baseIcon = $(this).closest(".panel.panel-default").find(".icon").data('baseicon');
                    if(location.host == 'localhost' || location.host == 'localhost:8080') {
                        $(this).closest(".panel.panel-default").find(".icon").attr("src", host + "/Satelite/img/cards/" + baseIcon);
                    } else {
                        $(this).closest(".panel.panel-default").find(".icon").attr("src", host + "/img/cards/" + baseIcon);
                    }
                    var basePuchi = $(this).closest(".panel.panel-default").find(".puchi").data('basepuchi');
                    if(location.host == 'localhost' || location.host == 'localhost:8080') {
                        $(this).closest(".panel.panel-default").find(".puchi").attr("src", host + "/Satelite/img/puchis/" + basePuchi);
                    } else {
                        $(this).closest(".panel.panel-default").find(".puchi").attr("src", host + "/img/puchis/" + basePuchi);
                    }
                    $(this).closest("div.panel-body").find(".base").css("display", "inherit");
                    $(this).closest("div.panel-body").find(".awakened").css("display", "none");
                });
                $panelgroup.on("click", "label#regawk2", function () {//Awakened
                    var awkImg = $(this).closest(".panel.panel-default").find(".cardImage").data('awkimage');
                    if(location.host == 'localhost' || location.host == 'localhost:8080') {
                        $(this).closest(".panel.panel-default").find(".cardImage").attr("src", host + "/Satelite/img/cards/" + awkImg);
                    } else {
                        $(this).closest(".panel.panel-default").find(".cardImage").attr("src", host + "/img/cards/" + awkImg);
                    }
                    var awkIcon = $(this).closest(".panel.panel-default").find(".icon").data('awkicon');
                    if(location.host == 'localhost' || location.host == 'localhost:8080') {
                        $(this).closest(".panel.panel-default").find(".icon").attr("src", host + "/Satelite/img/cards/" + awkIcon);
                    } else {
                        $(this).closest(".panel.panel-default").find(".icon").attr("src", host + "/img/cards/" + awkIcon);
                    }
                    var awkPuchi = $(this).closest(".panel.panel-default").find(".puchi").data('awkpuchi');
                    if(location.host == 'localhost' || location.host == 'localhost:8080') {
                        $(this).closest(".panel.panel-default").find(".puchi").attr("src", host + "/Satelite/img/puchis/" + awkPuchi);
                    } else {
                        $(this).closest(".panel.panel-default").find(".puchi").attr("src", host + "/img/puchis/" + awkPuchi);
                    }
                    $(this).closest("div.panel-body").find(".base").css("display", "none");
                    $(this).closest("div.panel-body").find(".awakened").css("display", "inherit");
                });
            });

            //Min/Max Lvl Change
            $(document).ready(function () {
                var $panelgroup = $(".panel-group");
                $panelgroup.on("click", "label#lvlBtn1", function () {//Level 1
                    $(this).closest("div.base").find("#level1").css("display", "inherit");
                    $(this).closest("div.base").find("#levelMax").css("display", "none");
                });
                $panelgroup.on("click", "label#lvlBtn2", function () {//Level Max
                    $(this).closest("div.base").find("#level1").css("display", "none");
                    $(this).closest("div.base").find("#levelMax").css("display", "inherit");
                });
                $panelgroup.on("click", "label#awkLvlBtn1", function () {//Level 1
                    $(this).closest("div.awakened").find("#level1").css("display", "inherit");
                    $(this).closest("div.awakened").find("#levelMax").css("display", "none");
                });
                $panelgroup.on("click", "label#awkLvlBtn2", function () {//Level Max
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

                container.on("click", ".next", function () {
                    if (document.URL.split('?')[1] == undefined) {
                        url = $('.next a').attr('href');
                    }
                    else {
                        url = $('.next a').attr('href') + '?' + document.URL.split('?')[1];
                    }
                    $(this).remove();
                    if ((url.split('?')[0]) === "undefined") {
                        return false;
                    }
                    $.get(url, function (data) {
                        $('#accordion').append(data);
                    });
                });

                container.on("click", ".next a", function (e) {
                    e.preventDefault();
                    if (document.URL.split('?')[1] == undefined) {
                        url = $('.next a').attr('href');
                    }
                    else {
                        url = $('.next a').attr('href') + '?' + document.URL.split('?')[1];
                    }
                    $(this).remove();
                    if ((url.split('?')[0]) === "undefined") {
                        return false;
                    }
                    $.get(url, function (data) {
                        $('#accordion').append(data);
                    });
                });

                $(window).scroll(function () {
                    if (ready && $(window).scrollTop() > $(document).height() - $(window).height() - scrollTrigger) {
                        ready = false;
                        if (document.URL.split('?')[1] == undefined) {
                            url = $('.next a').attr('href');
                        }
                        else {
                            url = $('.next a').attr('href') + '?' + document.URL.split('?')[1];
                        }
                        $('.next').remove();
                        if ((url.split('?')[0]) === "undefined") {
                            return false;
                        } else {
                            $.get(url, function (data) {
                                $('#accordion').append(data);
                            }).always(function () {
                                ready = true;
                            });
                        }
                    }
                });
            });
        </script>
    <?php
    }
?>