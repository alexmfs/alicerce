<?php
  // session_start();


	if(!empty($_GET['lang'])){
		$lang = $_GET['lang'];
		include "/languages/$lang/$lang.php";
	} else {
		$lang = "pt-br";
		include "/languages/$lang/$lang.php";
	}


  // //Define Language file paths
  // define("LANG_DE_PATH", $_SERVER['DOCUMENT_ROOT'] . '/modulos/languages/de/');
  // define("LANG_EN_PATH", $_SERVER['DOCUMENT_ROOT'] . '/modulos/languages/en/');
 
 
  // if (isset($_GET['lang'])) {
     
  //   // GET request found
 
  //   if ($_GET['lang'] == 'de') {
       
  //     // asked for the language 'de' so include the 'de.php' file
  //     include LANG_DE_PATH . 'de.php';
  //     $_SESSION['lang'] = 'de';
  //   } else {
 
  //     // if not asked for 'de', include 'en.php' as default
  //     include LANG_EN_PATH . 'en.php';
  //     $_SESSION['lang'] = 'en';
  //   }
  // } else if (isset($_SESSION['lang'])) {
 
  //   //SESSION variable found
 
  //   if ($_SESSION['lang'] == 'de') {
 
  //     // language already set to 'de', so include 'de.php'
  //     include LANG_DE_PATH . 'de.php';
  //   } else {
 
  //     // SESSION variable not set to 'de', so include 'en.php' by default
  //     include LANG_EN_PATH . 'en.php';
  //   }
  // } else {
     
  //   // SESSION varibale not set, so set it to 'en' and include 'en.php' by default
  //   include LANG_EN_PATH . 'en.php';
  //   $_SESSION['lang'] = 'en';
  // }
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="dest/style.css">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- <title>Site Modular</title> -->
	<title><?= $LANG['title']; ?></title>
	<script type="text/javascript" src="bower_components/jquery/jquery.min.js"></script>
	<script>
		$(document).ready(function (){
			function fixedHeader() {
				var headerHeight = $('.header-site').height();
				$('html').css('padding-top', headerHeight);
				$('.hero').css('margin-top', headerHeight*(-1));
			}
			fixedHeader();
		});
	</script>
</head>
<body>

	<?php

	// function headerSite($brand, $tipo = "default", $menu = [])
	// {
	// 	echo "<header class='header-site'>";
	// 	echo "<h1 class='brand'>$brand</h1>";
	// 	echo "<nav class='nav-global'>";

	// 	// if ($tipo == "default") {
	// 		echo '<ul>';
	// 		foreach($menu as $a){
	// 			$item = $a[0];
	// 			$link = $a[1];
	// 			$class = $a[2] = "menu-item";
	// 			echo '<li><a class="'.$class.'" href="'.$link.'">'.$item.'</a></li>';
	// 		}
	// 		echo '</ul>';
	// 	// }

	// 	echo '</nav>';
	// 	echo '</header>';
	// }

	// echo headerSite(
	// 	$brand = "boideia",
	// 	$tipo = "default",
	// 	$menu = [
	// 		["Início","/"],
	// 		["Contato","contato"],
	// 		["Sacolas personalizadas","sacolas-personalizadas"]
	// 	]
	// );

		$type = "cappuccino";

		function i($type)
		{
		    return "Fazendo uma xícara de café $type.\n";
		}
	?>


	<?= i("espresso");?>


	<header class="header-site" role="banner">

		<div class="header-section">
			oiu
		</div>
		<div class="header-section">
			<a href="#" class="brand">Boideia</a>
			<nav class="nav-global" role="navigation">
				<ul>
					<li><a class="menu-item" href="/">Início</a></li>
					<li><a class="menu-item" href="contato">Contato</a></li>
					<li><a class="menu-item" href="sacolas-personalizadas">Sacolas personalizadas</a></li>
					<li><a class="button" href="sacolas-personalizadas">Entrar</a></li>
				</ul>
			</nav>
			<form action="" class="search-bar">
				<label for="">Pesquisar:</label>
				<input type="search" name="" id="" placeholder="Digite sua busca aqui">
				<input type="submit" value="&#xf002;">
			</form>
		</div>

	</header>

