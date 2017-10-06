<?php
session_start();
if($_SESSION['id']!='1000'){
	exit(1);
}
if(!isset($_GET['file'])){
	$dir = "txts/";
	$files1 = scandir($dir);
	print_r($files1);
}else{
	echo file_get_contents("txts/".$_GET['file']);
}

?>