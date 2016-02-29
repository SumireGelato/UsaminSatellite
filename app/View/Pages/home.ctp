<!-- page title -->
<?php
$this->set('title_for_layout', 'Usamin S@telite | Starlight Stage Resources directly from Planet Usamin!');
?>

<!-- Marketing messaging and featurettes-->
<div class="row text-center">
    <div class="col-lg-12">
        <h1 style="padding: 0; margin: 0">Welcome to <?php echo $this->Html->image('usamin-logo.png', array('alt' => 'Site Logo', /*'class' => 'img-responsive',
 */ 'height' => '150.5px', 'width' => '297.5px'));?>!</h1>
    </div>
</div>


<!-- 3 Columns of content -->
<div class="row text-center center-block">
    <div class="col-lg-4">
        <?php echo $this->Html->image('cards.png', array('alt' => 'Cards', 'class' => 'img-circle homePics', 'height' => '140', 'width' => '280'));?>

        <h2>Cards</h2>

        <h4>Don't know what your new SSR does? Trying to build a unit? Check out the card database!</h4>

        <p>
            <?php echo $this->Html->link('Go <span
                        class=" glyphicon glyphicon-chevron-right"></span>',
                array('controller' => 'cards', 'action' => 'index'), array('escape' => false, 'role' => 'button', 'class' => 'btn btn-default')); ?>
        </p>
    </div>
    <!-- /.col-lg-4 -->
    <div class="col-lg-4">
        <?php echo $this->Html->image('events.png', array('alt' => 'Events', 'class' => 'img-circle homePics', 'height' => '140',
            'width' => '280'));?>

        <h2>Events</h2>

        <h4>Latest info on the current event including event rewards, border feed and more! Also includes
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
$num1 = mt_rand(1, 421);
$num2 = mt_rand(1, 421);
$num3 = mt_rand(1, 421);
?>
<div class="row text-center center-block" id="puchis">
    <div class="col-lg-3">
        <?php echo $this->Html->link($this->Html->image('puchis/' . $num1 . '.png', array('class' => 'img-square', 'alt' => 'Puchi1', 'height' => 180)) .
            '<h3>About The Game</h3>', '/about', array('escape' => false)) ?>
        <p>What is <?php echo $this->Html->image('gameLogo.png', array('alt'=>'Starlight Stage', 'height' => '66', 'width' => '225')); ?>?</p>
    </div>
    <div class="col-lg-3">
        <?php echo $this->Html->link($this->Html->image('puchis/' . $num2 . '.png', array('class' => 'img-square', 'alt' => 'Puchi2', 'height' => 180)) .
            '<h3>About This Website</h3>', '/about', array('escape' => false)) ?>
        <p>What is <?php echo $this->Html->image('usamin-logo.png', array('alt'=>'Starlight Stage', 'height' => '89', 'width' => '176')); ?>?</p>
    </div>
    <div class="col-lg-2">
        <?php echo $this->Html->link($this->Html->image('puchis/' . $num3 . '.png', array('class' => 'img-square', 'alt' => 'Puchi3', 'height' => 180)) .
            '<h3>Donate</h3>', '/donate', array('escape' => false)) ?>
        <p>Usamin S@telite survives on your donations! Help keep Usamin S@telite ad free!</p>
    </div>
    <div class="col-lg-4 text-left">
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

<!-- /END THE FEATURETTES -->