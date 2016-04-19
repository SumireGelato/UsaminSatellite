<?php $this->set('title_for_layout', 'Usamin S@tellite | ' . $idol['Idol']['eName']);
switch ($idol['Idol']['type']) {
    case 'Cute':
        echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back to Idols list', array('action' => 'index',
            '?' => 'type=cute'), array('class' => 'btn label-cute', 'role' => 'button', 'id' => 'backToIdols', 'escape' => false));
        ?>
        <!--Idol Title-->
        <div class="row text-center">
            <div class="col-lg-12">
                <h1 style="margin-bottom: 0"><?php echo $this->Html->image('cute.png', array('height' => '56', 'width' => '62',
                        'style' => 'padding-right:5px', 'class' => 'img-responsive center-block')) ?>
                    <?php echo $idol['Idol']['eName'] ?>
                </h1>
                <p style="margin-bottom: 5px"><em><?php echo $idol['Idol']['jName'] ?></em></p>
                <?php if ($idol['Idol']['cv'] == 'N/A') { ?>
                    <p>Unvoiced</p>
                <?php } else { ?>
                    <p style="font-size: 0.9em"><span class="label label-cute" style="font-size: 1em">CV:</span> <?php echo
                        $idol['Idol']['cv']
                        ?></p>
                <?php } ?>
            </div>
        </div>
        <!--Idol Bio-->
        <div class="row">
            <div class="col-lg-4">
                <?php
                list($width, $height) = getimagesize(WWW_ROOT.'img/profiles/' . $idol['Idol']['profilePic']);
                $dimensions = array('h' => $height, 'w' => $width );
                if($dimensions['w'] == 256) {
                    echo $this->Html->image('profiles/' . $idol['Idol']['profilePic'], array('class' => 'center-block img-responsive',
                        'height' => 512, 'style' => 'margin-top: -60px'));
                }
                elseif($dimensions['w'] == 512) {
                    echo $this->Html->image('profiles/' . $idol['Idol']['profilePic'], array('class' => 'center-block profilePic',
                        'height' => 512, 'style' => 'margin-top: -60px;'));
                }
                ?>
            </div>
            <div class="col-lg-6" id="idolBio">
                <div class="row">
                    <div class="col-lg-6">
                        <p><span class="label label-cute">Height:</span> <?php echo $idol['Idol']['height']; ?>cm</p>

                        <p><span class="label label-cute">Weight:</span> <?php echo $idol['Idol']['weight']; ?>kg</p>

                        <p><span class="label label-cute">Blood Type:</span> <?php echo $idol['Idol']['bloodType']; ?>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p><span class="label label-cute">Age:</span> <?php echo $idol['Idol']['age']; ?></p>

                        <p><span class="label label-cute">Birthday:</span> <?php echo $idol['Idol']['birthday']; ?></p>

                        <p><span
                                class="label label-cute">Writing Hand:</span> <?php echo $idol['Idol']['writingHand']; ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p><span
                                class="label label-cute">Three Sizes:</span> <?php echo 'B' . $idol['Idol']['b'] . ' / W' . $idol['Idol']['w'] . ' / H'
                                . $idol['Idol']['h']; ?></p>

                        <p><span class="label label-cute">Horoscope:</span> <?php echo $idol['Idol']['horoscope']; ?>
                        </p>

                        <p><span class="label label-cute">Hometown:</span> <?php echo $idol['Idol']['hometown']; ?></p>

                        <p><span class="label label-cute">Hobbies:</span> <?php echo $idol['Idol']['hobbies']; ?></p>

                        <p><span class="label label-cute" style="padding-top: 0.2em; padding-bottom: 0.1em">Bio:</span> <?php echo
                            $idol['Idol']['bio'];?></p>

                        <?php $nameSlug = Inflector::slug($idol['Idol']['eName']); ?>
                        <p><span class="label label-cute">Source:</span> <?php echo $this->Html->link('Project Im@s Wiki',
                                'http://www.project-imas.com/wiki/' . $nameSlug, array('target' => '_blank')); ?> -
                            <?php echo $this->Html->link('Starlight Stage JP Wiki',
                                'http://imascg-slstage-wiki.gamerch.com/' . $idol['Idol']['jName'], array('target' => '_blank')); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php break;
    case 'Cool':
        echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back to Idols list', array('action' => 'index',
            '?' => 'type=cool'), array('class' => 'btn label-info', 'role' => 'button', 'id' => 'backToIdols', 'escape' => false));
        ?>
        <!--Idol Title-->
        <div class="row text-center">
            <div class="col-lg-12">
                <h1 style="margin-bottom: 0"><?php echo $this->Html->image('cool.png', array('height' => '56', 'width' => '62',
                        'style' => 'padding-right:5px', 'class' => 'img-responsive center-block')) ?>
                    <?php echo $idol['Idol']['eName'] ?>
                </h1>
                <p style="margin-bottom: 5px"><em><?php echo $idol['Idol']['jName'] ?></em></p>
                <?php if ($idol['Idol']['cv'] == 'N/A') { ?>
                    <p>Unvoiced</p>
                <?php } else { ?>
                    <p style="font-size: 0.9em"><span class="label label-info" style="font-size: 1em">CV:</span> <?php echo
                        $idol['Idol']['cv']
                        ?></p>
                <?php } ?>
            </div>
        </div>
        <!--Idol Bio-->
        <div class="row">
            <div class="col-lg-4">
                <?php
                list($width, $height) = getimagesize(WWW_ROOT.'img/profiles/' . $idol['Idol']['profilePic']);
                $dimensions = array('h' => $height, 'w' => $width );
                if($dimensions['w'] == 256) {
                    echo $this->Html->image('profiles/' . $idol['Idol']['profilePic'], array('class' => 'center-block img-responsive',
                        'height' => 512, 'style' => 'margin-top: -60px'));
                }
                elseif($dimensions['w'] == 512) {
                    echo $this->Html->image('profiles/' . $idol['Idol']['profilePic'], array('class' => 'center-block profilePic',
                        'height' => 512, 'style' => 'margin-top: -60px;'));
                }
                ?>
            </div>
            <div class="col-lg-6" id="idolBio">
                <div class="row">
                    <div class="col-lg-6">
                        <p><span class="label label-info">Height:</span> <?php echo $idol['Idol']['height']; ?>cm</p>

                        <p><span class="label label-info">Weight:</span> <?php echo $idol['Idol']['weight']; ?>kg</p>

                        <p><span class="label label-info">Blood Type:</span> <?php echo $idol['Idol']['bloodType']; ?>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p><span class="label label-info">Age:</span> <?php echo $idol['Idol']['age']; ?></p>

                        <p><span class="label label-info">Birthday:</span> <?php echo $idol['Idol']['birthday']; ?></p>

                        <p><span
                                class="label label-info">Writing Hand:</span> <?php echo $idol['Idol']['writingHand']; ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p><span
                                class="label label-info">Three Sizes:</span> <?php echo 'B' . $idol['Idol']['b'] . ' / W' . $idol['Idol']['w'] . ' / H'
                                . $idol['Idol']['h']; ?></p>

                        <p><span class="label label-info">Horoscope:</span> <?php echo $idol['Idol']['horoscope']; ?>
                        </p>

                        <p><span class="label label-info">Hometown:</span> <?php echo $idol['Idol']['hometown']; ?></p>

                        <p><span class="label label-info">Hobbies:</span> <?php echo $idol['Idol']['hobbies']; ?></p>

                        <p><span class="label label-info"
                                 style="padding-top: 0.2em; padding-bottom: 0.1em">Bio:</span> <?php echo $idol['Idol']['bio']; ?></p>

                        <?php $nameSlug = Inflector::slug($idol['Idol']['eName']); ?>
                        <p><span class="label label-info">Source:</span> <?php echo $this->Html->link('Project Im@s Wiki',
                                'http://www.project-imas.com/wiki/' . $nameSlug, array('target' => '_blank')); ?> -
                            <?php echo $this->Html->link('Starlight Stage JP Wiki',
                                'http://imascg-slstage-wiki.gamerch.com/' . $idol['Idol']['jName'], array('target' => '_blank')); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php break;
    case 'Passion':
        echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back to Idols list', array('action' => 'index',
            '?' => 'type=passion'), array('class' => 'btn label-warning', 'role' => 'button', 'id' => 'backToIdols', 'escape' => false));
        ?>
        <!--Idol Title-->
        <div class="row text-center">
            <div class="col-lg-12">
                <h1 style="margin-bottom: 0"><?php echo $this->Html->image('passion.png', array('height' => '56', 'width' => '62',
                        'style' => 'padding-right:5px', 'class' => 'img-responsive center-block')) ?>
                    <?php echo $idol['Idol']['eName'] ?>
                </h1>
                <p style="margin-bottom: 5px"><em><?php echo $idol['Idol']['jName'] ?></em></p>
                <?php if ($idol['Idol']['cv'] == 'N/A') { ?>
                    <p>Unvoiced</p>
                <?php } else { ?>
                    <p style="font-size: 0.9em"><span class="label label-warning" style="font-size: 1em">CV:</span> <?php echo
                        $idol['Idol']['cv']
                        ?></p>
                <?php } ?>
            </div>
        </div>
        <!--Idol Bio-->
        <div class="row">
            <div class="col-lg-4">
                <?php
                list($width, $height) = getimagesize(WWW_ROOT.'img/profiles/' . $idol['Idol']['profilePic']);
                $dimensions = array('h' => $height, 'w' => $width );
                if($dimensions['w'] == 256) {
                    echo $this->Html->image('profiles/' . $idol['Idol']['profilePic'], array('class' => 'center-block img-responsive',
                        'height' => 512, 'style' => 'margin-top: -60px'));
                }
                elseif($dimensions['w'] == 512) {
                    echo $this->Html->image('profiles/' . $idol['Idol']['profilePic'], array('class' => 'center-block profilePic',
                        'height' => 512, 'style' => 'margin-top: -60px;'));
                }
                ?>
            </div>
            <div class="col-lg-6" id="idolBio">
                <div class="row">
                    <div class="col-lg-6">
                        <p><span class="label label-warning">Height:</span> <?php echo $idol['Idol']['height']; ?>cm</p>

                        <p><span class="label label-warning">Weight:</span> <?php echo $idol['Idol']['weight']; ?>kg</p>

                        <p><span class="label label-warning">Blood Type:</span> <?php echo $idol['Idol']['bloodType']; ?>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p><span class="label label-warning">Age:</span> <?php echo $idol['Idol']['age']; ?></p>

                        <p><span class="label label-warning">Birthday:</span> <?php echo $idol['Idol']['birthday']; ?></p>

                        <p><span
                                class="label label-warning">Writing Hand:</span> <?php echo $idol['Idol']['writingHand']; ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p><span
                                class="label label-warning">Three Sizes:</span> <?php echo 'B' . $idol['Idol']['b'] . ' / W' . $idol['Idol']['w'] . ' / H'
                                . $idol['Idol']['h']; ?></p>

                        <p><span class="label label-warning">Horoscope:</span> <?php echo $idol['Idol']['horoscope']; ?>
                        </p>

                        <p><span class="label label-warning">Hometown:</span> <?php echo $idol['Idol']['hometown']; ?></p>

                        <p><span class="label label-warning">Hobbies:</span> <?php echo $idol['Idol']['hobbies']; ?></p>

                        <p><span class="label label-warning"
                                 style="padding-top: 0.2em; padding-bottom: 0.1em">Bio:</span> <?php echo $idol['Idol']['bio']; ?></p>

                        <?php $nameSlug = Inflector::slug($idol['Idol']['eName']); ?>
                        <p><span class="label label-warning">Source:</span> <?php echo $this->Html->link('Project Im@s Wiki',
                                'http://www.project-imas.com/wiki/' . $nameSlug, array('target' => '_blank')); ?> -
                            <?php echo $this->Html->link('Starlight Stage JP Wiki',
                                'http://imascg-slstage-wiki.gamerch.com/' . $idol['Idol']['jName'], array('target' => '_blank')); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php break;
} ?>
<!--Cards Heading-->
<div class="row">
    <div class="col-lg-12">
        <h2 class="text-center" style="margin: 0">Cards of this Idol</h2>
        <p class="text-center">Click on a Card to reveal more information about the card!</p>
        <hr style="margin-top: 5px; margin-bottom: 5px"/>
    </div>
