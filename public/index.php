<?php include ("includes/head.php"); ?>

	<!-- Header -->
	<header class="principal" role="banner">
		<div class="wrap">

			<h1>
				<a href="../" class="logo">
					<img src="img/logo.png" height="" width="" alt="">
				</a>
			</h1>

			<nav class="nav-global" role="navigation">
				<a href="" class="item active">Menu 1</a>
				<a href="" class="item">Menu 2</a>
			</nav>

		</div>
	</header>

	<!-- Main Section -->
	<main class="main" role="main">

		<?php include ("includes/helpers/colors.php"); ?>
		<?php include ("includes/helpers/types.php"); ?>
		<?php include ("includes/helpers/buttons.php"); ?>

	</main>

	<!-- Footer -->
	<footer class="principal" role="contentinfo">
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