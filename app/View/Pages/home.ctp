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
<!--<div id="pageContent">-->
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

        <h4>Don't know what your new SSR does? Trying to build a team? Check out the card database!</h4>

        <p>
            <?php echo $this->Html->link('Go <span
                        class=" glyphicon glyphicon-chevron-right"></span>',
                array('controller' => 'cards', 'action' => 'index'), array('escape' => false, 'role' => 'button', 'class' => 'btn btn-default')); ?>
        </p>
    </div>
    <!-- /.col-lg-4 -->
    <div class="col-lg-4">
        <img class="img-circle"
             src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
             alt="Generic placeholder image" width="140" height="140">

        <h2>Events</h2>

        <h4>Latest info on the current event including strategy, drops, border feed and more! Also includes
            information from past events!</h4>

        <p>
            <?php echo $this->Html->link('Go <span
                        class=" glyphicon glyphicon-chevron-right"></span>',
                array('controller' => 'events', 'action' => 'index'), array('escape' => false, 'role' => 'button', 'class' => 'btn btn-default')); ?>
        </p>


    </div>
    <!-- /.col-lg-4 -->
    <div class="col-lg-4">
        <img class="img-circle"
             src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
             alt="Generic placeholder image" width="140" height="140">

        <h2>Songs</h2>

        <h4>Song info including difficulty, unlock conditions and more! Also includes flavor information about each
            song!</h4>

        <p>
            <?php echo $this->Html->link('Go <span
                        class=" glyphicon glyphicon-chevron-right"></span>',
                array('controller' => 'songs', 'action' => 'index'), array('escape' => false, 'role' => 'button', 'class' => 'btn btn-default')); ?>
        </p>
    </div>
    <!-- /.col-lg-4 -->
</div>
<!-- /.row -->


<!-- START THE FEATURETTES -->

<hr class="featurette-divider"/>
<?php
$num1 = mt_rand(1, 391);
$num2 = mt_rand(1, 391);
$num3 = mt_rand(1, 391);
?>
<div class="row" id="puchis">
    <div class="col-lg-2">
        <?php echo $this->Html->link($this->Html->image('puchis/' . $num1 . '.png', array('class' => 'img-sqaure', 'alt' => 'Puchi1', 'height' => 180)) .
            '<h3>About The Game</h3>', '/about', array('escape' => false)) ?>
        <p>What is Starlight Stage?</p>
    </div>
    <div class="col-lg-2">
        <?php echo $this->Html->link($this->Html->image('puchis/' . $num2 . '.png', array('class' => 'img-sqaure', 'alt' => 'Puchi2', 'height' => 180)) .
            '<h3>About This Website</h3>', '/about', array('escape' => false)) ?>
        <p>What is Usamin S@telite?</p>
    </div>
    <div class="col-lg-2">
        <?php echo $this->Html->link($this->Html->image('puchis/' . $num3 . '.png', array('class' => 'img-sqaure', 'alt' => 'Puchi3', 'height' => 180)) .
            '<h3>Donate</h3>', '/donate', array('escape' => false)) ?>
        <p>Usamin S@telite survives on your donations! Help keep Usamin S@telite ad free!</p>
    </div>
    <div class="col-lg-6">
        <div class="newsHeader">Latest News - <a href="https://twitter.com/UsaminSatelite">Follow Us on Twitter!</a>
        </div>
        <div class="news">
            <?php
            foreach ($news as $newsItem) {
                ?>
                <p>
                    <?php
                    echo $this->Html->image($newsItem['News']['category'] . '.png', array('class' => 'newsItem')) . ' ' .
                        $this->Html->link($newsItem['News']['title'] . ' ' . '<span class=" glyphicon glyphicon-chevron-right"></span>',
                            array('controller' => 'news', 'action' => 'view', $newsItem['News']['id']), array('escape' => false));
                    ?>
                </p>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<hr class="featurette-divider"/>
<!--</div>-->

<!-- /END THE FEATURETTES -->