<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="dest/style.css">
	<title>Document</title>
</head>
<body>

	<?php

	function headerSite($brand, $tipo = "", $menu = [])
	{
		echo "<header>";
		echo "<h1>$brand</h1>";
		echo "<nav class='nav-global'>";

		if ($tipo == "") {
			echo '<ul>';
			foreach($menu as $a){
				$item = $a[0];
				$link = $a[1];
				$class = $a[2] = "menu-item";
				echo '<li><a class="'.$class.'" href="'.$link.'">'.$item.'</a></li>';
			}
			echo '</ul>';
		}

		echo "</nav>";
		echo "</header>";
	}

	echo headerSite(
		$brand = "boideia", 
		$tipo = "", 
		$menu = [
			["Início","/"],
			["Contato","contato"],
			["Sacolas personalizadas","sacolas-personalizadas"]
		]
	);

	?>

	<div style="margin: 20px auto; width: 600px; display: table;" class="button-group">
		
		<a href="#" class="button">botao</a>
		<button href="#" class="button">botao</button>
		<a href="#" class="button">botao</a>
	</div>

	<div style="margin: 20px auto; width: 600px; display: table;">
		
		<button class="button">botao</button>
		
	</div>

	<div style="margin: 20px auto; width: 600px; display: table;">

		<input type="submit" class="button" value="botao">

	</div>

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

</body>
</html>
