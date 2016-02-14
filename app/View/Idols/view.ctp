<?php $this->set('title_for_layout', 'Usamin S@telite | ' . $idol['Idol']['eName']);
switch ($idol['Idol']['type']) {
    case 'Cute':
        ?>
        <!--Idol Title-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center"><?php echo $this->Html->image('cute.png', array('height' => '5%', 'width' => '5%', 'style' => 'padding-right:5px')) ?>
                    <strong><?php echo $idol['Idol']['eName'] ?></strong>
                    <em style="font-size: 0.7em"><?php echo $idol['Idol']['jName'] ?></em>
                </h1>

                <p class="text-center">CV: <?php echo $idol['Idol']['cv'] ?></p>
            </div>
        </div>
        <!--Idol Bio-->
        <div class="row">
            <div class="col-lg-4">
                <?php echo $this->Html->image('profiles/' . $idol['Idol']['profilePic'], array('class' => 'img-responsive img-rounded center-block', 'height' => 512)); ?>
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
                        <p><span class="label label-cute">Three Sizes:</span> <?php echo $idol['Idol']['bwh']; ?></p>

                        <p><span class="label label-cute">Horoscope:</span> <?php echo $idol['Idol']['horoscope']; ?>
                        </p>

                        <p><span class="label label-cute">Hometown:</span> <?php echo $idol['Idol']['hometown']; ?></p>

                        <p><span class="label label-cute">Hobbies:</span> <?php echo $idol['Idol']['hobbies']; ?></p>

                        <p><span class="label label-cute">Bio:</span> <?php echo $idol['Idol']['bio'];?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php break;
    case 'Cool': ?>
        <!--Idol Title-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center"><?php echo $this->Html->image('cool.png', array('height' => '5%', 'width' => '5%', 'style' => 'padding-right:5px')) ?>
                    <strong><?php echo $idol['Idol']['eName'] ?></strong>
                    <em style="font-size: 0.7em"><?php echo $idol['Idol']['jName'] ?></em>
                </h1>

                <p class="text-center">CV: <?php echo $idol['Idol']['cv'] ?></p>
            </div>
        </div>
        <!--Idol Bio-->
        <div class="row">
            <div class="col-lg-4">
                <?php echo $this->Html->image('profiles/' . $idol['Idol']['profilePic'], array('class' => 'img-responsive img-rounded center-block', 'height' => 512)); ?>
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
                        <p><span class="label label-info">Three Sizes:</span> <?php echo $idol['Idol']['bwh']; ?></p>

                        <p><span class="label label-info">Horoscope:</span> <?php echo $idol['Idol']['horoscope']; ?>
                        </p>

                        <p><span class="label label-info">Hometown:</span> <?php echo $idol['Idol']['hometown']; ?></p>

                        <p><span class="label label-info">Hobbies:</span> <?php echo $idol['Idol']['hobbies']; ?></p>

                        <p><span class="label label-info">Bio:</span> <?php echo $idol['Idol']['bio'];?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php break;
    case 'Passion': ?>
        <!--Idol Title-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center"><?php echo $this->Html->image('passion.png', array('height' => '5%', 'width' => '5%', 'style' => 'padding-right:5px')) ?>
                    <strong><?php echo $idol['Idol']['eName'] ?></strong>
                    <em style="font-size: 0.7em"><?php echo $idol['Idol']['jName'] ?></em>
                </h1>

                <p class="text-center">CV: <?php echo $idol['Idol']['cv'] ?></p>
            </div>
        </div>
        <!--Idol Bio-->
        <div class="row">
            <div class="col-lg-4">
                <?php echo $this->Html->image('profiles/' . $idol['Idol']['profilePic'], array('class' => 'img-responsive img-rounded center-block', 'height' => 512)); ?>
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
                        <p><span class="label label-warning">Three Sizes:</span> <?php echo $idol['Idol']['bwh']; ?></p>

                        <p><span class="label label-warning">Horoscope:</span> <?php echo $idol['Idol']['horoscope']; ?>
                        </p>

                        <p><span class="label label-warning">Hometown:</span> <?php echo $idol['Idol']['hometown']; ?></p>

                        <p><span class="label label-warning">Hobbies:</span> <?php echo $idol['Idol']['hobbies']; ?></p>

                        <p><span class="label label-warning">Bio:</span> <?php echo $idol['Idol']['bio'];?></p>
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
        <hr style="margin-top: 5px; margin-bottom: 5px"/>
    </div>
</div>
<!--Idol Cards-->
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="row">
        <?php
        $totalItems = 1;
        foreach ($idol['Card'] as $card) {
        ?>
        <!--CARD-->
        <div class="col-lg-4">
            <div class="panel panel-default">
                <?php if ($card['type'] == 'Cool') { ?>
                <div class="panel-heading cool" role="tab" id="<?php echo "heading" . $totalItems; ?>">
                    <?php } elseif ($card['type'] == 'Cute') { ?>
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
                                if ($card['rarity'] == 'N' || $card['rarity'] == 'R') {
                                    echo $this->Html->image('cards/' . $card['baseArt'], array('height' => '50%', 'width' => '50%',
                                        'class' => 'baseCardImage'));
                                    echo $this->Html->image('cards/' . $card['awkArt'], array('height' => '50%', 'width' => '50%',
                                        'class' => 'awkCardImage'));
                                } else {
                                    echo $this->Html->image('cards/' . $card['baseArt'], array('height' => '100%', 'width' => '97%',
                                        'class' => 'baseSRCardImage'));
                                    echo $this->Html->image('cards/' . $card['awkArt'], array('height' => '100%', 'width' => '97%',
                                        'class' => 'awkSRCardImage'));
                                }
                                ?>
                                <!--                            <h4>-->
                                <?php //echo $card['eName']; ?><!--</h4>-->
                            </a>
                        </div>
                        <div id="<?php echo "collapse" . $totalItems; ?>" class="panel-collapse collapse"
                             role="tabpanel"
                             aria-labelledby="<?php echo "heading" . $totalItems; ?>">
                            <div class="panel-body">
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
                                <div class="row">
                                    <div class="col-xs-6">
                                        <p><span
                                                style="font-weight: bold">Rarity: </span><?php echo $card['rarity']; ?>
                                        </p>
                                    </div>
                                    <div class="col-xs-6">
                                        <?php switch ($card['type']) {
                                            case "Cute":
                                                echo '<p><span style="font-weight: bold">Type: </span>' .
                                                    $this->Html->image('cute.png', array('height' => '10%', 'width' => '10%', 'style' => 'padding-bottom:5px')) . ' ' .
                                                    $card['type'] . '</p>';
                                                break;
                                            case "Cool":
                                                echo '<p><span style="font-weight: bold">Type: </span>' .
                                                    $this->Html->image('cool.png', array('height' => '10%', 'width' => '10%', 'style' => 'padding-bottom:5px')) . ' ' .
                                                    $card['type'] . '</p>';
                                                break;
                                            case "Passion":
                                                echo '<p><span style="font-weight: bold">Type: </span>' .
                                                    $this->Html->image('passion.png', array('height' => '10%', 'width' => '10%', 'style' => 'padding-bottom:5px')) . ' ' .
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
                                                            <input type="radio" name="options" id="option1"
                                                                   autocomplete="off" checked>Level 1
                                                        </label>
                                                        <label class="btn btn-cute" id="lvlBtn2">
                                                            <?php switch ($card['rarity']) {
                                                                case "N":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 20 (Max)
                                                                    <?php break;
                                                                case "R":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 40 (Max)
                                                                    <?php break;
                                                                case "SR":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 60 (Max)
                                                                    <?php break;
                                                                case "SSR":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 80 (Max)
                                                                    <?php break;
                                                            } ?>
                                                        </label>
                                                        <?php break;
                                                    case "Cool":
                                                        ?>
                                                        <label class="btn btn-cool active" id="lvlBtn1">
                                                            <input type="radio" name="options" id="option1"
                                                                   autocomplete="off" checked>Level 1
                                                        </label>
                                                        <label class="btn btn-cool" id="lvlBtn2">
                                                            <?php switch ($card['rarity']) {
                                                                case "N":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 20 (Max)
                                                                    <?php break;
                                                                case "R":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 40 (Max)
                                                                    <?php break;
                                                                case "SR":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 60 (Max)
                                                                    <?php break;
                                                                case "SSR":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 80 (Max)
                                                                    <?php break;
                                                            } ?>
                                                        </label>
                                                        <?php break;
                                                    case "Passion":
                                                        ?>
                                                        <label class="btn btn-passion active" id="lvlBtn1">
                                                            <input type="radio" name="options" id="option1"
                                                                   autocomplete="off" checked>Level 1
                                                        </label>
                                                        <label class="btn btn-passion" id="lvlBtn2">
                                                            <?php switch ($card['rarity']) {
                                                                case "N":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 20 (Max)
                                                                    <?php break;
                                                                case "R":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 40 (Max)
                                                                    <?php break;
                                                                case "SR":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 60 (Max)
                                                                    <?php break;
                                                                case "SSR":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 80 (Max)
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
                                            <span style="font-size: 1.3em; color: lawngreen"
                                                  class="glyphicon glyphicon-heart"></span>
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
                                    <div class="row" id="levelMax">
                                        <div class="col-xs-5ths">
                                            <span style="font-size: 1.3em; color: lawngreen"
                                                  class="glyphicon glyphicon-heart"></span>
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
                                                            <input type="radio" name="options" id="option1"
                                                                   autocomplete="off" checked>Level 1
                                                        </label>
                                                        <label class="btn btn-cute" id="awkLvlBtn2">
                                                            <?php switch ($card['rarity']) {
                                                                case "N":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 30 (Max)
                                                                    <?php break;
                                                                case "R":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 50 (Max)
                                                                    <?php break;
                                                                case "SR":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 70 (Max)
                                                                    <?php break;
                                                                case "SSR":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 90 (Max)
                                                                    <?php break;
                                                            } ?>
                                                        </label>
                                                        <?php break;
                                                    case "Cool":
                                                        ?>
                                                        <label class="btn btn-cool active" id="awkLvlBtn1">
                                                            <input type="radio" name="options" id="option1"
                                                                   autocomplete="off" checked>Level 1
                                                        </label>
                                                        <label class="btn btn-cool" id="awkLvlBtn2">
                                                            <?php switch ($card['rarity']) {
                                                                case "N":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 30 (Max)
                                                                    <?php break;
                                                                case "R":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 50 (Max)
                                                                    <?php break;
                                                                case "SR":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 70 (Max)
                                                                    <?php break;
                                                                case "SSR":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 90 (Max)
                                                                    <?php break;
                                                            } ?>
                                                        </label>
                                                        <?php break;
                                                    case "Passion":
                                                        ?>
                                                        <label class="btn btn-passion active" id="awkLvlBtn1">
                                                            <input type="radio" name="options" id="option1"
                                                                   autocomplete="off" checked>Level 1
                                                        </label>
                                                        <label class="btn btn-passion" id="awkLvlBtn2">
                                                            <?php switch ($card['rarity']) {
                                                                case "N":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 30 (Max)
                                                                    <?php break;
                                                                case "R":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 50 (Max)
                                                                    <?php break;
                                                                case "SR":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 70 (Max)
                                                                    <?php break;
                                                                case "SSR":
                                                                    ?>
                                                                    <input type="radio" name="options" id="option2"
                                                                           autocomplete="off">Level 90 (Max)
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
                                            <span style="font-size: 1.3em; color: lawngreen"
                                                  class="glyphicon glyphicon-heart"></span>
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
                                    <div class="row" id="levelMax">
                                        <div class="col-xs-5ths">
                                            <span style="font-size: 1.3em; color: lawngreen"
                                                  class="glyphicon glyphicon-heart"></span>
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
                                            <h4 style="font-weight: bold">Special
                                                Skill: <?php echo $card['specialSkillType'] ?></h4>

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
                                        <?php if ($card['event_id'] == null) { ?>
                                            <p>Gacha</p>
                                            <?php
                                        } else {
                                            echo $this->Html->link(
                                                $this->Html->image('events/' . $card['Event']['pic'], array('alt' => $card['Event']['eName'], 'width' => '75%',
                                                    'height' => '75%')),
                                                array('controller' => 'events',
                                                    'action' => 'view', $card['event_id']),
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
                $totalItems++;
                }
                ?>
            </div>
        </div>
        <script>
            //Reg/Awk Image and Stat change
            $(document).ready(function () {
                $(".panel-group").on("click", "label#regawk1", function () {//Regular
//        alert('hi');
                    $(this).closest(".panel.panel-default").find(".awkSRCardImage").css("display", "none");
                    $(this).closest(".panel.panel-default").find(".baseSRCardImage").css("display", "inherit");
                    $(this).closest("div.panel-body").find(".base").css("display", "inherit");
                    $(this).closest("div.panel-body").find(".awakened").css("display", "none");
                });
                $(".panel-group").on("click", "label#regawk2", function () {//Awakened
//        alert('hi2');
                    $(this).closest(".panel.panel-default").find(".awkSRCardImage").css("display", "inherit");
                    $(this).closest(".panel.panel-default").find(".baseSRCardImage").css("display", "none");
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

        </script>