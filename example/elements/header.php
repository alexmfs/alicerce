<?php

getHeader([

				"type" => "basico",

				"brand" => "boideia",

				'items' => [

						[
								'label' => 'Home',
								'url' => '/modulos/example/home'
						],
						[
								'label' => 'About',
								'url' => '/modulos/example/?p=buttons'
						],
						[
								'label' => 'Blog',
								'url' => '/modulos/example/?p=buttons'
						],
						[
								'label' => 'Contact',
								'url' => '/modulos/example/?p=buttons'
						],

				],

				'itemsOptions' => [
						[

								'tag' => 'li',
								'options'=> 'class="item"'
						],
				],

		]);

 ?>
