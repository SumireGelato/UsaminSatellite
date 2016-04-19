<?php
if ($this->request->is('post')) {
    echo json_encode($song['Song']);
} else {
if (!$this->request->is('ajax'))
{//Page Title
$this->set('title_for_layout', 'Usamin S@tellite | Songs List');
?>
<div class="row text-center center-block">
<div class="col-xs-12 col-lg-8">
<div class="row">
    <div class="col-lg-12">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist" id="songTabs">
            <li role="presentation" class="active"><a href="#always" aria-controls="Always" role="tab" data-toggle="tab">Regular</a>
            </li>
            <li role="presentation"><a href="#limited" aria-controls="Weekday" role="tab" data-toggle="tab">Limited</a></li>
            <li role="presentation"><a href="#unavailable" aria-controls="Unavailable" role="tab" data-toggle="tab">Unavailable</a>
            </li>
        </ul>
    </div>
</div>
<div class="row songsTab">
<!-- Tab panes -->
<div class="tab-content">
<?php
} //end stuff need if not ajax
if ($type == 'Always'){
?>
<div role="tabpanel" class="tab-pane fade in active" id="always">
<?php }else{ ?>
<div role="tabpanel" class="tab-pane fade" id="always">
    <?php } ?>
    <div class="row row-centered">
        <?php
        if ($type == 'Always') {
            ?>
        <div class="row row-centered">
            <button class="btn btn-default active" type="button" data-toggle="collapse" data-target="#cute" aria-expanded="false"
                    aria-controls="sunday" aria-pressed="false" autocomplete="off">
                Cute
            </button>
            <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#cool" aria-expanded="false"
                    aria-controls="monday" aria-pressed="false" autocomplete="off">
                Cool
            </button>
            <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#passion" aria-expanded="false"
                    aria-controls="tuesday" aria-pressed="false" autocomplete="off">
                Passion
            </button>
            <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#all" aria-expanded="false"
                    aria-controls="tuesday" aria-pressed="false" autocomplete="off">
                Rainbow (All Types)
            </button>
        </div>
        <div class="row row-centered collapse in" id="cute">
            <?php
            foreach ($songs as $song) {
                if($song['Song']['type'] == 'Cute') {
                    ?>
                    <div class="col-xs-6 col-sm-4 col-lg-3 col-xxl-2 col-centered" style="padding: 0">
                        <?php echo $this->Html->image('songs/' . $song['Song']['coverArt'],
                            array('class' => 'img-responsive cover center-block', 'data-id' => $song['Song']['id'])) ?>
                    </div>
                <?php
                }
            }
            ?>
        </div>
        <div class="row row-centered collapse" id="cool">
            <?php
            foreach ($songs as $song) {
                if($song['Song']['type'] == 'Cool') {
                    ?>
                    <div class="col-xs-6 col-sm-4 col-lg-3 col-xxl-2 col-centered" style="padding: 0">
                        <?php echo $this->Html->image('songs/' . $song['Song']['coverArt'],
                            array('class' => 'img-responsive cover center-block', 'data-id' => $song['Song']['id'])) ?>
                    </div>
                <?php
                }
            }
            ?>
        </div>
        <div class="row row-centered collapse" id="passion">
            <?php
            foreach ($songs as $song) {
                if($song['Song']['type'] == 'Passion') {
                    ?>
                    <div class="col-xs-6 col-sm-4 col-lg-3 col-xxl-2 col-centered" style="padding: 0">
                        <?php echo $this->Html->image('songs/' . $song['Song']['coverArt'],
                            array('class' => 'img-responsive cover center-block', 'data-id' => $song['Song']['id'])) ?>
                    </div>
                <?php
                }
            }
            ?>
        </div>
        <div class="row row-centered collapse" id="all">
            <?php
            foreach ($songs as $song) {
                if($song['Song']['type'] == 'All') {
                    ?>
                    <div class="col-xs-6 col-sm-4 col-lg-3 col-xxl-2 col-centered" style="padding: 0">
                        <?php echo $this->Html->image('songs/' . $song['Song']['coverArt'],
                            array('class' => 'img-responsive cover center-block', 'data-id' => $song['Song']['id'])) ?>
                    </div>
                <?php
                }
            }
            ?>
        </div>
        <?php
        }
        ?>
        </div>
    </div>
</div>
<?php
if ($type == 'Weekday'){
?>
<div role="tabpanel" class="tab-pane fade in active" id="limited">
<?php }else{ ?>
<div role="tabpanel" class="tab-pane fade" id="limited">
<?php
}
if ($type == 'Weekday') {
    ?>
    <div class="row row-centered">
        <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#Sunday" aria-expanded="false"
                aria-controls="Sunday" aria-pressed="false" autocomplete="off">
            Sunday
        </button>
        <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#Monday" aria-expanded="false"
                aria-controls="Monday" aria-pressed="false" autocomplete="off">
            Monday
        </button>
        <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#Tuesday" aria-expanded="false"
                aria-controls="Tuesday" aria-pressed="false" autocomplete="off">
            Tuesday
        </button>
        <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#Wednesday" aria-expanded="false"
                aria-controls="Wednesday" aria-pressed="false" autocomplete="off">
            Wednesday
        </button>
        <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#Thursday" aria-expanded="false"
                aria-controls="Thursday" aria-pressed="false" autocomplete="off">
            Thursday
        </button>
        <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#Friday" aria-expanded="false"
                aria-controls="Friday" aria-pressed="false" autocomplete="off">
            Friday
        </button>
        <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#Saturday" aria-expanded="false"
                aria-controls="Saturday" aria-pressed="false" autocomplete="off">
            Saturday
        </button>
        <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#other" aria-expanded="false"
                aria-controls="Other" aria-pressed="false" autocomplete="off">
            Other
        </button>
    </div>
    <div class="row row-centered collapse" id="Sunday">
        <?php
        foreach ($songs as $song) {
            $currentSongArray = explode('/', $song['Song']['availability']);
            $currentSongAvailability = $currentSongArray[0];
            $numElements = sizeof($currentSongArray) - 1;
            $currentSongAvailDetails = array();
            for ($i = 1; $i <= $numElements; $i++) {
                $currentSongAvailDetails[] = $currentSongArray[$i];
            }
            if ($currentSongAvailability == 'Weekday' && in_array('Sunday', $currentSongAvailDetails)) {
                ?>
                <div class="col-xs-6 col-sm-4 col-lg-3 col-xxl-2 col-centered" style="padding: 0;">
                    <?php echo $this->Html->image('songs/' . $song['Song']['coverArt'],
                        array('class' => 'img-responsive cover center-block', 'data-id' => $song['Song']['id'])) ?>
                </div>
            <?php
            }
        }
        ?>
    </div>
    <div class="row row-centered collapse" id="Monday">
        <?php
        foreach ($songs as $song) {
            $currentSongArray = explode('/', $song['Song']['availability']);
            $currentSongAvailability = $currentSongArray[0];
            $numElements = sizeof($currentSongArray) - 1;
            $currentSongAvailDetails = array();
            for ($i = 1; $i <= $numElements; $i++) {
                $currentSongAvailDetails[] = $currentSongArray[$i];
            }
            if ($currentSongAvailability == 'Weekday' && in_array('Monday', $currentSongAvailDetails)) {
                ?>
                <div class="col-xs-6 col-sm-4 col-lg-3 col-xxl-2 col-centered" style="padding: 0">
                    <?php echo $this->Html->image('songs/' . $song['Song']['coverArt'],
                        array('class' => 'img-responsive cover center-block', 'data-id' => $song['Song']['id'])) ?>
                </div>
            <?php
            }
        }
        ?>
    </div>
    <div class="row row-centered collapse" id="Tuesday">
        <?php
        foreach ($songs as $song) {
            $currentSongArray = explode('/', $song['Song']['availability']);
            $currentSongAvailability = $currentSongArray[0];
            $numElements = sizeof($currentSongArray) - 1;
            $currentSongAvailDetails = array();
            for ($i = 1; $i <= $numElements; $i++) {
                $currentSongAvailDetails[] = $currentSongArray[$i];
            }
            if ($currentSongAvailability == 'Weekday' && in_array('Tuesday', $currentSongAvailDetails)) {
                ?>
                <div class="col-xs-6 col-sm-4 col-lg-3 col-xxl-2 col-centered" style="padding: 0">
                    <?php echo $this->Html->image('songs/' . $song['Song']['coverArt'],
                        array('class' => 'img-responsive cover center-block', 'data-id' => $song['Song']['id'])) ?>
                </div>
            <?php
            }
        }
        ?>
    </div>
    <div class="row row-centered collapse" id="Wednesday">
        <?php
        foreach ($songs as $song) {
            $currentSongArray = explode('/', $song['Song']['availability']);
            $currentSongAvailability = $currentSongArray[0];
            $numElements = sizeof($currentSongArray) - 1;
            $currentSongAvailDetails = array();
            for ($i = 1; $i <= $numElements; $i++) {
                $currentSongAvailDetails[] = $currentSongArray[$i];
            }
            if ($currentSongAvailability == 'Weekday' && in_array('Wednesday', $currentSongAvailDetails)) {
                ?>
                <div class="col-xs-6 col-sm-4 col-lg-3 col-xxl-2 col-centered" style="padding: 0">
                    <?php echo $this->Html->image('songs/' . $song['Song']['coverArt'],
                        array('class' => 'img-responsive cover center-block', 'data-id' => $song['Song']['id'])) ?>
                </div>
            <?php
            }
        }
        ?>
    </div>
    <div class="row row-centered collapse" id="Thursday">
        <?php
        foreach ($songs as $song) {
            $currentSongArray = explode('/', $song['Song']['availability']);
            $currentSongAvailability = $currentSongArray[0];
            $numElements = sizeof($currentSongArray) - 1;
            $currentSongAvailDetails = array();
            for ($i = 1; $i <= $numElements; $i++) {
                $currentSongAvailDetails[] = $currentSongArray[$i];
            }
            if ($currentSongAvailability == 'Weekday' && in_array('Thursday', $currentSongAvailDetails)) {
                ?>
                <div class="col-xs-6 col-sm-4 col-lg-3 col-xxl-2 col-centered" style="padding: 0">
                    <?php echo $this->Html->image('songs/' . $song['Song']['coverArt'],
                        array('class' => 'img-responsive cover center-block', 'data-id' => $song['Song']['id'])) ?>
                </div>
            <?php
            }
        }
        ?>
    </div>
    <div class="row row-centered collapse" id="Friday">
        <?php
        foreach ($songs as $song) {
            $currentSongArray = explode('/', $song['Song']['availability']);
            $currentSongAvailability = $currentSongArray[0];
            $numElements = sizeof($currentSongArray) - 1;
            $currentSongAvailDetails = array();
            for ($i = 1; $i <= $numElements; $i++) {
                $currentSongAvailDetails[] = $currentSongArray[$i];
            }
            if ($currentSongAvailability == 'Weekday' && in_array('Friday', $currentSongAvailDetails)) {
                ?>
                <div class="col-xs-6 col-sm-4 col-lg-3 col-xxl-2 col-centered" style="padding: 0">
                    <?php echo $this->Html->image('songs/' . $song['Song']['coverArt'],
                        array('class' => 'img-responsive cover center-block', 'data-id' => $song['Song']['id'])) ?>
                </div>
            <?php
            }
        }
        ?>
    </div>
    <div class="row row-centered collapse" id="Saturday">
        <?php
        foreach ($songs as $song) {
            $currentSongArray = explode('/', $song['Song']['availability']);
            $currentSongAvailability = $currentSongArray[0];
            $numElements = sizeof($currentSongArray) - 1;
            $currentSongAvailDetails = array();
            for ($i = 1; $i <= $numElements; $i++) {
                $currentSongAvailDetails[] = $currentSongArray[$i];
            }
            if ($currentSongAvailability == 'Weekday' && in_array('Saturday', $currentSongAvailDetails)) {
                ?>
                <div class="col-xs-6 col-sm-4 col-lg-3 col-xxl-2 col-centered" style="padding: 0">
                    <?php echo $this->Html->image('songs/' . $song['Song']['coverArt'],
                        array('class' => 'img-responsive cover center-block', 'data-id' => $song['Song']['id'])) ?>
                </div>
            <?php
            }
        }
        ?>
    </div>
    <div class="row row-centered collapse" id="other">
        <?php
        foreach ($songs as $song) {
            $currentSongArray = explode('/', $song['Song']['availability']);
            $currentSongAvailability = $currentSongArray[0];
            if ($currentSongAvailability == 'Limited') {
                ?>
                <div class="col-xs-6 col-sm-4 col-lg-3 col-xxl-2 col-centered" style="padding: 0">
                    <?php echo $this->Html->image('songs/' . $song['Song']['coverArt'],
                        array('class' => 'img-responsive cover center-block', 'data-id' => $song['Song']['id'])) ?>
                </div>
            <?php
            }
        }
        ?>
    </div>
<?php } ?>
</div>
<?php
if ($type == 'Unavailable'){
?>
<div role="tabpanel" class="tab-pane fade in active" id="unavailable">
    <?php }else{ ?>
    <div role="tabpanel" class="tab-pane fade" id="unavailable">
        <?php } ?>
        <div class="row row-centered">
            <?php
            if ($type == 'Unavailable') {
                foreach ($songs as $song) {
                    ?>
                    <div class="col-xs-6 col-sm-4 col-lg-3 col-xxl-2 col-centered" style="padding: 0">
                        <?php echo $this->Html->image('songs/' . $song['Song']['coverArt'],
                            array('class' => 'img-responsive cover center-block', 'data-id' => $song['Song']['id'])) ?>
                    </div>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
</div>
</div>
<?php if (!$this->request->is('ajax')) { ?>
<div class="col-xs-12 col-lg-4 text-center center-block">
    <div class="row panel panel-default" id="songInfo">
        <div class="panel-heading">
            <span id="removeInfo" class="glyphicon glyphicon-remove pull-right" aria-hidden="true"></span>
            <strong class="panel-title">Click on a Song for more information!</strong>
        </div>
        <div class="panel-body">
            <div class="row text-center">
                <div class="col-lg-12" id="unlock"></div>
            </div>
            <div class="row text-center">
                <div class="col-lg-12" id="bpm"></div>
            </div>
            <strong class="hidden" id="statHeading">Song Difficulty Information</strong>

            <div class="row text-center hidden" id="statButtons">
                <div class="btn-group" data-toggle="buttons" style="padding-bottom: 5px">
                    <label class="btn btn-default" id="debut">
                        <input type="radio" name="options" id="option1" autocomplete="off"> Debut
                    </label>
                    <label class="btn btn-default" id="regular">
                        <input type="radio" name="options" id="option2" autocomplete="off"> Regular
                    </label>
                    <label class="btn btn-default" id="pro">
                        <input type="radio" name="options" id="option3" autocomplete="off"> Pro
                    </label>
                    <label class="btn btn-default" id="master">
                        <input type="radio" name="options" id="option4" autocomplete="off"> Master
                    </label>
                </div>
            </div>
            <div class="row text-center hidden" id="stats">
                <div class="col-xs-4 col-lg-4 stats" id="statLevel"></div>
                <div class="col-xs-4 col-lg-4 stats" id="statStam"></div>
                <div class="col-xs-4 col-lg-4 stats" id="statNotes"></div>
            </div>
            <div class="row text-center hidden" id="position"></div>
            <div class="row text-center hidden" id="coverSources">
                <div class="col-xs-6 col-lg-6">
                    <a href="" class="coverLink" target="_blank">Full Size Cover <span class="glyphicon glyphicon-new-window"
                                                                                       aria-hidden="true"></span></a>
                </div>
                <div class="col-xs-6 col-lg-6">
                    <strong>Sources & Lyrics: </strong>

                    <p><?php echo $this->Html->link('Project Im@s Wiki', 'http://www.project-imas.com/wiki/',
                            array('target' => '_blank', 'class' => 'engWiki')); ?></p>

                    <p><?php echo $this->Html->link('Starlight Stage JP Wiki', 'http://imascg-slstage-wiki.gamerch.com/',
                            array('target' => '_blank', 'class' => 'jpWiki')); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

    <script>
        $(document).ready(function () {
            //Song Filter
            $('.songsTab').on('click', '[type="button"]', function () {
                $('[type="button"]').removeClass('active');
                $(this).toggleClass('active');
                $('.collapse').removeClass('in');
            });

            //Song Type Tabs
            var $songTab = $('#songTabs');
            $songTab.find('a').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
                var typeClicked = $(this).attr('aria-controls');
                var baseUrl = [location.protocol, '//', location.host, location.pathname].join('');
                var fullUrl = baseUrl + "?type=" + typeClicked;
                $.get(fullUrl, function (data) {
                    $('.tab-content').html(data);
                    if(typeClicked == 'Weekday') {
                        var today = moment().tz("Asia/Tokyo").format('dddd');
                        $('[aria-controls='+today+']').addClass('active');
                        $('#'+today).addClass('in');
                    }
                });
            });

            //hide info box for mobiles
            $('#songInfo').on('click', '#removeInfo', function () {
                $('#songInfo').addClass('hidden');
            });

            //Song InfoBox
            $('.mobileOnly').on('click', 'img.cover', function (e) {
                var id = $(this).data('id');
                var baseUrl = [location.protocol, '//', location.host, location.pathname].join('');
                var host = [location.protocol, '//', location.host].join('');
                $.post(baseUrl, {id: id}, function (data) {
                    var $songInfo = $('#songInfo');
                    $songInfo.removeClass('hidden');
                    switch (data.type) {
                        case 'Cute':
                            if ($songInfo.find('img').length > 0) {//CHANGE THIS LATER
                                $songInfo.find('img').attr("src", host + "/img/cute.png")
                            } else {
                                $songInfo.find('strong.panel-title').before('<img src="' + host + '/Satelite/img/cute.png" height="28px" ' +
                                'width="28px"/>');
                            }
                            $songInfo.removeClass("panel-default").addClass("panel-danger");
                            $songInfo.removeClass("panel-info").addClass("panel-danger");
                            $songInfo.removeClass("panel-warning").addClass("panel-danger");
                            $songInfo.find(".btn").removeClass("btn-default").addClass("btn-cute");
                            $songInfo.find(".btn").removeClass("btn-cool").addClass("btn-cute");
                            $songInfo.find(".btn").removeClass("btn-passion").addClass("btn-cute");
                            break;
                        case 'Cool':
                            if ($songInfo.find('img').length > 0) {
                                $songInfo.find('img').attr("src", host + "/img/cool.png")
                            } else {
                                $songInfo.find('strong.panel-title').before('<img src="' + host + '/Satelite/img/cool.png" height="28px" ' +
                                'width="28px"/>');
                            }
                            $songInfo.removeClass("panel-default").addClass("panel-info");
                            $songInfo.removeClass("panel-danger").addClass("panel-info");
                            $songInfo.removeClass("panel-warning").addClass("panel-info");
                            $songInfo.find(".btn").removeClass("btn-default").addClass("btn-cool");
                            $songInfo.find(".btn").removeClass("btn-cute").addClass("btn-cool");
                            $songInfo.find(".btn").removeClass("btn-passion").addClass("btn-cool");
                            break;
                        case 'Passion':
                            if ($songInfo.find('img').length > 0) {
                                $songInfo.find('img').attr("src", host + "/img/passion.png")
                            } else {
                                $songInfo.find('strong.panel-title').before('<img src="' + host + '/Satelite/img/passion.png" ' +
                                'height="28px" width="28px"/>');
                            }
                            $songInfo.removeClass("panel-default").addClass("panel-warning");
                            $songInfo.removeClass("panel-danger").addClass("panel-warning");
                            $songInfo.removeClass("panel-info").addClass("panel-warning");
                            $songInfo.find(".btn").removeClass("btn-default").addClass("btn-passion");
                            $songInfo.find(".btn").removeClass("btn-cute").addClass("btn-passion");
                            $songInfo.find(".btn").removeClass("btn-cool").addClass("btn-passion");
                            break;
                        default:
                            if ($songInfo.find('img').length > 0) {
                                $songInfo.find('img').attr("src", host + "/img/all.png")
                            } else {
                                $songInfo.find('strong.panel-title').before('<img src="' + host + '/Satelite/img/all.png" height="28px" ' +
                                'width="28px"/>');
                            }
                            $songInfo.removeClass("panel-danger").addClass("panel-default");
                            $songInfo.removeClass("panel-info").addClass("panel-default");
                            $songInfo.removeClass("panel-warning").addClass("panel-default");
                            $songInfo.find(".btn").removeClass("btn-cute").addClass("btn-default");
                            $songInfo.find(".btn").removeClass("btn-cool").addClass("btn-default");
                            $songInfo.find(".btn").removeClass("btn-passion").addClass("btn-default");
                            break;
                    }
                    $songInfo.find('strong.panel-title').html('<br/>' + data.eName + '<br/>' + '<em>' + data.jName + '</em>' +
                    '<p style="font-weight: normal">' + data.translated + '</p>');
                    $('#unlock').html('<strong>Unlock Condition:</strong><p>' + data.unlockCon + '</p>');
                    $('#bpm').html('<strong>BPM:</strong><p>' + data.bpm + '</p>');
                    var $statButtons = $('#statButtons');
                    $statButtons.removeClass('hidden');
                    $statButtons.find("label").removeClass('active');
                    $('#statHeading').removeClass('hidden');
                    $('#stats').addClass('hidden');
                    $songInfo.on("click", "label#debut", function () {
                        $('#stats').removeClass('hidden');
                        $('#statLevel').html('<strong>Star Level</strong><p>' + data.debutLvl + '</p>');
                        $('#statStam').html('<strong>Stamina Cost</strong><p>' + data.debutStam + '</p>');
                        $('#statNotes').html('<strong>Total Notes</strong><p>' + data.debutNotes + '</p>');
                    });
                    $songInfo.on("click", "label#regular", function () {
                        $('#stats').removeClass('hidden');
                        $('#statLevel').html('<strong>Star Level</strong><p>' + data.regLvl + '</p>');
                        $('#statStam').html('<strong>Stamina Cost</strong><p>' + data.regStam + '</p>');
                        $('#statNotes').html('<strong>Total Notes</strong><p>' + data.regNotes + '</p>');
                    });
                    $songInfo.on("click", "label#pro", function () {
                        $('#stats').removeClass('hidden');
                        $('#statLevel').html('<strong>Star Level</strong><p>' + data.proLvl + '</p>');
                        $('#statStam').html('<strong>Stamina Cost</strong><p>' + data.proStam + '</p>');
                        $('#statNotes').html('<strong>Total Notes</strong><p>' + data.proNotes + '</p>');
                    });
                    $songInfo.on("click", "label#master", function () {
                        $('#stats').removeClass('hidden');
                        $('#statLevel').html('<strong>Star Level</strong><p>' + data.masterLvl + '</p>');
                        $('#statStam').html('<strong>Stamina Cost</strong><p>' + data.masterStam + '</p>');
                        $('#statNotes').html('<strong>Total Notes</strong><p>' + data.masterNotes + '</p>');
                    });
                    var $position = $('#position');
                    $position.removeClass('hidden');
                    if(!data.artist) {
                        $position.html('<strong>MV Position:</strong><p>Unknown</p>');
                    } else {
                        $position.html('<strong>MV Position:</strong><p>' + data.artist + '</p>');
                    }
                    var $coverSources = $('#coverSources');
                    $coverSources.removeClass('hidden');//CHANGE THIS LATER
                    $coverSources.find('a.coverLink').attr("href", host + "/img/songs/"+data.coverArt);
                    $coverSources.find('a.engWiki').attr("href", "http://www.project-imas.com/wiki/THE_iDOLM@STER_Cinderella_Girls:_Starlight_Stage");
                    $coverSources.find('a.jpWiki').attr("href", "http://imascg-slstage-wiki.gamerch.com/" + data.jName);
                }, 'json');
            });
        });
    </script>
<?php
}
}?>
