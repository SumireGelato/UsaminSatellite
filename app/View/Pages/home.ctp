<!-- page title -->
<?php
$this->set('title_for_layout', 'Usamin S@tellite | English Resources for iDOLM@STER Cinderella Girls Starlight Stage!');
?>

<div class="row text-center">
    <div class="col-lg-12">
        <h1 style="padding: 0; margin: 0">Welcome to <?php echo $this->Html->image('usamin-logo.png', array('alt' => 'Site Logo', /*'class' => 'img-responsive',
 */ 'height' => '150.5px', 'width' => '297.5px'));?>!</h1>
    </div>
</div>


<!-- 3 Columns of content -->
<div class="row text-center center-block">
    <div class="col-lg-4">
        <?php echo $this->Html->image('cards.jpg', array('alt' => 'Cards', 'class' => 'img-circle homePics', 'height' => '140', 'width' => '280'));?>

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
        <?php echo $this->Html->image('events.jpg', array('alt' => 'Events', 'class' => 'img-circle homePics', 'height' => '140',
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
        <?php echo $this->Html->image('songs.jpg', array('alt' => 'Events', 'class' => 'img-circle homePics', 'height' => '140',
            'width' => '280'));?>

        <h2>Songs</h2>

        <h4>Song info including difficulty, unlock conditions, mv positions and more!</h4>

        <p>
            <?php echo $this->Html->link('Go <span
                        class=" glyphicon glyphicon-chevron-right"></span>',
                array('controller' => 'songs', 'action' => 'index'), array('escape' => false, 'role' => 'button', 'class' => 'btn btn-default')); ?>
        </p>
    </div>
    <!-- /.col-lg-4 -->
</div>
<!-- /.row -->




<hr class="featurette-divider"/>
<div class="row text-center center-block" id="puchis">
    <div class="col-lg-3">
        <?php echo $this->Html->link($this->Html->image('puchis/' . $num1 . '.png', array('class' => 'img-square', 'alt' => 'Puchi1', 'height' => 180)) .
            '<h3>About The Game</h3>', '/about#game', array('escape' => false)) ?>
        <p>What is <?php echo $this->Html->image('gameLogo.png', array('alt'=>'Starlight Stage', 'height' => '66', 'width' => '225')); ?>?</p>
    </div>
    <div class="col-lg-3">
        <?php echo $this->Html->link($this->Html->image('puchis/' . $num2 . '.png', array('class' => 'img-square', 'alt' => 'Puchi2', 'height' => 180)) .
            '<h3>About This Website</h3>', '/about#aboutus', array('escape' => false)) ?>
        <p>What is Usamin S@tellite?</p>
    </div>
    <div class="col-lg-2">
        <?php echo $this->Html->link($this->Html->image('puchis/' . $num3 . '.png', array('class' => 'img-square', 'alt' => 'Puchi3', 'height' => 180)) .
            '<h3>Suggestions</h3>', '/about#contact', array('escape' => false)) ?>
        <p>Have a suggestion for a new feature?</p>
    </div>
    <div class="col-lg-4 center-block" style="margin-top: -10px">
        <a class="twitter-timeline" data-chrome="transparent noborder nofooter" data-dnt="true" href="https://twitter.com/UsaminSatelite"
           data-widget-id="715765886548881409">Latest News - Follow Us at @UsaminSatelite!</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

