<?php
function carrega_pagina(){
	(isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';

	echo '<main class="main" role="main">';

	if(file_exists('pages/'.$pagina.'.php')):
		require_once('pages/'.$pagina.'.php');
	else:
		require_once('pages/404.php');
	endif;

	echo '</main>';
}

function class_active(){
	(isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';

	$active = $_GET['p'];

	return $active;
}


function icon($icon){
	include "assets/icons/$icon.svg";
}
