<?php
$this->set('title_for_layout', 'Add Song');
?>
<div class="row container">
    <div class="col-lg-12">
        <h3>Add Song</h3>
    </div>
</div>
<div class="row container">
    <div class="col-lg-4"><?php echo $this->Html->link(__('Song List'), array('action' => 'adminindex'), array('class' => 'noLinkStyle')); ?></div>
    <div class="col-lg-4"><?php echo $this->Html->link(__('Back to Control Panel'), array('controller' => 'users', 'action' => 'controlpanel'), array('class' => 'noLinkStyle')); ?></div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php
        echo $this->Form->create('Song', array(
            'inputDefaults' => array(
                'div' => 'form-group',
                'class' => 'form-control',
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
            echo $this->Form->input('translated');
            echo '</div>';
            echo '<div class="col-lg-3">';
            $options = array('All' => 'All', 'Cute' => 'Cute', 'Cool' => 'Cool', 'Passion' => 'Passion');
            echo $this->Form->input('type', array('options' => $options));
            echo $this->Form->input('bpm', array('type' => 'text'));
            echo $this->Form->input('unlockCon');
            echo '</div>';
            echo '<div class="col-lg-3">';
            //Avail checkboxes
            $options = array(
                'Always' => array(
                    'Always' => 'Always Available',
                    'Limited' => 'Limited(Past Event Song, etc.)'
                ),
                'Sometimes' => array(
                    'Weekday' => 'Limited by weekdays'
                ),
                'Unavailable' => array(
                    'Unavailable - Past Event' => 'Past Event',
                    'Unavailable - Other' => 'Other'
                )
            );
            echo $this->Form->input('availDropdown', array('options' => $options, 'empty' => '', 'id' => 'availDropdown'));
            echo '<div class="form-group">';
            echo '<div id="fieldSwitch"></div>';
            echo '</div>';
            echo '</div>';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('dateAdded', array('type' => 'text', 'class' => 'form-control', 'id' => 'datepicker'));
            echo $this->Form->input('coverArt', array('type' => 'file'));
            echo '</div>';
            echo '</div>';
            echo '<hr/>';
            echo '<div class="row">';
            echo '<div class="col-xs-3">';
            echo $this->Form->input('debutLvl', array('type' => 'text'));
            echo $this->Form->input('debutStam', array('type' => 'text'));
            echo $this->Form->input('debutNotes', array('type' => 'text'));
            echo '</div>';
            echo '<div class="col-xs-3">';
            echo $this->Form->input('regLvl', array('type' => 'text'));
            echo $this->Form->input('regStam', array('type' => 'text'));
            echo $this->Form->input('regNotes', array('type' => 'text'));
            echo '</div>';
            echo '<div class="col-xs-3">';
            echo $this->Form->input('proLvl', array('type' => 'text'));
            echo $this->Form->input('proStam', array('type' => 'text'));
            echo $this->Form->input('proNotes', array('type' => 'text'));
            echo '</div>';
            echo '<div class="col-xs-3">';
            echo $this->Form->input('masterLvl', array('type' => 'text'));
            echo $this->Form->input('masterStam', array('type' => 'text'));
            echo $this->Form->input('masterNotes', array('type' => 'text'));
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
    //Combobox field switching
    $(document).ready(function () {
        $('#availDropdown').change(function () {
            if($(this).val() == 'Weekday') {
                $('#fieldSwitch').empty().append(
                    '<label><input type="checkbox" name="data[Song][availDetails][sunday]" value="Sunday" id="SongDay1" />Sunday</label>' +
                    '<label><input type="checkbox" name="data[Song][availDetails][monday]" value="Monday" id="SongDay2" />Monday</label>' +
                    '<label><input type="checkbox" name="data[Song][availDetails][tuesday]" value="Tuesday" id="SongDay3" />Tuesday</label>' +
                    '<label><input type="checkbox" name="data[Song][availDetails][wednesday]" value="Wednesday" id="SongDay4" />Wednesday</label>' +
                    '<label><input type="checkbox" name="data[Song][availDetails][thursday]" value="Thursday" id="SongDay5" />Thursday</label>' +
                    '<label><input type="checkbox" name="data[Song][availDetails][friday]" value="Friday" id="SongDay6" />Friday</label>' +
                    '<label><input type="checkbox" name="data[Song][availDetails][saturday]" value="Saturday" id="SongDay7" />Saturday</label>'
                );
            } else {
                $('#fieldSwitch').empty().append(
                    '<label for="SongComment">Comment</label>' +
                    '<input name="data[Song][availDetails][comment]" type="text" class="form-control" id="SongComment" />'
                );
            }
        });
    });

    //Datepicker
    $(function () {

        var $added = $( "#datepicker" );

        $added.filthypillow( {
            steps: ["month", "day"],
            startStep: "month",
            calendar: {
                saveOnDateSelect: true
            }
        } );

        $added.on( "focus", function( ) {
            $added.filthypillow( "show" );
        } );

        $added.on( "fp:save", function( e, dateObj ) {
            $added.val( dateObj.format( "YYYY-MM-DD" ) );
            $added.filthypillow( "hide" );
        } );
    });

</script>
