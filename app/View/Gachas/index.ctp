<?php
//Page Title
$this->set('title_for_layout', 'Usamin S@telite | Gacha List');
?>
<div class="row text-center">
    <h1>Current Limited Platinum Gacha</h1>
</div>
<div class="row text-center center-block">
    <div class="col-lg-12">
        <?php
        $currentGachaIsLimited = false;
        foreach ($gachas as $gacha) {
            if (!$this->Time->isPast($gacha['Gacha']['dateFinish']) && $gacha['Gacha']['eName'] != 'Platinum Gacha (Non-Limited)') {
                $currentGachaIsLimited = true;
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo $this->Html->image('gacha/' . $gacha['Gacha']['pic'], array('class' => 'img-responsive center-block')); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="limitedJstCountdown" data-countdown="<?php echo $gacha['Gacha']['dateFinish']; ?>"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="limitedBrowserTime"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <h3>Gacha Drops</h3>
                        </div>
                        <div class="row reward">
                            <?php
                            foreach ($gacha['Card'] as $card) {
                                echo '<div class="cardTitle" style="display: none"><p>' . $card['eName'] . '</p></div>';
                                echo $this->Html->image('cards/' . $card['baseIconArt'], array('alt' => str_replace('"', '', $card['eName']) . '-base',
                                    'class' => 'btn btn-xs rewardIcons'));
                                echo
                                    '<div class="cardInfo">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <p><strong>Rarity: </strong>' . $card['rarity'] . '</p>
                                            </div>
                                            <div class="col-xs-6">
                                                <p><strong>Type: </strong>' . $card['type'] . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5>Max Stats</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-5ths">
                                                <span style="font-size: 1.3em; color: lawngreen" class="glyphicon glyphicon-heart"></span>
                                                <p style="margin-bottom: 0px; margin-top: -3px;">' . $card['baseMaxLife'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span class="label label-danger" style="margin-left: 5px">Vo.</span>
                                                <p>' . $card['baseMaxVocal'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span class="label label-primary" style="margin-left: 5px">Da.</span>
                                                <p>' . $card['baseMaxDance'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span class="label label-warning" style="margin-left: 5px">Vi.</span>
                                                <p>' . $card['baseMaxVisual'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span style="font-size: 1.3em" class="glyphicon glyphicon-stats"></span>
                                                <p style="margin-bottom: 0px; margin-top: -3px;">' . ($card['baseMaxTotal']) . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5>Card Skill - ' . $card['specialSkillType'] . '</h5>
                                        </div>
                                        <div class="row">
                                            <p>' . $card['specialSkillText'] . '</p>
                                        </div>
                                    </div>';
                                echo '<div class="cardTitle" style="display: none"><p>' . $card['eName'] . '+</p></div>';
                                echo $this->Html->image('cards/' . $card['awkIconArt'], array('alt' => str_replace('"', '', $card['eName']) . '-awk',
                                    'class' => 'btn btn-xs rewardIcons'));
                                echo
                                    '<div class="cardInfo">
                                    <div class="row">
                                            <div class="col-xs-6">
                                                <p><strong>Rarity: </strong>' . $card['rarity'] . '+</p>
                                            </div>
                                            <div class="col-xs-6">
                                                <p><strong>Type: </strong>' . $card['type'] . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5>Max Stats</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-5ths">
                                                <span style="font-size: 1.3em; color: lawngreen" class="glyphicon glyphicon-heart"></span>
                                                <p style="margin-bottom: 0px; margin-top: -3px;">' . $card['awkMaxLife'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span class="label label-danger" style="margin-left: 5px">Vo.</span>
                                                <p>' . $card['awkMaxVocal'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span class="label label-primary" style="margin-left: 5px">Da.</span>
                                                <p>' . $card['awkMaxDance'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span class="label label-warning" style="margin-left: 5px">Vi.</span>
                                                <p>' . $card['awkMaxVisual'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span style="font-size: 1.3em" class="glyphicon glyphicon-stats"></span>
                                                <p style="margin-bottom: 0px; margin-top: -3px;">' . ($card['awkMaxTotal']) . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5>Card Skill - ' . $card['specialSkillType'] . '</h5>
                                        </div>
                                        <div class="row">
                                            <p>' . $card['specialSkillText'] . '</p>
                                        </div>
                                </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php
            }
        }
        if (!$currentGachaIsLimited) {
            echo '<p>Current Platinum Gacha is not limited! Save your gems :P</p>';
        }
        ?>
    </div>
</div>
<div class="row text-center">
    <h1>Current Non-Limited Platinum Gacha</h1>
</div>
<div class="row text-center center-block">
    <div class="col-lg-12">
        <?php
        foreach ($gachas as $gacha) {
            if (!$this->Time->isPast($gacha['Gacha']['dateFinish']) && $gacha['Gacha']['eName'] == 'Platinum Gacha (Non-Limited)') {
                if (!$currentGachaIsLimited) {
                    ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="noLimitJstCountdown" data-countdown="<?php echo $gacha['Gacha']['dateFinish']; ?>"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="noLimitBrowserTime"></div>
                        </div>
                    </div>
                <?php } ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <h3>Gacha Drops</h3>
                        </div>
                        <div class="row reward">
                            <?php
                            foreach ($gacha['Card'] as $card) {
                                echo '<div class="cardTitle" style="display: none"><p>' . $card['eName'] . '</p></div>';
                                echo $this->Html->image('cards/' . $card['baseIconArt'], array('alt' => str_replace('"', '', $card['eName']) . '-base',
                                    'class' => 'btn btn-xs rewardIcons'));
                                echo
                                    '<div class="cardInfo">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <p><strong>Rarity: </strong>' . $card['rarity'] . '</p>
                                            </div>
                                            <div class="col-xs-6">
                                                <p><strong>Type: </strong>' . $card['type'] . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5>Max Stats</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-5ths">
                                                <span style="font-size: 1.3em; color: lawngreen" class="glyphicon glyphicon-heart"></span>
                                                <p style="margin-bottom: 0px; margin-top: -3px;">' . $card['baseMaxLife'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span class="label label-danger" style="margin-left: 5px">Vo.</span>
                                                <p>' . $card['baseMaxVocal'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span class="label label-primary" style="margin-left: 5px">Da.</span>
                                                <p>' . $card['baseMaxDance'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span class="label label-warning" style="margin-left: 5px">Vi.</span>
                                                <p>' . $card['baseMaxVisual'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span style="font-size: 1.3em" class="glyphicon glyphicon-stats"></span>
                                                <p style="margin-bottom: 0px; margin-top: -3px;">' . ($card['baseMaxTotal']) . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5>Card Skill - ' . $card['specialSkillType'] . '</h5>
                                        </div>
                                        <div class="row">
                                            <p>' . $card['specialSkillText'] . '</p>
                                        </div>
                                    </div>';
                                echo '<div class="cardTitle" style="display: none"><p>' . $card['eName'] . '+</p></div>';
                                echo $this->Html->image('cards/' . $card['awkIconArt'], array('alt' => str_replace('"', '', $card['eName']) . '-awk',
                                    'class' => 'btn btn-xs rewardIcons'));
                                echo
                                    '<div class="cardInfo">
                                    <div class="row">
                                            <div class="col-xs-6">
                                                <p><strong>Rarity: </strong>' . $card['rarity'] . '+</p>
                                            </div>
                                            <div class="col-xs-6">
                                                <p><strong>Type: </strong>' . $card['type'] . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5>Max Stats</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-5ths">
                                                <span style="font-size: 1.3em; color: lawngreen" class="glyphicon glyphicon-heart"></span>
                                                <p style="margin-bottom: 0px; margin-top: -3px;">' . $card['awkMaxLife'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span class="label label-danger" style="margin-left: 5px">Vo.</span>
                                                <p>' . $card['awkMaxVocal'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span class="label label-primary" style="margin-left: 5px">Da.</span>
                                                <p>' . $card['awkMaxDance'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span class="label label-warning" style="margin-left: 5px">Vi.</span>
                                                <p>' . $card['awkMaxVisual'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span style="font-size: 1.3em" class="glyphicon glyphicon-stats"></span>
                                                <p style="margin-bottom: 0px; margin-top: -3px;">' . ($card['awkMaxTotal']) . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5>Card Skill - ' . $card['specialSkillType'] . '</h5>
                                        </div>
                                        <div class="row">
                                            <p>' . $card['specialSkillText'] . '</p>
                                        </div>
                                </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php
            }
        }
        ?>
    </div>
</div>

<div class="row text-center">
    <h1>Past Limited Gacha</h1>
    <p>Looking for the non-limited gacha cards? <?php echo $this->Html->link('Click here!',
            array('controller' => 'cards', 'action' => 'index', '?' => 'source=gacha&limited=0&sort=dateAdded&order=1&statOrder=0')) ?></p>
</div>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="row text-center center-block">
        <?php
        $numItems = 0;
        $totalItems = 1;
        foreach ($gachas as $gacha) {
            if ($this->Time->isPast($gacha['Gacha']['dateFinish'])) {
                ?>
                <div class="col-md-6" style="padding-bottom: 10px">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="padding: 0" role="tab" id="heading<?php echo $totalItems; ?>">
                            <a class="collapsed" role="button" data-toggle="collapse"
                               data-parent="#accordion"
                               href="<?php echo "#collapse" . $totalItems; ?>" aria-expanded="false"
                               aria-controls="<?php echo "collapse" . $totalItems; ?>"
                               style="text-decoration: none; color: black">
                                <?php echo $this->Html->image('gacha/' . $gacha['Gacha']['pic'], array('class' => 'img-responsive center-block')); ?>
                            </a>
                        </div>
                        <div id="<?php echo "collapse" . $totalItems; ?>" class="panel-collapse collapse"
                             role="tabpanel"
                             aria-labelledby="<?php echo "heading" . $totalItems; ?>">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 style="font-weight: bold"><?php echo $gacha['Gacha']['eName']; ?><br/>
                                            <small><?php echo $gacha['Gacha']['jName'] ?></small>
                                        </h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <p><span
                                                style="font-weight: bold">Date Started: </span><br/><?php echo $gacha['Gacha']['dateStart']; ?>
                                        </p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p><span
                                                style="font-weight: bold">Date Finished: </span><br/><?php echo $gacha['Gacha']['dateFinish']; ?>
                                        </p>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 style="font-weight: bold">Limited Gacha Drops</h4>
                                    </div>
                                </div>
                                <div class="row reward">
                                    <?php
                                    foreach ($gacha['Card'] as $card) {
                                        echo '<div class="cardTitle" style="display: none"><p>' . $card['eName'] . '</p></div>';
                                        echo $this->Html->image('cards/' . $card['baseIconArt'], array('alt' => str_replace('"', '', $card['eName']) . '-base',
                                            'class' => 'btn btn-xs rewardIcons img-responsive'));
                                        echo
                                            '<div class="cardInfo">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <p><strong>Rarity: </strong>' . $card['rarity'] . '</p>
                                            </div>
                                            <div class="col-xs-6">
                                                <p><strong>Type: </strong>' . $card['type'] . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5>Max Stats</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-5ths">
                                                <span style="font-size: 1.3em; color: lawngreen" class="glyphicon glyphicon-heart"></span>
                                                <p style="margin-bottom: 0px; margin-top: -3px;">' . $card['baseMaxLife'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span class="label label-danger" style="margin-left: 5px">Vo.</span>
                                                <p>' . $card['baseMaxVocal'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span class="label label-primary" style="margin-left: 5px">Da.</span>
                                                <p>' . $card['baseMaxDance'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span class="label label-warning" style="margin-left: 5px">Vi.</span>
                                                <p>' . $card['baseMaxVisual'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span style="font-size: 1.3em" class="glyphicon glyphicon-stats"></span>
                                                <p style="margin-bottom: 0px; margin-top: -3px;">' . ($card['baseMaxTotal']) . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5>Card Skill - ' . $card['specialSkillType'] . '</h5>
                                        </div>
                                        <div class="row">
                                            <p>' . $card['specialSkillText'] . '</p>
                                        </div>
                                    </div>';
                                        echo '<div class="cardTitle" style="display: none"><p>' . $card['eName'] . '+</p></div>';
                                        echo $this->Html->image('cards/' . $card['awkIconArt'], array('alt' => str_replace('"', '', $card['eName']) . '-awk',
                                            'class' => 'btn btn-xs rewardIcons'));
                                        echo
                                            '<div class="cardInfo">
                                    <div class="row">
                                            <div class="col-xs-6">
                                                <p><strong>Rarity: </strong>' . $card['rarity'] . '+</p>
                                            </div>
                                            <div class="col-xs-6">
                                                <p><strong>Type: </strong>' . $card['type'] . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5>Max Stats</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-5ths">
                                                <span style="font-size: 1.3em; color: lawngreen" class="glyphicon glyphicon-heart"></span>
                                                <p style="margin-bottom: 0px; margin-top: -3px;">' . $card['awkMaxLife'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span class="label label-danger" style="margin-left: 5px">Vo.</span>
                                                <p>' . $card['awkMaxVocal'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span class="label label-primary" style="margin-left: 5px">Da.</span>
                                                <p>' . $card['awkMaxDance'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span class="label label-warning" style="margin-left: 5px">Vi.</span>
                                                <p>' . $card['awkMaxVisual'] . '</p>
                                            </div>
                                            <div class="col-xs-5ths">
                                                <span style="font-size: 1.3em" class="glyphicon glyphicon-stats"></span>
                                                <p style="margin-bottom: 0px; margin-top: -3px;">' . ($card['awkMaxTotal']) . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5>Card Skill - ' . $card['specialSkillType'] . '</h5>
                                        </div>
                                        <div class="row">
                                            <p>' . $card['specialSkillText'] . '</p>
                                        </div>
                                </div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $numItems++;
                $totalItems++;
                if ($numItems == 2) {
                    echo '</div>';
                    echo '<div class="row text-center center-block">';
                    $numItems = 0;
                }
            }
        }
        ?>
    </div>
</div>
<script>
    var limitedCountdownElement = $("#limitedJstCountdown");
    var notLimitedCountdownElement = $("#noLimitJstCountdown");
    var countdownElement;
    if (limitedCountdownElement === undefined) {
        countdownElement = notLimitedCountdownElement;
    } else {
        countdownElement = limitedCountdownElement;
    }
    var finalDate = countdownElement.data('countdown');
    var jst = moment.tz(finalDate, "Japan");
    var browserTime = moment();
    var browserTz = moment.tz.guess();
    var browserConverted = jst.clone().tz(browserTz).format("h:m:s A D/M/YYYY");
    var hoursDifference = (moment.parseZone(browserTime.format()).utcOffset() - moment.parseZone(jst.format()).utcOffset()) / 60;
    var limitedBrowserTimeElement = $("#limitedBrowserTime");
    var notLimitedBrowserTimeElement = $("noLimitBrowserTime");
    var browserTimeElement;
    if (limitedBrowserTimeElement === undefined) {
        browserTimeElement = notLimitedBrowserTimeElement;
    } else {
        browserTimeElement = limitedBrowserTimeElement;
    }
    switch (true) {
        case (hoursDifference < 0)://behind jst
            browserTimeElement.html("<p>You are " + Math.abs(hoursDifference) + " hour(s) behind Starlight Server Time, " +
            "the gacha will end at " + browserConverted + " for you.</p>");
            break;
        case (hoursDifference == 0)://is jst
            browserTimeElement.html("<p>You are on Starlight Server Time, the gacha will end at " + jst.format("h:m:s A D/M/YYYY") + " for you.</p>");
            break;
        case (hoursDifference > 0)://ahead jst
            browserTimeElement.html("<p>You are " + hoursDifference + " hour(s) ahead of Starlight Server Time, " +
            "the gacha will end at " + browserConverted + " for you.</p>");
            break;
        default://unknown
            browserTimeElement.html("<p>Unable to detect time! Sorry cannot provide converted times.</p>");
            break;
    }
    countdownElement.countdown(jst.toDate())
        .on('update.countdown', function (event) {
            $(this).html("<h2>" + event.strftime('%-D day%!D %-H hour%!H %-M minute%!M %-S second%!S') + " left</h2>");
        })
        .on('finish.countdown', function (event) {
            $(this).html('<h2>Gacha Over!</h2>');
        });
    $(function () {
        var $reward = $('.reward');
        $reward.find('.rewardIcons').each(function () {
            var $this = $(this);
            $this.popover({
                trigger: 'hover',
                placement: 'bottom',
                html: true,
                title: $this.prev('.cardTitle').html(),
                content: $this.next('.cardInfo').html()
            });
        });
    });

</script>
