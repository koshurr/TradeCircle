<?php

	$del = $_GET["book"];

	$file = file_get_contents("textbook.txt");
	
	$file = str_replace($del,"",$file);

	
	$myfile = fopen("textbook.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $file);
	fclose($myfile);
	header("Location: http://yutradecircle.com/TradeCircle.php");
?>