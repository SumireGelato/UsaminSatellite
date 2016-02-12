<?php
//Page Title
$this->set('title_for_layout', 'Usamin S@telite | ');
?>
<div class="cards view">
    <h2><?php echo __('Card'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($card['Card']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Idol'); ?></dt>
        <dd>
            <?php echo $this->Html->link($card['Idol']['id'], array('controller' => 'idols', 'action' => 'view', $card['Idol']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Event'); ?></dt>
        <dd>
            <?php echo $this->Html->link($card['Event']['id'], array('controller' => 'events', 'action' => 'view', $card['Event']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('CardNumber'); ?></dt>
        <dd>
            <?php echo h($card['Card']['cardNumber']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('EName'); ?></dt>
        <dd>
            <?php echo h($card['Card']['eName']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('JName'); ?></dt>
        <dd>
            <?php echo h($card['Card']['jName']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rarity'); ?></dt>
        <dd>
            <?php echo h($card['Card']['rarity']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Type'); ?></dt>
        <dd>
            <?php echo h($card['Card']['type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('MaxLvl'); ?></dt>
        <dd>
            <?php echo h($card['Card']['maxLvl']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('AwkMaxLvl'); ?></dt>
        <dd>
            <?php echo h($card['Card']['awkMaxLvl']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('BaseLife'); ?></dt>
        <dd>
            <?php echo h($card['Card']['baseLife']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('BaseVocal'); ?></dt>
        <dd>
            <?php echo h($card['Card']['baseVocal']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('BaseDance'); ?></dt>
        <dd>
            <?php echo h($card['Card']['baseDance']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('BaseVisual'); ?></dt>
        <dd>
            <?php echo h($card['Card']['baseVisual']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('BaseMaxLife'); ?></dt>
        <dd>
            <?php echo h($card['Card']['baseMaxLife']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('BaseMaxVocal'); ?></dt>
        <dd>
            <?php echo h($card['Card']['baseMaxVocal']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('BaseMaxDance'); ?></dt>
        <dd>
            <?php echo h($card['Card']['baseMaxDance']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('BaseMaxVisual'); ?></dt>
        <dd>
            <?php echo h($card['Card']['baseMaxVisual']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('AwkBaseLife'); ?></dt>
        <dd>
            <?php echo h($card['Card']['awkBaseLife']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('AwkBaseVocal'); ?></dt>
        <dd>
            <?php echo h($card['Card']['awkBaseVocal']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('AwkBaseDance'); ?></dt>
        <dd>
            <?php echo h($card['Card']['awkBaseDance']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('AwkBaseVisual'); ?></dt>
        <dd>
            <?php echo h($card['Card']['awkBaseVisual']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('AwkMaxLife'); ?></dt>
        <dd>
            <?php echo h($card['Card']['awkMaxLife']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('AwkMaxVocal'); ?></dt>
        <dd>
            <?php echo h($card['Card']['awkMaxVocal']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('AwkMaxDance'); ?></dt>
        <dd>
            <?php echo h($card['Card']['awkMaxDance']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('AwkMaxVisual'); ?></dt>
        <dd>
            <?php echo h($card['Card']['awkMaxVisual']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('CenterSkillName'); ?></dt>
        <dd>
            <?php echo h($card['Card']['centerSkillName']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('CenterSkillText'); ?></dt>
        <dd>
            <?php echo h($card['Card']['centerSkillText']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('SpecialSkillType'); ?></dt>
        <dd>
            <?php echo h($card['Card']['specialSkillType']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('SpecialSkillText'); ?></dt>
        <dd>
            <?php echo h($card['Card']['specialSkillText']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('BaseArt'); ?></dt>
        <dd>
            <?php echo h($card['Card']['baseArt']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('AwkArt'); ?></dt>
        <dd>
            <?php echo h($card['Card']['awkArt']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
