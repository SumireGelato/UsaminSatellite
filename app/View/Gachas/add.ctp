<?php
$this->set('title_for_layout', 'Add Gacha');
?>
<div class="row container">
    <div class="col-lg-12">
        <h3>Add Gacha</h3>
    </div>
</div>
<div class="row container">
    <div class="col-lg-4"><?php echo $this->Html->link(__('Gacha List'), array('action' => 'adminindex'), array('class' => 'noLinkStyle')); ?></div>
    <div class="col-lg-4"><?php echo $this->Html->link(__('Back to Control Panel'), array('controller' => 'users', 'action' => 'controlpanel'), array('class' => 'noLinkStyle')); ?></div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php
        echo $this->Form->create('Gacha', array(
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
            echo '<div class="col-lg-4">';
            echo $this->Form->input('eName');
            echo $this->Form->input('jName');
            echo '</div>';
            echo '<div class="col-lg-4">';
            echo $this->Form->input('dateStart', array('type' => 'text', 'class' => 'form-control', 'id' => 'beginPicker'));
            echo $this->Form->input('dateFinish', array('type' => 'text', 'class' => 'form-control', 'id' => 'finishPicker'));
            echo '</div>';
            echo '<div class="col-lg-4">';
            echo $this->Form->input('pic', array('type' => 'file'));
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

        var $begin = $( "#beginPicker" );
        var $finish = $( "#finishPicker" );

        $begin.filthypillow( {
            startStep: "month"
        } );

        $begin.on( "focus", function( ) {
            $begin.filthypillow( "show" );
        } );

        $begin.on( "fp:save", function( e, dateObj ) {
            $begin.val( dateObj.format( "YYYY-MM-DD HH:mm:ss" ) );
            $begin.filthypillow( "hide" );
        } );

        $finish.filthypillow( {
            startStep: "month"
        } );

        $finish.on( "focus", function( ) {
            $finish.filthypillow( "show" );
        } );

        $finish.on( "fp:save", function( e, dateObj ) {
            $finish.val( dateObj.format( "YYYY-MM-DD HH:mm:ss" ) );
            $finish.filthypillow( "hide" );
        } );
    });

</script>
