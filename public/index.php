<?php include ("includes/head.php"); ?>
	<!--[if lt IE 7]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- Header -->
	<header class="header-principal" role="banner">
		<div class="wrap">
			<h1>
				<a href="../" class="logo">
					<img src="img/logo.png" height="" width="" alt="NOME DO CLIENTE">
				</a>
			</h1>
			<nav class="nav-global" role="navigation">
				<a href="" class="item active">Menu 1</a>
				<a href="" class="item">Menu 2</a>
			</nav>
		</div>
	</header>

	<?php //include ("includes/helpers/slider.php"); ?>

	<!-- Main Section -->
	<main class="main" role="main">

		<div class="wrap">

		<?php include ("includes/helpers/forms.php"); ?>
		<?php // include ("includes/helpers/colors.php"); ?>
		<?php // include ("includes/helpers/types.php"); ?>
		<?php // include ("includes/helpers/buttons.php"); ?>
		<?php // include ("includes/helpers/tooltips.php"); ?>
		<?php include ("includes/helpers/messages.php"); ?>
		<?php // include ("includes/helpers/grid.php"); ?>
		<?php // include ("includes/helpers/x-grid.php"); ?>

		</div>

	</main>

	<!-- Footer -->
	<footer class="footer-principal" role="contentinfo">
		<div class="wrap">
			<address itemscope itemtype="http://schema.org/LocalBusiness">
				<span>
					<span itemprop="name">Nome da Empresa</span>
				</span>
				<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					<span itemprop="streetAddress">Avenida Lorem 111, sala 01. </span>
					<span itemprop="addressLocality">Cidade Lorem</span> - <span itemprop="addressRegion">UF</span>
				</span>
			</address>
		</div>
	</footer>

<?php include ("includes/footer.php"); ?>
