<?php
$this->set('title_for_layout', 'Edit Card');
?>
<div class="row container">
    <div class="col-lg-12">
        <h3>Edit Card</h3>
    </div>
</div>
<div class="row container">
    <div class="col-lg-12">
        <div
            class="col-lg-4"><?php echo $this->Html->link(__('Cards List'), array('action' => 'adminindex'), array('class' => 'noLinkStyle')); ?></div>
        <div
            class="col-lg-4"><?php echo $this->Html->link(__('Back to Control Panel'), array('controller' => 'users', 'action' => 'controlpanel'), array('class' => 'noLinkStyle')); ?></div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php
        echo $this->Form->create('Card', array(
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
            <p>Remember to add events and idols before the cards for easier data entry!</p>
            <?php
            echo $this->Form->input('id');
            echo '<div class="row">';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('idol_id');
            echo $this->Form->input('event_id', array('empty' => 'Gacha'));
            echo $this->Form->input('card_id', array('type' => 'text', 'label' => 'Card Number'));
            echo $this->Form->input('eName');
            echo $this->Form->input('jName');
            echo '</div>';
            echo '<div class="col-lg-3">';
            $rarityOptions = array('N' => 'N', 'R' => 'R', 'SR' => 'SR', 'SSR' => 'SSR');
            echo $this->Form->input('rarity', array('options' => $rarityOptions));
            $typeOptions = array('Cute' => 'Cute', 'Cool' => 'Cool', 'Passion' => 'Passion');
            echo $this->Form->input('type', array('options' => $typeOptions));
            echo $this->Form->input('dateAdded', array('type' => 'text', 'class' => 'form-control',
                'data-date' => $this->request->data['Card']['dateAdded'], 'id' => 'datepicker'));
            echo $this->Form->input('limited', array('class' => 'form-inline'));
            echo $this->Form->input('centerSkillText', array('type' => 'textarea', 'rows' => '2'));
            echo '</div>';
            echo '<div class="col-lg-3">';
            $options = array(
                1 => array('name' => 'Perfect Lock (All Variants)', 'value' => 'Perfect Lock'),
                2 => array('name' => 'Combo Lock', 'value' => 'Combo Lock'),
                3 => array('name' => 'Healer', 'value' => 'Healer'),
                4 => array('name' => 'Damage Guard', 'value' => 'Damage Guard'),
                5 => array('name' => 'Combo Bonus', 'value' => 'Combo Bonus'),
                6 => array('name' => 'Score Bonus', 'value' => 'Score Boost'));
            echo $this->Form->input('specialSkillType', array('options' => $options));
            echo $this->Form->input('specialSkillText');
            echo '</div>';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('baseArt', array('type' => 'file'));
            echo '<p style="font-size: small">Current filename is: '.$this->request->data['Card']['baseArt'].'</p>';
            echo $this->Form->input('awkArt', array('type' => 'file'));
            echo '<p style="font-size: small">Current filename is: '.$this->request->data['Card']['awkArt'].'</p>';
            echo $this->Form->input('baseIconArt', array('type' => 'file'));
            echo '<p style="font-size: small">Current filename is: '.$this->request->data['Card']['baseIconArt'].'</p>';
            echo $this->Form->input('awkIconArt', array('type' => 'file'));
            echo '<p style="font-size: small">Current filename is: '.$this->request->data['Card']['awkIconArt'].'</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="row">';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('baseLife');
            echo $this->Form->input('baseVocal');
            echo $this->Form->input('baseDance');
            echo $this->Form->input('baseVisual');
            echo '</div>';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('baseMaxLife');
            echo $this->Form->input('baseMaxVocal');
            echo $this->Form->input('baseMaxDance');
            echo $this->Form->input('baseMaxVisual');
            echo '</div>';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('awkBaseLife');
            echo $this->Form->input('awkBaseVocal');
            echo $this->Form->input('awkBaseDance');
            echo $this->Form->input('awkBaseVisual');
            echo '</div>';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('awkMaxLife');
            echo $this->Form->input('awkMaxVocal');
            echo $this->Form->input('awkMaxDance');
            echo $this->Form->input('awkMaxVisual');
            echo $this->Form->submit('Save', array(
                'div' => 'form-group',
                'class' => 'btn btn-default'
            ));
            echo $this->Form->end();
            echo '</div>';
            echo '</div>';
            ?>
        </fieldset>
    </div>
</div>

<script type="text/javascript">
    $(function () {

        var $fp = $( "#datepicker" );

        $fp.filthypillow( {
            initialDateTime: function( m ) {
                return moment($('#datepicker').data('date'));
            },
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
            $fp.val( dateObj.format( "YYYY-MM-DD" ) );
            $fp.filthypillow( "hide" );
        } );
    });
</script>
