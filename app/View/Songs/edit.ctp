<?php
$this->set('title_for_layout', 'Edit Song');
?>
<div class="row container">
    <div class="col-lg-12">
        <h3>Edit Song</h3>
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
            echo $this->Form->input('id');
            echo '<div class="row">';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('eName');
            echo $this->Form->input('jName');
            echo $this->Form->input('translated');
            $options = array('All' => 'All', 'Cute' => 'Cute', 'Cool' => 'Cool', 'Passion' => 'Passion');
            echo $this->Form->input('type', array('options' => $options));
            echo '</div>';
            echo '<div class="col-lg-3">';
            $options = array('Solo' => 'Random Positions', 'Unit' => 'Set Positions');
            echo $this->Form->input('artistDropdown', array('options' => $options, 'empty' => ''));
            echo $this->Form->input('artist');
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
            if($this->request->data['Song']['availDropdown'] == 'Weekday') {
                echo '<div class="fieldSwitch">';
                $weekdays = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
                $size = sizeof($weekdays);
                for($i=0;$i<$size;$i++) {
                    if(in_array($weekdays[$i], $this->request->data['Song']['availDetails'])) {
                        echo '<label><input type="checkbox" name="data[Song][availDetails]['.$weekdays[$i].']" value="'.$weekdays[$i].'"
                        id="SongDay'.$i.'" checked/>'.$weekdays[$i].'</label>';
                    } else {
                        echo '<label><input type="checkbox" name="data[Song][availDetails]['.$weekdays[$i].']" value="'.$weekdays[$i].'"
                        id="SongDay'.$i.'"/>'.$weekdays[$i].'</label>';
                    }
                }
                echo '</div>';
                ?>
            <?php
            } else if(!empty($this->request->data['Song']['availDetails']['comment'])) {
                ?>
                <label for="SongComment">Comment</label>
                <input name="data[Song][availDetails][comment]" value="<?php echo $this->request->data['Song']['availDetails']['comment']; ?>"
                type="text" class="form-control fieldSwitch" id="SongComment" />
            <?php
            }
            else {
                echo '<div class="fieldSwitch"></div>';
            }
            echo '</div>';
            echo '</div>';
            echo '<div class="col-lg-3">';
            echo $this->Form->input('dateAdded', array('type' => 'text', 'class' => 'form-control', 'id' => 'datepicker'));
            echo $this->Form->input('coverArt', array('type' => 'file'));
            echo 'Current filename is: '.$this->request->data['Song']['coverArt'];
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
                $('.fieldSwitch').empty().append(
                    '<div class="fieldSwitch">' +
                    '<label><input type="checkbox" name="data[Song][availDetails][sunday]" value="Sunday" id="SongDay1" />Sunday</label>' +
                    '<label><input type="checkbox" name="data[Song][availDetails][monday]" value="Monday" id="SongDay2" />Monday</label>' +
                    '<label><input type="checkbox" name="data[Song][availDetails][tuesday]" value="Tuesday" id="SongDay3" />Tuesday</label>' +
                    '<label><input type="checkbox" name="data[Song][availDetails][wednesday]" value="Wednesday" id="SongDay4" />Wednesday</label>' +
                    '<label><input type="checkbox" name="data[Song][availDetails][thursday]" value="Thursday" id="SongDay5" />Thursday</label>' +
                    '<label><input type="checkbox" name="data[Song][availDetails][friday]" value="Friday" id="SongDay6" />Friday</label>' +
                    '<label><input type="checkbox" name="data[Song][availDetails][saturday]" value="Saturday" id="SongDay7" />Saturday</label>' +
                    '</div>'
                );
            } else {
                $('.fieldSwitch').empty().append(
                    '<label for="SongComment">Comment</label>' +
                    '<input name="data[Song][availDetails][comment]" type="text" class="form-control fieldSwitch" id="SongComment" />'
                );
            }
        });
    });

    //Datepicker & artist
    $(function () {

        $('#SongArtistDropdown').on("change", function() {
            var selected = $(this).find("option:selected").val();
            if(selected == "Unit") {
                $('#SongArtist').val("?|?|?|?|?");
            }
        });

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
