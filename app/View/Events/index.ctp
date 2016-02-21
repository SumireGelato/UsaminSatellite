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
        foreach($events as $event) {
            if(!$this->Time->isPast($event['Event']['finish'])){
                $eventFinish = $event['Event']['finish'];
                echo $this->Html->image('events/' . $event['Event']['pic'], array('width' => '800', 'height' => '201'));
                echo '<div class="row countdown">
                        <div class="col-lg-6">
                            <div id="jstCountdown" data-countdown="'.$event['Event']['finish'].'"></div>
                        </div>
                        <div class="col-lg-6">
                            <div id="browserCountdown" data-countdown="'.$event['Event']['finish'].'"></div>
                        </div>
                    </div>';
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
        foreach($events as $event) {
        if($this->Time->isPast($event['Event']['finish'])) {
                echo '<div class="col-lg-6">';
                echo $this->Html->image('events/' . $event['Event']['pic'], array('width' => '575', 'height' => '150'));
                echo '</div>';
                $numItems++;
                if($numItems == 2) {
                    echo '</div>';
                    echo '<div class="row text-center center-block">';
                }
            }
        }
        ?>
</div>
<script>
     $('[data-countdown]').each(function() {
         var time;
         var finalDate = $(this).data('countdown');
         var jst = moment.tz(finalDate, "Japan");
         if($(this).attr("id")=="jstCountdown") {
             time = jst.format("YYYY-MM-DD HH:mm");
         } else {
             var browserTz = moment.tz.guess();
             var browserTime = jst.clone().tz(browserTz);
             time = browserTime.format("YYYY-MM-DD HH:mm");
             alert(moment.parseZone(jst.format()).utcOffset());
             alert(moment.parseZone(browserTime.format()).utcOffset());
         }
           $(this).countdown(time)
               .on('update.countdown', function(event) {
                   $(this).html(event.strftime('%-D day%!D %-H hour%!H %-M minute%!M %-S second%!S'));
               })
               .on('finish.countdown', function(event) {
                   $(this).html('Event Over!');
               });
         });
</script>
