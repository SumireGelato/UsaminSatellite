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
    <div class="ContentFlow" id="always">
        <div class="flow">
            <?php foreach($songs as $song) {
                echo $this->Html->image('songs/'.$song['Song']['coverArt'], array('class' => 'item', 'title' => $song['Song']['eName'],
                    'data-id' => $song['Song']['id']));
            } ?>
        </div>
        <div class="scrollbar"><div class="slider"></div></div>
        <div class="globalCaption"></div>
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
            <div class="scrollbar"><div class="slider"></div></div>
        </div>
    </div>
</div>
<script>
    var myNewFlow1 = new ContentFlow('always', {
//        maxItemHeight: 264,
        startItem: 'start',
        scrollWheelSpeed: 0,
        reflectionHeight: 0,
        onMakeActive: function(item) {
            console.log($(item.element).find('img').data('id'));
        },
        onclickActiveItem: function(item) { }
    } ) ;
    var myNewFlow2 = new ContentFlow('limited', { scrollWheelSpeed: 0 } ) ;
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

