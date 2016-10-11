<?php $this->set('title_for_layout', 'Usamin S@tellite | ' . $card['Card']['eName']); ?>
<div class="singleCard">
<div class="row">
<div class="col-lg-5" style="padding-right: 0px">
    <div class="row text-center center-block">
        <div class="col-lg-12">
            <?php echo $this->Html->image('cards/' . $card['Card']['baseArt'], array(
                'class' => 'cardBackground img-responsive img-rounded center-block',
                'data-baseImage' => $card['Card']['baseArt'],
                'data-awkImage' => $card['Card']['awkArt'])); ?>
        </div>
        <div class="row text-center center-block">
            <div class="col-xs-6">
                <?php echo $this->Html->image('cards/' . $card['Card']['baseIconArt'], array(
                    'class' => 'icon img-responsive img-rounded center-block',
                    'style' => 'padding-top: 1.5em',
                    'data-baseicon' => $card['Card']['baseIconArt'],
                    'data-awkicon' => $card['Card']['awkIconArt'],
                )); ?>
            </div>
            <div class="col-xs-6">
                <?php echo $this->Html->image('puchis/petit_' . $card['Card']['card_id'] . '.dds.png', array(
                    'class' => 'puchi img-responsive img-rounded center-block',
                    'data-basepuchi' => 'petit_' . $card['Card']['card_id'] . '.dds.png',
                    'data-awkpuchi' => 'petit_' . ($card['Card']['card_id'] + 1) . '.dds.png')); ?>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-7" style="padding-left: 0px">
<div class="row text-center" style="padding-bottom: 20px">
    <div class="col-lg-12">
        <h1><?php echo $card['Card']['eName']; ?></h1>
    </div>
    <div class="col-lg-12">
        <h3><?php echo $card['Card']['jName']; ?></h3>
    </div>
</div>

<div class="row text-center">
    <div class="col-xs-4">
        <p><span style="font-weight: bold">Rarity: </span><?php echo $card['Card']['rarity']; ?></p>
    </div>
    <div class="col-xs-4" id="cardType">
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
    <div class="col-xs-4">
        <span style="font-weight: bold">Idol: </span>
        <?php echo $this->Html->link($card['Idol']['eName'] . '&nbsp;<span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>',
            array('controller' => 'idols',
                'action' => 'view',
                Inflector::slug($card['Idol']['eName'])),
            array('escape' => false, 'target' => '_blank')); ?>
    </div>
</div>

