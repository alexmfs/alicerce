<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="dest/style.css">
	<title>Site Modular</title>
	<script type="text/javascript" src="bower_components/jquery/jquery.min.js"></script>
	<script>
		$(document).ready(function (){			
			$('html').css('padding-top', $('.header-site').height());
		});
	</script>
</head>
<body>

	<?php

	function headerSite($brand, $tipo = "default", $menu = [])
	{
		echo "<header class='header-site'>";
		echo "<h1 class='brand'>$brand</h1>";
		echo "<nav class='nav-global'>";

		// if ($tipo == "default") {
			echo '<ul>';
			foreach($menu as $a){
				$item = $a[0];
				$link = $a[1];
				$class = $a[2] = "menu-item";
				echo '<li><a class="'.$class.'" href="'.$link.'">'.$item.'</a></li>';
			}
			echo '</ul>';
		// }

		echo '</nav>';
		echo '</header>';
	}

	echo headerSite(
		$brand = "boideia",
		$tipo = "default",
		$menu = [
			["Início","/"],
			["Contato","contato"],
			["Sacolas personalizadas","sacolas-personalizadas"]
		]
	);

	?>
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

		<ol class="breadcrumb">
		    <li><a href="">Inicial</a></li>
		    <li><a href="">Sub-Página</a></li>
		    <li class="active">Página Atual</li>
		</ol>

	</div>
</body>
</html>
