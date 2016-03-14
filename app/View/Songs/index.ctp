<?php
//Page Title
$this->set('title_for_layout', 'Usamin S@telite | Songs List');
?>
<div class="row">
    <div class="col-lg-12 text-center">
        <h1>Regular Songs</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="ContentFlow" id="always">
            <div class="loadIndicator"><div class="indicator"></div></div>
            <div class="flow">
                <?php foreach($songs as $song) {
                    echo $this->Html->image('songs/'.$song['Song']['coverArt'], array('class' => 'item', 'title' => $song['Song']['eName']));
                } ?>
            </div>
            <div class="globalCaption"></div>
            <div class="scrollbar"><div class="slider"><div class="position"></div></div></div>
        </div>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-lg-12">
        <div class="ContentFlow" id="limited">
            <div class="loadIndicator"><div class="indicator"></div></div>
            <div class="flow">
                <?php foreach($songs as $song) {
                    echo $this->Html->image('songs/'.$song['Song']['coverArt'], array('class' => 'item', 'title' => $song['Song']['eName']));
                } ?>
            </div>
            <div class="globalCaption"></div>
            <div class="scrollbar"><div class="slider"><div class="position"></div></div></div>
        </div>
    </div>
</div>
<script>
    var myNewFlow1 = new ContentFlow('always', { reflectionHeight: 0, scrollWheelSpeed: 0 } ) ;
    var myNewFlow2 = new ContentFlow('limited', { reflectionHeight: 0, scrollWheelSpeed: 0 } ) ;
    /*$('.always').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.limited').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });*/
</script>

