<?php
$this->set('title_for_layout', 'Edit Event');
?>
<div class="row container">
    <div class="col-lg-12">
        <h3>Edit Event</h3>
    </div>
</div>
<div class="row container">
    <div class="col-lg-4"><?php echo $this->Html->link(__('Event List'), array('action' => 'adminindex'), array('class' => 'noLinkStyle')); ?></div>
    <div class="col-lg-4"><?php echo $this->Html->link(__('Back to Control Panel'), array('controller' => 'users', 'action' => 'controlpanel'), array('class' => 'noLinkStyle')); ?></div>
</div>
<div class="row container">
    <div class="col-lg-12">
        <p>Remember to add the song before the event for easier data entry!</p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php
        echo $this->Form->create('Event', array(
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
            echo '<div class="col-lg-4">';
            echo $this->Form->input('eName');
            echo $this->Form->input('jName');
            echo $this->Form->input('begin', array('type' => 'text', 'class' => 'form-control',
                'data-date' => $this->request->data['Event']['begin'], 'id' => 'beginPicker'));
            echo $this->Form->input('finish', array('type' => 'text', 'class' => 'form-control',
                'data-date' => $this->request->data['Event']['finish'], 'id' => 'finishPicker'));
            $options = array('Token' => 'Token', 'Medley' => 'Live Groove', 'Caravan' => 'Cinderella Caravan', 'Coop' => 'Live Party',
                'Parade' => 'Live Parade');
            echo $this->Form->input('type', array('options' => $options));
            echo '</div>';
            echo '<div class="col-lg-4">';
            echo $this->Form->input('song_id', array('options' => $songs, 'empty' => 'No Song'));
            echo '<div class="row">';
            echo '<div class="col-xs-6">';
            echo $this->Form->input('t1', array('type' => 'text'));
            echo $this->Form->input('t2', array('type' => 'text'));
            echo $this->Form->input('t3', array('type' => 'text'));
            echo $this->Form->input('t4', array('type' => 'text'));
            echo '</div>';
            echo '<div class="col-xs-6">';
            echo $this->Form->input('t5', array('type' => 'text'));
            echo $this->Form->input('t6', array('type' => 'text'));
            echo $this->Form->input('t7', array('type' => 'text'));
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '<div class="col-lg-4">';
            echo $this->Form->input('pic', array('type' => 'file'));
            echo '<p style="font-size: small">Current filename is: '.$this->request->data['Event']['pic'].'</p>';

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
            initialDateTime: function( m ) {
                return moment($('#beginPicker').data('date'));
            },
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
            initialDateTime: function( m ) {
                return moment($('#finishPicker').data('date'));
            },
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
