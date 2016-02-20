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
        foreach($events as $event) {
            if(!$this->Time->isPast($event['Event']['finish'])){
                echo $this->Html->image('events/' . $event['Event']['pic'], array('width' => '800', 'height' => '201'));
                echo '<h2 id="counter">Countdown</h2>';
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
    $(document).ready(function() {
        $('#counter').innerHTML = moment("1982-05-25").countdown().toString();
    })
</script>
