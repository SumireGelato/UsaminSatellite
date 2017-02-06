<?php
//Page Title
$this->set('title_for_layout', 'Usamin S@tellite | Events List');
?>
<div class="row text-center center-block">
<div class="col-lg-12">
<?php
if (isset($currentEvent)) {
?>
<div class="row">
    <h1>Current Event</h1>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php echo $this->Html->image('events/' . $currentEvent['Event']['pic'], array('class' => 'img-responsive center-block')); ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div id="jstCountdown" data-type="current"
             data-countdown="<?php echo $currentEvent['Event']['finish']; ?>"></div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div id="browserTime"></div>
    </div>
</div>
<div class="row">
<?php if ($currentEvent['Event']['type'] != 'Caravan' && $currentEvent['Event']['type'] != 'Coop' && $currentEvent['Event']['type'] != 'Parade') { ?>
    <div class="col-lg-3 center-block text-center">
        <div class="row">
            <h3>Event Song</h3>
        </div>
        <div class="row">
            <?php echo $this->Html->image('songs/' . $currentEvent['Song']['coverArt'],
                array('class' => 'img-responsive center-block song'));?>
            <div class="songName hidden"><p><?php echo $currentEvent['Song']['eName'] ?></p></div>
            <div class="songInfo hidden">
                <div class="row">
                    <div class="col-xs-6">
                        <p><strong>Type: </strong><?php echo $currentEvent['Song']['type'] ?></p>
                    </div>
                    <div class="col-xs-6">
                        <p><strong>BPM: </strong><?php if ($currentEvent['Song']['bpm'] == 0) echo '?'; else echo $currentEvent['Song']['bpm'] ?></p>
                    </div>
                    <div class="col-xs-12">
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th>Difficulty</th>
                                <th>Star Level</th>
                                <th>Stamina Cost</th>
                                <th>Total Notes</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Debut</th>
                                <td><?php echo $currentEvent['Song']['debutLvl']; ?></td>
                                <td><?php echo $currentEvent['Song']['debutStam']; ?></td>
                                <td><?php echo $currentEvent['Song']['debutNotes']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Regular</th>
                                <td><?php echo $currentEvent['Song']['regLvl']; ?></td>
                                <td><?php echo $currentEvent['Song']['regStam']; ?></td>
                                <td><?php echo $currentEvent['Song']['regNotes']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Pro</th>
                                <td><?php echo $currentEvent['Song']['proLvl']; ?></td>
                                <td><?php echo $currentEvent['Song']['proStam']; ?></td>
                                <td><?php echo $currentEvent['Song']['proNotes']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Master</th>
                                <td><?php echo $currentEvent['Song']['masterLvl']; ?></td>
                                <td><?php echo $currentEvent['Song']['masterStam']; ?></td>
                                <td><?php echo $currentEvent['Song']['masterNotes']; ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
if ($currentEvent['Event']['type'] != 'Caravan' && $currentEvent['Event']['type'] != 'Coop' && $currentEvent['Event']['type'] != 'Parade') {
?>
<div class="col-lg-3">
    <?php } else { ?>
    <div class="col-lg-12">
        <?php } ?>
        <div class="row">
            <h3>Event Rewards</h3>
        </div>
        <div class="row reward">
            <?php
            foreach ($currentEvent['Card'] as $card) {
                echo $this->Html->image('cards/' . $card['baseIconArt'], array('alt' => str_replace('"', '', $card['eName']) . '-base',
                    'class' => 'btn btn-xs rewardIcons', 'url' => array('controller' => 'cards',
                        'action' => 'view',
                        $card['card_id'])));
                if ($currentEvent['Event']['type'] != 'Caravan' && $currentEvent['Event']['type'] != 'Coop' && $currentEvent['Event']['type'] != 'Parade') {
                    if ($currentEvent['Event']['ranking'] == $card['card_id']) {
                        echo '<p>Ranking Reward</p>';
                    } else if ($currentEvent['Event']['points'] == $card['card_id']) {
                        echo '<p>Points Reward</p>';
                    }
                }
            }
            ?>
        </div>
        <div class="row">
            <p>Click on the icons to view more details on the cards!</p>
        </div>
    </div>
    <?php if ($currentEvent['Event']['type'] != 'Caravan' && $currentEvent['Event']['type'] != 'Coop' && $currentEvent['Event']['type'] != 'Parade') { ?>
        <div class="col-lg-3">
            <div class="row">
                <h3>Border Bot</h3>
            </div>
            <div class="row">
                <a class="twitter-timeline" data-chrome="nofooter transparent" data-dnt="true"
                   href="https://twitter.com/deresute_border"
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
        <div class="col-lg-3">
            <div class="row">
                <h3>Tier Prediction Bot</h3>
            </div>
            <div class="row">
                <a class="twitter-timeline" data-chrome="nofooter transparent" data-dnt="true"
                   href="https://twitter.com/cgss_predict"
                   data-widget-id="715765886548881409">Tweets by @cgss_predict</a>
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
    <?php } ?>
</div>
<?php
}
else if (isset($futureEvent)) {
    ?>
    <div class="row">
        <h1>Upcoming Event</h1>
    </div>
    <div class="row">
        <p>Time Until Event '<?php echo $futureEvent['Event']['eName']; ?>' Starts:</p>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div id="jstCountdown" data-type="future"
                 data-countdown="<?php echo $futureEvent['Event']['begin']; ?>"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div id="browserTime"></div>
        </div>
    </div>
<?php
}
?>
</div>
</div>
<div class="row text-center">
    <h1>Past Events</h1>

    <p>Click on a Event Banner to reveal more information!</p>
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
                <div class="panel-heading" style="padding: 0" role="tab"
                     id="heading<?php echo $totalItems; ?>">
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
                                <h4 style="font-weight: bold"><?php echo $event['Event']['eName']; ?>
                                    <small> - <?php echo $event['Event']['jName'] ?></small>
                                </h4>
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
                                <h4 style="font-weight: bold">Event Rewards</h4>
                            </div>
                        </div>
                        <div class="row reward">
                            <?php
                            foreach ($event['Card'] as $card) {
                                echo $this->Html->image('cards/' . $card['baseIconArt'], array('alt' => str_replace('"', '', $card['eName']) . '-base',
                                    'class' => 'btn btn-xs rewardIcons img-responsive', 'url' => array('controller' => 'cards',
                                        'action' => 'view',
                                        $card['card_id'])));
                            }
                            ?>
                        </div>
                        <div class="row">
                            <p>Click on the icons to view more details on the cards!</p>
                        </div>
                        <hr/>
                        <?php if ($event['Event']['type'] != 'Caravan' && $event['Event']['type'] != 'Coop' &&
                            $event['Event']['t1'] != null
                        ) {
                            ?>
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4 style="font-weight: bold">Event Rankings</h4>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-left">
                                    <thead>
                                    <tr>
                                        <th>Tier 1</th>
                                        <th>Tier 2</th>
                                        <th>Tier 3</th>
                                        <th>Tier 4</th>
                                        <th>Tier 5</th>
                                        <th>Tier 6</th>
                                        <th>Tier 7</th>
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
                        <?php
                        } elseif ($event['Event']['type'] != 'Caravan' && $event['Event']['type'] != 'Coop' &&
                            $event['Event']['t1'] == null
                        ) {
                            ?>
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
    var eventTime = countdownElement.data('type');
    var jst = moment.tz(finalDate, "Japan");
    var browserTime = moment();
    var browserTz = moment.tz.guess();
    var browserConverted = jst.clone().tz(browserTz).format("h:mm:ss A D/M/YYYY");
    var hoursDifference = (moment.parseZone(browserTime.format()).utcOffset() - moment.parseZone(jst.format()).utcOffset()) / 60;
    var browserTimeElement = $("#browserTime");
    if (eventTime == 'future') {
        switch (true) {
            case (hoursDifference < 0)://behind jst
                browserTimeElement.html("<p>You are " + Math.abs(hoursDifference) + " hour(s) behind Japan Standard Time, " +
                "the event will start at " + browserConverted + " for you.</p>");
                break;
            case (hoursDifference == 0)://is jst
                browserTimeElement.html("<p>You are on Japan Standard Time, the event will start at " + jst.format("h:mm:ss A D/M/YYYY") + " for you.</p>");
                break;
            case (hoursDifference > 0)://ahead jst
                browserTimeElement.html("<p>You are " + hoursDifference + " hour(s) ahead of Japan Standard Time, " +
                "the event will start at " + browserConverted + " for you.</p>");
                break;
            default://unknown
                browserTimeElement.html("<p>Unable to detect time! Sorry cannot provide converted times.</p>");
                break;
        }
        countdownElement.countdown(jst.toDate())
            .on('update.countdown', function (event) {
                $(this).html("<h2>" + event.strftime('%-D day%!D %-H hour%!H %-M minute%!M %-S second%!S') + "</h2>");
            })
            .on('finish.countdown', function (event) {
                $(this).html('<h2>Event Started! Please refresh the page for the countdown till finish.</h2>');
            });
    } else if (eventTime == 'current') {
        switch (true) {
            case (hoursDifference < 0)://behind jst
                browserTimeElement.html("<p>You are " + Math.abs(hoursDifference) + " hour(s) behind Japan Standard Time, " +
                "the event will end at " + browserConverted + " for you.</p>");
                break;
            case (hoursDifference == 0)://is jst
                browserTimeElement.html("<p>You are on Japan Standard Time, the event will end at " + jst.format("h:mm:ss A D/M/YYYY") + " for you.</p>");
                break;
            case (hoursDifference > 0)://ahead jst
                browserTimeElement.html("<p>You are " + hoursDifference + " hour(s) ahead of Japan Standard Time, " +
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
    }
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
