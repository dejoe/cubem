<?php
/*
	echo (file_get_contents('header.php'));
	echo ('<style>' . file_get_contents('styles.php') . '</style>');
	echo ('<script>' . file_get_contents('script.php') . '</script>');
	echo (file_get_contents('body.php'));
	echo (file_get_contents('footer.php'));
*/
	include 'header.php';
	
	echo ("<style>");
	echo (file_get_contents("styles.css"));
	echo ("</style>");
	
	echo ("<script>");
	echo (file_get_contents("scripts.js"));
	echo ("</script>");
	
	include "body.php";
	

 ?>