<!-- 	<section class="hero">
		
	</section> -->
	<main class="main wrap" role="main">
		
		<h1 class="title-page"><?= $LANG['header'];?></h1>

		<div class="group">
			
			<ul class="showcase" data-layout="grid">
				<?php for ($i=0; $i < 4; $i++) { ?>
				<li>
					<a href="#">
						<figure>
							<img src="http://www.lojabat.com/images/501/50048/mini/hellboy.jpg" alt="">
							<figcaption class="showcase-nome">Nome do Produto</figcaption>
						</figure>
					</a>
					<div class="showcase-info">
						<p>Indisponível</p>
					</div>
					<a class="button" href="#">Comprar</a>
				</li>
				<li>
					<a href="#">
						<figure>
							<img src="http://www.lojabat.com/images/im/sem-foto-mini.png" alt="">
							<figcaption class="showcase-nome">Nome do Produto grande pra caramba</figcaption>
						</figure>
					</a>
					<div class="showcase-info">
						<p>Indisponível</p>
					</div>
					<a class="button" href="#">Comprar</a>
				</li>
				<li>
					<a href="#">
						<figure>
							<img src="http://www.lojabat.com/images/501/50039/mini/43831-520x520.jpg" alt="">
							<figcaption class="showcase-nome">Nome do Produto</figcaption>
						</figure>
					</a>
					<div class="showcase-info">
						<p class="showcase-preco-de">R$ 139.90</p>
						<p class="showcase-preco-por">R$ 119.90 </p>
						<p>Em estoque: 2</span>
					</div>

					<a class="button" href="#">Comprar</a>
				</li>
				<li>
					<a href="#">
						<figure>
							<img src="http://www.lojabat.com/images/im/sem-foto-mini.png" alt="">
							<figcaption class="showcase-nome">Nome do Produto grande pra caramba</figcaption>
						</figure>
					</a>
					<div class="showcase-info">
						<p class="showcase-preco-de">R$ 139.90</p>
						<p class="showcase-preco-por">R$ 119.90 </p>
						<p>Em estoque: 2</span>
					</div>

					<a class="button" href="#">Comprar</a>
				</li>
				<?php } ?>
			</ul>


		</div>

		<div class="group">
			<ul class="planos">
				<?php for ($i=0; $i < 5; $i++) { ?>
				<li class="plano">
					<h3 class="plano-nome">Nome do plano</h3>
					
					<ul class="plano-descricoes">
						<li>Usuários: 50</li>
						<li>Empresas: 50</li>
						<li>
							<span class="plano-preco">R$50</span>
							<span class="plano-mensal">mensais</span>
						</li>
					</ul>
				 
					<a href="#" class="button">Selecionar plano</a>
					
				</li>
				<?php } ?>
			</ul>
		</div>

		<div class="group">
			<ol class="breadcrumb">
				<li><a href="">Inicial</a></li>
				<li><a href="">Sub-Página</a></li>
				<li class="active">Página Atual</li>
			</ol>
		</div>

		<div class="group">
			<form action="#" class="form">
				<label for="" class="label">Text</label>
				<input class="input" type="text" placeholder="text">
				<label for="" class="label">Email</label>
				<input class="input" type="email" placeholder="email">
				<label for="" class="label">Tel</label>
				<input class="input" type="tel" placeholder="tel">
				<label for="" class="label">Search</label>
				<input class="input" type="search" placeholder="search">
				<label for="" class="label">Password</label>
				<input class="input" type="password" placeholder="password">
				<label for="" class="label">Number</label>
				<input class="input" type="number" placeholder="number">
				<label for="" class="label">Url</label>
				<input class="input" type="url" placeholder="url">
				<label for="" class="label">Datetime</label>
				<input class="input" type="datetime" placeholder="datetime">
				<label for="" class="label">Textarea</label>
				<textarea class="textarea" name="" id="" cols="30" rows="10"></textarea>
			</form>
		</div>

		<div class="group">

			<a href="#" class="link">Link</a>
			<a href="#" class="link">Link</a>
			<a href="#" class="link">Link</a>
			<a href="#" class="link">Link</a>

		</div>

		<div class="group">

			<a href="#" class="link">Link</a>

		</div>




		<div class="box button-group" role="group" aria-label="...">
			
			<a href="#" class="button">botao</a>
			<button href="#" class="button">botao</button>
			<a href="#" class="button">botao</a>

		</div>

		<div class="group">
			
			<button class="button">botao</button>
			
		</div>

		<hr class="hr">

		<div class="group">

			<input type="submit" class="button" value="botao">

		</div>

		<div class="group">
			<img class="img" src="http://lorempixel.com/400/200/nature/1" alt="" width="100%">
		</div>


		<div class="group">


			<?php for ($i=0; $i < 3; $i++) { ?>

			<div class="box">
				teste	
			</div>

			<?php } ?>

		</div>

		<div class="group">

			<ol class="pagination">
				<li class="disabled">
					<a><i class="fa fa-caret-left"></i> Anterior</a>
				</li>
				<li class="active">
					<a>1</a>
				</li>
				<li>
					<a href="#">2</a>
				</li>
				<li>
					<a href="#">3</a>
				</li>
				<li>
					<a href="#">4</a>
				</li>
				<li>
					<a href="#">5</a>
				</li>
				<li>
					<a href="#">6</a>
				</li>
				<li class="next">
					<a href="#" rel="next" currentClass="disabled">Próxima <i class="fa fa-caret-right"></i></a>
				</li>
			</ol>

		</div>

	</main>

	<footer role="contentinfo">
	</footer>
</body>
</html>
