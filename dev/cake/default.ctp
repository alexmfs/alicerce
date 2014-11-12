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

$pagina = str_replace('/_NOVOPROJETO/public/','',$this->here); //pr($pagina);

if($pagina == ""){$pagina = 'home';}

?>
<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#" lang="pt-br">
<head>
	<?php echo $this->Html->charset(); ?>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="canonical" href="http://www.DOMINIO.com.br" />
	<!-- <base href="http://www.DOMINIO.com.br/img" target="_blank"> -->

	<!-- Viewport RWD Design -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Autor -->
	<meta name="author" content="DESENVOLVIMENTO" />
	<meta name="reply-to" content="atedimento@DESENVOLVIMENTO.com.br" />
	<meta name="DC.publisher" content="DESENVOLVIMENTO" />
	<meta name="generator" content="Sublime Text 2" />
	<link rel="author" href="humans.txt" />

	<!-- Sobre o site-->
	<meta name="reply-to" content="contato@DESENVOLVIMENTO.com.br">
	<meta name="distribution" content="Global" />
	<meta name="geo.region" content="BR-PR" />
	<meta name="geo.placename" content="CIDADE" />
	<meta name="geo.position" content="-00,0000, -00,0000" />

	<!-- Conteúdo -->
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<!-- Classificação etária -->
	<meta name="rating" content="general" />

	<!-- Robots -->
	<meta name="GOOGLEBOT" content="INDEX, FOLLOW" />
	<meta name="robots" content="index, follow" />
	<meta name="msnbot" content="NOODP" />
	<meta name="revisit-after" content="7 day"/>
	<meta http-equiv="cache-control" content="no-cache" />

	<!-- Informações referente ao schema -->
	<meta property="business:contact_data:country_name" content="Brazil" />
	<meta property="business:contact_data:email" content="atendimento@DESENVOLVIMENTO.com.br" />
	<meta property="business:contact_data:website" content="http://www.DESENVOLVIMENTO.com.br" />

	<!-- Social: Twitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@autor_twitter">
	<meta name="twitter:title" content="Autor Twiiter">
	<meta name="twitter:description" content="Descrição">
	<meta name="twitter:image:src" content="http://site.com.br/img/social/img.jpg">

	<!-- Social: Facebook -->
	<meta property="og:locale" content="pt_BR" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="http://www.CLIENTE.com.br" />
	<meta property="og:site_name" content="" />
	<meta property="og:image" content="http://www.CLIENTE.com.br/img/logo-facebook.png" />

	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
	<link rel="icon" type="image/png" href="img/favicon-196x196.png" sizes="196x196">
	<link rel="icon" type="image/png" href="img/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="img/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#e56800">
	<meta name="msapplication-TileImage" content="img/mstile-144x144.png">

	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('style.min','cake.generic','//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'));
		echo $this->Html->script(array('vendors','scripts','refresh'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body class="page-<?php echo $pagina ?>" itemscope itemtype="http://schema.org/WebPage">


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

	<?php if($pagina == "home"){ ?>

	<h1>Módulo que só aparece na página Inicial</h1>

	<?php } ?>

	<main class="main" role="main">

		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>

	</main>

	<footer class="principal">

		<h1>Footer</h1>

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
