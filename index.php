<?php
	$directory = 'pages/lang';
	$whitelist = array_map(function ($file) use ($directory) {
	return "$directory/$file";
	}, array_diff(scandir($directory), array('..', '.')));
	if(!isset($_GET['page'])) {
	$page = "pages/lang/landing";
	} else {
	$page = $_GET['page'];
	}
	$file = $page.".php";
	if(in_array($file, $whitelist) && file_exists($file)){
	include($file);
	} else {
	echo "Page you are looking for does not exist! TakeCare! ";
	}
?> 
