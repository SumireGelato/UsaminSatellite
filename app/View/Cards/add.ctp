<?php
if ($this->request->is('post')) {
    echo $cardDetails;
} else {
if (!$this->request->is('ajax'))
{
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
            echo '<div class="row center-block text-center">';
            echo '<div class="col-lg-4">';
            echo $this->Form->input('idol_id');
            echo $this->Form->input('event_id', array('options' => $sourceList, 'empty' => 'Gacha'));
            echo $this->Form->input('card_id', array('type' => 'text', 'label' => 'Card Number'));
            echo $this->Form->input('eName');
            echo '</div>';
            echo '<div class="col-lg-4">';
            echo '<div class="row">';
            echo '<div class="col-lg-8" style="padding-right: 0">';
            echo $this->Form->input('jName');
            echo '</div>';
            echo '<div class="col-lg-4" style="padding-left: 0">';
            echo '<button id="autofilljp" class="btn btn-default" type="button">Fill in japanese</button>';
            echo '</div>';
            echo '</div>';
            $rarityOptions = array('N' => 'N', 'R' => 'R', 'SR' => 'SR', 'SSR' => 'SSR');
            echo $this->Form->input('rarity', array('options' => $rarityOptions, 'empty' => ''));
            $typeOptions = array('Cute' => 'Cute', 'Cool' => 'Cool', 'Passion' => 'Passion');
            echo $this->Form->input('type', array('options' => $typeOptions));
            echo $this->Form->input('dateAdded', array('type' => 'text', 'class' => 'form-control', 'id' => 'datepicker'));
            echo $this->Form->input('limited', array('class' => 'form-inline'));
            echo '</div>';
            echo '<div class="col-lg-4">';
            echo $this->Form->input('baseArt', array('type' => 'file'));
            echo $this->Form->input('awkArt', array('type' => 'file'));
            echo $this->Form->input('baseIconArt', array('type' => 'file'));
            echo $this->Form->input('awkIconArt', array('type' => 'file'));
            echo '</div>';
            echo '</div>';
            echo '<hr/>';
            echo '<div class="row center-block text-center">';
            echo '<div class="col-lg-4">';
            $appealOptions = array('Vocal' => 'Vocal', 'Dance' => 'Dance', 'Visual' => 'Visual', 'Life' => 'Life',
                'Skill Probability' => 'Skill Probability', 'All Appeals' => 'All Appeals');
            echo $this->Form->input('appealType', array('options' => $appealOptions));
            echo '</div>';
            echo '<div class="col-lg-4">';
            $typeOptions2 = array('Cute' => 'Cute', 'Cool' => 'Cool', 'Passion' => 'Passion', 'All' => 'All');
            echo $this->Form->input('centerSkillType', array('options' => $typeOptions2));
            echo '</div>';
            echo '<div class="col-lg-4">';
            echo $this->Form->input('bonusAmount');
            echo '</div>';
            echo '</div>';
            echo '<div class="row center-block text-center">';
            echo $this->Form->input('centerSkillText');
            echo '</div>';
            echo '<hr/>';
            echo '<div class="row center-block text-center">';
            echo '<div class="col-lg-4 col-lg-offset-4">';
            $skillOptions = array(
                1 => array('name' => 'Perfect Lock (All Variants)', 'value' => 'Perfect Lock'),
                2 => array('name' => 'Combo Lock', 'value' => 'Combo Lock'),
                3 => array('name' => 'Healer', 'value' => 'Healer'),
                4 => array('name' => 'Damage Guard', 'value' => 'Damage Guard'),
                5 => array('name' => 'Combo Bonus', 'value' => 'Combo Bonus'),
                6 => array('name' => 'Overload', 'value' => 'Overload'),
                7 => array('name' => 'Score Bonus', 'value' => 'Score Boost'),
                8 => array('name' => 'No Skill', 'value' => 'No Skill'));
            echo $this->Form->input('specialSkillType', array('options' => $skillOptions));
            echo '</div>';
            echo '</div>';
            echo '<div class="skillDetails row center-block text-center">';

            echo '<div class="perfectlock show">';
            echo '<div class="col-lg-3">';
            $rarityLockOptions = array('GREATs, NICEs and BADs' => 'SSR', 'GREATs and NICEs' => 'SR', 'GREATs' => 'R');
            echo $this->Form->input('rarityLock', array('options' => $rarityLockOptions));
            echo '</div>';
            echo '</div>';

            echo '<div class="healer hidden">';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('healAmount');
            echo '</div>';
            echo '</div>';

            echo '<div class="combobonus hidden">';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('comboBonusAmount');
            echo '</div>';
            echo '</div>';

            echo '<div class="overload hidden">';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('overloadBonusAmount');
            echo '</div>';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('lifeCost');
            echo '</div>';
            echo '</div>';

            echo '<div class="scorebonus hidden">';
            echo '<div class="col-lg-3">';
            $rarityBonusOptions = array('PERFECT/GREAT' => 'SSR', 'PERFECT' => 'SR & R');
            echo $this->Form->input('rarityBonus', array('options' => $rarityBonusOptions));
            echo '</div>';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('scoreBonusAmount');
            echo '</div>';
            echo '</div>';

            echo '<div class="col-lg-3">';
            $probOptions = array('high' => 'High (40% - 60%)', 'medium' => 'Medium (35% - 52.5%)', 'low' => 'Low (30% - 45%)');
            echo $this->Form->input('probability', array('options' => $probOptions));
            echo '</div>';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('time');
            echo '</div>';
            echo '<div class="col-lg-3">';
            $lengthOptions = array('a considerable length of time' => '6 - 9 sec', 'some time' => '5 - 7.5 sec',
                'a short time' => '4 - 6 sec', 'a very short time' => '3 - 4.5 sec or less');
            echo $this->Form->input('length', array('options' => $lengthOptions));
            echo '</div>';
            echo '</div>';

            echo '<div class="row center-block text-center">';
            echo '<div class="col-lg-12">';
            echo '<button id="constructSkill" class="btn btn-default" type="button" style="margin-bottom: 10px">Construct Skill</button>';
            echo '</div>';
            echo '</div>';

            echo '<div class="row center-block text-center">';
            echo '<div class="col-lg-12">';
            echo $this->Form->input('specialSkillText', array('rows' => '2'));
            echo '</div>';
            echo '</div>';
            echo '<hr/>';
            echo '<div class="row center-block text-center">';
            echo '<div class="col-lg-6">';
            echo '<button id="autofillBase" class="btn btn-default" type="button">Fill in stats</button>';
            echo '</div>';
            echo '<div class="col-lg-6">';
            echo '<button id="autofillAwk" class="btn btn-default" type="button">Fill in stats</button>';
            echo '</div>';
            echo '</div>';
            echo '<div class="row">';
            echo '<div class="col-lg-2">';
            echo $this->Form->input('baseLife');
            echo $this->Form->input('baseMaxLife');
            echo $this->Form->input('baseVocal');
            echo $this->Form->input('baseMaxVocal');
            echo '</div>';
            echo '<div class="col-lg-1">';

            echo '</div>';
            echo '<div class="col-lg-2">';
            echo $this->Form->input('baseDance');
            echo $this->Form->input('baseMaxDance');
            echo $this->Form->input('baseVisual');
            echo $this->Form->input('baseMaxVisual');
            echo '</div>';
            echo '<div class="col-lg-1">';

            echo '</div>';
            echo '<div class="col-lg-2">';
            echo $this->Form->input('awkBaseLife');
            echo $this->Form->input('awkMaxLife');
            echo $this->Form->input('awkBaseVocal');
            echo $this->Form->input('awkMaxVocal');
            echo '</div>';
            echo '<div class="col-lg-1">';

            echo '</div>';
            echo '<div class="col-lg-2">';
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
            echo '<div class="col-lg-1">';

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

    function writeCenterSkill(appeal, type, bonus) {
        var skillText;
        if (appeal == "Life") {
            skillText = appeal + " of all " + type + " idols up " + bonus + "%"
        } else if (appeal == "All Appeals" || appeal == "Skill Probability") {
            skillText = appeal + " of all " + type + " idols up " + bonus + "%"
        } else {
            if(type == "All") {
                skillText = appeal + " Appeal of " + type + " idols up " + bonus + "% when there is Cute, Cool and Passion idols in the same unit"
            }
            else {
                skillText = appeal + " Appeal of all " + type + " idols up " + bonus + "%"
            }
        }
        return skillText;
    }

    $(function() {
        var idolSelector = $("#CardIdolId");

        idolSelector.change(function() {
            var selected = idolSelector.find("option:selected").text();
            $("#CardEName").val(selected);
        });

        var centerAppealSelector = $("#CardAppealType");
        var centerSkillTypeSelector = $("#CardCenterSkillType");
        var centerBonusSelector = $("#CardBonusAmount");
        var centerSkillText = $("#CardCenterSkillText");

        centerAppealSelector.change(function(){
            centerSkillText.val(writeCenterSkill(
                centerAppealSelector.find("option:selected").text(),
                centerSkillTypeSelector.find("option:selected").text(),
                centerBonusSelector.val()));
        });
        centerSkillTypeSelector.change(function(){
            centerSkillText.val(writeCenterSkill(
                centerAppealSelector.find("option:selected").text(),
                centerSkillTypeSelector.find("option:selected").text(),
                centerBonusSelector.val()));
        });
        centerBonusSelector.keyup(function(){
            centerSkillText.val(writeCenterSkill(
                centerAppealSelector.find("option:selected").text(),
                centerSkillTypeSelector.find("option:selected").text(),
                centerBonusSelector.val()));
        });

        var skillSelector = $("#CardSpecialSkillType");
        var skillDetailDiv = $(".skillDetails");
        var skillBox = $("#CardSpecialSkillText");


        skillSelector.change(function() {
            var selected = skillSelector.find("option:selected").val();
            var oldActiveSkill = skillDetailDiv.find(".show");
            var perfectLockDiv = skillDetailDiv.find(".perfectlock");
            var healerDiv = skillDetailDiv.find(".healer");
            var comboBonusDiv = skillDetailDiv.find(".combobonus");
            var overloadDiv = skillDetailDiv.find(".overload");
            var scoreBonusDiv = skillDetailDiv.find(".scorebonus");

            switch(selected) {
                case "Perfect Lock":
                    oldActiveSkill.toggleClass("hidden");
                    perfectLockDiv.toggleClass("hidden");
                    oldActiveSkill.toggleClass("show");
                    perfectLockDiv.toggleClass("show");
                    break;
                case "Combo Lock":
                    oldActiveSkill.toggleClass("hidden");
                    oldActiveSkill.toggleClass("show");
                    break;
                case "Healer":
                    oldActiveSkill.toggleClass("hidden");
                    healerDiv.toggleClass("hidden");
                    oldActiveSkill.toggleClass("show");
                    healerDiv.toggleClass("show");
                    break;
                case "Damage Guard":
                    oldActiveSkill.toggleClass("hidden");
                    oldActiveSkill.toggleClass("show");
                    break;
                case "Combo Bonus":
                    oldActiveSkill.toggleClass("hidden");
                    comboBonusDiv.toggleClass("hidden");
                    oldActiveSkill.toggleClass("show");
                    comboBonusDiv.toggleClass("show");
                    break;
                case "Score Boost":
                    oldActiveSkill.toggleClass("hidden");
                    scoreBonusDiv.toggleClass("hidden");
                    oldActiveSkill.toggleClass("show");
                    scoreBonusDiv.toggleClass("show");
                    break;
                case "Overload":
                    oldActiveSkill.toggleClass("hidden");
                    overloadDiv.toggleClass("hidden");
                    oldActiveSkill.toggleClass("show");
                    overloadDiv.toggleClass("show");
                    break;
                default:
                    break;
            }

        });

        $("#constructSkill").click(function() {
            var skillString;
            var selected = skillSelector.find("option:selected").val();
            var probabilitySelector = $("#CardProbability");
            var timeSelector = $("#CardTime");
            var lengthSelector = $("#CardLength");
            switch(selected) {
                case "Perfect Lock":
                    skillString =
                    $("#CardRarityLock").find("option:selected").val() +
                    " become PERFECTs temporarily, " +
                    probabilitySelector.find("option:selected").val() +
                    " probability of triggering every " +
                    timeSelector.val() +
                    " seconds for " +
                    lengthSelector.find("option:selected").val()+".";
                    break;
                case "Combo Lock":
                    skillString =
                    "COMBO is maintained on NICEs temporarily, " +
                    probabilitySelector.find("option:selected").val() +
                    " probability of triggering every " +
                    timeSelector.val() +
                    " seconds for " +
                    lengthSelector.find("option:selected").val()+".";
                    break;
                case "Healer":
                    skillString =
                    "PERFECTs recover " +
                    $("#CardHealAmount").val() +
                    " life, " +
                    probabilitySelector.find("option:selected").val() +
                    " probability of triggering every " +
                    timeSelector.val() +
                    " seconds for " +
                    lengthSelector.find("option:selected").val()+".";
                    break;
                case "Damage Guard":
                    skillString =
                    "Life does not decrease temporarily, " +
                    probabilitySelector.find("option:selected").val() +
                    " probability of triggering every " +
                    timeSelector.val() +
                    " seconds for " +
                    lengthSelector.find("option:selected").val()+".";
                    break;
                case "Combo Bonus":
                    skillString =
                    "COMBO pt bonus " +
                    $("#CardComboBonusAmount").val() +
                    "% up, " +
                    probabilitySelector.find("option:selected").val() +
                    " probability of triggering every " +
                    timeSelector.val() +
                    " seconds for " +
                    lengthSelector.find("option:selected").val()+".";
                    break;
                case "Score Boost":
                    skillString =
                    $("#CardRarityBonus").find("option:selected").val() +
                    " score " +
                    $("#CardScoreBonusAmount").val() +
                    "% up, " +
                    probabilitySelector.find("option:selected").val() +
                    " probability of triggering every " +
                    timeSelector.val() +
                    " seconds for " +
                    lengthSelector.find("option:selected").val()+".";
                    break;
                case "Overload":
                    skillString =
                    "All notes score " +
                    $("#CardOverloadBonusAmount").val() +
                    "% up and COMBO is maintained on NICEs temporarily at the cost of " +
                    $("#CardLifeCost").val() +
                    " life, " +
                    probabilitySelector.find("option:selected").val() +
                    " probability of triggering every " +
                    timeSelector.val() +
                    " seconds for " +
                    lengthSelector.find("option:selected").val()+".";
                    break;
                default:
                    break;
            }
            skillBox.val(skillString);
        });

        $("#autofilljp").click(function() {
            var id = $("#CardCardId").val();
            var baseUrl = [location.protocol, '//', location.host, location.pathname].join('');
            $.post(baseUrl, {id: id, type: "autofill"}, function( data ) {
                $("#CardJName").val(data.result[0]["name"]);
            }, "json");
        });

        $("#autofillBase").click(function() {
            var id = $("#CardCardId").val();
            var baseUrl = [location.protocol, '//', location.host, location.pathname].join('');
            $.post(baseUrl, {id: id, type: "autofill"}, function( data ) {
                $("#CardBaseLife").val(data.result[0]["hp_min"]);
                $("#CardBaseMaxLife").val((data.result[0]["hp_max"])+(data.result[0]["bonus_hp"]));
                $("#CardBaseVocal").val(data.result[0]["vocal_min"]);
                $("#CardBaseMaxVocal").val(data.result[0]["vocal_max"]);
                $("#CardBaseDance").val(data.result[0]["dance_min"]);
                $("#CardBaseMaxDance").val(data.result[0]["dance_max"]);
                $("#CardBaseVisual").val(data.result[0]["visual_min"]);
                $("#CardBaseMaxVisual").val(data.result[0]["visual_max"]);
            }, "json");
        });

        $("#autofillAwk").click(function() {
            var id = parseInt($("#CardCardId").val()) + 1;
            var baseUrl = [location.protocol, '//', location.host, location.pathname].join('');
            $.post(baseUrl, {id: id, type: "autofill"}, function( data ) {
                $("#CardAwkBaseLife").val(data.result[0]["hp_min"]);
                $("#CardAwkMaxLife").val((data.result[0]["hp_max"])+(data.result[0]["bonus_hp"]));
                $("#CardAwkBaseVocal").val(data.result[0]["vocal_min"]);
                $("#CardAwkMaxVocal").val(data.result[0]["vocal_max"]);
                $("#CardAwkBaseDance").val(data.result[0]["dance_min"]);
                $("#CardAwkMaxDance").val(data.result[0]["dance_max"]);
                $("#CardAwkBaseVisual").val(data.result[0]["visual_min"]);
                $("#CardAwkMaxVisual").val(data.result[0]["visual_max"]);
            }, "json");
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
<?php
}
}
?>