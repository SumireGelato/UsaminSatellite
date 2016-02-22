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
        $eventFinish = '';
        foreach ($events as $event) {
            if (!$this->Time->isPast($event['Event']['finish'])) {
                $eventFinish = $event['Event']['finish'];
                echo $this->Html->image('events/' . $event['Event']['pic'], array('width' => '800', 'height' => '201'));
                ?>
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
                        <h3>Event Rewards</h3>
                        <?php
                            foreach($event['Card'] as $card) {
                                echo $this->Html->image('cards/'.$card['baseIconArt']);
                                echo $this->Html->image('cards/'.$card['awkIconArt']);
                                //http://localhost:8080/Satelite/cards?source=14&sort=dateAdded&order=1&statOrder=0
                            }
                        ?>
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
        ?>
    </div>
</div>
<div class="row text-center">
    <h1>Past Events</h1>
</div>
<div class="row text-center center-block">
    <?php
    $numItems = 0;
    foreach ($events as $event) {
        if ($this->Time->isPast($event['Event']['finish'])) {
            echo '<div class="col-lg-6">';
            echo $this->Html->image('events/' . $event['Event']['pic'], array('width' => '575', 'height' => '150'));
            echo '</div>';
            $numItems++;
            if ($numItems == 2) {
                echo '</div>';
                echo '<div class="row text-center center-block">';
            }
        }
    }
    ?>
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
            browserTimeElement.html("<p>You are " + Math.abs(hoursDifference) + " hours behind Starlight Server Time, " +
            "the event will end at " + browserConverted + " for you.</p>");
            break;
        case (hoursDifference == 0)://is jst
            browserTimeElement.html("<p>You are on Starlight Server Time, the event will end at " + jst.format("h:m:s A D/M/YYYY") + " for you.</p>");
            break;
        case (hoursDifference > 0)://ahead jst
            browserTimeElement.html("<p>You are " + hoursDifference + " hours ahead of Starlight Server Time, " +
            "the event will end at " + browserConverted + " for you.</p>");
            break;
        default://unknown
            browserTimeElement.html("<p></p>");
            break;
    }
    countdownElement.countdown(jst.toDate())
        .on('update.countdown', function (event) {
            $(this).html("<h2>" + event.strftime('%-D day%!D %-H hour%!H %-M minute%!M %-S second%!S') + " left</h2>");
        })
        .on('finish.countdown', function (event) {
            $(this).html('Event Over!');
        });

</script>
