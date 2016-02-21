<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $title_for_layout; ?>
    </title>
    <?php
    //		echo $this->Html->meta('icon');
    //echo $this->Html->css('cake.generic.css');
    echo $this->Html->css('http://mplus-fonts.osdn.jp/webfonts/basic_latin/mplus_webfonts.css');
    echo $this->Html->css('http://mplus-fonts.osdn.jp/webfonts/general-j/mplus_webfonts.css');
    echo $this->Html->css('bootstrap.css');
    echo $this->Html->css('bootstrap-datetimepicker.css');
    echo $this->Html->css('icons.css');
    //		echo $this->Html->css('bootstrap-theme.css');
    //    echo $this->Html->css('jquery-ui.css');
    //    echo $this->Html->css('jquery-ui.structure.css');
    //    echo $this->Html->css('jquery-ui.theme.css');
    echo $this->Html->css('style.css');
    echo $this->Html->css('buttons.css');

    echo $this->Html->script('jquery-1.12.0');
    //echo $this->Html->script('jquery-ui');
    echo $this->Html->script('bootstrap');
    echo $this->Html->script('moment');
    echo $this->Html->script('bootstrap-datetimepicker.min');
    echo $this->Html->script('moment-timezone-with-data');
    echo $this->Html->script('jquery.countdown');
    //echo $this->Html->script('npm');
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url('/'); ?>DataTables/datatables.css"/>
    <script type="text/javascript" src="<?php echo $this->Html->url('/'); ?>DataTables/datatables.js"></script>

    <!--    Favicon Stuff-->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->Html->url('/'); ?>img/favicon.ico"/>
    <link rel="icon" type="image/x-icon" href="<?php echo $this->Html->url('/'); ?>img/favicon.ico"/>

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">

</head>
<body onload="startTime()">
<div class="container-fluid marketing" id="contentContainer">
    <div class="row">
        <div class="col-lg-12">
    <noscript>
        <div class="alert alert-danger" role="alert">This site makes extensive use of JavaScript.
            Please enable JavaScript in your browser. Here are the <a href="http://www.enable-javascript.com/" target="_blank">
                instructions how to enable JavaScript in your web browser</a></div>
    </noscript>
        </div>
        </div>
    <div class="row">
        <div class="col-lg-12">
<!--    <div class="navbar-wrapper">-->
        <div class="container-fluid">

            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?php
                        if ($this->here == $this->base . '/') {
                            echo $this->Html->link('Usamin S@telite', array('controller' => 'pages', 'action' => 'display', 'home'),
                                array('class' => 'navbar-brand', 'id' => 'showText'));
                            echo $this->Html->link($this->Html->image('usamin-logo.png',
                                    array('width' => 297, 'height' => 150)), array('controller' => 'pages', 'action' => 'display', 'home'),
                                array('class' => 'navbar-brand', 'id' => 'hideLogo', 'escape' => false, 'style' => 'padding: 0'));
                        } else {
                            echo $this->Html->link('Usamin S@telite', array('controller' => 'pages', 'action' => 'display', 'home'),
                                array('class' => 'navbar-brand'));
                        }
                        ?>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-th-large"></span> Cards',
                                    array('controller' => 'cards', 'action' => 'index'), array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-bullhorn"></span> Events',
                                    array('controller' => 'events', 'action' => 'index'), array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-music"></span> Songs',
                                    array('controller' => 'songs', 'action' => 'index'), array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-heart"></span> Idols',
                                    array('controller' => 'idols', 'action' => 'index'), array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> Translations',
                                    '/translations', array('escape' => false)); ?></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-option-vertical"></span>
                                    Other<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-flag"></span> News',
                                            array('controller' => 'news', 'action' => 'index'), array('escape' => false)); ?></li>
                                    <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-info-sign"></span> About Game & Site',
                                            '/about', array('escape' => false)); ?></li>
                                    <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-user"></span> About the Staff',
                                            '/aboutUs', array('escape' => false)); ?></li>
                                    <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-link"></span> Links',
                                            '/links', array('escape' => false)); ?></li>
                                    <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-book"></span> Credits',
                                            '/credits', array('escape' => false)); ?></li>
                                    <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-envelope"></span> Contact Us',
                                            '/contactUs', array('escape' => false)); ?></li>
                                    <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-usd"></span> Donate',
                                            '/donate', array('escape' => false)); ?></li>
                                    <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-question-sign"></span> Help',
                                            '/help', array('escape' => false)); ?></li>
                                </ul>
                            </li>
                            <?php
                            if ($this->Session->read('Auth.User')) {
                                echo '<li>'.$this->Html->link('Control Panel',
                                        array('controller' => 'users', 'action' => 'controlpanel')).'</li>';
                                echo '<li>'.$this->Html->link('Log Out',
                                        array('controller' => 'users', 'action' => 'logout')).'</li>';
                            }
                            ?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <p class="navbar-text" id="clock"></p>
                        </ul>
                    </div>
                </div>
            </nav>

<!--        </div>-->
    </div>
        </div>
    </div>
    <!-- Get Content -->
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>
    <a href="#" id="back-to-top" title="Back to top"><span class="glyphicon glyphicon-chevron-up" style="font-size: 1.5em"></span></a>
    <!--    <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; &middot;</p>
        </footer>-->
</div>
<!-- End get Content -->
</body>

<script>
    function startTime() {
        var today = new Date();
        utc = today.getTime() + (today.getTimezoneOffset() * 60000);
        offset = +9.0;
        var now = utc + (3600000 * offset);
        var now = new Date(utc + (3600000 * offset));

        var h = now.getHours();
        var m = now.getMinutes();
        var s = now.getSeconds();
        m = checkTime(m);
        s = checkTime(s);

        document.getElementById('clock').innerHTML =
            "It is currently " + h + ":" + m + ":" + s + " JST";
        var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        }
        ;  // add zero in front of numbers < 10
        return i;
    }

//    $(document).ready(function() {
        if ($('#back-to-top').length) {
            var scrollTrigger = 200, // px
                backToTop = function () {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('#back-to-top').addClass('show');
                    } else {
                        $('#back-to-top').removeClass('show');
                    }
                };
            backToTop();
            $(window).on('scroll', function () {
                backToTop();
            });
            $('#back-to-top').on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            });
        }
//    });
</script>

<style>
    html {
        background: url("<?php echo $this->Html->url('/').'img/backgrounds/'.$this->Session->read('background').'.png'?>") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

</html>
