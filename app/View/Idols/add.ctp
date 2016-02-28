<?php
$this->set('title_for_layout', 'Add Idol');
?>
<div class="row container">
    <div class="col-lg-12">
        <h3>Add Idol</h3>
    </div>
</div>
<div class="row container">
    <div class="col-lg-4"><?php echo $this->Html->link(__('Idols List'), array('action' => 'adminindex'), array('class' => 'noLinkStyle')); ?></div>
    <div class="col-lg-4"><?php echo $this->Html->link(__('Back to Control Panel'), array('controller' => 'users', 'action' => 'controlpanel'), array('class' => 'noLinkStyle')); ?></div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php
        echo $this->Form->create('Idol', array(
            'inputDefaults' => array(
                'div' => 'form-group',
                'class' => 'form-control',
//                'style' => 'width:auto'
            ),
            'class' => 'container',
            'enctype' => 'multipart/form-data',
            'novalidate' => true
        )); ?>
    <fieldset>
        <?php
        echo '<div class="row">';
        echo '<div class="col-lg-3">';
        echo $this->Form->input('eName');
        echo $this->Form->input('jName');
        echo $this->Form->input('age');
        echo $this->Form->input('height');
        echo $this->Form->input('weight');
        echo '</div>';
        echo '<div class="col-lg-3">';
        echo $this->Form->input('birthday', array('type' => 'text', 'class' => 'form-control', 'id' => 'datepicker'));
        $bloodOptions = array('A' => 'A', 'B' => 'B', 'AB' => 'AB', 'O' => 'O');
        echo $this->Form->input('bloodType', array('options' => $bloodOptions));
        echo '<div class="form-group">';
        echo '<div class="col-xs-4">';
        echo $this->Form->input('b', array('div' => false));
        echo '</div>';
        echo '<div class="col-xs-4">';
        echo $this->Form->input('w', array('div' => false));
        echo '</div>';
        echo '<div class="col-xs-4">';
        echo $this->Form->input('h', array('div' => false));
        echo '</div>';
        echo '</div>';
        echo $this->Form->input('hobbies');
        echo '</div>';
        echo '<div class="col-lg-3">';
        $handOptions = array('Right' => 'Right', 'Left' => 'Left', 'Both' => 'Both');
        echo $this->Form->input('writingHand', array('options' => $handOptions));
        $westernZodiacOptions = array('Aries' => 'Aries', 'Taurus' => 'Taurus', 'Gemini' => 'Gemini', 'Cancer' => 'Cancer',
            'Leo' => 'Leo', 'Virgo' => 'Virgo', 'Libra' => 'Libra', 'Scorpio' => 'Scorpio', 'Sagittarius' => 'Sagittarius',
            'Capricorn' => 'Capricorn', 'Aquarius' => 'Aquarius', 'Pisces' => 'Pisces');
        echo $this->Form->input('horoscope', array('options' => $westernZodiacOptions));
        echo $this->Form->input('hometown');
        $typeOptions = array('Cute' => 'Cute', 'Cool' => 'Cool', 'Passion' => 'Passion');
        echo $this->Form->input('type', array('options' => $typeOptions));
        echo $this->Form->input('cv', array('default' => 'N/A'));
        echo '</div>';
        echo '<div class="col-lg-3">';
        echo $this->Form->input('bio');
        echo $this->Form->input('profilePic', array('type' => 'file'));
        echo $this->Form->input('puchiPic', array('type' => 'file'));
        echo $this->Form->submit('Save', array(
            'div' => 'form-group',
            'class' => 'btn btn-default'
        ));
        echo '</div>';
        echo '</div>';
        ?>
    </fieldset>
    <?php echo $this->Form->end(); ?>
        </div>
</div>
<script type="text/javascript">
    $(function () {

        var $fp = $( "#datepicker" );

        $fp.filthypillow( {
            steps: ["month", "day"],
            startStep: "month",
            calendar: {
                saveOnDateSelect: true
            }
        } );

        $fp.on( "focus", function( ) {
            $fp.filthypillow( "show" );
        } );

        $fp.on( "fp:save", function( e, dateObj ) {
            $fp.val( dateObj.format( "MMMM D" ) );
            $fp.filthypillow( "hide" );
        } );
    });
</script>
