<?php
$this->set('title_for_layout', 'Add Card');
?>
<div class="row container">
    <div class="col-lg-12">
        <h3>Add Card</h3>
    </div>
    </div>
<div class="row container">
        <div class="col-lg-4"><?php echo $this->Html->link(__('Cards List'), array('action' => 'adminindex'), array('class' => 'noLinkStyle')); ?></div>
        <div class="col-lg-4"><?php echo $this->Html->link(__('Back to Control Panel'), array('controller' => 'users', 'action' => 'controlpanel'), array('class' => 'noLinkStyle')); ?></div>
</div>
<div class="row container">
    <div class="col-lg-12">
        <p>Remember to add events and idols before the cards for easier data entry!</p>
    </div>
</div>
<div class="row container table-responsive" style="font-size: 0.8em">
    <div class="col-lg-6">
        <table class="table table-condensed table-bordered">
            <tr>
                <td><strong>Low Probability</strong></td>
                <td><strong>Medium Probability</strong></td>
                <td><strong>High Probability</strong></td>
            </tr>
            <tr>
                <td>30% - 45%</td>
                <td>35% - 52.5%</td>
                <td>40% - 60%</td>
            </tr>
        </table>
    </div>
    <div class="col-lg-6">
        <table class="table table-condensed table-bordered">
            <tr>
                <td><strong>considerable length of time</strong></td>
                <td><strong>some time</strong></td>
                <td><strong>short time</strong></td>
                <td><strong>very short time</strong></td>
            </tr>
            <tr>
                <td>6 - 9 sec</td>
                <td>5 - 7.5 sec</td>
                <td>4 - 6 sec</td>
                <td>3 - 4.5 sec or less</td>
            </tr>
        </table>
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
            <?php
            echo $this->Form->input('id');
            echo '<div class="row">';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('idol_id');
            echo $this->Form->input('event_id', array('options' => $sourceList, 'empty' => 'Gacha'));
            echo $this->Form->input('card_id', array('type' => 'text', 'label' => 'Card Number'));
            echo $this->Form->input('eName');
            echo $this->Form->input('jName');
            echo '</div>';
            echo '<div class="col-lg-3">';
            $rarityOptions = array('N' => 'N', 'R' => 'R', 'SR' => 'SR', 'SSR' => 'SSR');
            echo $this->Form->input('rarity', array('options' => $rarityOptions, 'empty' => ''));
            $typeOptions = array('Cute' => 'Cute', 'Cool' => 'Cool', 'Passion' => 'Passion');
            echo $this->Form->input('type', array('options' => $typeOptions));
            echo $this->Form->input('dateAdded', array('type' => 'text', 'class' => 'form-control', 'id' => 'datepicker'));
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
                6 => array('name' => 'Overload', 'value' => 'Overload'),
                7 => array('name' => 'Score Bonus', 'value' => 'Score Boost'),
                8 => array('name' => 'No Skill', 'value' => 'No Skill'));
            echo $this->Form->input('specialSkillType', array('options' => $options, 'empty' => ''));
            echo $this->Form->input('specialSkillText');
            echo '</div>';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('baseArt', array('type' => 'file'));
            echo $this->Form->input('awkArt', array('type' => 'file'));
            echo $this->Form->input('baseIconArt', array('type' => 'file'));
            echo $this->Form->input('awkIconArt', array('type' => 'file'));
            echo '</div>';
            echo '</div>';
            echo '<hr/>';
            echo '<div class="row">';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('baseLife');
            echo $this->Form->input('baseMaxLife');
            echo $this->Form->input('baseVocal');
            echo $this->Form->input('baseMaxVocal');
            echo '</div>';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('baseDance');
            echo $this->Form->input('baseMaxDance');
            echo $this->Form->input('baseVisual');
            echo $this->Form->input('baseMaxVisual');
            echo '</div>';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('awkBaseLife');
            echo $this->Form->input('awkMaxLife');
            echo $this->Form->input('awkBaseVocal');
            echo $this->Form->input('awkMaxVocal');
            echo '</div>';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('awkBaseDance');
            echo $this->Form->input('awkMaxDance');
            echo $this->Form->input('awkBaseVisual');
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

    $(function() {
        var idolSelector = $("#CardIdolId");

        idolSelector.change(function() {
            var selected = idolSelector.find("option:selected").text();
            $("#CardEName").val('"name" '+selected);
        });

        $("#CardCenterSkillText").val('Vocal Appeal of all Cool idols up 60%');

        var skillSelector = $("#CardSpecialSkillType");

        skillSelector.change(function() {
            var selected = skillSelector.find("option:selected").val();
            var skillBox = $("#CardSpecialSkillText");
            switch(selected) {
                case "Perfect Lock":
                    skillBox.val('GREATs, NICEs and BADs become PERFECTs temporarily, high probability of triggering every 15 seconds for a ' +
                    'considerable length of time.');
                    break;
                case "Combo Lock":
                    skillBox.val('COMBO is maintained on NICEs temporarily, medium probability of triggering every 12 seconds for some time.');
                    break;
                case "Healer":
                    skillBox.val('PERFECTs recover 3 life, high probability of triggering every 13 seconds for some time.');
                    break;
                case "Damage Guard":
                    skillBox.val('Life does not decrease temporarily, medium probability of triggering every 11 seconds for a considerable length ' +
                    'of time.');
                    break;
                case "Combo Bonus":
                    skillBox.val('COMBO pt bonus 15% up, medium probability of triggering every 7 seconds for a short time.');
                    break;
                case "Score Boost":
                    skillBox.val('PERFECT/GREAT score 15% up, medium probability of triggering every 9 seconds for some time.');
                    break;
                case "Overload":
                    skillBox.val('All notes score 16% up and COMBO is maintained on NICEs temporarily at the cost ' +
                        'of 15 life, medium probability of triggering every 15 seconds for some time');
            }
        });

        var baseMax = $("#CardBaseMaxLife");
        var awkBase = $("#CardAwkBaseLife");
        $("#CardBaseLife").change(function() {
            baseMax.val(parseInt($("#CardBaseLife").val())+2);
            baseMax.trigger("change");
            awkBase.trigger("change");
        });

        baseMax.change(function() {
            awkBase.val(baseMax.val());
            awkBase.trigger("change");
        });

        awkBase.change(function() {
            $("#CardAwkMaxLife").val(parseInt(baseMax.val())+2);
        });

        var rarityBox = $("#CardRarity");
        rarityBox.change(function() {
            if(rarityBox.find("option:selected").val() == 'N') {
                $('#CardCenterSkillText').val('');
                $('#CardSpecialSkillType').find('option:contains("No Skill")').prop('selected', true);
                $('#CardSpecialSkillText').val('');
            }
        });
    });


</script>
