   <?php include 'pages/header.php' ?>
    <?php
	$directory = 'pages';
	$whitelist = array_map(function ($file) use ($directory) {

	return "$directory/$file";
	}, array_diff(scandir($directory), array('..', '.')));
	if(!isset($_GET['page'])) {
	$page = "homepage";
	} else {
	$route=explode("?", $_GET['page']);
	$page = $route[0];
	//echo $page;
	}
	$file = "$directory/$page".".php";
	//echo $file;
	if(in_array($file, $whitelist) && file_exists($file)){
	include($file);
	} else {
        include('pages/404.php');
	}
?>

for href use 
<a href="?page=homepage"
<a href="?page=dh">home</a>
