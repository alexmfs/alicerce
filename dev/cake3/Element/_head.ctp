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
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';

?>

<!DOCTYPE html>
<!--[if IE 7]> <html xmlns:fb="http://ogp.me/ns/fb#" lang="pt-br" class="ie7"> <![endif]-->
<!--[if IE 8]> <html xmlns:fb="http://ogp.me/ns/fb#" lang="pt-br" class="ie8"> <![endif]-->
<!--[if IE 9]> <html xmlns:fb="http://ogp.me/ns/fb#" lang="pt-br" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html xmlns:fb="http://ogp.me/ns/fb#" lang="pt-br"> <!--<![endif]-->

<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="canonical" href="http://www.DOMINIO.com.br" />
    <!-- <base href="http://www.DOMINIO.com.br/img" target="_blank"> -->

    <!-- Viewport RWD Design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <!-- Skype -->
    <meta name="format-detection" content="telephone=no">

    <!-- Robots -->
    <meta name="robots" content="index, follow" />
    <meta name="glooglebot" content="index, follow" />
    <meta name="msnbot" content="noodp" />
    <meta name="slurp" content="noydir" />
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
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(array('style.min','//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css')); ?>
    <?= $this->Html->script(array('vendors','scripts','refresh')); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>
