<?php
$this->set('title_for_layout', 'Edit Card');
?>
<div class="row container">
    <div class="col-lg-12">
        <h3>Add Card</h3>
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
            echo '<div class="row">';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('idol_id');
            echo $this->Form->input('event_id', array('empty' => 'Gacha'));
            echo $this->Form->input('cardNumber');
            echo $this->Form->input('eName');
            echo $this->Form->input('jName');
            $rarityOptions = array('N' => 'N', 'R' => 'R', 'SR' => 'SR', 'SSR' => 'SSR');
            echo $this->Form->input('rarity', array('options' => $rarityOptions));
            $typeOptions = array('Cute' => 'Cute', 'Cool' => 'Cool', 'Passion' => 'Passion');
            echo $this->Form->input('type', array('options' => $typeOptions));
            echo '</div>';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('centerSkillText');
            $options = array(
                1 => array('name' => 'Perfect Lock (All Variants)', 'value' => 'Perfect Lock'),
                2 => array('name' => 'Combo Lock', 'value' => 'Combo Lock'),
                3 => array('name' => 'Healer', 'value' => 'Healer'),
                4 => array('name' => 'Damage Guard', 'value' => 'Damage Guard'),
                5 => array('name' => 'Combo Bonus', 'value' => 'Combo Bonus'),
                6 => array('name' => 'Score Bonus', 'value' => 'Score Boost'));
            echo $this->Form->input('specialSkillType', array('options' => $options));
            echo $this->Form->input('specialSkillText');
            /*            echo $this->Form->input('baseArt', array('type' => 'file'));
                        echo $this->Form->input('awkArt', array('type' => 'file'));*/
            echo $this->Form->input('limited', array('class' => 'form-inline'));
            echo '</div>';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('baseLife');
            echo $this->Form->input('baseVocal');
            echo $this->Form->input('baseDance');
            echo $this->Form->input('baseVisual');
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