</div>
<!--Idol Cards-->
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<div class="row">
<?php
if(empty($idol['Card'])) {
    echo '<h4 class="text-center">No results! Try to broaden your filter(s)!</h4>';
}
$totalItems = 0;
$numItems = 0;
foreach ($idol['Card'] as $card) { ?>
<div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
<div class="panel panel-default">
<?php if ($card['type'] == 'Cool') { ?>
<div class="panel-heading cool" role="tab" <?php echo 'id="heading' . $totalItems . '"';
if ($card['rarity'] != 'N' || $card['rarity'] != 'R') echo 'style="padding: 0"';?>>
<?php } elseif ($card['type'] == 'Cute') { ?>
<div class="panel-heading cute" role="tab" <?php echo 'id="heading' . $totalItems . '"';
if ($card['rarity'] != 'N' || $card['rarity'] != 'R') echo 'style="padding: 0"';?>>
<?php } else { ?>
<div class="panel-heading passion" role="tab" <?php echo 'id="heading' . $totalItems . '"';
if ($card['rarity'] != 'N' || $card['rarity'] != 'R') echo 'style="padding: 0"';?>>
    <?php } ?>
    <div class="row">
        <div class="col-xs-12">
            <a id="cardArt" class="collapsed" role="button" data-toggle="collapse"
               data-parent="#accordion"
               href="<?php echo "#collapse" . $totalItems; ?>" aria-expanded="false"
               aria-controls="<?php echo "collapse" . $totalItems; ?>"
               style="text-decoration: none; color: black">
                <?php
                if ($card['rarity'] == 'N' || $card['rarity'] == 'R') {
                    echo $this->Html->image('cards/' . $card['baseArt'], array('height' => '51%', 'width' => '51%',
                        'class' => 'baseCardImage img-responsive img-rounded center-block'));
                    echo $this->Html->image('cards/' . $card['awkArt'], array('height' => '51%', 'width' => '51%',
                        'class' => 'awkCardImage img-responsive img-rounded center-block'));
                } else {
                    echo $this->Html->image('cards/' . $card['baseArt'], array(/*'height' => '100%', 'width' => '97%',*/
                        'class' => 'baseCardImage img-responsive img-rounded center-block'));
                    echo $this->Html->image('cards/' . $card['awkArt'], array(/*'height' => '100%', 'width' => '97%',*/
                        'class' => 'awkCardImage img-responsive img-rounded center-block'));
                }
                ?>
            </a>
        </div>
    </div>
    <div class="row text-center" style="padding-bottom: 5px">
        <div class="col-xs-12">
            <?php
            switch ($card['specialSkillType']) {
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
            echo '<strong>'.$card['rarity'].'</strong>';
            if ($card['limited']) {
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
        <h4 style="font-weight: bold"><?php echo $card['eName']; ?></h4>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-xs-12">
        <?php
        if ($card['rarity'] == 'N' || $card['rarity'] == 'R') {
            echo '<p style="font-style: italic">' . $card['jName'] . '</p>';
        } else {
            echo '<p style="padding-right: 12px; font-style: italic">' . $card['jName'] . '</p>';
        }
        ?>
    </div>
</div>
<hr>
<div class="row text-center center-block">
    <div class="col-xs-2">
        <?php echo $this->Html->image('cards/'.$card['baseIconArt'], array(
            'width' => '63px',
            'class' => 'baseIcon',
            'url' => array('controller' => 'idols',
                'action' => 'view',
                'id' => $idol['Idol']['id'],
                'title' => Inflector::slug($idol['Idol']['eName'])))); ?>
        <?php echo $this->Html->image('cards/'.$card['awkIconArt'], array(
            'width' => '63px',
            'class'=>'awkIcon',
            'url' => array('controller' => 'idols',
                'action' => 'view',
                'id' => $idol['Idol']['id'],
                'title' => Inflector::slug($idol['Idol']['eName'])))); ?>
    </div>
    <div class="col-xs-5">
        <p><span style="font-weight: bold">Rarity: </span><?php echo $card['rarity']; ?></p>
    </div>
    <div class="col-xs-5" id="cardType">
        <?php switch ($card['type']) {
            case "Cute":
                echo '<p><span style="font-weight: bold">Type: </span>' .
                    $this->Html->image('cute.png', array('height' => '26px', 'width' => '25px', 'style' => 'padding-bottom:5px')) . ' ' .
                    $card['type'] . '</p>';
                break;
            case "Cool":
                echo '<p><span style="font-weight: bold">Type: </span>' .
                    $this->Html->image('cool.png', array('height' => '26px', 'width' => '25px', 'style' => 'padding-bottom:5px')) . ' ' .
                    $card['type'] . '</p>';
                break;
            case "Passion":
                echo '<p><span style="font-weight: bold">Type: </span>' .
                    $this->Html->image('passion.png', array('height' => '26px', 'width' => '25px', 'style' => 'padding-bottom:5px')) . ' ' .
                    $card['type'] . '</p>';
                break;
        } ?>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-xs-12">
        <div class="btn-group" data-toggle="buttons">
            <?php switch ($card['type']) {
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
                <?php switch ($card['type']) {
                    case "Cute":
                        ?>
                        <label class="btn btn-cute active" id="lvlBtn1">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Level 1
                        </label>
                        <label class="btn btn-cute" id="lvlBtn2">
                            <?php switch ($card['rarity']) {
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
                            <?php switch ($card['rarity']) {
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
                            <?php switch ($card['rarity']) {
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
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">' . $card['baseLife'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-danger" style="margin-left: 5px">Vo.</span>
            <?php echo '<p>' . $card['baseVocal'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-primary" style="margin-left: 5px">Da.</span>
            <?php echo '<p>' . $card['baseDance'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-warning" style="margin-left: 5px">Vi.</span>
            <?php echo '<p>' . $card['baseVisual'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em" class="glyphicon glyphicon-stats"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">'
                . ($card['baseTotal']) .
                '</p>'; ?>
        </div>
    </div>
    <div class="row text-center center-block" id="levelMax">
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em; color: lawngreen" class="glyphicon glyphicon-heart"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">' . $card['baseMaxLife'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-danger" style="margin-left: 5px">Vo.</span>
            <?php echo '<p>' . $card['baseMaxVocal'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-primary" style="margin-left: 5px">Da.</span>
            <?php echo '<p>' . $card['baseMaxDance'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-warning" style="margin-left: 5px">Vi.</span>
            <?php echo '<p>' . $card['baseMaxVisual'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em" class="glyphicon glyphicon-stats"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">'
                . ($card['baseMaxTotal']) .
                '</p>'; ?>
        </div>
    </div>
</div>
<div class="awakened">
    <div class="row">
        <div class="col-xs-12">
            <div class="btn-group" data-toggle="buttons">
                <?php switch ($card['type']) {
                    case "Cute":
                        ?>
                        <label class="btn btn-cute active" id="awkLvlBtn1">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Level 1
                        </label>
                        <label class="btn btn-cute" id="awkLvlBtn2">
                            <?php switch ($card['rarity']) {
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
                            <?php switch ($card['rarity']) {
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
                            <?php switch ($card['rarity']) {
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
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">' . $card['awkBaseLife'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-danger" style="margin-left: 5px">Vo.</span>
            <?php echo '<p>' . $card['awkBaseVocal'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-primary" style="margin-left: 5px">Da.</span>
            <?php echo '<p>' . $card['awkBaseDance'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-warning" style="margin-left: 5px">Vi.</span>
            <?php echo '<p>' . $card['awkBaseVisual'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em" class="glyphicon glyphicon-stats"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">'
                . ($card['awkBaseTotal']) .
                '</p>'; ?>
        </div>
    </div>
    <div class="row text-center center-block" id="levelMax">
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em; color: lawngreen" class="glyphicon glyphicon-heart"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">' . $card['awkMaxLife'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-danger" style="margin-left: 5px">Vo.</span>
            <?php echo '<p>' . $card['awkMaxVocal'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-primary" style="margin-left: 5px">Da.</span>
            <?php echo '<p>' . $card['awkMaxDance'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-warning" style="margin-left: 5px">Vi.</span>
            <?php echo '<p>' . $card['awkMaxVisual'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em" class="glyphicon glyphicon-stats"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">'
                . ($card['awkMaxTotal']) .
                '</p>'; ?>
        </div>
    </div>
</div>
<hr>
<?php
if ($card['rarity'] != 'N') {
    ?>
    <div class="row">
        <div class="col-xs-12">
            <h4 style="font-weight: bold">Center Skill:</h4>

            <p><?php echo $card['centerSkillText'] ?></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-12">
            <h4 style="font-weight: bold">Special Skill: <?php echo $card['specialSkillType'] ?></h4>

            <p><?php echo $card['specialSkillText'] ?></p>
        </div>
    </div>
    <hr>
<?php
}
?>
<div class="row">
    <div class="col-xs-12">
        <h4 style="font-weight: bold">Source:</h4>
        <?php if ($card['event_id'] == null) {
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
<div class="row text-center">
    <div class="col-xs-12">
        <h4 style="font-weight: bold">Full Size Art Links</h4>
    </div>
    <div class="col-xs-6">
        <?php echo $this->Html->link('Base <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>',
            '/img/cards/'.$card['baseArt'], array('escape' => false, 'target' => '_blank')); ?>
    </div>
    <div class="col-xs-6">
        <?php echo $this->Html->link('Awakened <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>',
            '/img/cards/'.$card['awkArt'], array('escape' => false, 'target' => '_blank')); ?>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-xs-12">
        <h4 style="font-weight: bold">Sources:</h4>
        <?php if ($card['rarity'] == 'R' || $card['rarity'] == 'N') {
            echo '<p>' . $this->Html->link('Starlight Stage JP Wiki',
                    'http://imascg-slstage-wiki.gamerch.com/' . $card['jName'] . '【' . $card['rarity'] . '】',
                    array('target' => '_blank')) . '</p>';
            ?>
        <?php
        } else {
            echo '<p>' . $this->Html->link('Starlight Stage JP Wiki',
                    'http://imascg-slstage-wiki.gamerch.com/' . $card['jName'], array('target' => '_blank')) . '</p>';
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
</div>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    //Reg/Awk Image/Icon and Stat change
    $(document).ready(function () {
        var $panelgroup = $(".panel-group");
        $panelgroup.on("click", "label#regawk1", function () {//Regular
            $(this).closest(".panel.panel-default").find(".awkCardImage").css("display", "none");
            $(this).closest(".panel.panel-default").find(".baseCardImage").css("display", "inherit");
            $(this).closest("div.panel-body").find(".baseIcon").css("display", "inherit");
            $(this).closest("div.panel-body").find(".awkIcon").css("display", "none");
            $(this).closest("div.panel-body").find(".base").css("display", "inherit");
            $(this).closest("div.panel-body").find(".awakened").css("display", "none");
        });
        $panelgroup.on("click", "label#regawk2", function () {//Awakened
            $(this).closest(".panel.panel-default").find(".awkCardImage").css("display", "inherit");
            $(this).closest(".panel.panel-default").find(".baseCardImage").css("display", "none");
            $(this).closest("div.panel-body").find(".baseIcon").css("display", "none");
            $(this).closest("div.panel-body").find(".awkIcon").css("display", "inherit");
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

</script>