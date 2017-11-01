<?php

getHeader([

				"type" => "basico",

				"brand" => "boideia",

				'items' => [

						[
								'label' => 'Home',
								'url' => '/home'
						],
						[
								'label' => 'About',
								'url' => '/?p=buttons'
						],
						[
								'label' => 'Blog',
								'url' => '/?p=buttons'
						],
						[
								'label' => 'Contact',
								'url' => '/?p=buttons'
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
