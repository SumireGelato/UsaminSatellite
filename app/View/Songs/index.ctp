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
        <div class="always">
            <?php foreach($songs as $song) {
                echo '<div>'.$this->Html->image('songs/'.$song['Song']['coverArt']).'</div>';
            } ?>
        </div>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-lg-12">
        <div class="limited">
            <?php foreach($songs as $song) {
                echo '<div>'.$this->Html->image('songs/'.$song['Song']['coverArt']).'</div>';
            } ?>
        </div>
    </div>
</div>

<script>
    $('.always').slick({
        centerMode: true,
        centerPadding: '30px',
        slidesToShow: 3,
        variableWidth: true,
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
    });
</script>

