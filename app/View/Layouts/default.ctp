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
		//echo $this->Html->meta('icon');
		//echo $this->Html->css('cake.generic.css');
		echo $this->Html->css('bootstrap.css');
		echo $this->Html->css('bootstrap-theme.css');
		echo $this->Html->css('jquery-ui.css');
		echo $this->Html->css('jquery-ui.structure.css');
		echo $this->Html->css('jquery-ui.theme.css');
		echo $this->Html->css('style.css');
//	echo $this->Html->css('flexslider.css');
	echo $this->Html->css('slippry.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

		echo $this->Html->script('jquery-1.12.0');
		echo $this->Html->script('jquery-ui');
		echo $this->Html->script('bootstrap');
		echo $this->Html->script('npm');
	echo $this->Html->script('slippry.min')
//	echo $this->Html->script('jquery.flexslider.js');

	?>

	<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
/*		$('.flexslider').flexslider( {
             animation: "slide"
             });*/
            jQuery('#news-demo').slippry({
                // general elements & wrapper
                slippryWrapper: '<div class="sy-box news-slider" />', // wrapper to wrap everything, including pager
                elements: 'article', // elments cointaining slide content

                // options
                adaptiveHeight: false, // height of the sliders adapts to current
                captions: false,

                // pager
                pagerClass: 'news-pager',

                // transitions
                transition: 'horizontal', // fade, horizontal, kenburns, false
                speed: 1200,
                pause: 8000,

                // slideshow
                autoDirection: 'prev'
            });

        });
	</script>

</head>
<body>
<div class="navbar-wrapper">
	<div class="container">

		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Project name</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li class="dropdown-header">Nav header</li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>

	</div>
</div>


<!-- Get Content -->
<div class="container marketing" style="padding-bottom: 60px;">
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>
</div>
<!-- End get Content -->

<footer>
	<p class="pull-right"><a href="#">Back to top</a></p>
	<p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
	</div>
</body>
</html>
