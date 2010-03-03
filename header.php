<?php
	//define autoload function
	function __autoload($class) {
		require 'lib/' . strtolower($class) . '.php';
	}
	$helper = new ViewHelper();
?>

<html>
<head>
	<title>RSS Reader</title>
	<?= $helper->stylesheet_link_tag('style'); ?>

</head>
<body>
	<div id='content'>
	<h1>RSS Feed Reader</h1>
	<ul id='nav'>
		<li><a href='index.php'>Show Feeds</a></li>
		<li><a href='add_feed.php'>Add Feed</a></li>
	</ul>
