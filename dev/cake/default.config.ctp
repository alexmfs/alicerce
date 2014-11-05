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
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
$pagina = str_replace('/NOMEdoPROJETO/public/','',$this->here); //pr($pagina);
?>

<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<head>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('style.min','//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'));
		echo $this->Html->script(array('vendors','scripts','refresh'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body <?php
	if($pagina == ""){echo 'class="page-home"';}
	else {echo 'class="page-'.$pagina.'"';}
	?>>
	<header class="principal" role="banner">
		<nav class="nav-global" role="navigation">
			<a
				href="<?=$this->webroot?>NOMEdoLINK"
				class="item <?php if($pagina == 'NOMEdoLINK'){ echo ' active'; } ?>">
				NOMEdoLINK
			</a>
			<a
				href="<?=$this->webroot?>NOMEdoLINK"
				class="item <?php if($pagina == 'NOMEdoLINK'){ echo ' active'; } ?>">
				NOMEdoLINK
			</a>
		</nav>
	</header>

	<?php if($pagina == ''){ ?>
	<h1>Módulos exclusivo da página inicial (geralmente banner)</h1>
	<?}?>

	<main class="main" role="main">

		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>

	</main>

	<footer class="principal">

	<p>Conteudo da Footer</p>

	</footer>

	<div id="fb-root"></div>
	<script>
		// Facebook app
		// (function(d, s, id) {
		//   var js, fjs = d.getElementsByTagName(s)[0];
		//   if (d.getElementById(id)) return;
		//   js = d.createElement(s); js.id = id;
		//   js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=269754969767717";
		//   fjs.parentNode.insertBefore(js, fjs);
		// }(document, 'script', 'facebook-jssdk'));

		// Twitter App
		// !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");

		// Google Analytics: change UA-XXXXX-X to be your site's ID.
		// (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		// 	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		// e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		// e.src='//www.google-analytics.com/analytics.js';
		// r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		// ga('create','UA-XXXXX-X');ga('send','pageview');
	</script>

</body>
</html>
