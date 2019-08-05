<DOCUTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /i>
<title>Udruženje Građana Poštar BiH</title>
<link href="/style/first.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/ico" href="img/favicon.ico" />
</head>
<body>
<div id="zaglavlje">
<?php
include ("stranice/zaglavlje.php");
?>
</div>
<div id="navigacija">
<?php
include ("stranice/navigacija.php");
?>
</div>
<div id="podnav">
</div>
<div id="sadrzaj">
<?php
$directory = 'stranice';
$whitelist = array_map(function ($file) use ($directory){
	return "$directory/$file";
}, array_diff(scandir($directory), array('..','.')));
if(!$_GET['page']) {
	$page = "stranice/pocetna";
} else {
	$page = $_GET['page'];
}
$file = $page.".php";
if(in_array($file, $whitelist) && file_exists($file)){
	include($file);
} else {
	echo "Stranica / fajl koji tražite / hakujete nije tu!";
}
?>
</div>
<div id="podnozje">
<?php
include ("stranice/podnozje.php");
?>
</div>
</body>
</html>