<div class="row center-block text-center buttons" style="padding-bottom: 20px;">
<div class="col-xs-6">
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
<div class="col-xs-6">
    <div class="base">
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
    <div class="awakened">
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
</div>
<div class="baseStats">
    <div class="row text-center center-block" id="level1">
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em; color: lawngreen" class="glyphicon glyphicon-heart" data-toggle="tooltip" title="Life"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">' . $card['Card']['baseLife'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-danger" style="margin-left: 5px" data-toggle="tooltip" title="Vocal">Vo.</span>
            <?php echo '<p>' . $card['Card']['baseVocal'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-primary" style="margin-left: 5px" data-toggle="tooltip" title="Dance">Da.</span>
            <?php echo '<p>' . $card['Card']['baseDance'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-warning" style="margin-left: 5px" data-toggle="tooltip" title="Visual">Vi.</span>
            <?php echo '<p>' . $card['Card']['baseVisual'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em" class="glyphicon glyphicon-stats" data-toggle="tooltip" title="Total"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">'
                . ($card['Card']['baseTotal']) .
                '</p>'; ?>
        </div>
    </div>
    <div class="row text-center center-block" id="levelMax">
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em; color: lawngreen" class="glyphicon glyphicon-heart" data-toggle="tooltip" title="Life"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">' . $card['Card']['baseMaxLife'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-danger" style="margin-left: 5px" data-toggle="tooltip" title="Vocal">Vo.</span>
            <?php echo '<p>' . $card['Card']['baseMaxVocal'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-primary" style="margin-left: 5px" data-toggle="tooltip" title="Dance">Da.</span>
            <?php echo '<p>' . $card['Card']['baseMaxDance'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-warning" style="margin-left: 5px" data-toggle="tooltip" title="Visual">Vi.</span>
            <?php echo '<p>' . $card['Card']['baseMaxVisual'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em" class="glyphicon glyphicon-stats" data-toggle="tooltip" title="Total"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">'
                . ($card['Card']['baseMaxTotal']) .
                '</p>'; ?>
        </div>
    </div>
</div>
<div class="awakenedStats">
    <div class="row text-center center-block" id="level1">
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em; color: lawngreen" class="glyphicon glyphicon-heart" data-toggle="tooltip" title="Life"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">' . $card['Card']['awkBaseLife'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-danger" style="margin-left: 5px" data-toggle="tooltip" title="Vocal">Vo.</span>
            <?php echo '<p>' . $card['Card']['awkBaseVocal'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-primary" style="margin-left: 5px" data-toggle="tooltip" title="Dance">Da.</span>
            <?php echo '<p>' . $card['Card']['awkBaseDance'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-warning" style="margin-left: 5px" data-toggle="tooltip" title="Visual">Vi.</span>
            <?php echo '<p>' . $card['Card']['awkBaseVisual'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em" class="glyphicon glyphicon-stats" data-toggle="tooltip" title="Total"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">'
                . ($card['Card']['awkBaseTotal']) .
                '</p>'; ?>
        </div>
    </div>
    <div class="row text-center center-block" id="levelMax">
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em; color: lawngreen" class="glyphicon glyphicon-heart" data-toggle="tooltip" title="Life"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">' . $card['Card']['awkMaxLife'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-danger" style="margin-left: 5px" data-toggle="tooltip" title="Vocal">Vo.</span>
            <?php echo '<p>' . $card['Card']['awkMaxVocal'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-primary" style="margin-left: 5px" data-toggle="tooltip" title="Dance">Da.</span>
            <?php echo '<p>' . $card['Card']['awkMaxDance'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span class="label label-warning" style="margin-left: 5px" data-toggle="tooltip" title="Visual">Vi.</span>
            <?php echo '<p>' . $card['Card']['awkMaxVisual'] . '</p>'; ?>
        </div>
        <div class="col-xs-5ths">
            <span style="font-size: 1.3em" class="glyphicon glyphicon-stats" data-toggle="tooltip" title="Total"></span>
            <?php echo '<p style="margin-bottom: 0px; margin-top: -3px;">'
                . ($card['Card']['awkMaxTotal']) .
                '</p>'; ?>
        </div>
    </div>
</div>

<?php
if ($card['Card']['rarity'] != 'N') {
    ?>
    <div class="row text-center center-block">
        <div class="col-xs-6">
            <h4 style="font-weight: bold">Center Skill:</h4>

            <p><?php echo $card['Card']['centerSkillText'] ?></p>
        </div>
        <div class="col-xs-6">
            <h4 style="font-weight: bold">Special Skill: <?php echo $card['Card']['specialSkillType'] ?></h4>

            <p><?php echo $card['Card']['specialSkillText'] ?></p>
        </div>
    </div>
<?php
}
?>
<div class="row text-center center-block">
    <div class="col-xs-6">
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
    <div class="col-xs-6">
        <h4 style="font-weight: bold">Release Date</h4>

        <p><?php echo $card['Card']['dateAdded']; ?></p>
    </div>
</div>

<div class="row text-center">
    <div class="col-xs-12">
        <h4 style="font-weight: bold">Art Links</h4>
    </div>
</div>
<div class="row text-center">
    <div class="col-xs-12">
        <div class="row">
            <div class="col-xs-6">
                <p style="font-weight: bold">Base</p>

                <p><?php echo $this->Html->link('Card Art <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>',
                        '/img/cards/' . $card['Card']['baseArt'], array('escape' => false, 'target' => '_blank'));?></p>

                <p><?php echo $this->Html->link('Puchi <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>',
                        '/img/puchis/' . 'petit_' . $card['Card']['card_id'] . '.dds.png', array('escape' => false, 'target' => '_blank'));?></p>

                <p><?php echo $this->Html->link('Icon <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>',
                        '/img/cards/' . $card['Card']['baseIconArt'], array('escape' => false, 'target' => '_blank'));?></p>
            </div>
            <div class="col-xs-6">
                <p style="font-weight: bold">Awakened</p>

                <p><?php echo $this->Html->link('Card Art <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>',
                        '/img/cards/' . $card['Card']['awkArt'], array('escape' => false, 'target' => '_blank')); ?></p>

                <p><?php echo $this->Html->link('Puchi <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>',
                        '/img/puchi/' . 'petit_' . ($card['Card']['card_id'] + 1) . '.dds.png', array('escape' => false, 'target' => '_blank')); ?></p>

                <p><?php echo $this->Html->link('Icon <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>',
                        '/img/cards/' . $card['Card']['awkIconArt'], array('escape' => false, 'target' => '_blank')); ?></p>
            </div>
        </div>
    </div>
</div>

<div class="row text-center center-block">
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
                'https://starlight.kirara.ca/card/' . $card['Card']['card_id'], array('target' => '_blank')); ?></p>
    </div>
</div>
</div>
</div>
</div>

<script>
    //activate tooltips
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    //Reg/Awk Image/Icon and Stat change
    $(document).ready(function () {
        var $singleCard = $(".singleCard");
        var host = [location.protocol, '//', location.host].join('');
        $singleCard.on("click", "label#regawk1", function () {//Regular
            var baseImg = $singleCard.find(".cardBackground").data('baseimage');
            if (location.host == 'localhost' || location.host == 'localhost:8080') {
                $singleCard.find(".cardBackground").attr("src", host + "/Satelite/img/cards/" + baseImg);
            } else {
                $singleCard.find(".cardBackground").attr("src", host + "/img/cards/" + baseImg);
            }
            var baseIcon = $singleCard.find(".icon").data('baseicon');
            if (location.host == 'localhost' || location.host == 'localhost:8080') {
                $singleCard.find(".icon").attr("src", host + "/Satelite/img/cards/" + baseIcon);
            } else {
                $singleCard.find(".icon").attr("src", host + "/img/cards/" + baseIcon);
            }
            var basePuchi = $singleCard.find(".puchi").data('basepuchi');
            if (location.host == 'localhost' || location.host == 'localhost:8080') {
                $singleCard.find(".puchi").attr("src", host + "/Satelite/img/puchis/" + basePuchi);
            } else {
                $singleCard.find(".puchi").attr("src", host + "/img/puchis/" + basePuchi);
            }
            $(this).closest("div.buttons").find(".base").css("display", "inherit");
            $singleCard.find(".baseStats").css("display", "inherit");
            $(this).closest("div.buttons").find(".awakened").css("display", "none");
            $singleCard.find(".awakenedStats").css("display", "none");
        });
        $singleCard.on("click", "label#regawk2", function () {//Awakened
            var awkImg = $singleCard.find(".cardBackground").data('awkimage');
            if (location.host == 'localhost' || location.host == 'localhost:8080') {
                $singleCard.find(".cardBackground").attr("src", host + "/Satelite/img/cards/" + awkImg);
            } else {
                $singleCard.find(".cardBackground").attr("src", host + "/img/cards/" + awkImg);
            }
            var awkIcon = $singleCard.find(".icon").data('awkicon');
            if (location.host == 'localhost' || location.host == 'localhost:8080') {
                $singleCard.find(".icon").attr("src", host + "/Satelite/img/cards/" + awkIcon);
            } else {
                $singleCard.find(".icon").attr("src", host + "/img/cards/" + awkIcon);
            }
            var awkPuchi = $singleCard.find(".puchi").data('awkpuchi');
            if (location.host == 'localhost' || location.host == 'localhost:8080') {
                $singleCard.find(".puchi").attr("src", host + "/Satelite/img/puchis/" + awkPuchi);
            } else {
                $singleCard.find(".puchi").attr("src", host + "/img/puchis/" + awkPuchi);
            }
            $(this).closest("div.buttons").find(".base").css("display", "none");
            $singleCard.find(".baseStats").css("display", "none");
            $(this).closest("div.buttons").find(".awakened").css("display", "inherit");
            $singleCard.find(".awakenedStats").css("display", "inherit");
        });
    });

    //Min/Max Lvl Change
    $(document).ready(function () {
        var $singleCard = $(".singleCard");
        $singleCard.on("click", "label#lvlBtn1", function () {//Level 1
            $singleCard.find(".baseStats").children("#level1").css("display", "inherit");
            $singleCard.find(".baseStats").children("#levelMax").css("display", "none");
        });
        $singleCard.on("click", "label#lvlBtn2", function () {//Level Max
            $singleCard.find(".baseStats").children("#level1").css("display", "none");
            $singleCard.find(".baseStats").children("#levelMax").css("display", "inherit");
        });
        $singleCard.on("click", "label#awkLvlBtn1", function () {//Level 1
            $singleCard.find(".awakenedStats").children("#level1").css("display", "inherit");
            $singleCard.find(".awakenedStats").children("#levelMax").css("display", "none");
        });
        $singleCard.on("click", "label#awkLvlBtn2", function () {//Level Max
            $singleCard.find(".awakenedStats").children("#level1").css("display", "none");
            $singleCard.find(".awakenedStats").children("#levelMax").css("display", "inherit");
        });
    });
</script>
