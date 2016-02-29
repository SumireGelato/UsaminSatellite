<?php
//Page Title
$this->set('title_for_layout', 'Usamin S@telite | Events List');
?>
<div class="row text-center">
    <h1>Current Event</h1>
</div>
<div class="row text-center center-block">
    <div class="col-lg-12">
        <?php
        $currentEventExists = false;
        foreach ($events as $event) {
            if (!$this->Time->isPast($event['Event']['finish'])) {
                $currentEventExists = true;
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo $this->Html->image('events/' . $event['Event']['pic'], array('class' => 'img-responsive center-block')); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="jstCountdown" data-countdown="<?php echo $event['Event']['finish']; ?>"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="browserTime"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <h3>Event Rewards</h3>
                        </div>
                        <div class="row reward">
                            <?php
                            foreach ($event['Card'] as $card) {
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
                        <div class="row">
                            <?php echo $this->Html->link('Click here to view more details on these cards on the cards page!',
                                array('controller' => 'cards',
                                    'action' => 'index', '?' => 'source=' . $event['Event']['id'] . '&sort=dateAdded&order=1&statOrder=0')); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <a class="twitter-timeline" data-chrome="nofooter" data-dnt="true" href="https://twitter.com/deresute_border"
                           data-widget-id="701579824934965249">Tweets by @deresute_border</a>
                        <script>!function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                if (!d.getElementById(id)) {
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = p + "://platform.twitter.com/widgets.js";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }
                            }(document, "script", "twitter-wjs");</script>
                    </div>
                </div>
            <?php
            }
        }
        if (!$currentEventExists) {
            echo '<p>No Current Event!</p>';
        }
        ?>
    </div>
</div>
<div class="row text-center">
    <h1>Past Events</h1>
</div>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="row text-center center-block">
        <?php
        $numItems = 0;
        $totalItems = 1;
        foreach ($events as $event) {
            if ($this->Time->isPast($event['Event']['finish'])) {
                ?>

                <div class="col-md-6" style="padding-bottom: 10px">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="padding: 0" role="tab" id="heading<?php echo $totalItems;?>">
                                <a class="collapsed" role="button" data-toggle="collapse"
                                   data-parent="#accordion"
                                   href="<?php echo "#collapse" . $totalItems; ?>" aria-expanded="false"
                                   aria-controls="<?php echo "collapse" . $totalItems; ?>"
                                   style="text-decoration: none; color: black">
                                    <?php echo $this->Html->image('events/' . $event['Event']['pic'], array('class' => 'img-responsive center-block')); ?>
                                </a>
                        </div>
                        <div id="<?php echo "collapse" . $totalItems; ?>" class="panel-collapse collapse"
                             role="tabpanel"
                             aria-labelledby="<?php echo "heading" . $totalItems; ?>">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 style="font-weight: bold"><?php echo $event['Event']['eName']; ?><small> - <?php echo $event['Event']['jName'] ?></small></h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <p><span
                                                style="font-weight: bold">Date Started: </span><br/><?php echo $event['Event']['begin']; ?>
                                        </p>
                                    </div>
                                    <div class="col-xs-4">
                                        <p><span
                                                style="font-weight: bold">Date Finished: </span><br/><?php echo $event['Event']['finish']; ?>
                                        </p>
                                    </div>
                                    <div class="col-xs-4">
                                        <p><span
                                                style="font-weight: bold">Type: </span><br/><?php echo $event['Event']['type']; ?>
                                        </p>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 style="font-weight: bold">Limited Event Rewards</h4>
                                    </div>
                                </div>
                                <div class="row reward">
                                    <?php
                                    foreach ($event['Card'] as $card) {
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
                                <div class="row">
                                    <?php echo $this->Html->link('Click here to view more details on these cards on the cards page!',
                                        array('controller' => 'cards',
                                            'action' => 'index', '?' => 'source=' . $event['Event']['id'] . '&sort=dateAdded&order=1&statOrder=0')); ?>
                                </div>
                                <hr/>
                                <?php if($event['Event']['type'] != 'Caravan' && $event['Event']['t1'] != null) { ?>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h4 style="font-weight: bold">Event Rankings</h4>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table text-left">
                                            <thead>
                                                <tr>
                                                    <th>Tier 1<br/>2001st</th>
                                                    <th>Tier 2<br/>10001st</th>
                                                    <th>Tier 3<br/>20001st</th>
                                                    <th>Tier 4<br/>50001st</th>
                                                    <th>Tier 5<br/>100001st</th>
                                                    <th>Tier 6<br/>300001st</th>
                                                    <th>Tier 7<br/>500001st</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><?php echo $event['Event']['t1']; ?></td>
                                                <td><?php echo $event['Event']['t2']; ?></td>
                                                <td><?php echo $event['Event']['t3']; ?></td>
                                                <td><?php echo $event['Event']['t4']; ?></td>
                                                <td><?php echo $event['Event']['t5']; ?></td>
                                                <td><?php echo $event['Event']['t6']; ?></td>
                                                <td><?php echo $event['Event']['t7']; ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php } elseif($event['Event']['type'] != 'Caravan' && $event['Event']['t1'] == null) { ?>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h4>Event Rankings Coming Soon!</h4>
                                        </div>
                                    </div>
                              <?php } ?>
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
    var countdownElement = $("#jstCountdown");
    var finalDate = countdownElement.data('countdown');
    var jst = moment.tz(finalDate, "Japan");
    var browserTime = moment();
    var browserTz = moment.tz.guess();
    var browserConverted = jst.clone().tz(browserTz).format("h:m:s A D/M/YYYY");
    var hoursDifference = (moment.parseZone(browserTime.format()).utcOffset() - moment.parseZone(jst.format()).utcOffset()) / 60;
    var browserTimeElement = $("#browserTime");
    switch (true) {
        case (hoursDifference < 0)://behind jst
            browserTimeElement.html("<p>You are " + Math.abs(hoursDifference) + " hour(s) behind Starlight Server Time, " +
            "the event will end at " + browserConverted + " for you.</p>");
            break;
        case (hoursDifference == 0)://is jst
            browserTimeElement.html("<p>You are on Starlight Server Time, the event will end at " + jst.format("h:m:s A D/M/YYYY") + " for you.</p>");
            break;
        case (hoursDifference > 0)://ahead jst
            browserTimeElement.html("<p>You are " + hoursDifference + " hour(s) ahead of Starlight Server Time, " +
            "the event will end at " + browserConverted + " for you.</p>");
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
            $(this).html('<h2>Event Over!</h2>');
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
