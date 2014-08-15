	<!-- Header -->
	<header class="header-container" role="banner">

		<section class="header-top">
			<div class="wrap">
				<div class="desktop-2">
					<h1>
						<a href="../" class="logo">
							<img src="img/logo-paradadapanela.png" height="139" width="141" alt="Parada da Panela">
						</a>
	 				</h1>
				</div>
				<div class="box-atendimento">
					<span class="login">Seja bem-vindo (a)! <a href="login.php">Faça seu login</a></span>
					<span class="dados">
						<i class="fa fa-check-square-o"></i><a href="">meu cadastro</a>
						<i class="fa fa-file-o"></i><a href="">meus pedidos</a>
						<i class="fa fa-phone"></i><span>(43) 3333-3333</span>
					</span>
					<span class="atendimento">Dias úteis das 8H00 - 18H00.</span>
				</div>
			<div class="atendimento-online">
				<a href=""></a>
			</div>
		</section>

		<section class="header-bottom">
			<div class="wrap">

				<form action="" class="search-bar" role="search">
					<span class="helper" for="">Busca</span>
					<input type="search">
					<select>
						<option value="tudo">em todo site</option>
						<option value="categoria-1">categoria 1</option>
					</select>
					<input type="submit" value="ok" class="button danger g">
				</form>

				<a href="checkout-0.php" class="carrinho">
					<span class="carrinho-title">Meu carrinho <small class="carrinho-quantidade">(0)</small></span>
					<span class="carrinho-valor">R$ 470,00</span>
				</a>

				<nav class="nav-global" role="navigation">
					<a href="" class="item active">Cozinha Industrial</a>
					<div class="drop-list">
						<div class="drop-slide" style="width: 1026px;">
							<ul class="drop-category">
								<li class="drop-title"><a href="categorias.php">Sub categoria 1</a></li>
								<?php for ($i = 1; $i <=5; $i++) { ?>
								<li class="drop-link"><a href="categorias.php">Sub sub categoria <?=$i?></a></li>
								<?php } ?>
							</ul>
							<ul class="drop-category">
								<li class="drop-title"><a href="categorias.php">Sub categoria 2</a></li>
								<?php for ($i = 1; $i <=3; $i++) { ?>
								<li class="drop-link"><a href="categorias.php">Sub sub categoria <?=$i?></a></li>
								<?php } ?>
							</ul>
							<ul class="drop-category">
								<li class="drop-title"><a href="">Sub categoria 3</a></li>
								<?php for ($i = 1; $i <=8; $i++) { ?>
								<li class="drop-link"><a href="categorias.php">Sub sub categoria <?=$i?></a></li>
								<?php } ?>
							</ul>
							<ul class="drop-category">
								<li class="drop-title"><a href="">Sub categoria 4</a></li>
								<?php for ($i = 1; $i <=5; $i++) { ?>
								<li class="drop-link"><a href="categorias.php">Sub sub categoria <?=$i?></a></li>
								<?php } ?>
							</ul>
							<ul class="drop-category">
								<li class="drop-title"><a href="">Sub categoria 4</a></li>
								<?php for ($i = 1; $i <=5; $i++) { ?>
								<li class="drop-link"><a href="categorias.php">Sub sub categoria <?=$i?></a></li>
								<?php } ?>
							</ul>
							<ul class="drop-category">
								<li class="drop-title"><a href="">Sub categoria 4</a></li>
								<?php for ($i = 1; $i <=5; $i++) { ?>
								<li class="drop-link"><a href="categorias.php">Sub sub categoria <?=$i?></a></li>
								<?php } ?>
							</ul>
							<a href="" class="drop-footer">Veja as novidades da coleção 2014</a>
						</div>
					</div>
					<a href="" class="item">Cozinha Doméstica</a>
					<div class="drop-list">
						<ul class="drop-category">
							<li class="drop-title"><a href="">Sub categoria 2</a></li>
						</ul>
						<a href="" class="drop-footer">Veja as novidades da coleção 2014</a>
					</div>

					<a href="" class="item">Acessórios e utensílios</a>
					<div class="drop-list">
						<ul class="drop-category">
							<li class="drop-title"><a href="">Sub categoria 3</a></li>
						</ul>
						<a href="" class="drop-footer">Veja as novidades da coleção 2014</a>
					</div>

					<a href="" class="item">Mesa</a>
					<div class="drop-list">
						<ul class="drop-category">
							<li class="drop-title"><a href="">Sub categoria 4</a></li>
						</ul>
						<a href="" class="drop-footer">Veja as novidades da coleção 2014</a>
					</div>

					<a href="" class="item ofertas">Ofertas</a>
				</nav>
			</div>
 		</section>
	</header>