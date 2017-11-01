<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?=$assets?>styles.min.css">
	<script src="<?=$assets?>vendors.min.js"></script>
	<script src="<?=$assets?>scripts.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js"></script>
	<title></title>

	<style>
		a{
			color: black;
		}
		a[href='?p=<?php echo class_active(); ?>']{
			color: green;
		}
	</style>
</head>
<body>
