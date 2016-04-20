<?php
$this->set('title_for_layout', 'Edit Gacha');
?>
<div class="row container">
    <div class="col-lg-12">
        <h3>Edit Gacha</h3>
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
            echo $this->Form->input('id');
            echo '<div class="row">';
                echo '<div class="col-lg-4">';
                    echo $this->Form->input('eName');
                    echo $this->Form->input('jName');
                echo '</div>';
                echo '<div class="col-lg-4">';
                    echo $this->Form->input('dateStart', array('type' => 'text', 'class' => 'form-control', 'id' => 'beginPicker'));
                    echo $this->Form->input('dateFinish', array('type' => 'text', 'class' => 'form-control', 'id' => 'finishPicker'));
                    echo '<p class="pull-right">Format: Date-Type|Date-Type|etc...</p>';
                echo '</div>';
                echo '<div class="col-lg-4">';
                    $options = array('Limited' => 'Limited', 'Regular' => 'Regular', 'Box' => 'Box');
                    echo $this->Form->input('type', array('options' => $options));
                    echo $this->Form->input('boxGachaDays');
                    echo $this->Form->input('pic', array('type' => 'file'));
                    echo '<p style="font-size: small">Current filename is: '.$this->request->data['Gacha']['pic'].'</p>';
                ?>
                </div>
            </div>
            <div class="row">
                <h4 style="margin-top: 0; font-weight: bold">Cards in this Gacha
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#addCards">Add Cards</button>
                </h4>
            </div>
            <div class="row">
                <ul class="list-group">
                <?php
                foreach($this->request->data['Card'] as $card) {
                    ?>
                    <div class="col-lg-6">
                        <li class="list-group-item list-group-item-info">
                            <?php
                            echo $card['eName'];
                            echo $this->Form->hidden('Card.add.gacha_id'.$card['id'], array('value' => $card['id']));
                            ?>
                            <button type="button" class="btn btn-default" id="remove">Remove</button>
                        </li>
                    </div>
                <?php
                    }
                ?>
                </ul>
            </div>
            <div class="row"><br/>
                <?php
                echo $this->Form->submit('Save', array(
                    'div' => 'form-group',
                    'class' => 'btn btn-default'
                ));
                echo $this->Form->end(); ?>
            </div>
        </fieldset>
    </div>
</div>

<div class="modal fade" id="addCards" tabindex="-1" role="dialog" aria-labelledby="addCardsLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="addCardsLabel">Add Cards</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12"><h4 style="font-weight: bold">Currently Selected Cards</h4></div>
                </div>
                <div class="row" id="currentlySelected"></div>
                <hr/>
                <div class="table-responsive">
                    <table cellpadding="0" id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Select</th>
                                <th>Card Name</th>
                                <th>Date Added</th>
                                <th>Rarity</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($cards as $card){ ?>
                            <tr>
                                <td><?php echo $this->Form->checkbox('card', array('hiddenField' => false, 'value'=>$card['Card']['id'],
                                        'data-name'=>$card['Card']['eName'])); ?></td>
                                <td><?php echo $card['Card']['eName']; ?></td>
                                <td><?php echo $card['Card']['dateAdded']; ?></td>
                                <td><?php echo $card['Card']['rarity']; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="addToList">Add</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    //remove card
    $(document).ready(function() {
        $("ul.list-group").on("click", "button#remove", function() {
            var id = $(this).closest("li").find("input").attr("value");
            $(this).closest("li").find("input").attr("name", "data[Card][remove][gacha_id"+id+"]");
            $("ul.list-group").append($(this).closest("li").find("input"));
            $(this).parent().parent().remove();
        });
    });
    /**
     * MODAL STUFF BEGINS HERE
     */
    $(document).ready( function () {
        $('#table').DataTable({
            "responsive":     true,
            "order":          [[ 2, 'desc' ], [ 3, 'desc' ]],
            "lengthMenu": [[5, 10, 25, 50], [5, 10, 25, 50]]
        });

        $('div.table-responsive').on('change', '[type="checkbox"]', function() {
            if($(this).is(':checked')){
                $('#currentlySelected').append('<div class="col-xs-6" id='+$(this).attr('value')+'>'+$(this).attr('data-name')+'</div>');
            } else {
                $('#'+$(this).attr('value')).remove();
            }
        });

        $('#addToList').click(function() {
            $('#currentlySelected').children().each(function(index, element) {
                $('.list-group').append(
                    '<div class="col-lg-6">' +
                        '<li class="list-group-item list-group-item-info">' +
                            $(this).text() +
                            '<input name="data[Card][add][gacha_id' + $(this).attr('id') + ']" value="' + $(this).attr('id') + '" ' +
                                'id="CardGachaId' + $(this).attr('id') + '" ' + 'type="hidden">' +
                            '<button type="button" class="btn btn-default" id="remove">Remove</button>' +
                        '</li>' +
                    '</div>');
                $('#addCards').modal('hide');
            });
        });
    });

    //Date picker stuff
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
