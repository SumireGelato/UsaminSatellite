<!-- page title -->
<?php
$this->set('title_for_layout', 'Usamin S@telite | Starlight Stage Resources directly from Planet Usamin!');
?>


<!-- Marketing messaging and featurettes
================================================== -->
<div class="row" id="homeHeading">
    <div class="col-lg-12">
        <h1>Welcome to Usamin S@telite!</h1>
    </div>
    <div class="col-lg-12">
        <h3>The website dedicated to all things <img src="img/gameLogo.png" alt="Game Logo">!</h3>
    </div>
</div>


<!-- 2 Columns of content -->
<div id="pageContent">
    <?php
    $num1 = mt_rand(1, 362); //Cards
    $num2 = mt_rand(1, 11); //Events
    $num3 = mt_rand(1, 46); //Songs
    ?>
    <div class="row">
        <div class="col-lg-4">
            <img class="img-circle"
                 src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                 alt="Generic placeholder image" width="140" height="140">

            <h2>Cards</h2>

            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
                vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo
                cursus magna.</p>

            <p><a class="btn btn-default" href="cards" role="button">Go <span
                        class=" glyphicon glyphicon-chevron-right"></span></a></p>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle"
                 src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                 alt="Generic placeholder image" width="140" height="140">

            <h2>Events</h2>

            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh.</p>

            <p><a class="btn btn-default" href="events" role="button">Go <span
                        class=" glyphicon glyphicon-chevron-right"></span></a></p>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle"
                 src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                 alt="Generic placeholder image" width="140" height="140">

            <h2>Songs</h2>

            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                ut
                fermentum massa justo sit amet risus.</p>

            <p><a class="btn btn-default" href="songs" role="button">Go <span
                        class=" glyphicon glyphicon-chevron-right"></span></a></p>
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider"/>
    <?php
    $num1 = mt_rand(1, 357);
    $num2 = mt_rand(1, 357);
    $num3 = mt_rand(1, 357);
    ?>
    <div class="row">
        <div class="col-lg-2">
            <?php echo $this->Html->image('puchis/' . $num1 . '.png', array('class' => 'img-sqaure', 'alt' => 'Puchi1', 'height' => 180)); ?>
            <h4>About The Game</h4>
        </div>
        <div class="col-lg-2">
            <?php echo $this->Html->image('puchis/' . $num2 . '.png', array('class' => 'img-sqaure', 'alt' => 'Puchi2', 'height' => 180)); ?>
            <h4>About This Website</h4>
        </div>
        <div class="col-lg-2">
            <?php echo $this->Html->image('puchis/' . $num3 . '.png', array('class' => 'img-sqaure', 'alt' => 'Puchi3', 'height' => 180)); ?>
            <h4>Links</h4>
        </div>
        <div class="col-lg-6">
            <div class="newsHeader">Latest News</div>
            <div class="news">
                <p><img src="img/event.png" class="newsItem">blah<span
                        class=" glyphicon glyphicon-chevron-right"></span></p>

                <p><img src="img/site.png" class="newsItem">blah<span class=" glyphicon glyphicon-chevron-right"></span>
                </p>

                <p><img src="img/gacha.png" class="newsItem">blah<span
                        class=" glyphicon glyphicon-chevron-right"></span></p>

                <p><img src="img/game.png" class="newsItem">blah<span class=" glyphicon glyphicon-chevron-right"></span>
                </p>
            </div>
        </div>
    </div>

    <hr class="featurette-divider"/>
</div>

<!-- /END THE FEATURETTES -->