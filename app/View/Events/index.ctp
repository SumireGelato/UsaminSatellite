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
                        <div id="browserTime"> According to your browser you are X hours in front of JST, the event will end at XX:XXpm for you.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        Drops here
                    </div>
                    <div class="col-lg-6">
                        twitter feed here
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
    //             alert(moment.parseZone(jst.format()).utcOffset());
    //             alert(moment.parseZone(browserTime.format()).utcOffset());
    countdownElement.countdown(jst.toDate())
        .on('update.countdown', function (event) {
            $(this).html("<h2>"+event.strftime('%-D day%!D %-H hour%!H %-M minute%!M %-S second%!S')+" left</h2>");
        })
        .on('finish.countdown', function (event) {
            $(this).html('Event Over!');
        });

</script>
